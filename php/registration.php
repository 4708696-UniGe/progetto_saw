<!DOCTYPE>
<html>
	<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> System Hospital - Registration </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/registration.css">
    <link rel="icon" href="../images/icon.png">
    </head>
    
    <script> var flag=0; </script>

    <body>

    <?php
    if(isset($_POST['firstname'])) {
        include ('../database/database_reg.php');
    }
    ?>

    <nav> <?php include 'navbar.php'; ?> </nav>
      <?php /* Mobile page */ ?>
      
        <header align="center"><h1 class="titolo-mobile">Registrazione<h1></header>
        <div class="reg-mobile">
          <form class="regform-mobile" action="registration.php" method="post">
              <input type="text" name="firstname" placeholder="Nome">
              </br></br>
              <input type="text" name="lastname" placeholder="Cognome">
              </br>
              <p id="flag_email"></p>
              <input type="email" name="email" placeholder="Email">
              </br></br>
              <input type="password" name="pass" placeholder="Password">
              </br></br>
              <input type="password" name="confirm" placeholder="Conferma Password">
              </br></br>
              <input class="submit-mobile" type="submit" name="submit" value="Invia">
          </form>
         </div>
      
      
      
      <?php /* Destop page */ ?>
      
        <header align="center"><h1 class="titolo">Registrazione<h1></header>
        <div class="reg">
          <form class="regform" action="registration.php" method="post">
              <input type="text" name="firstname" placeholder="Nome">
              </br></br>
              <input type="text" name="lastname" placeholder="Cognome">
              </br>
              <p class="alert alert-danger" role="alert"></p>
              <input type="email" name="email" placeholder="Email">
              </br></br>
              <input type="password" name="pass" placeholder="Password">
              </br></br>
              <input type="password" name="confirm" placeholder="Conferma Password">
              </br></br>
              <input class="submit" type="submit" name="submit" value="Invia">
          </form>
         </div>
      
      <script> 
        window.onload = flag_email();
        function flag_email() {
            if(flag == 1) {
            document.getElementsByClassName("alert").innerHTML = "Questa email esiste già.";
            }
        }
      </script>
      
      <script src="../bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>

    <footer> <?php include 'footer.php'; ?> </footer>



</html>