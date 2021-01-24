<?php
include '../database/database_connect.php';

    // in $_POST["id"] è presente l'id del relativo utente da cancellare
    if(isset($_POST["id"]))
    {
        $query = "
        DELETE FROM users
        WHERE id = ".$_POST['id']."
        ";

        $result = mysqli_query($conn, $query);
        if(mysqli_affected_rows($conn) == 0) {
            echo "Attenzione c'è stato un problema nell'operazione ".mysqli_error($conn);
        } else {
            header("Location: ../php/control_panel.php");
            exit();
        }
    }

?>