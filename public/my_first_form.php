<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<head>
    <title>Search form exercise</title>
</head>
<body>
  <form method="GET" action="/my_first_form.php">
    <label for="username">Click me to focus username</label>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.</p>
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </p>
    <p>
        <input type="submit">
    </p>
  </form>

  <hr>

  <form method="GET" action="http://duckduckgo.com">
    <p>
        <label for="q">search duckduckgo<br></label>
        <input id="q" name="q" type="text">
        <input type="submit">
    </p>
  </form>

  <form method="GET" action="/my_first_form.php">
  <input type="" value="Click">
  </form>
 
  <hr>

  <form method="GET" action="/my_first_form.php">
    <p>
      <label for"username">Username</label>
      <input name="username" type="text" placeholder="Type Username">
      <br>
    </p>
    <p>
        <label for="password">Password</label>
        <input placeholder="Enter Password" id="password" name="password" type="password">
    </p>
    <button type="submit">Login</button>
  </form>

  <hr>


  <!-- Email Exercise -->

  <form method="GET" action="/my_first_form.php">
    <h2>Compose and Email</h2>
    <p>
        <input id="to" name="to" type="text">
        <label for="to">To</label>
    </p>
    <p>
        <input id="from" name="from" type="text">
        <label for="from">From</label>
    </p>
    <p>
        <input id="subject" name="subject" type="text">
        <label for="subject">Subject</label>
    </p>
    <p>
        <textarea name="body" placeholder="Enter Text" cols="30" rows="10"></textarea>
    </p>
      <label for="save_copy">Save a copy</label>
      <input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
    <p>
        <input type="submit">
    </p>

      
    

  </form>


  <!-- Link searches specific query on Reddit. -->

  <hr>
   <a href="https://www.reddit.com/search?q=javascript&sort=top">Search reddit for 'javascript' and sort results by 'top'</a>
  <hr>   


  <!-- Search Reddit for any entered query sorted to top. -->

  Search Reddit with results sorted to top
  <form method="GET" action="https://www.reddit.com/search">
    <input name="q" type="text">
    <input name="sort" type="hidden" value="top">
    <button type="submit">Submit</button>

  </form>


  <!-- Checkbox and Radio Questions: Additional Form -->

  <h1>Multiple Choice Test</h1>

  <form method="GET" action="my_first_form.php">
    <p>What is your favorite season?</p>

    <label><input type="radio" name="season" value="Spring">Spring</input></label>
    <label><input type="radio" name="season" value="Summer">Summer</input></label>
    <label><input type="radio" name="season" value="Fall">Fall</input></label>
    <label><input type="radio" name="season" value="Winter">Winter</input></label>

    <p>What is your favorite day of the week?</p>

    <label><input type="radio" name="day" value="Sunday">Sunday</input></label>
    <label><input type="radio" name="day" value="Monday">Monday</input></label>
    <label><input type="radio" name="day" value="Tuesday">Tuesday</input></label>
    <label><input type="radio" name="day" value="Thursday">Thursday</input></label>
    <label><input type="radio" name="day" value="Friday">Friday</input></label>
    <label><input type="radio" name="day" value="Saturday">Saturday</input></label>

    <p>What colors do you like?</p>

    <label><input type="checkbox" id="color1" name="color[]" value="red">Red</label>
    <label><input type="checkbox" id="color2" name="color[]" value="blue">Blue</input></label>
    <label><input type="checkbox" id="color3" name="color[]" value="yellow">Yellow</label>


    <br>
    <label for="entity">What pets have you had?</label>
    <select id="entity" name="pets[]" multiple>
      <option>Cats</option>
      <option>Dogs</option>
      <option>Fish</option>
      <option>Rabbits</option>
    </select>


    <br>
    <!-- Select -->

    <h1>Select Testing</h1>
  
    <label for="entity">Are you a human?</label>
    <select id="entity" name="entity">
      <option value="1">Yes</option>
      <option value="0" selected>No</option>
    </select>

    <p>
    <button type="submit">Submit</button>
    </p>

  </form>


  




</body>
</html>




