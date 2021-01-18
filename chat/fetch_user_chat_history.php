<?php

//fetch_user_chat_history.php

include('database_chat.php');

session_start();

echo fetch_user_chat_history($_SESSION['ID_USER'], $_POST['to_user_id'], $conn);

?>