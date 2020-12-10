<!DOCTYPE>
<html>
	<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> System Hospital - Registration </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/registration.css">
    <link rel="icon" href="../images/icon.png">
    </head>

    <body>

          <?php
    if(isset($_POST['firstname'])) {
        header('Location: ../database/database.php');
        exit;
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
              </br></br>
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
              </br></br>
              <input type="email" name="email" placeholder="Email">
              </br></br>
              <input type="password" name="pass" placeholder="Password">
              </br></br>
              <input type="password" name="confirm" placeholder="Conferma Password">
              </br></br>
              <input class="submit" type="submit" name="submit" value="Invia">
          </form>
         </div>
      
      <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>

    <footer> <?php include 'footer.php'; ?> </footer>



</html>