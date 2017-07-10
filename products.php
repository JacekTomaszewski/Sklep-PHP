<?php
require_once "connect.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$products = array();
		for ($i = 1; $i <= 10; $i++) {
if ($rezultat = @$polaczenie->query(
		sprintf("SELECT nazwa,cena,kategoria,opis FROM `produkty` WHERE `Id` = ".$i,
		mysqli_real_escape_string($polaczenie))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();

  $products[] = array("name" => $wiersz['nazwa'], "price" => $wiersz['cena'], "category" => $wiersz['kategoria'], "description" => $wiersz['opis']);
	}}}}
	
?>