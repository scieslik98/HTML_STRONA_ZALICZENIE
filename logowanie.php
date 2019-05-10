<?php
session_start();
?>

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
		$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbDatabase) 
			or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysqli_error($connection)); 
		mysqli_set_charset($connection, "utf-8");
		$login1=mysqli_real_escape_string($connection, $_POST["login"]);
		$query="SELECT * FROM uzyt1 WHERE login=\"".$login1."\"LIMIT 1";
		$result=mysqli_query($connection, $query);
			if(!$result || !mysqli_num_rows($result))
			{
				die("Błędna nazwa użytkownika lub hasło!");
			}
			else
			{
				$res=mysqli_fetch_assoc($result);
				if($_POST["pas"]==$res["pas"])
				{
					echo "Zostałeś zalogowany!";
					$_SESSION["login"] = $login1;
				}
				else
				{
					echo "Błędna nazwa użytkownika lub hasło!";
				}
			}
			
							
mysqli_close($connection);
?>
</html>