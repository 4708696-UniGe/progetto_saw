<!DOCTYPE>
<html>
	<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title> System Hospital - Registration </title>
	<link rel="stylesheet" href="../css/navbar_footer.css">
	<link rel="stylesheet" href="../css/form.css">
    <link rel="icon" href="../images/icon.png">
    </head>

    <body>

          <?php
    if(isset($_POST['firstname'])) {
        header('Location: database.php');
        exit;
    }
    ?>

    <nav> <?php include 'navbar.php'; ?> </nav>

    <header align="center"><h1 class="titolo">Registrazione<h1></header>
    <div class="form">
	  <form action="registration.php" method="post" id="form">
          <input type="text" name="firstname" placeholder="Nome">
          </br></br>
          <input type="text" name="lastname" placeholder="Cognome">
          </br></br>
          <input type="email" name="email" placeholder="Email">
          </br></br>
          <input type="password" name="pass" placeholder="Password">
          </br></br>
          <input type="password" name="confirm" placeholder="Conferma Password">
          </br></br>
          <input type="submit" name="submit" value="Invia">
      </form>
      </div>
    </body>

    <footer> <?php include 'footer.php'; ?> </footer>



</html>