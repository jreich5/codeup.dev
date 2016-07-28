"use strict";

// Exercise 1 //

console.log("EXERCISE 1 OUTPUT.....");

var luckyNumber = Math.floor(Math.random()* 6);

console.log(luckyNumber);

var receipt = 60;

var total = null;

switch (luckyNumber) {
    case 0:
        total = receipt;
        console.log("Your price is " + total);
        break;
    case 1:
        total = receipt - (receipt * .1);
        console.log("Your price is " + total);
        break;
    case 2:
        total = receipt - (receipt * .25);
        console.log("Your price is " + total);
        break;
    case 3:
        total = receipt - (receipt * .35);
        console.log("Your price is " + total);
        break;
    case 4:
        total = receipt - (receipt * .5);
        console.log("Your price is " + total);
        break;
    case 5:
        total = 0;
        console.log("Your price is " + total);
        break;
    default:
        console.log("Something went wrong.")
}



// Exercise 2 //


console.log("EXERCISE 2 OUTPUT.....");

var number = 1;

switch (number) {
    case 1:
        console.log("January");
        break;
    case 2:
        console.log("February");
        break;
    case 3:
        console.log("March");
        break;
    case 4:
        console.log("April");
        break;
    case 5:
        console.log("May");
        break;
    case 6:
        console.log("June");
        break;
    case 7:
        console.log("July");
        break;
    case 8:
        console.log("August");
        break;
    case 9:
        console.log("September");
        break;
    case 10:
        console.log("October");
        break;
    case 11:
        console.log("November");
        break;
    case 12:
        console.log("December");
        break;
    default:
        console.log("Number not between 1 and 12");
}



// var whatAmI = null;

// if (typeof whatAmI === "boolean") {
//     console.log("You are a boolean.");
// } else {
//     console.log("You are not a boolean.");
// }

// switch (typeof whatAmI) {
//     case "boolean":
//         console.log("You are a boolean.");
//         break;
//     case "string":
//         console.log("You are a string");
//         break;
//     default:
//         console.log("WHAAATTT????");
// }