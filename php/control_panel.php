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
        if (!isset($_SESSION["LOGGED"]) || $_SESSION["LOGGED"] == 0) {
            header("Location:login.php?message=Devi effettuare il login");
            exit();
        }

        if ($_SESSION["LOGGED"] == 1 && $_SESSION["USER_TYPE"] == 0) {
            header("Location:index.php?message=Non disponi delle autorizzazioni necessarie");
            exit();
        }
    ?>


<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right sidebar-color-head" id="sidebar-wrapper">
        <div class="sidebar-heading">Pannello di controllo </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry" id="ticket">Visualizza Ticket</a>
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry" id="operate">Area Operativa</a>
            <a href="#" class="list-group-item list-group-item-action bg-light sidebar-color-entry" id="manage">Gestione Utenti</a>
        </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-danger btn-menu" id="menu-toggle">Menu</button>

            <div class="navbar" id="navbarSupportedContent">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../php/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php echo ('
        
    <div id="search_user">
    	<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Ticket Aperti</h2><br />
			<div class="form-group">
				<div class="input-group">
					<input type="text" name="search_text" id="search_text" placeholder="Inserire Nome o Cognome" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
    </div>
    
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
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy.program">Download</a>
                </div>
            </div>
        </div>
    </div>
    
    <div id="manage_users">
    	<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Lista Utenti</h2><br />
			<div class="form-group">
				<div class="input-group">
					<input type="text" name="search_text" id="search_text2" placeholder="Inserire Nome o Cognome" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result2"></div>
		</div>
		<div style="clear:both"></div>
		<br />
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
                $(document).ready(function() {
                    $('#search_user').css('display', 'initial');
                    $('#download').css('display', 'none');
                    $('#manage_users').css('display', 'none');
                });
            });
        });


        $(document).ready(function(){
            $("#operate").click(function(){
                $('#search_user').css('display', 'none');
                $('#download').css('display', 'flex');
                $('#manage_users').css('display', 'none');
            });
        });

        $(document).ready(function(){
            $("#manage").click(function(){
                $('#search_user').css('display', 'none');
                $('#download').css('display', 'none');
                $('#manage_users').css('display', 'initial');
            });
        });

          
  
        load_users_ticket();
        load_users();

        function load_users_ticket(query)
        {
            $.ajax({
                url:"fetch_users_tickets.php",
                method:"POST",
                data:{query:query},

                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {

                load_users_ticket(search);
                
            }
            else
            {

                load_users_ticket();
            }
        });



    function load_users(query)
        {
            $.ajax({
                url:"fetch_users_data.php",
                method:"POST",
                data:{query:query},

                success:function(data)
                {
                    $('#result2').html(data);
                }
            });
        }

        $('#search_text2').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {

                load_users(search);

            }
            else
            {

                load_users();
            }
        });

    });
    </script>
