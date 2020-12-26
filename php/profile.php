<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> System Hospital - Home </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link rel="icon" href="../images/icon.png">
	<link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
	
	 
	 <link rel="stylesheet" href="../aos/aos.css" />
	
	
	</head>

<body>
    <nav> <?php include 'navbar.php'; ?></nav>

    <div class="container">
        <div class="main-body">
              <div class="row gutters-sm">
                
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4> <?php echo $_COOKIE['FIRSTNAME']." ".$_COOKIE['LASTNAME']; ?> </h4>
                          <p class="text-secondary mb-1">Full Stack Developer</p>
                          <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                          <button class="btn btn-primary">Follow</button>
                          <button class="btn btn-outline-primary">Message</button>
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
                             <?php echo $_COOKIE['FIRSTNAME']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Cognome</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $_COOKIE['LASTNAME']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $email = $_COOKIE['EMAIL']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Id</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $id = $_COOKIE['ID_USER']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Abbonamento</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Tipo di abbonamento
                        </div>
                      </div>
                    </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>
        </div>

        
<div class="footer">
	<footer> <?php include 'footer.php'; ?> </footer>
	</div>		

	<script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
	</body>
</html>