<?php
	include("dane.php");
		$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbDatabase) 
		or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysqli_error($connection)); 
	mysqli_set_charset($connection, "utf-8");

	if(!empty($_POST["tytul"])&&!empty($_POST["tekst"]))
	{
		$query = "INSERT INTO `wpisy` (`tytul`, `data`, `tekst`) VALUES (?, ?, ?)";
		$statement = $connection->prepare($query);
		$statement->bind_param("sss", $tytul, $data, $tekst);
		$data = date("d-m-Y H:i:s");
		$tytul = $connection->real_escape_string($_POST["tytul"]);
		$tekst = $connection->real_escape_string($_POST["tekst"]);
		$statement->execute();
		$statement->close();
	}

	header("Location: wpisy.php");	
?>