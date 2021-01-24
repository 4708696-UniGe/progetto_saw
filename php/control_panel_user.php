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
    <link rel="stylesheet" href="../css/control_panel_user.css">
    <link rel="stylesheet" href="../css/scrollbar.css">


<body>

    <?php
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION["LOGGED"]) || $_SESSION["LOGGED"] == 0) {
            header("Location:login.php?message=Devi effettuare il login");
            exit();
        }

        if ($_SESSION["LOGGED"]==1 && $_SESSION["USER_TYPE"] == 1) {
            header("Location:control_panel.php");
            exit();
        }
    ?>


<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right sidebar-color-head" id="sidebar-wrapper">
        <div class="sidebar-heading">Pannello di controllo </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry" id="ticket">Visualizza Ticket</a>
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry" id="new_ticket">Nuovo Ticket</a>
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry" id="operate">Area Download</a>
        </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-danger btn-menu" id="menu-toggle">Menu</button>

            <div class="navbar" id="navbarSupportedContent">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php echo ('
        
    <div id="my_tickets">
    	<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Ticket Aperti</h2><br />
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
    </div> ');
    
    if (isset($_SESSION["SUB"]) && $_SESSION["SUB"] != '--') { echo ('

    <div id="open_ticket" class="open_ticket">
    	<form method="POST" action="../php/submit_ticket.php">
          <div class="row">
            <label for="describeProblem" class="col-6 col-form-label">Descrivi il problema</label>
            <div class="col-xl-12">
              <textarea type="text" class="form-control" name="description" id="description"></textarea>
            </div>
          </div>
          <fieldset class="row py-4">
            <legend class="col-form-label col-6 pt-0">Sistema Operativo:</legend>
            <div class="col-6 py-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="os" id="gridRadios1" value="Windows">
                <label class="form-check-label" for="gridRadios1">
                  Windows
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="os" id="gridRadios2" value="Linux">
                <label class="form-check-label" for="gridRadios2">
                  Linux
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="os" id="gridRadios3" value="mac OS">
                <label class="form-check-label" for="gridRadios3">
                  mac OS
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="os" id="gridRadios3" value="Android">
                <label class="form-check-label" for="gridRadios3">
                  Android
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="os" id="gridRadios3" value="iOS">
                <label class="form-check-label" for="gridRadios3">
                  iOS
                </label>
              </div>
            </div>
          </fieldset>
          <button type="submit" id="send_ticket" class="btn btn-primary">Invia</button>
        </form>
    </div>
    '); }
    else { echo('
    <div class="alert alert-warning nosub" role="alert"> Non disponi di un pacchetto attivo. <a href="../php/products.php" class="alert-link">Compra un abbonamento</a>. 
    </div>
    ');
    }

    echo('
    <div class="row download mx-4 my-4" id="download">
        <h1>Scarica l&#39;applicativo per fornire supporto</h1>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Windows</h5>
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy.program">x64</a>
                    <a class="btn btn-primary" href="../dummy" download="dummy.program">ARM</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Linux</h5>
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy.program">x64</a>
                    <a class="btn btn-primary" href="../dummy" download="dummy.program">ARM</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">mac OS</h5>
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy.program">Intel</a>
                    <a class="btn btn-primary" href="../dummy" download="dummy.program">M1</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Android</h5>
                    <p class="card-text">Necessario abilitare "fonti sconosciute" dalle impostazioni</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy.program">Download</a>
                </div>
            </div>
        </div>
    </div>
        ');
        ?>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../ajax/jquery.min.js"></script>

</body>

</html>


<!-- Menu Toggle Script -->
<script>
    $(document).ready(function () {

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });



        $(document).ready(function(){
            $("#ticket").click(function(){
                $('#my_tickets').css('display', 'initial');
                $('#download').css('display', 'none');
                $('#open_ticket').css('display', 'none');
            });
        });

        $(document).ready(function(){
            $("#new_ticket").click(function(){
                $('#my_tickets').css('display', 'none');
                $('#download').css('display', 'none');
                $('#open_ticket').css('display', 'flex');
            });
        });

        $(document).ready(function(){
            $("#operate").click(function(){
                $('#my_tickets').css('display', 'none');
                $('#download').css('display', 'flex');
                $('#open_ticket').css('display', 'none');
            });
        });



        load_data();

        function load_data()
        {
            $.ajax({
                url:"fetch_my_tickets.php",
                method:"POST",
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }

    });
</script>