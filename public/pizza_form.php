<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/pizza.css">
	<meta charset="UTF-8">
	<title>Pizza Form</title>
</head>
<body>
	<h1>Pizza Order Form</h1>
	<form method="GET" action="pizza_form.php">
		<input id="slider" type="range" name="slider" min="1" max="100" step="1" value="1">
		<label for="slider">How many pizzas?</label>

		<h3>Crust Selection</h3>
		<label>
			<input type="radio" name="crust" value="deep_dish">Deep Dish
		</label>
		<br>
		<label>
			<input type="radio" name="crust" value="hand_tossed">Hand Tossed
		</label>
		<br>
		<label>
			<input type="radio" name="crust" value="thin_crust">Thin Crust
		</label>
		<br>
		<label>
			<input type="radio" name="crust" value="flat_bread">Flat Bread
		</label>
		<br>
		<label>
			<input type="radio" name="crust" value="focaccia">Focaccia
		</label>
		
		<h3>Sauce Selection</h3>
		<label>
			<input type="radio" name="sauce" value="red_sauce">Red Sauce
		</label>
		<br>
		<label>
			<input type="radio" name="sauce" value="white_sauce">White Sauce
		</label>
		<br>
		<label>
			<input type="radio" name="sauce" value="green_sauce">Green Sauce
		</label>
		<br>
		<label>
			<input type="radio" name="sauce" value="garlic_sauce">Garlic Sauce
		</label>
	
		<div id="topping_container">
			<h3>Toppings Selection</h3>
			<label>
				<input type="checkbox" id="toppings1" name="toppings[]" value="onions"><img src="img/onion.jpg" alt="Onions">
			</label>
			<br>
			<label>
				<input type="checkbox" id="toppings2" name="toppings[]" value="peppers"><img src="img/pepper.jpg" alt="Peppers">
			</label>
			<br>
			<label>
				<input type="checkbox" id="toppings3" name="toppings[]" value="mushrooms"><img src="img/mushroom.jpg" alt="Mushrooms">
			</label>
			<br>
			<label>
				<input type="checkbox" id="toppings4" name="toppings[]" value="pepperoni"><img src="img/pepperoni.jpg" alt="Pepperoni">
			</label>
			<br>
			<label>
				<input type="checkbox" id="toppings5" name="toppings[]" value="sausage"><img src="img/sausage.jpg" alt="Sausage">
			</label>
		</div>
		<p>
			<button type="submit">Submit</button>
		</p>

	</form>

</body>
</html>