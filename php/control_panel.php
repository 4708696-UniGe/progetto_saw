<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Pannello di controllo Amministratore </title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="../css/control_panel.css">
    <link rel="stylesheet" href="../css/scrollbar.css">


<body>

<?php
if (!isset($_SESSION)) {
    session_start();
}
if ($_SESSION["LOGGED"]==1) {
    $ver = 1;
}
if (!isset($ver) && $ver == 1) {
    header("Location:login.php?message=Devi effettuare il login");
}
?>


<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right sidebar-color-head" id="sidebar-wrapper">
        <div class="sidebar-heading">Pannello di controllo </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry" id="ticket">Visualizza Ticket</a>
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry" id="operate">Area Operativa</a>
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry">Gestione Utenti</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-danger btn-menu" id="menu-toggle">Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php if (!isset($_SESSION["TICKET_DESC"]) && !isset($_SESSION["CUSTOMER_EMAIL"])) { echo ('
        <div id="content_box">
        
        </div> '); echo $_SESSION["TICKET_DESC"]; }
        ?>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../ajax/jquery.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#ticket").click(function(){
                <?php unset($_SESSION["TICKET_DESC"]); ?>
                <?php unset($_SESSION["CUSTOMER_EMAIL"]); ?>
                $("#content_box").load("cp_menu_entry.php #search_user");

            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#operate").click(function(){
                $("#content_box").load("cp_menu_entry.php #download");

            });
        });
    </script>

    <script>
        /* $('#search_user').submit(function() {
             var email = $('#user_email').val();
             return false;
         }); */

        $(function () {
            $('#button-search').bind('click', function (event) {
                // using this page stop being refreshing
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: "../database/database_show_ticket_admin.php",
                    data: $('#search_user').serialize(),
                    success: function () {
                        alert('form was submitted');
                    }

            }); $("#ticket_box").load("cp_menu_entry.php #search_user");
            });
        });
    </script>

</body>



</html>