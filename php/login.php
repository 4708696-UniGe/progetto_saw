<!DOCTYPE>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title> System Hospital - Login </title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="../images/icon.png">
    </head>

    <script> var flag=0; </script>

<body class="text-center">

    <?php
		session_start();
		if (isset($_POST['email'])) {
			include('../database/database_log.php');
		}
	?>

    <div class="boxcont">
    <div class="form-signin border-animation">
    <form action="login.php" method="post">
        <a href="home.php"><img class="mb-2 mt-1" src="../images/logo.png" alt="Logo" width="100%"></a>
        <h1 class="h1 mb-3 fw-small">Autenticati</h1>
        <p id="flag_log" class="alert alert-danger devisible" role="alert"></p>
        <?php
        if(isset($_GET['message'])) {
            $msg = $_GET['message'];
            echo(' <div class="alert alert-danger">' . $msg . '</div> ');
        }
        ?>
        <input type="email" id="inputEmail" name="email" required="required" class="form-control" placeholder="Indirizzo email">
        <input type="password" id="inputPassword" name="pass" required="required" class="form-control" placeholder="Password">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Accedi</button>
        <p class="mt-5 mb-3 text-muted" id="cr">&#169; 2017-2020</p>
    </form>
    </div>
    </div>
</body>

    <script>
        window.onload = flag_login();
        function flag_login() {
            if(flag == 1) {
            document.getElementById("flag_log").className = "alert alert-danger";
            document.getElementById("flag_log").innerHTML = "Username o password errati.";
            }
        }
    </script>

</html>