<?php  ?>
<a title="Home" href="home.php"><img id="logotop" src="../images/logo.png" alt="Logo azienda"> </a>
 <ul id="nav">
  <li id="about"><a href="about.php">About</a> </li>

  <?php
  session_start();
  if(isset($_SESSION["user"])){
    echo '<li>Benvenuto, '.$_SESSION["firstname"].'</li>';
    echo '<li><a href="profilo.php">Profilo</a></li>'."\n";
    echo '<li><a href="logout.php">Logout</a> </li>'."\n";
    }
  else{
    echo '<li id="signup"><a href="registration.php">Registrati</a> </li>';
    echo '<li id="login"><a href="login.php">Accedi</a> </li>';
  }
?>
 </ul>