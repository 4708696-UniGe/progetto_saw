<?php
include '../database/database_connect.php';

    $output = '';

    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);

        $query = "
        SELECT * FROM users
        WHERE firstname LIKE '%".$search."%' OR lastname LIKE '%".$search."%' 
        ";


    }
    else
    {
        $query = "
            SELECT * FROM users WHERE admin = 0";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '<form method="POST" action="../database/delete_user.php">
                    <div class="table-responsive">
                        <table class="table table bordered">
                            <tr>
                                <th>Nome</th>
                                <th>Cognome</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Nome Azienda</th>
                                <th>Sistema Operativo usato sulla Workstation</th>
                                <th>Sistema Operativo usato sul dispositivo Mobile</th>
                                <th>Info</th>
                                <th>Abbonamento Attivo</th>
                                <th></th>
                            </tr>';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
                <tr>
                    <td>'.$row["firstname"].'</td>
                    <td>'.$row["lastname"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["phone"].'</td>
                    <td>'.$row["company_name"].'</td>
                    <td>'.$row["workstation_os"].'</td>
                    <td>'.$row["mobile_os"].'</td>
                    <td>'.$row["about"].'</td>
                    <td>'.$row["subscription"].'</td>
                    <td><button type="submit" class="btn btn-primary delete" name="id" value="'.$row["id"].'">Elimina Utente</button></td>
                </tr>
                </form>
            ';
        }
        echo $output;
    }
    else
    {
        echo 'Nessuna Corrispondenza trovata';
    }
?>