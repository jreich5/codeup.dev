(function(){
    "use strict";
    console.log("Working");
    // TODO: Create person object

    var person = {};

    // var person = todo;

    // TODO: Create firstName and lastName properties in your person object; assign your name to them
 
    person = {
        "firstName": "Justin",
        "lastName": "Reich"
    };

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    person.sayHello = function () {
            alert("Hello, my name is " + this.firstName + " " + this.lastName);
    }; 
    
    // Say hello from the person object.
    person.sayHello();

        // todo:
        // Create an array of objects that represent books.
        // Each book should have a title and an author.
        // The book author should be an object with a firstName and lastName.
        // Be creative and add at least 5 books to the array
        // var books = [todo];

        var books = [
            {

                "title": "The Andromeda Strain",
                
                "author": {

                    "firstName": "Michael",

                    "lastName": "Crichton"
                },
                    
            },
            
            {

                "title": "The Fellowship of the Ring",
                
                "author": {

                    "firstName": "J.R.R.",

                    "lastName": "Tolkien"
                },
                    
            },

            {

                "title": "Something Wicked this Way Comes",
                
                "author": {

                    "firstName": "Ray",

                    "lastName": "Bradbury"
                },
                    
            },

            {
                
                "title": "The Last Command",
                
                "author": {

                    "firstName": "Timothy",

                    "lastName": "Zahn"
                },
                    
            },

            {
                
                "title": "The Seven Habits of Highly Effective People",
                
                "author": {

                    "firstName": "Stephen",

                    "lastName": "Covey"
                },
                    
            }


        ]

        // log out the books array
        console.log(books);

        // todo:
        // Loop through the array of books using .forEach and print out the specified information about each one.
        // start loop here

        books.forEach(function(element, index, array) {
            console.log("Book #" + index);
        });

        books.forEach(function(element, index, array) {
            console.log("Title: " + books[index].title);
        });

        books.forEach(function(element, index, array) {
            console.log("The author is: " + books[index].author.firstName + " " + books[index].author.lastName);
        });
        
        console.log("---");
        // end loop here


    person.sayHello();
})();
