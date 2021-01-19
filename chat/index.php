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

        <link rel="stylesheet" href="../css/fetch_user.css">
        <link rel="stylesheet" href="../css/scrollbar.css">

		<!-- versione aggiornata di jquery-->
		<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		

		
    </head>  


    <body>  

		<!-- Includere navbar -->
		<?php include '../php/navbar.php'; ?>

		<div class="box">
        <div class="container">
			<br />
			
			<h3 align="center"> Live Chat </a></h3><br />
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

		<!-- Includere footer -->
		<footer> <?php include '../php/footer.php'; ?> </footer>

</html>

<style>


	.chat_message_area
	{
		position: relative;
		width: 100%;
		height: auto;
		background-color: #FFF;
		border: 1px solid #CCC;
		border-radius: 3px;
	}

</style>  



<script>  

// $(document).ready  Verifica se il documento (la pagina) � pronta per essere manipolata in modo sicuro. Fino a che non � verificata questa 
// condizione non si inizia a leggere la parte di javascript. 
$(document).ready(function(){

	fetch_user();



	// setInterval utilizza le funzioni che sono definite sotto di lei
	setInterval(function(){
		update_last_activity();
		update_chat_history_data();

	}, 2000);

	setInterval(function(){
		var scrollTarget = $("#chat_table");
		var pos = scrollTarget.scrollTop();
	    fetch_user();
        scrollTarget.load('fetch_user.php', function() {
            $('#chat_table').scrollTop(pos);
        });
	}, 1000000);

	function fetch_user()
	{
		$.ajax({
			url:"fetch_user.php",
			method:"POST",
			success:function(data){
				$('#user_details').html(data);
			}
		})
	}

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
		var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="Chat with '+to_user_name+'">';
		modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
		modal_content += fetch_user_chat_history(to_user_id);
		modal_content += '</div>';
		modal_content += '<div class="form-group">';
		modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
		modal_content += '</div><div class="form-group" align="right">';
		modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
		$('#user_model_details').html(modal_content);
	}

	$(document).on('click', '.start_chat', function(){
		var to_user_id = $(this).data('touserid');
		var to_user_name = $(this).data('tousername');
		make_chat_dialog_box(to_user_id, to_user_name);
		$("#user_dialog_"+to_user_id).dialog({
			autoOpen:false,
			width:400
		});
		$('#user_dialog_'+to_user_id).dialog('open');

	});

	$(document).on('click', '.send_chat', function(){
		var to_user_id = $(this).attr('id');
		var chat_message = $('#chat_message_'+to_user_id).val();
		$.ajax({
			url:"insert_chat.php",
			method:"POST",
			data:{to_user_id:to_user_id, chat_message:chat_message},
			success:function(data)
			{
				//$('#chat_message_'+to_user_id).val('');
				var element = $('#chat_message_'+to_user_id).val('');
				
				$('#chat_history_'+to_user_id).html(data);
			}
		})
	});

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

	function update_chat_history_data()
	{
		$('.chat_history').each(function(){
			var to_user_id = $(this).data('touserid');
			fetch_user_chat_history(to_user_id);
		});
	}

	$(document).on('click', '.ui-button-icon', function(){
		$('.user_dialog').dialog('destroy').remove();
	});


});  
</script>