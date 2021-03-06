<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<link rel="stylesheet" href="../css/navbar.css">

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
     <a class="navbar-brand" href="../php/index.php"><img id="logotop" src="../images/logo.png" alt="Logo azienda"></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <div class="mobile_menu">
         <?php
         if(isset($_SESSION["FIRSTNAME"])){
              echo ('
            <li class="nav-item active">
                <a class="nav-link" href="show_profile.php">Profilo <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"> ');
               if($_SESSION["USER_TYPE"] == 0) { echo ('<a class="nav-link" href="control_panel_user.php">Pannello di controllo <span class="sr-only">(current)</span></a> '); }
               if($_SESSION["USER_TYPE"] == 1) { echo ('<a class="nav-link" href="control_panel.php">Pannello di controllo <span class="sr-only">(current)</span></a> '); }
               echo ('
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/cart.php">Carrello <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/logout.php">Esci <span class="sr-only">(current)</span></a>
            </li>');
         }else{
        echo(' <li class="nav-item active">
            <a class="nav-link" href="login.php">Accedi <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active">
            <a class="nav-link" href="registration.php">Registrati <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active">
            <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
         </li>
         ');
         }?>
         </div>
         <div class="profile">
         <?php
         if(isset($_SESSION["FIRSTNAME"])){
              echo ('
                    <li class="nav-item dropdown">
                <button class="btn btn-secondary dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   '.$_SESSION["FIRSTNAME"]. '
                </button>
                <div class="dropdown-menu dropdown-menu-left logged">
                <div class="px-2 py-3" >
                <div class="form-group">
                    <a class="dropdown-item" href="../php/show_profile.php">Visualizza il profilo</a>
                </div>
                <div class="form-group" >
                    <a class="dropdown-item" href="../php/mod_profile.php">Modifica il profilo</a>
                </div>
                <div class="form-group">
                    <a class="dropdown-item" href="../php/cart.php">Carrello</a>
                </div>
                <div class="form-group py-2">
                    ');
             if($_SESSION["USER_TYPE"] == 0) { echo ('<a class="dropdown-item" href="../php/control_panel_user.php">Pannello di controllo</a> '); }
             if($_SESSION["USER_TYPE"] == 1) { echo ('<a class="dropdown-item" href="../php/control_panel.php">Pannello di controllo</a> '); }
             echo ('
                </div>
                <a class="btn btn-primary mx-2" href="../php/logout.php" role="button">Esci</a>
                </div>
            </li>
                    ');
         }else{
          echo ('
                <li class="nav-item dropdown ">
                <button class="btn btn-secondary dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Profilo
                </button>
                <div class="dropdown-menu dropdown-menu-left ">
                <form class="px-3 py-1" action="login.php" method="post">
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Indirizzo Email</label>
                    <input type="email" name="email" required="required" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input type="password" name="pass" required="required" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary my-2">Entra</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item py-2" href="registration.php">Non hai un profilo? Registrati</a>
            </li>');
            }
            ?>
       </div>
       </ul>
       
     </div>
   </div>
 </nav>