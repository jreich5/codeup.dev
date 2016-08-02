(function(){
    "use strict";
    console.log("Working");

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.

    var names = ["John", "Paul", "George", "Ringo"];

    // TODO: Create a log statement that will log the number of elements in the names array.

    console.log(names.length);

    // TODO: Create log statements that will print each of the names array elements individually.

    for (var i = 0; i < names.length; i += 1) {
    	console.log(names[i]);
    }
  	

    var reverseArray = [];

    for (var i = names.length -1; i >= 0; i -= 1) {
    	reverseArray.push(names[i])
    }

    console.log(reverseArray);


    names.forEach(function(name, index, array){
    	console.log(name);
    });

})();
