<!DOCTYPE html>
<html lang="it-IT">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Profilo </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link rel="icon" href="../images/icon.png">
	<link rel="stylesheet" href="../css/show_profile.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
	
	 
	 <link rel="stylesheet" href="../aos/aos.css" />
	
	
	</head>

<body>

    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if ($_SESSION["LOGGED"]==1) {
        $ver = 1;
    }
    if (!isset($ver)) {
        header("Location:login.php?message=Devi effettuare il login");
    }
    ?>

    <nav> <?php include 'navbar.php'; ?></nav>

    <div class="container">
        <div class="main-body">
              <div class="row gutters-sm">
                
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body left_card">
                      <div class="d-flex flex-column align-items-center text-center">
                   
                        <div class="mt-3">
                          <h4> <?php echo $_SESSION['FIRSTNAME']." ".$_SESSION['LASTNAME']; ?> </h4>
                          
                          <?php
                          if($_SESSION["USER_TYPE"] == 0) echo '<p class="text-secondary mb-1">Utente</p>';
                          else if($_SESSION["USER_TYPE"] == 1) echo '<p class="text-secondary mb-1">Utente</p>';
                          ?>
                          <p class="text-muted font-size-sm"></p>
                          <form action="mod_profile.php">
                          <button class="btn btn-primary">Modifica profilo</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nome</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                             <?php echo $_SESSION['FIRSTNAME']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Cognome</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['LASTNAME']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_SESSION['EMAIL']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Abbonamento</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $_SESSION['SUB']; ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  </div>
                </div>
              </div>
        </div>

        <div class="footer">
        <footer><?php include 'footer.php'; ?></footer>
        </div>

    </div>

        
	<script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
	</body>

</html>