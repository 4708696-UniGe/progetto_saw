<?php

//insert_chat.php

include('database_chat.php');

session_start();

$data = array(
	':to_user_id'		=>	$_POST['to_user_id'],
	':from_user_id'		=>	$_SESSION['ID_USER'],
	':chat_message'		=>	$_POST['chat_message'],
	':status'			=>	'1'
);

// status=1 messaggio non letto   status=0 messaggio letto

$query = "
INSERT INTO chat_message 
(to_user_id, from_user_id, chat_message, status) 
VALUES (:to_user_id, :from_user_id, :chat_message, :status)
";

$statement = $conn->prepare($query);
if($statement->execute($data))
{
	echo fetch_user_chat_history($_SESSION['ID_USER'], $_POST['to_user_id'], $conn);
	//fetch_user_chat_history in database_chat.php
}

?>