"use strict"

console.log("working");


// ==============Exercise 1=============

//added "click"
// document.getElementById('my-btn').addEventListener("click", function(e){
//     alert('you clicked the button!');
// });


// ==============Exercise 2=============


//took out dot from class name and changed paragraph to paragraphs
var paragraphs = document.getElementsByClassName('lorem');

for (var i = 0; i < paragraphs.length; i++) {
    var p = paragraphs[i];
    p.style.color = 'blue';
};

// ==============Exercise 3=============


//closed function with curly brace and moved it above procedural code

var myButton = document.getElementById('my-btn');

var alertMe = function () {
    alert('hey! you clicked a thing');

};

myButton.addEventListener('click', alertMe);

// ==============Exercise 4=============

// the 1 button doesn't work
// the 2 button replaces whatever is in the display
// the 5 button breaks everything
// the clear button doesn't do anything

// food for thought: it looks like an awful lot of duplication in our code for
// selecting and adding an event listener to all the buttons

function clearClicked (e) {
    display.value = '';
}

var display = document.getElementById('display');
var clear   = document.getElementById('clear');

// var btn1 = document.getElementById('btn-1');
// var btn2 = document.getElementById('btn-2');
// var btn3 = document.getElementById('btn-3');
// var btn4 = document.getElementById('btn-4');
// var btn5 = document.getElementById('btn-5');


//REFACTORED to use button class

var buttons = document.getElementsByClassName('button');

for (var i = 0; i < buttons.length; i++) {
	var button = buttons[i];
	console.log(buttons[i].innerHTML);
	button.addEventListener('click', function(e){
		display.value += this.innerHTML;
	});
}



    //changed to display.value and added +=

// btn1.addEventListener('click', function(e){
//     display.value += 1; //changed to display.value and added +=
// });

// btn2.addEventListener('click', function(e){
//     display.value += 2; //added +=
// });

// btn3.addEventListener('click', function(e){
//     display.value += 3;
// });

// btn4.addEventListener('click', function(e){
//     display.value += 4;
// });

// btn5.addEventListener('click', function(e){
//     display.value += 5; //added .value
// });

clear.addEventListener('click', clearClicked); //took function out of quotes

