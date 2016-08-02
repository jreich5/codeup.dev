"use strict";

console.log("Working...");

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

var userResponse

do {
	userResponse = prompt("What is your name?");

} while (userResponse == "" || userResponse == null)



// TODO: Show an alert message that welcomes the user based on their input.

var userInput = prompt("What is your name?");

alert("Welcome " + userInput + "!");


// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var theirReply = prompt("What pizza do you like?");

switch (theirReply) {
    case "pepperoni":
        alert("That's mine too!");
        break;
    case "cheese":
        alert("Yuck.");
        break;
    case "veggie":
        alert("Health nut, eh?");
        break;
    case "meat lovers":
        alert("What a caveman!!");
        break;
    case "sausage":
        alert("Hmmmm... I don't like that one.");
        break;
    default:
        alert("Uhhhhh...as IF!");
}