<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">
        
        
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <title>Sklep Jacka</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       <link rel="Shortcut icon" href="img/favicon.ico" />
</head>

<body>


 <body><div id="duzytekst" style="text-align:center;"><img src="img/logowhite.png" height="50" width="100"/></div><br><br>
	 <div class="container b-radius-top" style="width:40%">
                <div class="top-bar b-radius">
	<div id="duzytekst" style="text-align:center;font-size:150%;color:white;">GRATULACJE</a></div></div>
	<div id="wrapper" style="text-align: center;color:black;font-size:200%">    
    <div id="yourdiv" style="display: inline-block;">
	<br>Dziekujemy za rejestracje w serwisie!<br><br><br> Mozesz juz zalogować sie na swoje konto!<br /><br />
	<br>
	<a href="index.php">Zaloguj sie na swoje konto!</a>
	<br /><br />
	</div></div>
</div>
</div>
		
	
</div>


</body>
</html>