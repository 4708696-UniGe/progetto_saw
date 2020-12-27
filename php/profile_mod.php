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
           include ('../database/database_user_mod_read.php');
    ?>

    <nav> <?php include 'navbar.php'; ?></nav>
	<div class="container">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
				<div class="card-body">
					<div class="account-settings">
						<div class="user-profile">
							<div class="user-avatar">
								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Maxwell Admin">
							</div>
                            <?php echo ('<h5 class="user-name">  '.$firstname.' </h5> 
							<h6 class="user-email"> '.$email.' </h6>    '); ?>
						</div>
						<div class="about">
							<h5 class="mb-2 text-primary">About</h5>
						<?php echo ('	<p> '.$about.' </p> ') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
                <form action="../database/database_user_mod_write.php" method="post">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">First Name</label>
                                    <?php echo (' <input type="text" class="form-control" id="firstname" placeholder="'.$firstname.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                    <?php echo ('	<input type="email" class="form-control" id="email" placeholder="'.$email.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                    <?php echo ('	<input type="text" class="form-control" id="phone" placeholder="'.$phone.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">Company Name</label>
                                    <?php echo ('	<input type="url" class="form-control" id="company_name" placeholder="'.$company_name.'"> ') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-primary">Informazioni sui dispositivi utilizzati</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">Sistema operativo usato sulla workstation</label>
                                    <?php echo ('	<input type="name" class="form-control" id="workstation_os" placeholder="'.$workstation_os.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">Sistema operativo usato sul dispositivo mobile</label>
                                    <?php echo ('	<input type="name" class="form-control" id="mobile_os" placeholder="'.$mobile_os.'"> ') ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">State</label>
                                        <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Zip Code</label>
                                        <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="button" id="submit" name="submit" class="btn btn-warning mod_button_s">Cancel</button>
                                        <button type="button" id="submit" name="submit" class="btn btn-success mod_button_p">Update</button>
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