<?php
session_start();
#region Session control
	if(!empty($_SESSION["login"])){
		if($_SESSION["login"]=="admin")  {
			header("Location: wpisy.php");	
			exit;
		}
								}
?>
<!doctype html>
<html lang="pl">

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
							<?php if(!isset($_SESSION["login"])): ?>
								<form method="POST" action="logowanie.php">
								
										<div class="form-group">
											<input type="text" class="form-control col-8" name="login" placeholder="login" required>
										</div>
										<div class="form-group">
											<input type="password" class="form-control col-8" name="pas" placeholder="Hasło" required>
										</div>
										<button type="submit" class="btn btn-primary">Zaloguj się!</button>
										<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modalrejestracji" data-whatever="@getbootstrap">REJESTRACJA</button>
								</form>
								<?php else: ?>
								<a class="btn btn-outline-success" href="logout.php">Wyloguj się</a>
								<?php endif; ?>
							</section>
					</section>
					
					<section class="modal fade" id="modalrejestracji" tabindex="-1" role="dialog" aria-labelledby="modalrej" aria-hidden="true">
					  <section class="modal-dialog" role="document">
						<section class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="modalrej">Zarejestruj się</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  
						<section class="modal-body">
							<form action="rejestracja.php" method="post">
								<div class="form-group">
									<input type="email" class="form-control col-8" id="exampleInputEmail1" name="email" placeholder="E-mail" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control col-8" placeholder="login" name="login" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control col-8" id="exampleInputPassword1" name="pas" placeholder="Hasło" required>
								</div>
								<button type="submit" class="btn btn-primary" name="rejestracja">Zarejestruj się!</button>
								<button type="reset" class="btn btn-primary">Wyczyść</button>
							</form>
						  </section>
						  
						  
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
						  </div>
						  
						  
						</section>
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

		<section class="container-fluid mx-auto "> 
			<section id="Karuzela" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#Karuzela" data-slide-to="0" class="active"></li>
				<li data-target="#Karuzela" data-slide-to="1"></li>
				<li data-target="#Karuzela" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img class="d-block w-100" src="top2.jpg" alt="Pierwszy slajd" width="800" height="800">
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="top1.jpg" alt="Drugi slajd" width="800" height="800">
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="top3.jpg" alt="Trzeci slajd" width="800" height="800">
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#Karuzela" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Poprzedni</span>
			  </a>
			  <a class="carousel-control-next" href="#Karuzela" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Następny</span>
			  </a>
			</section>	
		</section>
		
	
		<section class="row">
			<article class="col-12 mb-md-4">
					<h3 class="col-12 text-center p-3 mb-2">Napisz co sądzisz na temat mojego bloga</h3>
					<form method="POST" action="komentarz.php">
							<h6 class="text-center">Podaj adres E-mail</h6>
								<input class="form-control col-12 col-lg-6 mx-lg-auto text-center" name="email" placeholder="E-mail" required="" type="email">
							<h6 class="text-center mt-3">Podaj Twój nick</h6>
								<input class="form-control col-12 col-lg-6 mx-lg-auto text-center" name="nick" placeholder="Nick" required="" type="text">
							<h6 class="text-center mt-3">Twój komentarz</h6>
								<textarea class="form-control col-12 col-lg-6 mx-auto text-center mt-1" name="komentarz" placeholder="Dodaj Komentarz" rows="3" required=""></textarea>
							<aside class="d-lg-flex justify-content-center">
								<button class="btn btn-success col-12  col-lg-4 mr-2 mt-2" type="submit">Wyślij</button>
								<input class="btn btn-danger col-12  col-lg-4  mt-2" value="Wyczyść" type="reset">
							</aside>
					</form>
		
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
														
												?>
												<?php
														$zapytanie="SELECT * FROM komentarze ORDER BY Id DESC";
														$rezultat=mysqli_query($connection, $zapytanie);
													echo '<section>';
														while($bufor=mysqli_fetch_assoc($rezultat))
														{
															echo '<div style="	border:5px outset grey;border-radius:5px;"><div class="col-12 text-right">Dodano: '.$bufor['data'].'</div>';	
																if(isset($_SESSION["sessionid"]))	
																{
																	echo '<input type="submit" name="usun" value="'.$bufor['Id'].'" class="btn btn-primary col-2 col-lg-2 mb-1 d-block mx-auto">';
																	echo '<div class="col-12 text-left"><b>Id='.$bufor['Id'].'</b></div>';	
																	echo '<div class="col-12 text-left"><br>'.$bufor["email"].'</div>';						
																}
															echo '<div class="col-12 text-left" ><br><b>'.$bufor["nick"].'</b></div>';	
															echo '<div class="col-12 text-center style= text-align">'.$bufor["komentarz"].'</div></div><br>';	
														}	echo '</section>';	
												?>
											
				</article>
		</section>

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