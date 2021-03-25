<?php
include_once "../classes/product.php";

$product = new Product;
$cart_id = $_GET['cart_id'];
$product->deleteProduct($cart_id);