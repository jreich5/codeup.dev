(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.

    planetsArray = planetsString.split("|");

    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
    var newString = planetsArray.join("<br>"); 
    console.log(newString);


    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.


    console.log("\nStarting BONUS...\n ")

    //Original

    console.log("Original is " + planetsString);

    //Step 1
    var planetList = planetsString.split("|");
    console.log("After step 1...")
    console.log(planetList);

    //Step 2
    planetList = planetList.join("|</li>|<li>|");  
    console.log("After step 2...")

    console.log(planetList);

    //Step 3
    planetList = planetList.split("|");
    console.log("After step 3...")

    console.log(planetList);

    //Step 4
    planetList.unshift("<ul>", "<li>");
    console.log("After step 4...")

    console.log(planetList);

    //Step 5
    planetList.push("</li>, </ul>");
    console.log("After step 5...")
    
    console.log(planetList);

    //Step 6
    planetList = planetList.join("");
    console.log("After step 6...")

    console.log(planetList);


})();
