<?php

//fetch_user.php

include('database_chat.php');
session_start();


if( $_SESSION["USER_TYPE"] == 1 ){

	$query = "
	SELECT * FROM users
	WHERE email != '".$_SESSION['EMAIL']."' AND admin != 1
	";

} else if ($_SESSION["USER_TYPE"] == 0){
	
	$query = "
	SELECT * FROM users
	WHERE email != '".$_SESSION['EMAIL']."' AND admin != 0
	";  

}

$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

/*
	$query = "
	SELECT * FROM users
	WHERE id != '".$_SESSION['ID_USER']."' 
	";
	*/





$output = '
<div id="chat_table" class="chat_table">
<table class="table">
    <thead class="thead-dark">
	<tr>
		<th width="70%">Utente</th>
		<th width="20%">Stato</th>
		<th width="10%">Contatta</th>
	</tr>
	</thead>
';

foreach($result as $row)
{
	$status = '';
	$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 20 second'); // Formato data: 2001-03-10 17:16:18
	$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
	$user_last_activity = fetch_user_last_activity($row['id'], $conn);
	if($user_last_activity > $current_timestamp)
	{
		$status = '<span class="label label-success">Online</span>';
	}
	else
	{
		$status = '<span class="label label-danger">Offline</span>';
	}
	$output .= '
	<tr>
		<td>'.$row['email'].' '.count_unseen_message($row['id'], $_SESSION['ID_USER'], $conn).' </td>
		<td>'.$status.'</td>
		<td><button type="button" class="btn btn-outline-success btn-sm start_chat" data-touserid="'.$row['id'].'" data-tousername="'.$row['email'].'">Chat</button></td>
	</tr>
	';
}
$output .= '</table> </div>';

echo $output;

?>