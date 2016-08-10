(function() {
"use strict";

// ===========================DRAWING MAP=========================== 


    // Set our map options
    var mapOptions = {
        // Set the zoom level
        zoom: 14,

        // This sets the center of the map at our location
        center: {
            lat:  30.5,
            lng:  -90.5
        }
    };

    // Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


// ===========================GEOCODING=========================== 



    // Include code from previous example

    // Set our address to geocode
    var address = "Washington DC";

    // Init geocoder object
    var geocoder = new google.maps.Geocoder();

    // Geocode our address
    geocoder.geocode({ "address": address }, function(results, status) {

       // Check for a successful result
       if (status == google.maps.GeocoderStatus.OK) {

           // Recenter the map over the address
           map.setCenter(results[0].geometry.location);
       } else {
           // Show an error message with the status if our request fails
           alert("Geocoding was not successful - STATUS: " + status);
       }
    });


})();