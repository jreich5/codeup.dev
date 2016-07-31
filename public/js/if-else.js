"use strict";


// Problem 1

var gradeAverage = (70 + 80 + 95) / 3;

if (gradeAverage > 80) {
	console.log("You're awesome!");
} else {
	console.log("You need to practice more.");
}


// Problem 2

var customer = null;
var cost = null;
var totalCost = null;

var cameronCost = 180;
var ryanCost = 250;
var georgeCost = 320;

var Cameron = "Cameron";
var Ryan = "Ryan";
var George = "George";


customer = Cameron;
cost = cameronCost;

if (cost > 200) {
	totalCost = cost - cost * .35;
	console.log(customer + " bought " + "$" + cost + ", discount was applied. Final payment: $" + totalCost);
} else {
	totalCost = cost;
	console.log(customer + " bought " + "$" + cost + ", no discount was applied. Final payment: $" + totalCost);
}

customer = Ryan;
cost = ryanCost;

if (cost > 200) {
	totalCost = cost - cost * .35;
	console.log(customer + " bought " + "$" + cost + ", discount was applied. Final payment: $" + totalCost);
} else {
	totalCost = cost;
	console.log(customer + " bought " + "$" + cost + ", no discount was applied. Final payment: $" + totalCost);
}

customer = George;
cost = georgeCost;

if (cost > 200) {
	totalCost = cost - cost * .35;
	console.log(customer + " bought " + "$" + cost + ", discount was applied. Final payment: $" + totalCost);
} else {
	totalCost = cost;
	console.log(customer + " bought " + "$" + cost + ", no discount was applied. Final payment: $" + totalCost);
}

// Problem 3

var flipACoin = Math.floor(Math.random()* 2);

var flipACoin = (flipACoin == 0) ? console.log("Buy a car.") : console.log("Buy a house.");

