var google;

function init() {

    let currentLocation = {
        lat  : 0,
        lng : 0,
    }

    if (navigator.geolocation) {

        navigator.geolocation.getCurrentPosition(position => { 
            currentLocation = {
                lat : position.coords.latitude,
                lng : position.coords.longitude
            }
        });
    } 

    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    // var myLatlng = new google.maps.LatLng(40.71751, -73.990922);
    let myLatlng = new google.maps.LatLng(-7.275614, 112.6424721);
    // 39.399872
    // -8.224454
    
    let mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 10,

        // The latitude and longitude to center the map (always required)
        center: myLatlng,

        // How you would like to style the map. 
        scrollwheel: false,
        styles: [
            {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "hue": "#ff0000"
                    }
                ]
            }
        ]
    };

    const options = {
        componentRestrictions: { country: "id" },
        fields: ["address_components", "geometry", "icon", "name"],
        types: ["establishment"],
        strictBounds: false,
    };


    const input = document.getElementById("input-place");

    const autocomplete = new google.maps.places.Autocomplete(input, options);
    
    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    let mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    const map = new google.maps.Map(mapElement, mapOptions);
    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();
    const distanceMatrix = new google.maps.DistanceMatrixService();
    const trafficLayer = new google.maps.TrafficLayer()

    trafficLayer.setMap(map)
    directionsRenderer.setMap(map);

    // const marker = new google.maps.Marker({ map });

    autocomplete.addListener("place_changed", async () => {

        const place = autocomplete.getPlace();

        if (!place.geometry || !place.geometry.location) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }

        let destination = {
            lat : place.geometry.location.lat(),
            lng : place.geometry.location.lng(),
        }

        console.log(destination);

        // map.setCenter(place.geometry.location);
        // map.setZoom(17);

        // marker.setPosition(place.geometry.location);
        // marker.setVisible(true);

        const response = await directionsService.route({
            origin: currentLocation, 
            destination: destination, 
            // Note that Javascript allows us to access the constant
            // using square brackets and a string value as its
            // "property."
            travelMode: "DRIVING", // "WALKING" "BICYCLING" 
        })

        let distanceResponse = await distanceMatrix.getDistanceMatrix({
            origins: [currentLocation], 
            destinations: [destination], 
            travelMode: "DRIVING",
        });

        const distance = distanceResponse.rows[0].elements[0].distance

        console.log("Jarak", distance.text)

        directionsRenderer.setDirections(response);

        // document.getElementById("show-distance").innerHTML = distance.texst
    })
    
}

google.maps.event.addDomListener(window, 'load', init);