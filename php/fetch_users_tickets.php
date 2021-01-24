<?php
include '../database/database_connect.php';

    $output = '';

    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);

        $query = "
        SELECT * FROM ticket
        WHERE firstname LIKE '%".$search."%' OR lastname LIKE '%".$search."%' 
        ";


    }
    else
    {
        $query = "
            SELECT * FROM ticket";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '<div class="table-responsive">
                        <table class="table table bordered">
                            <tr>
                                <th>Nome</th>
                                <th>Cognome</th>
                                <th>Email</th>
                                <th>Data Apertura Ticket</th>
                                <th>Dispositivo</th>
                                <th>OS</th>
                                <th>Descrizione</th>
                                <th>Chat</th>
                            </tr>';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
                <tr>
                    <td>'.$row["firstname"].'</td>
                    <td>'.$row["lastname"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["opening_date"].'</td>
                    <td>'.$row["device"].'</td>
                    <td>'.$row["os"].'</td>
                    <td>'.$row["description"].'</td>
                    <td><a type="button"  href="../chat/index.php" class="btn btn-primary open_chat">Contatta</a></td>
                </tr>
            ';
        }
        echo $output;
    }
    else
    {
        echo 'Nessuna Corrispondenza trovata';
    }



?>