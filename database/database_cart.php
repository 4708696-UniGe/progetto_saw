<?php

include '../database/database_connect.php';
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}

if (mysqli_query($conn, $sql_cart) === TRUE) {
}else {
    echo "Error creating table: " . mysqli_error($conn) . '\n';
}

if(!empty($_GET["action"])) {
    switch($_GET["action"]) {

        case "add": // Aggiunge prodotto al carrello
            if ($_GET["code"] == 'bronze1' || $_GET["code"] == 'silver1' || $_GET["code"] == 'gold1' || $_GET["code"] == 'bronze2' || $_GET["code"] == 'silver2' || $_GET["code"] == 'gold2')
            {
                $result = mysqli_query($conn, "SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
                while ($row = mysqli_fetch_assoc($result)) {
                    $productByCode[] = $row;
                }
                $itemArray = array($productByCode[0]["code"] => array('name' => $productByCode[0]["name"], 'code' => $productByCode[0]["code"], 'price' => $productByCode[0]["price"]));

                if (!empty($_SESSION["cart_item"])) {
                    // Controlla se nell'array SESSION["cart_item"] esiste la chiave (quindi il prodotto) denotata da $productByCode[0]["code"]
                    if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                        // Scorre tutti i prodotti nel carrello
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            // Se nel carrello e' presente il prodotto che voglio aggiungere, "fallisce"
                            if ($productByCode[0]["code"] == $k) {
                                echo "<script>var flag_item = 1</script>";
                                break;
                            }
                        }
                        // Se il prodotto che voglio aggiungere non e' presente nel carrello, ma il carrello
                        // non e' vuoto, allora "fallise" lo stesso (perche' il carrello puo' contenere solo un prodotto)
                    } else {
                        echo "<script>var flag_item = 2</script>";
                    }
                    // Se il carrello e' vuoto, il prodotto puo' essere aggiunto al carrello
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                    $query = "INSERT INTO cart (email, product_code) VALUES ('{$_SESSION["EMAIL"]}','{$_GET["code"]}');";
                    mysqli_query($conn, $query);
                    if (mysqli_affected_rows($conn) != 1) {
                        echo "Attenzione c'e' stato un problema nell'inserimento, controlla i dati. " . mysqli_error($conn);
                    }
                }
                break;
            } else {
                header("Location: ../php/cart.php");
                exit();
            }

        case "remove": // Rimuove un prodotto dal cartello
            if ($_GET["code"] == 'bronze1' || $_GET["code"] == 'silver1' || $_GET["code"] == 'gold1' || $_GET["code"] == 'bronze2' || $_GET["code"] == 'silver2' || $_GET["code"] == 'gold2') {
                if (!empty($_SESSION["cart_item"])) {
                    // Cerca il prodotto passato in GET nel carrello
                    foreach ($_SESSION["cart_item"] as $k => $v) {
                        // Se lo trova lo cancella
                        if ($_GET["code"] == $k) {
                            $query = "DELETE FROM cart WHERE email = '{$_SESSION["EMAIL"]}' AND product_code = '{$_SESSION["cart_item"][$k]["code"]}'";
                            mysqli_query($conn, $query);
                            if (mysqli_affected_rows($conn) != 1) {
                                echo "Attenzione c'e' stato un problema nell'inserimento, controlla i dati. " . mysqli_error($conn);
                            }
                            unset($_SESSION["cart_item"][$k]);
                        }
                        // Se, dopo la cancellazione del prodotto nel carrello, il carrello risulta vuoto, viene deallocato
                        if (empty($_SESSION["cart_item"]))
                            unset($_SESSION["cart_item"]);
                    }
                }
                break;
            } else {
                header("Location: ../php/cart.php");
                exit();
            }

        case "empty": // Svuota il carrello
            if(!empty($_SESSION["cart_item"])) {
                $query = "DELETE FROM cart WHERE email = '{$_SESSION["EMAIL"]}'";
                mysqli_query($conn, $query);
                if (mysqli_affected_rows($conn) == 0) {
                    echo "Attenzione c'e' stato un problema nell'inserimento, controlla i dati. " . mysqli_error($conn);
                }
                unset($_SESSION["cart_item"]);
                break;
            }else{}
    }
}

// Seleziona tutti i prodotti (nel nostro caso 1) legati al proprio account
$query = "SELECT product_code FROM cart WHERE email = '{$_SESSION["EMAIL"]}'";
$result = mysqli_query($conn, $query);
// Salvo i risultati in un array
$array = mysqli_fetch_all($result);
// Se la query va a buon fine
if (mysqli_affected_rows($conn) != 0) {
    $i=0;
    // Scorro tutti i prodotti con $value[0] (chiave = codice dei prodotti)
    foreach($array as $value){
        // Seleziono tutti i dati (nome, codice, prezzo) relativi al prodotto con codice $value[0]
        $qry = "SELECT * FROM products WHERE code = '".$value[0]."'";
        $result2 = mysqli_query($conn, $qry);
        // Se la query va a buon fine, salvo tutto nella sessione
        if(mysqli_affected_rows($conn) != 1){
            echo "problema";
        }else{
            while($row = mysqli_fetch_assoc($result2)){
                $product[] = $row;
            }
            $itemArray2 = array($product[$i]["code"]=>array('name'=>$product[$i]["name"], 'code'=>$product[$i]["code"],  'price'=>$product[$i]["price"]));
            // Se il carrello e' vuoto, aggiunge il prodotto
            if(empty($_SESSION["cart_item"])) {
                $_SESSION["cart_item"] = $itemArray2;
            }
            // Se il carrello non e' vuoto, aggiunge il prodotto tenendo conto del carrello prima dell'aggiunta del prodotto
            else if (!empty($_SESSION["cart_item"])) {
                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray2);
            }
        }
        $i++;
        // $i indice per scorrere i prodotti in $product
    }
}

?>