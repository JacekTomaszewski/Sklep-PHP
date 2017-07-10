<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
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
                            <li><?php echo "Witaj ".$_SESSION['user'].'!';?></li><br>
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
                    <h1>Kontakt</h1>
                    <h5>Wszystkie potrzebne informacje, aby zawrocic nam gitare :-)</h5>
<br><br><br>

Jeśli mają Państwo zapytania dotyczące oferty sklepu czy realizacji zamówień, prosimy pisać na adres: sklep@sklepJacka.pl
<br>
Kontakt z obsługą sklepu Sklep Jacka jest możliwy również pod numerem telefonu: +48 666 997 997
<br><br>
Obsługa sklepu internetowego Sklep Jacka odpowiada na Państwa wiadomości e-mail oraz zapytania telefoniczne od poniedziałku do piątku 
w godzinach od 8:00 do 19:00, w soboty 9:00-17.00.
                </div>
          
       <script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
        



   </body>
Jacek Tomaszewski 2017
</html>
