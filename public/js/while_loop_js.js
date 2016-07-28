"use strict";


// ========== Exercise 1 ============= //


var conesInventory = Math.floor(Math.random() * 50) + 50;

var conesRequested; 

var totalConesOrdered = 0;


console.log("I have " + conesInventory + " ice cream cones in my store.")

do { 
	conesRequested = Math.floor(Math.random() * 5) + 1;
	
	console.log("Please sir, may I have " + conesRequested + "?");
	
	if (conesInventory < conesRequested && conesInventory != 0) {
		console.log("I cannot sell you " + conesRequested  + ". I only have " + conesInventory + " left.")
		conesRequested = conesInventory;
	}
	conesInventory -= conesRequested;

	totalConesOrdered += conesRequested;
	console.log(conesRequested + " cones were just sold...");
	console.log("I have " + conesInventory + " left.")
	

} while (conesInventory > 0);

console.log("Yay! I sold them all!");


// ========== Exercise 2 ============= //


