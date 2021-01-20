<?php


$con = mysqli_connect("localhost","root","","test");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }

 if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
		case "add":
		
			$result = mysqli_query($con, "SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
			while($row = mysqli_fetch_assoc($result)){
				$productByCode[] = $row;
			}
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"],  'price'=>$productByCode[0]["price"]));
				
				

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["code"] == $k) {
							echo "<script>var flag_item= 1</script>";
							break;
						}
					}
				}else{
					echo "<script>var flag_item = 2</script>";
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
				$query = "INSERT INTO cart (email, product_code) VALUES ('{$_SESSION["EMAIL"]}','{$_GET["code"]}');";
				mysqli_query($con, $query);
				if (mysqli_affected_rows($con) != 1) {
					echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($con);
				}
			}
			break;

		case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
				if($_GET["code"] == $k){
					$query = "DELETE FROM cart WHERE email = '{$_SESSION["EMAIL"]}' AND product_code = '{$_SESSION["cart_item"][$k]["code"]}'";
					mysqli_query($con, $query);
					if (mysqli_affected_rows($con) != 1) {
						echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($con);
					}
					unset($_SESSION["cart_item"][$k]);
				}
				if(empty($_SESSION["cart_item"]))
					unset($_SESSION["cart_item"]);
			}	
		}
		break;

		case "empty":
			$query = "DELETE FROM cart WHERE email = '{$_SESSION["EMAIL"]}'";
			mysqli_query($con, $query);
			if (mysqli_affected_rows($con) == 0) {
				echo "Attenzione c'è stato un problema nell'inserimento, controlla i dati. ".mysqli_error($con);
			}
			unset($_SESSION["cart_item"]);
			break;
	}
}

$query = "SELECT product_code FROM cart WHERE email = '{$_SESSION["EMAIL"]}'";
	$result = mysqli_query($con, $query);
	$array = mysqli_fetch_all($result);
	if (mysqli_affected_rows($con) != 0) {
		$i=0;
		foreach($array as $value){
			$qry = "SELECT * FROM products WHERE code = '".$value[0]."'";
			$result2 = mysqli_query($con, $qry);
			if(mysqli_affected_rows($con) != 1){
				echo "problema";
			}else{
				while($row = mysqli_fetch_assoc($result2)){
					$product[] = $row;
				}
				$itemArray2 = array($product[$i]["code"]=>array('name'=>$product[$i]["name"], 'code'=>$product[$i]["code"],  'price'=>$product[$i]["price"]));
				if(empty($_SESSION["cart_item"])) {
					$_SESSION["cart_item"] = $itemArray2;
				}
				else if (!empty($_SESSION["cart_item"])) {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray2);
				}
			}
			$i++;
	}
}

?>