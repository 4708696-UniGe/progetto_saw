<?php
session_start();
echo "<script>var flag_item= 0</script>";
include ("../database/database_cart.php");
?>
<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> System Hospital - Carrello </title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/cart.css">
		<link rel="icon" href="../images/icon.png">
	</head>
	
	<nav> <?php include 'navbar.php'; ?></nav>
	
	<div id="shopping-cart">
		<p id="flag_cart" class="alert alert-danger devisible" role="alert"></p>
		<a id="btnEmpty" href="cart.php?action=empty">Svuota il carrello</a>
	<?php
		if(isset($_SESSION["cart_item"])){
			$total_price = 0;
	?>

	
	<body>
	<table class="table">
	<thead>
		<tr>
			<th scope = "col">Nome</th>
			<th scope = "col">Codice</th>
			<th scope = "col">Prezzo</th>
			<th scope = "col" style="text-align:center;">Rimuovi</th>
		</tr>
	</thead>
	<tbody>
		<?php		
			foreach ($_SESSION["cart_item"] as $item){
				$item_price =$item["price"];
				?>
						<tr>
							<td><?php echo $item["name"]; ?></td>
							<td><?php echo $item["code"]; ?></td>
							<?php if($item["code"] == "bronze2" || $item["code"] == "silver2" || $item["code"] == "gold2"){
								echo "<td>&euro;".number_format($item_price,2)." / MESE</td>";
							} else if ($item["code"] == "bronze1" || $item["code"] == "silver1" || $item["code"] == "gold1"){
								echo "<td>&euro;".number_format($item_price,2)."</td>";
							}
							?>
							<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="../images/icon-delete.png" alt="Rimuovi Oggetto" /></a></td>
						</tr>
						<?php
						$total_price += ($item["price"]);
				}
				?>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td style="text-align:center;">Total: <strong><?php echo "&euro; ".number_format($total_price, 2); ?></strong></td>
		</tr>
	</tbody>
	</table>		
	  <?php
	} else {
	?>
	<div class="empty_cart">
		<div class="no-records">Il carrello &egrave; vuoto.</div>
		<a id="btnbuy" class="w-80 btn btn-lg btn-primary" href="products.php" role="button">Acquista prodotti</a>
	</div>
	<?php 
	}
	?>
	</div>
	</div>
	<script src="../bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
	<script> 
			window.onload = flag_cart();
			function flag_cart() {
				if(flag_item == 1) {
				document.getElementById("flag_cart").className = "alert alert-danger box";
				document.getElementById("flag_cart").innerHTML = "Prodotto gi&agrave; presente nel carrello.";
				}
			}
	</script>
	</body>
</html>