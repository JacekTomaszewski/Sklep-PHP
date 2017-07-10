<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>

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
    <body><div id="duzytekst" style="text-align:center;"><img src="img/logowhite.png" height="50" width="100"/></div><br><br>
	 <div class="container b-radius-top" style="width:40%">
                <div class="top-bar b-radius">
	<div id="duzytekst" style="text-align:center;font-size:150%;color:white;"><a href="rejestracja.php">Rejestracja - załóż darmowe konto!</a></div></div>
	<div id="wrapper" style="text-align: center;color:black;font-size:200%">    
    <div id="yourdiv" style="display: inline-block;"><form action="zaloguj.php" method="post"><br><br>Login: <br><br> <input type="text" name="login" /> <br><br>
		Hasło: <br><br><input type="password" name="haslo" /> <br /> <div id="duzytekst" style="text-align:center;font-size:60%;color:red;"><?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?></div><br>
		<input type="submit" value="Zaloguj się" /></div></form>
</div>
</div>
		
	
	</form></div>
	
</body>
</html>