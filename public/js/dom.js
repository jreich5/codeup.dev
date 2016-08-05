"use strict";

console.log("Working");


var navbarLinkElements = document.getElementsByTagName("a");


var delay = 2000;

var timeoutID = setTimeout(function () {



    for (var i = 0; i < navbarLinkElements.length; i++) {
        console.log(navbarLinkElements[i]);  
        navbarLinkElements[i].style.fontFamily="Fantasy";   
    };


}, delay);


