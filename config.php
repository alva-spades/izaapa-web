<?php

$conn = new PDO(
"mysql:host=127.0.0.1;dbname=izaapa", 'root', '',
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

//
// $result = $conn->query('SELECT * FROM ostore_products');
// $products = $result->fetchAll(PDO::FETCH_OBJ);
// foreach ($products as $prod) {
//
if($conn = true) {
    print("success");
} else { 
    print( " an err occurred");
}
?>