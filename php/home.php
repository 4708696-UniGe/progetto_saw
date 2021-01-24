<!DOCTYPE html>
<html lang="it">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> System Hospital - Home </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link rel="icon" href="../images/icon.png">
	<link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="stylesheet" href="../aos/aos.css" />

	</head>

	<body>

        <?php
            if(isset($_GET['message'])) {
                $msg = $_GET['message'];
                echo(' <div class="alert alert-danger admin_required">' . $msg . '</div> ');
            }
        ?>




        <nav> <?php include 'navbar.php'; ?></nav>

        <div class="first_container">
            <div class="bg">
                <div class = "box">
                    <div class="textimg">
                        <h1 id="title2">Chi siamo?<br></h1>
                        <p id="title-desc">Il nostro obiettivo è offrire assistenza informatica professionale ad imprese e privati. <br> <a id="home_link" title="Scopri di più" href="about.php">Scopri di più</a>  </p>
                        <p id="title-desc">Ti serve aiuto? <br> <a id="home_link" title="Assistenza" href="../chat/index.php">Contatta l'assistenza</a> </p>
                    </div>
                </div>
            </div>
        </div>


        <div class ="blank">
            <div data-aos="fade-right" data-aos-offset="0" class="textimg2">

                <h1 id="text-title">Cosa offriamo?<br></h1>
                <p id="text">Scopri i nostri <a id="home_link" href="products.php">prodotti.</a> </p>
            </div>
            <div data-aos="flip-right" class="img"></div>
        </div>


        <div class ="blank2">

            <div data-aos="fade-right" data-aos-offset="0" class="textimg2">

                <h1 id="text-title">Su quale piattaforma lavori?<br></h1>
                <p id="text">Trova la tua tra le nostre <a id="home_link" href="platform_list.php">piattaforme supportate.</a> </p>
            </div>

            <div data-aos="flip-left" class="img2"></div>
        </div>



        <script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
        <script src="../aos/aos.js"></script>
        <script>
            AOS.init();
        </script>
	</body>

	<footer> <?php include 'footer.php'; ?> </footer>

</html>
