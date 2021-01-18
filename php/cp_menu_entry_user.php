<?php /* //first pass just gets the column names
print "<table> n";
    $result = mysqli_query($conn, $sql_show_user_ticket);
    //return only the first row (we only need field names)
    $row = mysqli_fetch_array($result);;
    print " <tr> n";
        print " <th>Data Apertura Ticket</th> n";
        print " <th>Dispositivo</th> n";
        print " <th>OS</th> n";
        print " <th>Descrizione</th> n";
         // end foreach
        print " </tr> n";
    //second query gets the data
    $data = $con->query($query);
    $data->setFetchMode(PDO::FETCH_ASSOC);
    foreach($data as $row){
    print " <tr> n";
        foreach ($row as $name=>$value){
        print " <td>$value</td> n";
        } // end field loop
        print " </tr> n";
    } // end record loop
    print "</table> n";
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
} // end try */?>



<div class="form-floating" id="ticket_info">
    <form method="post" id="new_ticket">
    <textarea class="form-control" placeholder="Descrivi il tuo problema" id="floatingTextarea2" style="height: 100px; resize:none;"></textarea>
    <button class="btn btn-outline-secondary" type="submit" id="open_ticket">Invia</button>
    </form>
</div>

<div class="row" id="download">
    <h1>Scarica l'applicativo per ricevere supporto</h1>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Windows</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="proposed_file_name">x64</a>
                <a class="btn btn-primary" href="../dummy" download="proposed_file_name">ARM</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Linux</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="proposed_file_name">x64</a>
                <a class="btn btn-primary" href="../dummy" download="proposed_file_name">ARM</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">mac OS</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="proposed_file_name">Intel</a>
                <a class="btn btn-primary" href="../dummy" download="proposed_file_name">M1</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Android</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="proposed_file_name">Download</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">iOS</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="proposed_file_name">Download</a>
            </div>
        </div>
    </div>
</div>