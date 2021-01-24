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

    <body class="text-center">

    <?php
    if(isset($_POST['firstname'])) {
        include ('../database/database_reg.php');
    }
    ?>

      <div class="boxcont">
      <div class="form-signin border-animation">
    <form action="registration.php" method="post">
        <a href="../php/index.php"><img class="mb-2" src="../images/logo.png" alt="Logo" width="100%"></a>
        <h1 class="h1 mb-3 fw-small">Registrati</h1>
        <p id="flag_reg" class="alert alert-danger devisible" role="alert"></p>
        <input type="text" name="firstname" placeholder="Nome" required="required" class="form-control">
        <input type="text" name="lastname" placeholder="Cognome" required="required" class="form-control">
        <input type="email" id="inputEmail" name="email" required="required" class="form-control" placeholder="Indirizzo email">
        <input type="password" id="inputPassword" name="pass" required="required" class="form-control" placeholder="Password">
        <input type="password" id="inputPassword" name="confirm" required="required" class="form-control" placeholder="Conferma Password">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrati</button>
        <p class="mt-5 mb-3 text-muted">&#169; 2020-2021</p>
    </form>
    </div>
    </div>
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