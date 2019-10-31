<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Italo Hortiz do Nascimento">
		<title>Home Page</title>

		<link rel="stylesheet" type="text/css" href="css/pagina_inicial.css">

		<!-- link para o import do css bootstrap 4 -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Forum|Srisakdi&display=swap" rel="stylesheet">
	
		<!-- link para o import do javascript bootstrap 4 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<!-- links externos -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		  
		<script src="js/animacoes.js"></script>
	</head>

	<body>

		<header class="header">
			
			<nav class="navbar navbar-expand-md fixed-top">

				<a href="pagina_inicial.html" class="logo"></a>
				
				
				<div class="slide flex-end" id="menu-collapse">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="#" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Sobre</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Serviços</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Contato</a>
						</li>
					</ul>
				</div>

				<button type="button" class="btn-custom" id="botao-collapse" onclick="">
					<p class="bar"></p> 
					<p class="bar"></p> 
					<p class="bar"></p>
				</button>
			</nav>

			
		</header>

		<div class="tela-principal">
			<img src="img/simulation.jpg" width="100%" height="100%">
		</div>

		<section class="divisao-section">
			<h2>Jogos - Top 6</h2>
			<div class="flex">
				<div>
					<div class="flip-container">
					<a href=""> <img src="img/game2.jpg" class="img-fluid img-thumbnail" id="imagem-flip"> </a> </div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
					<!-- <a href="" class="btn btn-success btn-block btn-custom-2" data-toggle="modal" data-target="#modal-jogo1">Informações</a> -->
				</div>	
				<div>
					<a href=""> <img src="img/game2.jpg" class="img-fluid img-thumbnail"> </a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
					<!-- <a href="" class="btn btn-success btn-block btn-custom-2" data-toggle="modal" data-target="#modal-jogo2">Informações</a> -->
				</div>
				<div>
					<a href=""> <img src="img/game2.jpg" class="img-fluid img-thumbnail"> </a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
					<!-- <a href="" class="btn btn-success btn-block btn-custom-2" data-toggle="modal" data-target="#modal-jogo3">Informações</a> -->
				</div>
				<div>
					<a href=""> <img src="img/game4.jpg" class="img-fluid img-thumbnail"> </a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
					<!-- <a href="" class="btn btn-success btn-block btn-custom-2" data-toggle="modal" data-target="#modal-jogo4">Informações</a> -->
				</div>
				<div>
					<a href=""> <img src="img/game1.jpg" class="img-fluid img-thumbnail"> </a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
					<!-- <a href="" class="btn btn-success btn-block btn-custom-2" data-toggle="modal" data-target="#modal-jogo5">Informações</a> -->
				</div>
				<div>
					<a href=""> <img src="img/game5.jpg" class="img-fluid img-thumbnail"> </a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
					<!-- <a class="btn btn-success btn-block btn-custom-2" data-toggle="modal" data-target="#modal-jogo6">Informações</a> -->
				</div>

				<a href="#" class="btn btn-primary form-control">Acesse a página de jogos</a>
			</div>
			
		</section>

		<section class="divisao-section">
			<h2>Sobre nós</h2>
			<div class="flex">
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>
				<p>
					It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
					It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<p>
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin 
					literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through 
					the cites of the word in classical literature, discovered the undoubtable source.

				</p>
				<p>
					It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
					It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</section>

		<section class="divisao-section">
			<div class="container-equipe">
				<div class="container-equipe-item">
					<a href=""> <img src="img/game2.jpg" class="img-fluid rounded-circle"> </a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
				</div>

				<div class="container-equipe-item">
					<a href=""> <img src="img/game2.jpg" class="img-fluid rounded-circle"> </a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
				</div>

				<div class="container-equipe-item">
					<a href=""> <img src="img/game2.jpg" class="img-fluid rounded-circle"> </a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nulla aliquet dictum nisl, eu porta libero iaculis at.</p>
				</div>
			</div>
		</section>

	</body>
</html>