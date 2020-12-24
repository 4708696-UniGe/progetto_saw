<!DOCTYPE>
<html>
	<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> System Hospital - Registration </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/reg.css">
    <link rel="icon" href="../images/icon.png">
    </head>
    
    <script> var flag=0; </script>

    <body class="text-center">

          <?php
    if(isset($_POST['firstname'])) {
        include ('../database/database_reg.php');
    }
    ?>

   <!--
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
              </br></br>
              <p id="flag_reg" class="alert alert-danger devisible" role="alert"></p>
              <input type="email" name="email" placeholder="Email">
              </br></br>
              <input type="password" name="pass" placeholder="Password">
              </br></br>
              <input type="password" name="confirm" placeholder="Conferma Password">
              </br></br>
              <input class="submit" type="submit" name="submit" value="Invia">
          </form>
         </div>
      -->

      <main class="form-signin">
    <form action="registration.php" method="post">
        <a href="home.php"><img class="mb-4" src="../images/logo.png" alt="Logo" width="100%"></a>
        <h1 class="h1 mb-2 fw-small">Registrati</h1>
        <p id="flag_reg" class="alert alert-danger devisible" role="alert"></p>
        <input type="text" name="firstname" placeholder="Nome" class="form-control">
        <input type="text" name="lastname" placeholder="Cognome" class="form-control">
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Indirizzo email">
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password">
        <input type="password" id="inputPassword" name="confirm" class="form-control" placeholder="Conferma Password">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrati</button>
        <p class="mt-5 mb-3 text-muted">&#169; 2017-2020</p>
    </form>
    </main>
</body>

      <script> 
        window.onload = flag_email();
        function flag_email() {
            if(flag == 1) {
            document.getElementById("flag_reg").className = "alert alert-danger";
            document.getElementById("flag_reg").innerHTML = "Questa email esiste già.";
            }
        }
      </script>
      
      <script src="../bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>