'use strict';

console.log("Exercise 1.");

function sayHello (name) {
    var message = 'hello ' + name;
    console.log(message);
}

sayHello('zach');

// expect to see 'hello zach' in the console

console.log("Exercise 2.");
// ----------------------------------------------------------------------------

function sayHelloToEveryoneExceptZach (name) {
    if (name == 'zach') {
        console.log('goodbye');
    } else {
        console.log('hello ' + name);
    }
}

sayHelloToEveryoneExceptZach('Ryan');

// expect to see 'hello Ryan' in the console


console.log("Exercise 3.");
// ----------------------------------------------------------------------------

// returns a random number between 1 and 100
function getRandomNumber () {
    return Math.floor(Math.random() * 100) + 1;
}

// returns true if number is odd, otherwise false
function isOdd (number) {
    if (number % 2 == 1) {
    	return true;
    } else {
    	return false;
    }
}


var rand = getRandomNumber();


if (isOdd(rand)) {
    console.log(rand + ' is odd');
} else {
    console.log(rand + ' is not odd');
}

// expect to see '4 is not odd'

console.log("Exercise 4.");


// ----------------------------------------------------------------------------

for (var i = 1; i <= 10; i += 1) {
    console.log(i);
}

// expect to see 1 through 10


console.log("Exercise 5.");

// ----------------------------------------------------------------------------

for (var i = 10; i >= 1; i -= 1) {
    console.log(i);
}

// expect to see 10 through 1


console.log("Exercise 6.");
// ----------------------------------------------------------------------------

function sum(x, y) {
    return x + y;
}

var x = 3;
var y = 5;

console.log(sum(x, y));

// expect to see 8







