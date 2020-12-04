<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title> System Hospital - Home </title>
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/navbar_footer.css">
	<link rel="icon" href="../images/icon.png">
	</head>

	<body>
		<nav> <?php include 'navbar.php'; ?></nav>
			<?php include 'socialbar.php'; ?>

		<div class="container_left">
			<img src="../images/prima.jpg" alt="Avatar" class = "image" >
			<div class="overlay_left">
			<h1 class = "text" id="title">Chi siamo?<br></h1>
			<div class="text" id="block">Il nostro obiettivo è offrire assistenza informatica professionale ad imprese. <br> <a title="Scopri di più" href="about.php">Scopri di più</a>  </div>
		</div>
	</div>

	<div class="container_right">
			<img src="../images/seconda.jpg" alt="Avatar" class="image" >
			<div class="overlay_right">
			<h1 class = "text" id="title">Cosa offriamo?<br></h1>
			<div class="text" id="block">Scopri i nostri <a id="inline_link" href="products.php">prodotti.</a> </div>
		</div>
	</div>

	<div class="container_left">
			<img src="../images/terza.jpg" alt="SO" class="image" >
			<div class="overlay_left">
			<h1 class = "text" id="title">Su quale piattaforma lavori?<br></h1>
			<div class="text" id="block">Trova la tua tra le nostre <a id="inline_link" href="platform_list.php">piattaforme supportate.</a> </div>
		</div>
	</div>
	</body>
	<footer> <?php include 'footer.php'; ?> </footer>

</html>