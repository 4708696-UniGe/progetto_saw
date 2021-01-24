<?php
session_start();

include('database_chat.php');
    if(!isset($_SESSION['ID_USER']))
    {
        header("location: ../php/login.php");
    }
?>


<html>  

    <head>

		<meta charset="UTF-8">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Chat </title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
        <link rel="icon" href="../images/icon.png">
        <link rel="stylesheet" href="../css/fetch_user.css">
        <link rel="stylesheet" href="../css/chat_box.css">
        <link rel="stylesheet" href="../css/scrollbar.css">

		<!-- versione aggiornata di jquery-->
		<script src="../jQuery/jquery-3.5.1.min.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		

		
    </head>  


    <body>  

		<!-- navbar -->
		<?php include '../php/navbar.php'; ?>


		<div class="box">
            <div class="container">
                <br />

                <h3 align="center"> Chat </a></h3><br />
                <br />

                <div class="table-responsive">

                    <div id="user_details"></div>
                    <div id="user_model_details"></div>
                </div>
                <br />
                <br />
                <br />
                <br />
            </div>
		</div>

		<script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
	
		</body>  

		<!-- footer -->
		<footer> <?php include '../php/footer.php'; ?> </footer>

</html>

<script>  

// $(document).ready  Verifica se il documento (la pagina) e' pronta
// per essere manipolata in modo sicuro. Fino a che non e' verificata questa
// condizione significa che il DOM non e' pronto per ricevere codice JavaScript
$(document).ready(function(){

	fetch_user();

	// setInterval esegue le funzioni ogni 2sec
	setInterval(function(){
		update_last_activity();
		update_chat_history_data();
        fetch_user();
	}, 2000);

	/* metodo $.ajax: metodo statico che effetua una chiamata ajax alla quale vengono passati dei 
	parametri con notazione JSON.
	url: url della risorsa alla quale viene inviata la richiesta
	method: tipo di richiesta HTTP da effetuare 
	success: funzione che verrà eseguita al successo della chiamata dove data è l'oggetto della richiesta
	(data: dati restituiti al termine della chiamata) */
	function fetch_user()
	{
		$.ajax({
			url:"fetch_user.php",
			method:"POST",
			success:function(data){
				//$(selector).html(content): imposta il contenuto dell'id selezionato con i dati passati come parametro
				// #user_details: div line 52
				$('#user_details').html(data);
			}
		})
	}

	// aggiorna l'ultima attività
	function update_last_activity()
	{
		$.ajax({
			url:"update_last_activity.php",
			success:function()
			{

			}
		})
	}


	function make_chat_dialog_box(to_user_id, to_user_name)
	{
		//operatore '+' concatena le stringhe 
		var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="'+to_user_name+'">';
		modal_content += '<div class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
		modal_content += fetch_user_chat_history(to_user_id);
		modal_content += '</div>';
		modal_content += '<div class="form-group">';
		modal_content += '<textarea style="resize:none; margin-bottom:6px;" name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
		modal_content += '</div><div class="form-group" align="right">';
		modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-primary send_chat">Invia</button></div></div>';
		$('#user_model_details').html(modal_content);
		//#user_model_details: div line 53. Il contenuto di questo div sarà la stringa concatenata modal_content
	}


	//.start_chat id bottone in fetch_user, se cliccato il bottone viene eseguita la funzione:
	$(document).on('click', '.start_chat', function(){
		//$(selector).data(name) estrae dati dall'elemento con nome indicato e li mette in una variabile
		var to_user_id = $(this).data('touserid'); 
		var to_user_name = $(this).data('tousername');
		make_chat_dialog_box(to_user_id, to_user_name); 
		$("#user_dialog_"+to_user_id).dialog({
			width:400,
            resizable: false
		});
		$('#user_dialog_'+to_user_id).dialog('open');

	});

		
	//send_chat nome bottone per inviare messaggi, creato in make_chat_dialog_box
	$(document).on('click', '.send_chat', function(){
		var to_user_id = $(this).attr('id'); //salva in una variabile l'id del destinatario
		var chat_message = $('#chat_message_'+to_user_id).val(); //salva in una variabile il contenuto del messaggio
		$.ajax({
			url:"insert_chat.php",
			method:"POST",
			data:{to_user_id:to_user_id, chat_message:chat_message},
			success:function(data)
			{
				//$('#chat_message_'+to_user_id).val('');
				var element = $('#chat_message_'+to_user_id).val('');
				
				//$(selector).html(content): imposta il contenuto dell'id selezionato con i dati passati come parametro
				$('#chat_history_'+to_user_id).html(data);
			}
		})
	});

    // Chiamata ajax che ritorna tutta la chat con un utente
	function fetch_user_chat_history(to_user_id)
	{
		$.ajax({
			url:"fetch_user_chat_history.php",
			method:"POST",
			data:{to_user_id:to_user_id},
			success:function(data){
				$('#chat_history_'+to_user_id).html(data);
			}
		})
	}

    // Ottiene i nuovi messaggi
	function update_chat_history_data()
	{
		$('.chat_history').each(function(){
			var to_user_id = $(this).data('touserid');
            //if ($('#user_dialog').parents('.ui-dialog:visible').length) {
                fetch_user_chat_history(to_user_id);
            //}
		});
	}

    // Chiude la finestra di chat
	$(document).on('click', '.ui-button-icon', function(){
		$('.user_dialog').dialog('destroy').remove();
	});


});  
</script>