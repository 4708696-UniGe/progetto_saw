<?php

include 'database_connect.php';

if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql_ticket) === TRUE) {
}else {
    echo "Error creating table: " . mysqli_error($conn) . '\n';
}

if(isset($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql="SELECT description FROM ticket WHERE email='$email'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) != 1) {
        echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($conn);
    }
    else{
        $rows = mysqli_fetch_array($res);
        $_SESSION["TICKET_DESC"]=$rows[0];
        $_SESSION["CUSTOMER_EMAIL"]=$email;
    }
}
$_SESSION["TICKET_DESC"]='test';

?>