<?php
session_start();
require_once "../classes/product.php";

$product_id = $_POST['products'];
$product_num = $_POST['product_num'];
$customer_id = $_SESSION['user_id'];

$product = new Product;

if(!$_SESSION['user_id']){
    header("location: ../views/register.php");
    exit;
}else{
    $product->addCart($product_id,$product_num,$customer_id);
}
