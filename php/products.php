<!DOCTYPE html>
<html lang="it-IT">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> System Hospital - Prodotti </title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<link rel="icon" href="../images/icon.png">
	<link rel="stylesheet" href="../css/products.css">
	<link rel="stylesheet" href="../css/scrollbar.css">
	
	
	</head>

	<body>
	
	    <nav> <?php include 'navbar.php'; ?></nav>

	    
	    
	    <?php /* Desktop view*/ ?>
	    
        <div class="container">
          <div class="price-title-desktop">
          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4" id="product-list-category">Pacchetti Singoli</h1>
            <p class="lead" id="product-list-description">Non hai necessità di un servizio continuativo? Acquista uno dei nostri pacchetti ad uso singolo</p>
          </div>
          </div>

          <div class="price">        
              <div class="row row-cols-2 row-cols-md-5 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Bronze</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">15€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- Assistenza telefonica</li>
                      <li>- Spazio cloud riservato da 5GB</li>
                    </ul>
                    <a  class="w-100 btn btn-lg btn-primary" href="cart.php?action=add&code=bronze1" role="button">Acquista</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Silver</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">35€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- Assistenza con accesso remoto per 1 dispositivo contemporaneamente</li>
                      <li>- Spazio cloud riservato da 20GB</li>
                    </ul>
                    <a  class="w-100 btn btn-lg btn-primary" href="cart.php?action=add&code=silver1" role="button">Acquista</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Gold</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">80€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- Assistenza con accesso remoto per 3 dispositivi contemporaneamente</li>
                      <li>- Spazio cloud riservato da 50GB</li>
                      <li>- Servizio "Computer di cortesia" con accesso da remoto</li>
                    </ul>
                    <a  class="w-100 btn btn-lg btn-primary" href="cart.php?action=add&code=gold1" role="button">Acquista</a>
                  </div>
                </div>
                </div>
              </div>
          </div>
          <div class="price-title-desktop">
          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4" id="product-list-category">Abbonamenti</h1>
            <p class="lead" id="product-list-description">Cerchi un servizio su lunga durata? I nostri abbonamenti sono la scelta migliore</p>
          </div>
          </div>

          <div class="price">        
              <div class="row row-cols-2 row-cols-md-5 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Bronze</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">5€ <small class="text-muted">/ mese</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- Assistenza telefonica</li>
                      <li>- Spazio cloud riservato da 5GB</li>
                    </ul>
                    <a  class="w-100 btn btn-lg btn-primary" href="cart.php?action=add&code=bronze2" role="button">Acquista</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Silver</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">20€ <small class="text-muted">/ mese</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- Assistenza con accesso remoto per un dispositivo contemporaneamente</li>
                      <li>- Spazio cloud riservato da 20GB</li>
                    </ul>
                    <a  class="w-100 btn btn-lg btn-primary" href="cart.php?action=add&code=silver2" role="button">Acquista</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Gold</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">60€ <small class="text-muted">/ mese</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- Assistenza con accesso remoto per un dispositivo contemporaneamente</li>
                      <li>- Spazio cloud riservato da 50 GB</li>
                      <li>- Servizio "Computer di cortesia" con accesso da remoto</li>
                    </ul>
                     <a  class="w-100 btn btn-lg btn-primary" href="cart.php?action=add&code=gold2" role="button">Acquista</a>
                  </div>
                </div>
                </div>
              </div>
          </div>
          
          <?php /* Mobile view*/ ?>
          
          <div class="price-title-mobile">
          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Pacchetti Singoli</h1>
            <p class="lead">Non hai necessità di un servizio continuativo? Acquista uno dei nostri pacchetti ad uso singolo</p>
          </div>
          </div>
             
          <div class="mobile-price">
              <div class="row row-cols-1 row-cols-sm-5 text-center mob">
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Bronze</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">15€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- 1 Dispositivo</li>
                      <li>- Assistenza telefonica</li>
                    </ul>
                    <a class="w-80 btn btn-lg btn-primary" href="cart.php?action=add&code=bronze1" role="button">Acquista</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Silver</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">35€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- 2 Dispositivi</li>
                      <li>- Assistenza con accesso remoto per 1 dispositivo contemporaneamente</li>
                      <li>- Spazio cloud riservato da 5GB</li>
                    </ul>
                     <a class="w-80 btn btn-lg btn-primary" href="cart.php?action=add&code=silver1" role="button">Acquista</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Gold</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">80€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- 5 Dispositivi</li>
                      <li>- Assistenza con accesso remoto per 3 dispositivi contemporaneamente</li>
                      <li>- Spazio cloud riservato da 50GB</li>
                      <li>- Servizio "Computer di cortesia" con accesso da remoto</li>
                    </ul>
                     <a class="w-80 btn btn-lg btn-primary" href="cart.php?action=add&code=gold1" role="button">Acquista</a>
                  </div>
                </div>
                </div>
              </div>
          </>
          
          <div class="price-title-mobile">
          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Abbonamenti</h1>
            <p class="lead">Cerchi un servizio su lunga durata? I nostri abbonamenti sono la scelta migliore</p>
          </div>
          </div>
          
          <div class="mobile-price">
              <div class="row row-cols-1 row-cols-sm-5 text-center mob">
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Bronze</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">5€ <small class="text-muted">/ mese</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- 1 Dispositivo per ticket</li>
                      <li>- Assistenza telefonica</li>
                    </ul>
                     <a class="w-80 btn btn-lg btn-primary" href="cart.php?action=add&code=bronze2" role="button">Acquista</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Silver</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">20€ <small class="text-muted">/ mese</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- 2 Dispositivi per ticket</li>
                      <li>- Assistenza con accesso remoto per un dispositivo contemporaneamente</li>
                      <li>- Spazio cloud riservato da 5GB</li>
                    </ul>
                     <a class="w-80 btn btn-lg btn-primary" href="cart.php?action=add&code=silver2" role="button">Acquista</a>
                  </div>
                </div>
                </div>
                <div class="col">
                  <div class="card mb-4 shadow-sm">
                  <div class="card-header">
                    <h4 class="my-0 fw-normal">Gold</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">60€ <small class="text-muted">/ mese</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>- 5 Dispositivi per ticket</li>
                      <li>- Assistenza con accesso remoto per un dispositivo contemporaneamente</li>
                      <li>- Spazio cloud riservato da 50 GB</li>
                      <li>- Servizio "Computer di cortesia" con accesso da remoto</li>
                    </ul>
                     <a class="w-80 btn btn-lg btn-primary" href="cart.php?action=add&code=gold2" role="button">Acquista</a>
                  </div>
                </div>
                </div>
              </div>
	
	    <script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
	    
	</body>
	 <footer> <?php include 'footer.php'; ?> </footer>

</html>