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
								}
						}
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
						$query = "INSERT TO cart "
					}
				} else {
					$_SESSION["cart_item"] = $itemArray;
				}
			break;

		case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
				if($_GET["code"] == $k)
					unset($_SESSION["cart_item"][$k]);				
				if(empty($_SESSION["cart_item"]))
					unset($_SESSION["cart_item"]);
			}	
		}
		break;

		case "empty":
			unset($_SESSION["cart_item"]);
			break;
	}
}
?>