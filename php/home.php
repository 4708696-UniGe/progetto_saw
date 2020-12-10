<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> System Hospital - Home </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="icon" href="../images/icon.png">
	<link rel="stylesheet" href="../css/home.css">
	
	
	</head>

	<body>
		<nav> <?php include 'navbar.php'; ?></nav>
			<?php include 'socialbar.php'; ?>

		
		<?php /* Mobile Page */ ?>
		
		<div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../images/prima.jpg" alt="Avatar" class="image-mobile">
            </div>
            <div class="flip-card-back">
              <h1>Chi siamo?</h1>
              <div class="text-mobile" id="block">Il nostro obiettivo è offrire assistenza <br> informatica professionale ad imprese. <br> <a title="Scopri di più" href="about.php">Scopri di più</a></div>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../images/seconda.jpg" alt="Avatar" class="image-mobile" >
            </div>
            <div class="flip-card-back">
              <h1>Cosa offriamo?</h1>
              <div class="text-mobile">Scopri i nostri <a id="inline_link" href="products.php">prodotti.</a></div>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../images/terza.jpg" alt="Avatar" class="image-mobile">
            </div>
            <div class="flip-card-back">
              <h1>Su quale piattaforma lavori?</h1>
              <div class="text-mobile">Trova la tua tra le nostre <a id="inline_link" href="platform_list.php">piattaforme supportate.</a></div>
            </div>
          </div>
        </div>
		
		
		<?php /* Desktop page */?>
		
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
	
	    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	
	</body>
	<footer> <?php include 'footer.php'; ?> </footer>

</html>