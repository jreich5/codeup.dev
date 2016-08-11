"use strict";

// Can create the object ahead of time as mapOptions and the getElementById as well.
console.log("working");

var mapID = document.getElementById('my-map');
var mapOptions = {
    zoom: 14,

    // position of codeup
    center: {
        lat:  29.426791,
        lng: -98.489602
    }
}

var place = 'austin';
var map = new google.maps.Map(mapID, mapOptions);
var geocoder = new google.maps.Geocoder();

function createMarkerAndInfo(element, index, array) {

    var mark = new google.maps.Marker({
        position: element.geometry.location,
        map: map
    });

    var infoWindow = new google.maps.InfoWindow({
        content: element.formatted_address
    });

    infoWindow.open(map, mark);
}

function evaluateStatus(results, status) {
    map.setZoom(4);

    if (status != google.maps.GeocoderStatus.OK) {
        alert("Geocoding was not successful - STATUS: " + status);
        return;
    }

    results.forEach(createMarkerAndInfo); // Turn into a forEach loop with the code passed as a pre-defined function
}

function zoomLevel(e) {
    var zoomLevel = document.getElementById('change-zoom').value; 
    map.setZoom(parseInt(zoomLevel));
}

geocoder.geocode({ address: place }, evaluateStatus);

document.getElementById('zoom-btn').addEventListener('click', zoomLevel);

