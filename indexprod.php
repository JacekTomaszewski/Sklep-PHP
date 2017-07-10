<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sklep Jacka</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       <link rel="Shortcut icon" href="img/favicon.ico" />
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">
        
        
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
            <div class="container b-radius-top">
                <div class="top-bar b-radius">
                    <div class="social">
                        <ul>
                            <li><a href="logout.php">[Wyloguj się!]  <img src="img/logout.png" width="15" height="15"/></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="site-header">
					<div class="site-name">
					                        <h1><img src="img/logo.png" height="50" width="150"/></h1>
                        <h5>Najfajniejszy sklep w internecie</h5>
                    </div>
                    <div class="menu">
                        <div class="navbar">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="indexprod.php">Produkty</a></li>
									<li><a href="./indexprod.php?view_cart=1">Koszyk</a></li>
                                    <li><a href="onas.php">O nas</a></li>
                                    <li><a href="kontakt.php">Kontakt</a></li>                           
                                </ul>
                                </form>
                            </div>
                        </div>
                    </div>

                <div class="featured-slider">

       <script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
        

<?php
session_start();

require("products.php");
require("layout.php");

// Initialize cart
if(!isset($_SESSION['shopping_cart'])) {
	$_SESSION['shopping_cart'] = array();
}
// Empty cart
if(isset($_GET['empty_cart'])) {
	$_SESSION['shopping_cart'] = array();
}

// **PROCESS FORM DATA**

$message = '';

// Add product to cart
if(isset($_POST['add_to_cart'])) {
	$product_id = $_POST['product_id'];
	
	// Check for valid item
	if(!isset($products[$product_id])) {
		$message = "Invalid item!<br />";
	}
	// If item is already in cart, tell user
	else if(isset($_SESSION['shopping_cart'][$product_id])) {
		$message = "<h1>Przedmiot jest już w koszyku!</h1><br />";
	}
	// Otherwise, add to cart
	else {
		$_SESSION['shopping_cart'][$product_id]['product_id'] = $_POST['product_id'];
		$_SESSION['shopping_cart'][$product_id]['quantity'] = $_POST['quantity'];
		$message = "Dodano do koszyka!";
	}
}
// Update Cart
if(isset($_POST['update_cart'])) {
	$quantities = $_POST['quantity'];
	foreach($quantities as $id => $quantity) {
		if(!isset($products[$id])) {
			$message = "Invalid product!";
			break;
		}
		$_SESSION['shopping_cart'][$id]['quantity'] = $quantity;
	}
	if(!$message) {
		$message = "Koszyk zaktualizowany!<br />";
	}
}

echo $header;

echo $message;

if(isset($_GET['view_product'])) {
	$product_id = $_GET['view_product'];
	
	if(isset($products[$product_id])) {
		// Display product
		echo "<p>
			<span style='font-weight:bold;'>" . $products[$product_id]['name'] . "</span><br />
			<img src='img/" . $products[$product_id]['name'] . ".jpg' height='400' width='400'/><br>
			<span>PLN " . $products[$product_id]['price'] . "</span><br />
			<span>" . $products[$product_id]['description'] . "</span><br />
			<p>
				<form action='./indexprod.php?view_product=$product_id' method='post'>
					<select name='quantity'>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
					</select>
					<input type='hidden' name='product_id' value='$product_id' />
					<input type='submit' name='add_to_cart' value='Dodaj do koszyka' />
				</form>
			</p>
		</p>";
	}
	else {
		echo "Invalid product!";
	}
}
// View cart
else if(isset($_GET['view_cart'])) {

	echo "<br><h3>Twój koszyk</h3>
	<p>
		<a href='./indexprod.php?empty_cart=1'>Wyczysc koszyk</a>
	</p>";
	
	if(empty($_SESSION['shopping_cart'])) {
		echo "Twój koszyk jest pusty!";
	}
	else {
		echo "<form action='./indexprod.php?view_cart=1' method='post'>
		<table style='width:500px;' cellspacing='0'>
				<tr>
					<th style='border-bottom:1px solid #000000;'>Nazwa</th>
					<th style='border-bottom:1px solid #000000;'>Cena</th>
					<th style='border-bottom:1px solid #000000;'>Kategoria</th>
					<th style='border-bottom:1px solid #000000;'>Ilosc</th>
				</tr>";
				foreach($_SESSION['shopping_cart'] as $id => $product) {
					$product_id = $product['product_id'];
					
					echo "<tr>
						<td style='border-bottom:1px solid #000000;'><a href='./indexprod.php?view_product=$id'>" . 
							$products[$product_id]['name'] . "</a></td>
						<td style='border-bottom:1px solid #000000;'>PLN " . $products[$product_id]['price'] . "</td> 
						<td style='border-bottom:1px solid #000000;'>" . $products[$product_id]['category'] . "</td>
						<td style='border-bottom:1px solid #000000;'>
							<input type='text' name='quantity[$product_id]' value='" . $product['quantity'] . "' /></td>
					</tr>";
				}
			echo "</table>
			<input type='submit' name='update_cart' value='Uaktualnij koszyk' />
			</form>
			<p>
				<a href='./indexprod.php?checkout=1'>Podsumowanie</a>
			</p>";
		
	}
}
// Checkount
else if(isset($_GET['checkout'])) {
	// Display site links

	echo "<h3>Podsumowanie</h3>";
	
	if(empty($_SESSION['shopping_cart'])) {
		echo "Your cart is empty.<br />";
	}
	else {
		echo "<form action='./indexprod.php?checkout=1' method='post'>
		<table style='width:500px;' cellspacing='0'>
				<tr>
					<th style='border-bottom:1px solid #000000;'>Nazwa</th>
					<th style='border-bottom:1px solid #000000;'>Cena produktu</th>
					<th style='border-bottom:1px solid #000000;'>Ilosc</th>
					<th style='border-bottom:1px solid #000000;'>Suma za produkt</th>
				</tr>";
				
				$total_price = 0;
				foreach($_SESSION['shopping_cart'] as $id => $product) {
					$product_id = $product['product_id'];
					
					
					$total_price += $products[$product_id]['price'] * $product['quantity'];
					echo "<tr>
						<td style='border-bottom:1px solid #000000;'><a href='./indexprod.php?view_product=$id'>" . 
							$products[$product_id]['name'] . "</a></td>
						<td style='border-bottom:1px solid #000000;'>PLN " . $products[$product_id]['price'] . "</td> 
						<td style='border-bottom:1px solid #000000;'>" . $product['quantity'] . "</td>
						<td style='border-bottom:1px solid #000000;'>PLN " . ($products[$product_id]['price'] * $product['quantity']) . "</td>
					</tr>";
				}
			echo "</table>
			<p><br>Całkowita suma: PLN " . $total_price . "</p>";
		
	}
}
// View all products
else {
	// Display site links

	echo "<table style='width:500px;' cellspacing='0' >";
	echo "<tr>
		<th style='border-bottom:1px solid #000000;'>Nazwa</th>
		<th style='border-bottom:1px solid #000000;'>Cena</th>
		<th style='border-bottom:1px solid #000000;'>Kategoria</th>
	</tr>";


	// Loop to display all products
	foreach($products as $id => $product) {
		echo "<tr>
			<td style='border-bottom:1px solid #000000;'><a href='./indexprod.php?view_product=$id'>" . $product['name'] . "</a></td>
			<td style='border-bottom:1px solid #000000;'>PLN " . $product['price'] . "</td> 
			<td style='border-bottom:1px solid #000000;'>" . $product['category'] . "</td>
		</tr>";
	}
	echo "</table>";
}

echo $footer;

?>
</div>
</div></div>
   </body>
</html>
