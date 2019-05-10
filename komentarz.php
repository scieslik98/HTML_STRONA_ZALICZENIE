<?php
	include("dane.php");
		$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbDatabase) 
			or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysqli_error($connection)); 
		mysqli_set_charset($connection, "utf-8");
												
	if(!empty($_POST["email"])&&!empty($_POST["nick"])&&!empty($_POST["komentarz"]))
		{
		$email=$_POST["email"];
		$nick=$_POST["nick"];
		$komentarz=nl2br($_POST["komentarz"]);
												
		$query = "INSERT INTO `komentarze` (`data`, `email`, `nick`, `komentarz`) VALUES (?, ?, ?, ?)";
		$statement = $connection->prepare($query);
		$statement->bind_param("ssss", $data, $email, $nick, $komentarz);
		$data = date("d-m-Y H:i:s");
		$email = $connection->real_escape_string($email);
		$nick = $connection->real_escape_string($nick);
		$komentarz = $connection->real_escape_string($komentarz);
		$statement->execute();
		$statement->close();
		}
	header("Location: http://ux.up.krakow.pl/~sylwstercieslik1004/Strona%20zaliczenie/");	
?>