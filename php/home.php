<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> System Hospital - Home </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link rel="icon" href="../images/icon.png">
	<link rel="stylesheet" href="../css/home2.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
	
	 
	 <link rel="stylesheet" href="../aos/aos.css" />
	
	
	</head>

	

	<body>

		
		<nav> <?php include 'navbar.php'; ?></nav>
			<!--<?php include 'socialbar.php'; ?>-->

		
		
		<?php /* Mobile Page */ ?>
		<!--
		<div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../images/prima.jpg" alt="Avatar" class="image-mobile">
            </div>
            <div class="flip-card-back">
              <h1>Chi siamo?</h1>
              <div class="text-mobile" id="block">Il nostro obiettivo è offrire assistenza <br> informatica professionale ad imprese. <br> <a class="btn btn-info" title="Scopri di più" href="about.php" role="button" aria-pressed="true">Scopri di più</a></div>
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
              <div class="text-mobile">Scopri i nostri <a class="btn btn-info" id="inline_link" href="products.php" role="button" aria-pressed="true">prodotti</a></div>
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
              <div class="text-mobile">Trova la tua tra le nostre <br><a class="btn btn-info" id="inline_link" href="platform_list.php" role="button" aria-pressed="true">piattaforme supportate</a></div>
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
	
	    <div class="container_left">
			<img src="../images/seconda.jpg" alt="Avatar" class="image" >
			<div class="overlay_left">
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
	    </div>-->
		<div class="franco">
			<div class="bg">
				<div class = "box">
					<div class="textimg">
						<h1 id="title2">Chi siamo?<br></h1>
						<p id="title-desc">Il nostro obiettivo è offrire assistenza informatica professionale ad imprese. <br> <a title="Scopri di più" href="about.php">Scopri di più</a>  </p>
					</div>
				</div>
			</div>
		</div>
			

		<div class ="blank">
			<div data-aos="fade-right" class="textimg2">

				<h1 id="text-title">Cosa offriamo?<br></h1>
				<p id="text">Scopri i nostri <a id="inline_link" href="products.php">prodotti.</a> </p>
			</div>
			<div data-aos="flip-right" class="img"></div>
		</div>

		
		<div class ="blank2">
		
			<div data-aos="fade-right" class="textimg2">

				<h1 id="text-title">Su quale piattaforma lavori?<br></h1>
			    <p id="text">Trova la tua tra le nostre <a id="inline_link" href="platform_list.php">piattaforme supportate.</a> </p>
			</div>
			
			<div data-aos="flip-left" class="img2"></div>
		</div>
		


	<div class="footer">
	<footer> <?php include 'footer.php'; ?> </footer>
	</div>		




	<script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
	<script src="../aos/aos.js"></script>
	<script>
		AOS.init();
	</script>
	</body>
</html>