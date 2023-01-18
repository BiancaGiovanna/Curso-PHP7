<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/modules.css">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/footer.css">
	<title>Curso PHP</title>
</head>

<body>

	<header>
		<h1>Curso de Desenvolvimento Web com PHP 7</h1>
	</header>
	<main>
		<div class="content">
			<nav class="modules">
				<div class="module">
					<h2>Integrando PHP com HTML & CSS</h2>
					<ul>
						<li>
							<a href="exercise.php?dir=basics&file=hello">Olá PHP</a>
						</li>
						<li>
							<a href="exercise.php?dir=basics&file=html">Integração HTML & PHP</a>
						</li>
						<li>
							<a href="exercise.php?dir=basics&file=css">Integração CSS & PHP</a>
						</li>
						<li>
							<a href="exercise.php?dir=basics&file=challenger">Desafio do Modulo</a>
						</li>
					</ul>
				</div>
				<div class="module">
					<h2>Tipos básicos em PHP</h2>
					<ul>
						<li>
							<a href="exercise.php?dir=basicTypesPHP&file=int">Tipo Inteiro em PHP</a>
						</li>
						<li>
							<a href="exercise.php?dir=basicTypesPHP&file=float">Tipo Float em PHP</a>
						</li>
						<li>
							<a href="exercise.php?dir=basicTypesPHP&file=arithmetic">Operações Aritméticas</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</main>
	<footer>Bianca Giovanna Borba Gomes &copy <?= date("Y"); ?> </footer>
</body>

</html>