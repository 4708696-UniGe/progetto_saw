<?php if (!isset($_SESSION)) {
session_start();
} ?>


<html>  

    <head>

		<meta charset="UTF-8">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title> control panel menu entry </title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

		<!-- versione aggiornata di jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="../jQuery/jquery-3.5.1.min.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		

		
    </head>  

    <body>


    <div id="search_user">
    	<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
    </div>





    <div class="row" id="download">
        <h1>Scarica l'applicativo per fornire supporto</h1>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Windows</h5>
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy">x64</a>
                    <a class="btn btn-primary" href="../dummy" download="dummy">ARM</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Linux</h5>
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy">x64</a>
                    <a class="btn btn-primary" href="../dummy" download="dummy">ARM</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">mac OS</h5>
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy">Intel</a>
                    <a class="btn btn-primary" href="../dummy" download="dummy">M1</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Android</h5>
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy">Download</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">iOS</h5>
                    <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                    <a class="btn btn-primary" href="../dummy" download="dummy">Download</a>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>

<!--
<script>
  

    $(document).ready(function(){

        load_data();
        
        function load_data(query)
        {
            $.ajax({
                url:"fetch.php",
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
                load_data(search);
                
            }
            else
            {

                load_data();
            }
        });

    });

</script> -->