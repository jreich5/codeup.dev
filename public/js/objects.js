(function(){
    "use strict";
    console.log("Working");
    // TODO: Create person object

    var person = {};

    // var person = todo;

    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    person = {
    	"firstName": "Justin",
    	"lastName": "Reich",
    };

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    person.sayHello = function () {
    		alert("Hello, my name is " + this.firstName + " " + this.lastName);
    }; 
    

    // Say hello from the person object.
    // person.sayHello();

    person.sayHello();
})();
