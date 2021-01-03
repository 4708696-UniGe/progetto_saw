<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title> System Hospital - Login </title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
	<link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../images/icon.png">
    </head>

	<body>


	<?php
		session_start();
		if (isset($_POST['email'])) {
			include('../database/database_log.php');
		}
	?>

    <?php
    if(isset($_GET['message'])) {
        $msg = $_GET['message'];
        echo(' <div class="alert alert-primary login-needed">' . $msg . '</div> ');
    }
    ?>

		<div class="form">
			<form action="login.php" method="post">
				<input type="email" name="email" placeholder="Email">
				</br></br>
				<input type="password" name="pass" placeholder="Password">
				</br></br>
				<input type="submit" name="submit" value="Invia">
			</form>
		</div>

	</body>

	<footer> <?php include 'footer.php'; ?> </footer>

</html>