<?php if (!isset($_SESSION)) {
session_start();
} ?>


<?php $output = '
        <div id="ticket_box">
        <div id="search_user">
        <h2 align="center">Ricerca Utente</h2><br />
			<div class="form-group">
				<div class="input-group">
					<input type="text" name="search_text" id="search_text" placeholder="Inserire Nome Utente" class="form-control" onkeyup="showResult(this.value)" >
				</div>
				<div id="result" class="result_table">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th width="70%">Nome</th>
                                <th width="20%">Cognome</th>
                                <th width="10%">Email</th>
                                <th width="10%">Data apertura ticket</th>
                                <th width="10%">Dispositivo</th>
                                <th width="10%">Sistema Operativo</th>
                                <th width="10%">Descrizione</th>
                            </tr>
                        </thead> ';

foreach($GLOBALS['customer_ticket'] as $row)
{
    $output .= '
	<tr id="row_table">
		<td>'.$row['firstname'].' </td>
		<td>'.$row['lastname'].' </td>
		<td>'.$row['email'].' </td>
		<td>'.$row['opening_date'].' </td>
		<td>'.$row['device'].' </td>
		<td>'.$row['os'].' </td>
		<td>'.$row['description'].' </td>
		<td>test </td>
	</tr>
	';
}
$output .= '</table> </div>
			</div>
        </div>
        </div>';
echo $output;
         echo $_SESSION["TICKET_DESC"]; /*} */

/*else { echo('
        <div id="ticket_box">
        <form id="search_user">
        <div class="input-group mb-3">
            <input type="email" name="email" id="user_email" readonly class="form-control" placeholder="'.$_SESSION["CUSTOMER_EMAIL"].'" aria-label="Recipient username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-search">Cerca</button>
        </div>
        </form> 
        
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea readonly class="form-control-plaintext" id="issue_description" rows="3">'.$_SESSION["TICKET_DESC"].'</textarea>
        </div>
    </div> '); } */?>




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

<script>
    /*
    $(document).ready(function(){

        $(document).on('click','#button-addon2',function(e){
            // this will prevent form and reload page on submit.
            e.preventDefault();

            // here you will get Post ID
            my_post_id=$(this).attr('data-postId');
            var User_id = $('.id_data').attr('value');
            var textdata = $('textarea#content').val();
            alert(textdata);

            // Add your Ajax call here.
        });
    })




    $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
                url:"fetch.php",
                method:"post",
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
    */
</script>