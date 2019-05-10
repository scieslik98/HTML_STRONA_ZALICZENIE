<?php
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Zaliczenie</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Cache-Control" content="no-cache">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>
	<body>
		<section class="container-fluid"> 
			<section class ="row">
				<section class="col-8 col-lg-4">
					<div class="obrazek mt-3">
						<img class="d-block w-100" src="font_image.gif" alt="tytuł1">
					</div>
				</section>
						
				<section class="col-4 col-lg-2">
					<div class="obrazek">
						<img class="d-block w-50" src="font_image2.gif" alt="tytuł2">
					</div>
				</section>
				
				<section class="col-12 col-lg-6">
					<?php 
						if(!isset($_SESSION["login"]))
						{
                            echo '<a href="logout.php" class="btn btn-primary btn-lg active " role="button" aria-pressed="true">Wyloguj się </a>';
						}
                    ?>
					
				</section>
			</section>   			
		</section>

		<header class="container-fluid">	
			<section class="row">
				<nav class="navbar navbar-expand-lg bg-light col-12">
						<a class="navbar-brand" href="#">Nawigacja</a>
							<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
							</button>
						<section class="collapse navbar-collapse " id="navbarNavDropdown">
							<ul class="navbar-nav">
							
								<li class="nav-item active">
									<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
								</li>
								
								<li class="nav-item active">
										<a class="nav-link" href="omnie.php">O mnie <span class="sr-only">(current)</span></a>
								</li>
								
								<li class="nav-item active">
									<a class="nav-link" href="kontakt.php">Kontakt<span class="sr-only">(current)</span></a>
								</li>
								
								<li class="nav-item active">
									<a class="nav-link" href="wpisy_tekst.php">Wpisy<span class="sr-only">(current)</span></a>
								</li>
							</ul>
						</section>
				</nav>
			</section>
		</header>

		<section class="row">
			<article class="col-12 mb-md-4">
					<form method="POST" action="wpis.php">
							<h6 class="text-center">Tutaj tytuł</h6>
								<input class="form-control col-12 col-lg-6 mx-lg-auto text-center" name="tytul" placeholder="tytul" required="">
								<textarea class="form-control col-12 col-lg-6 mx-auto text-center mt-1" name="tekst" placeholder="tekst" rows="3" required=""></textarea>
							<aside class="d-lg-flex justify-content-center">
								<button class="btn btn-secondary col-12  col-lg-4 mr-2 mt-2" type="submit">Wyślij</button>
								<input class="btn btn-secondary col-12  col-lg-4  mt-2" value="Wyczyść" type="reset">
							</aside>
					</form>
			</article>
		</section>
												<?php
													include("dane.php");
														$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbDatabase) 
														or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysqli_error($connection)); 
														mysqli_set_charset($connection, "utf-8");
																						
													if(!empty($_POST["tytul"])&&!empty($_POST["data"])&&!empty($_POST["tekst"]))
													{
														$tytul=$_POST["tytul"];
														$tekst=nl2br($_POST["tekst"]);

														$query = "INSERT INTO `wpisy` (`tytul`, `data`, `tekst`) VALUES (?, ?, ?)";
														$statement = $connection->prepare($query);
														$statement->bind_param("sss", $tytul, $data, $tekst);
														$data = date("d-m-Y H:i:s");
														$tytul = $connection->real_escape_string($tytul);
														$tekst = $connection->real_escape_string($tekst);
														$statement->execute();
														$statement->close();
														}
												?>
												<?php
														$zapytanie="SELECT * FROM wpisy ORDER BY Id DESC";
														$rezultat=mysqli_query($connection, $zapytanie);
													echo '<section>';
														while($bufor=mysqli_fetch_assoc($rezultat))
														{
															echo '<div style="	border:1px solid black;border-radius:5px;"><div class="col-12 text-right">Dodano: '.$bufor['data'].'</div>';	
																if(isset($_SESSION["sessionid"]))	
																{
																	echo '<input type="submit" name="usun" value="'.$bufor['Id'].'" class="btn btn-primary col-2 col-lg-2 mb-1 d-block mx-auto">';
																	echo '<div class="col-12 text-left"><b>Id='.$bufor['Id'].'</b></div>';	
																	echo '<div class="col-12 text-left"><br>'.$bufor["tytul"].'</div>';						
																}
															echo '<div class="col-12 text-left" ><br><b>'.$bufor["tytul"].'</b></div>';	
															echo '<div class="col-12 text-center style= text-align">'.$bufor["tekst"].'</div></div><br>';	
                                                        }	
                                                    echo '</section>';	
												?>
											
				

		<footer class="footer jumbotron container-fluid text-center mt-3 mb-0" style="background-color: #d9ff66;">
			<section class= " row justify-content-center"> 
				<section class="col-12">
					<h1> Top Gear- blog </h1>
					<br>
					<h2> Copyright (C) Sylwester Cieślik </h2>
					<br>
					<h3> Licznik Gości </h3>
					<br>
						<script type = "text/javascript" src = "//www.deszczowce.pl/licznik/licznik.php?id=111487368"></script>
						<br>
					<h4> Licznik Odwiedzin </h4>
					<br>
						<script type="text/javascript" src="//www.licznikodwiedzin.pl/cnt/start.php?key=484295575"></script>
						<br>
				</section>
			</section>
		</footer>
	
		
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>