<!doctype html>
<html>
	<html lang="pl">
	<head>
		<title>logowanie</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	</head>
	<body>
	<a class="btn btn-primary" href="http://ux.up.krakow.pl/~sylwstercieslik1004/Strona%20zaliczenie/#" role="button">Powrót do strony głównej</a>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	</body>
<?php
 include("dane.php");
 $polaczenie = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbDatabase);
	if(mysqli_connect_errno($polaczenie)){
		echo "Blad polaczenia z baza danych". mysqli_error($polaczenie);
		exit;
	}
	if (isset($_POST['rejestracja']))
	{
   	$login1 = $_POST['login'];
   	$haslo = $_POST['pas'];
   	$email = $_POST['email'];
   	$query="SELECT login FROM uzyt1 WHERE login = '$login1';";
   	$wynik=mysqli_query($polaczenie,$query);
   	if (mysqli_num_rows($wynik) == "0")
    {
    	$query2="INSERT INTO uzyt1 (login,pas,email) VALUES ('$login1','$haslo','$email');";
 	    mysqli_query($polaczenie,$query2);
        echo '<span style="color:red">Konto zostało utworzone! Teraz się zaloguj</span>';   
    }
    else 
       	echo "Podany login jest już zajęty.";
   }


?>
</html>