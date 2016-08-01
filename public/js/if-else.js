"use strict";


// PROBLEM 1 ==================
console.log("Original output for problem 1.");


var gradeAverage = (70 + 80 + 95) / 3;

if (gradeAverage > 80) {
    console.log("You're awesome!");
} else {
    console.log("You need to practice more.");
}

// Refactored code using functions
console.log("\nRefactored output for problem 1.");

function gradesAveraged (grades) {
    var gradeTotal = 0;
    for (var i = 0; i < grades.length; i++) {
        gradeTotal += grades[i];
    }
    return gradeTotal / grades.length; 
}

function studentStatus (grade) {
    var message = (grade > 80) ? "You're awesome!" : "You need to practice more.";
    return message;
} 

var grades = [70, 80, 95];
console.log(studentStatus(gradesAveraged(grades)));

// PROBLEM 2 ==================

console.log("\nOriginal output for problem 2.");

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

// Refactored code using functions
console.log("\nRefactored output for problem 2.");

function discountCostMessage (customer, cost, salesAmount, discount) {
    var totalCost;
    if (cost > salesAmount) {
        totalCost = cost - cost * discount;
        console.log(customer + " bought " + "$" + cost + ", discount was applied. Final payment: $" + totalCost);
    } else {
        totalCost = cost;
        console.log(customer + " bought " + "$" + cost + ", no discount was applied. Final payment: $" + totalCost);
    }   
}
var Cameron = "Cameron";
var Ryan = "Ryan";
var George = "George";

var cameronCost = 180;
var ryanCost = 250;
var georgeCost = 320;



discountCostMessage(Cameron, cameronCost, 200, .35);
discountCostMessage(Ryan, ryanCost, 200, .35);
discountCostMessage(George, georgeCost, 200, .35);


// PROBLEM 3 ==================

console.log("\nOriginal output for problem 3.");

var flipACoin = Math.floor(Math.random()* 2);

var flipACoin = (flipACoin == 0) ? console.log("Buy a car.") : console.log("Buy a house.");


// Refactored code using functions
console.log("\nRefactored output for problem 3.");

function flipsCoin () {
    return (Math.floor(Math.random() * 2) == 0) ? "heads" : "tails";
}

function randomChoice (choice1, choice2) {
    var message = (flipsCoin() == "heads") ? choice1 : choice2;
    return message;
}

console.log(randomChoice("Buy a car.", "Buy a house."));
