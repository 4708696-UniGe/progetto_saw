<!DOCTYPE html>
<html lang="it-IT">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Modifica Profilo </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link rel="icon" href="../images/icon.png">
	<link rel="stylesheet" href="../css/profile_mod.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
	
	 
	 <link rel="stylesheet" href="../aos/aos.css" />
	
	
	</head>

<body>


    <?php
        $firstname = null;
        $lastname = null;
        $email = null;
        $phone = null;
        $company_name = null;
        $workstation_os = null;
        $mobile_os = null;
        $about = null;
        include ("../database/database_user_mod_read.php");
    ?>

    <nav> <?php include 'navbar.php'; ?></nav>
	<div class="container">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
				<div class="card-body left_card">
					<div class="account-settings">
						<div class="user-profile">
							<div class="user-avatar">
								<img id="avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Maxwell Admin">
							</div>
                            <?php echo ('<h5 class="user-name">  '.$firstname.' </h5> 
							<h6 class="user-email"> '.$email.' </h6>    '); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
                <form action="../database/database_user_mod_write.php" method="post">
                        <div class="card-body right_card">
                            <div class="row gutters">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Nome</label>
                                    <?php echo (' <input type="text" class="form-control" name="firstname" placeholder="'.$firstname.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Cognome</label>
                                    <?php echo (' <input type="text" class="form-control" name="lastname" placeholder="'.$lastname.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                    <?php echo (' <input type="email" class="form-control" name="email" placeholder="'.$email.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Numero di telefono</label>
                                    <?php echo (' <input type="text" class="form-control" name="phone" placeholder="'.$phone.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">Nome Azienda</label>
                                    <?php echo (' <input type="text" class="form-control" name="company_name" placeholder="'.$company_name.'"> ') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">Sistema operativo principale usato sulla workstation</label>
                                    <?php echo (' <input type="name" class="form-control" name="workstation_os" placeholder="'.$workstation_os.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">Sistema operativo principale usato sul dispositivo mobile</label>
                                    <?php echo (' <input type="name" class="form-control" name="mobile_os" placeholder="'.$mobile_os.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group ab">
                                        <label for="sTate">Su di me</label>
                                    <?php echo (' <textarea  class="form-control" name="about" placeholder="'.$about.'"></textarea> ') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right buttonmod">
                                        
                                        <button type="submit" id="submit" name="submit" class="btn btn-success mod_button_p">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
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