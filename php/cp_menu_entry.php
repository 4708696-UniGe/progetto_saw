<?php if (!isset($_SESSION)) {
session_start();
} ?>


<?php if (!isset($_SESSION["TICKET_DESC"]) && !isset($_SESSION["CUSTOMER_EMAIL"])) { echo ('
        <div id="ticket_box">
        <form method="post" id="search_user">
        <div class="input-group mb-3">
            <input type="email" name="email" id="user_email" class="form-control" placeholder="Inserire email utente" aria-label="Recipient username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cerca</button>
        </div>
        </form>
        </div> '); echo $_SESSION["TICKET_DESC"]; }

else { echo('
        <div id="ticket_box">
        <form id="search_user">
        <div class="input-group mb-3">
            <input type="email" name="email" id="user_email" readonly class="form-control" placeholder="'.$_SESSION["CUSTOMER_EMAIL"].'" aria-label="Recipient username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-search">Cerca</button>
        </div>
        </form> 
        
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea readonly class="form-control-plaintext" id="issue_description" rows="3">'.$_SESSION["TICKET_DESC"].'</textarea>
        </div>
    </div> '); } ?>




<div class="row" id="download">
    <h1>Scarica l'applicativo per fornire supporto</h1>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Windows</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="dummy">x64</a>
                <a class="btn btn-primary" href="../dummy" download="dummy">ARM</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Linux</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="dummy">x64</a>
                <a class="btn btn-primary" href="../dummy" download="dummy">ARM</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">mac OS</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="dummy">Intel</a>
                <a class="btn btn-primary" href="../dummy" download="dummy">M1</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Android</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="dummy">Download</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">iOS</h5>
                <p class="card-text">Selezionare la versione in base al proprio hardware.</p>
                <a class="btn btn-primary" href="../dummy" download="dummy">Download</a>
            </div>
        </div>
    </div>
</div>