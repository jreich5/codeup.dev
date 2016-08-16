// $('document').ready(function() {
    'use strict';

    console.log('Map App Working');

    var $weatherID = '7f8e3aa0aad113510e0c1eaafd1c17b8';
    var $weatherUrl = 'http://api.openweathermap.org/data/2.5/forecast/daily'
    var $location = $('#place');
    var $panel0 = $('#panel1');
    var $panel1 = $('#panel2');
    var $panel2 = $('#panel3');
    var panelList = [$panel0, $panel1, $panel2];

    $.get($weatherUrl, {
        APPID: $weatherID,
        q: 'San Antonio, TX',
        units: 'Imperial',
        // lat: ,
        // lon: ,
        cnt: 3
        // Specify 3 day forcast
    }).done(function(data) {
        console.log(data);
        console.log(data.city.coord.lat);
        console.log(data.city.coord.lon);

        $location.append(data.city.name + "<br><span id='coordinants'>Latitude: " + data.city.coord.lat + " Longitude: " + data.city.coord.lon +"</span>");

        // Create a forEach loop to iterate over each day of forcast
        data.list.forEach(function(element, index, array) {
            var content = "";
            var currentPanel = panelList[index];
            console.log(currentPanel);
        // Extract the needed information for each day and display to each panel
            
            console.log(parseInt(element.temp.max) + "&deg;" + "/" + parseInt(element.temp.min) + "&deg;");
            var temprature = parseInt(element.temp.max) + "&deg;" + "/" + parseInt(element.temp.min) + "&deg;";
            content += "<h3>" + temprature + "</h3>";

            console.log("http://openweathermap.org/img/w/" + element.weather[0].icon +".png");
            var iconUrl = "http://openweathermap.org/img/w/" + element.weather[0].icon +".png";
            content += "<img src=" + iconUrl + ">";

            console.log(element.weather[0].main + ": " + element.weather[0].description);
            var conditions = element.weather[0].main + ": " + element.weather[0].description;
            content += "<p>" + conditions + "</p>";

            console.log("Humidity" + ": " +  element.humidity + "%");
            var humidity = "Humidity" + ": " +  element.humidity + "%";
            content += "<p>" + humidity + "</p>";

            console.log("Wind" + ": " + parseInt(element.speed) + " mph");
            var windSpeed = "Wind" + ": " + parseInt(element.speed) + " mph";
            content += "<p>" + windSpeed + "</p>";


            console.log("pressure" + ": " + parseInt(element.pressure) + " mb");
            var pressure = "pressure" + ": " + parseInt(element.pressure) + " mb";
            content += "<p>" + pressure + "</p>";

            // Append each bit of content to the proper td panel
            
            currentPanel.append(content);
      
            // console.log(data);
            // console.log(data);


        });

                // place
                // temprature
                // icon
                // name of weather + ": " + description
                // wind
                // pressure
            // 

    }).fail(function() {
        console.log('You screwed up.');
    });




    // // Global variables
    // var blogUrl = 'data/blog.json';
    // var $ajxBlog = $.ajax(blogUrl);
    // var $posts = $('#posts');


    // // Function to convert output to title case
    // function titleCase(str) {
    //   str = str.toLowerCase().split(' ');
    //   for (var i = 0; i < str.length; i++) {
    //     str[i] = str[i].charAt(0).toUpperCase() + str[i].slice(1); 
    //   }
    //   return str.join(' ');
    // }
 
    // // Helper function to attach to reload button
    // function loadBlog () {
    //     $.ajax(blogUrl).done(function(data){
    //         var $ajxBlog = data;
    //         var content = '';
    //         console.log($ajxBlog);
    //         $ajxBlog.forEach(function(element, index, array){
    //             content += "<h6 id='date'>" + element.date + "</h6>";
    //             content += "<h3 id='title'>" + element.title + "</h3>";
    //             content += "<p id='content'>" + element.content + "</p>";
    //             content += "<h5 id='categories'>" + "<span>Categories</span>: " + titleCase(element.categories.join(", ")) + "</h5>";
    //             content += "<hr>";
    //         });
    //         console.log(content);
    //         $posts.append(content);
    //     }).fail(function(){
    //         console.log("You screwed up!");
    //     });
    // }

    // // On load
    // loadBlog();




// });