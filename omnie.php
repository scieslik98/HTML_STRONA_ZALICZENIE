<!doctype html>
<html lang="pl">

	<head>
		<title>O mnie</title>
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
							<h5 class="modal-title" id="modalrej">Zarejestruj sięe</h5>
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

		
		<section class="container-fluid text-center mt-3 mb-0">
			<section class= " row justify-content-center"> 
				<section class="col-12">
					<h1>O mnie</h1>
					<br>
					<h2>Nazywam się Sylwester Cieślik</h2>
					<br>
					<h3 class=" row justify-content-center">
						Jestem studentem informatyki i jednocześnie wielkim pasjonatem programu Top Gear.</h3>
				</section>
			</section>
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