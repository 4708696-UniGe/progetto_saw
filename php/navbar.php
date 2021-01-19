<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<link rel="stylesheet" href="../css/navbar.css">

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
     <a class="navbar-brand" href="../php/home.php"><img id="logotop" src="../images/logo.png" alt="Logo azienda"></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <form class="search_mobile">
      <input class="form-control " type="search" placeholder="Cerca" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Cerca</button>
     </form>
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
         <div class="search">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Cerca nel sito" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Cerca</button>
            </form>
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
                <div class="px-4 py-3" >
                <div class="form-group">
                    <a class="dropdown-item" href="../php/show_profile.php">Visualizza il profilo</a>
                </div>
                <div class="form-group" >
                    <a class="dropdown-item" href="../php/mod_profile.php">Modifica il profilo</a>
                </div>
                <div class="form-group">
                    <a class="dropdown-item" href="../pho/chart.php">Carrello</a>
                </div>
                <div class="form-group py-2">
                    ');
             if($_SESSION["USER_TYPE"] == 0) { echo ('<a class="dropdown-item" href="../php/control_panel_user.php">Pannello di controllo</a> '); }
             if($_SESSION["USER_TYPE"] == 1) { echo ('<a class="dropdown-item" href="../php/control_panel.php">Pannello di controllo</a> '); }
             echo ('
                </div>
                <a class="btn btn-primary" href="../php/logout.php" role="button">Esci</a>
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
                <form class="px-4 py-3" action="login.php" method="post">
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Indirizzo Email</label>
                    <input type="email" name="email" required="required" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input type="password" name="pass" required="required" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                    Ricordami
                    </label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Entra</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="registration.php">Non hai un profilo? Registrati</a>
                <a class="dropdown-item" href="forgot_password.php">Password dimenticata?</a>
            </li>');
            }
            ?>
       </div>
       </ul>
       
     </div>
   </div>
 </nav>