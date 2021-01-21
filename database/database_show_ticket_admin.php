<?php

include 'database_connect.php';

if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql_ticket) === TRUE) {
}else {
    echo "Error creating table: " . mysqli_error($conn) . '\n';
}

$sql_show_ticket = "SELECT * FROM ticket ORDER BY opening_date";
$res = mysqli_query($conn, $sql_show_ticket);
if ($res === TRUE) {
}else {
    echo "Non sono presenti ticket aperti";
}

$GLOBALS['customer_ticket']= mysqli_fetch_all($res,MYSQLI_ASSOC);


/* if(isset($_POST['search_text'])) {
    $customer_name = mysqli_real_escape_string($conn, $_POST['search_text']);
    $sql="SELECT description FROM ticket WHERE email LIKE '.$customer_name.'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) == 0) {
        echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($conn);
    }
    else{
        $rows = mysqli_fetch_array($res);
        $_SESSION["TICKET_DESC"]=$rows[0];
        $_SESSION["CUSTOMER_EMAIL"]=$customer_name;
    }
} */
$_SESSION["TICKET_DESC"]='test';
echo $_SESSION["TICKET_DESC"];

?>