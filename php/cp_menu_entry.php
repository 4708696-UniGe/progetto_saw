<?php if (!isset($_SESSION)) {
session_start();
} ?>


<?php if (!isset($_SESSION["TICKET_DESC"]) && !isset($_SESSION["CUSTOMER_EMAIL"])) { echo ('
        <div id="ticket_box">
        <div id="search_user">
        <h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
			</div>
        </div>
        </div>'); echo $_SESSION["TICKET_DESC"]; }

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