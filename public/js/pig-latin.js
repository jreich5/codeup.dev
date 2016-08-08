(function() {
"use strict";


console.log("Pig Latin Working");


function pigWordConverter(input) {

	input = input.toLowerCase();

	input = input.split("");


	// console.log(input);


	for (var i = 0; i < input.length; i++) {
		if (input[i] != "a" || input[i] != "e" || input[i] != "i" || input[i] != "o" || input[i] != "u" || input[i] != "y") {
			var consonant = input.splice(i, 1);
			input.push(consonant[0]);
			// console.log(input);
			break;
		}
	}

	input = input.join("")

	return input + "ay";

}

function pigPhraseConverter () {
	var input = prompt("Please enter a phrase to convert.");

	input = input.split(" ");

	input.forEach(function(element, index, array) {
		console.log(pigWordConverter(element));

	});

}

pigPhraseConverter();




})()
