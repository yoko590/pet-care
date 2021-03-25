<?php
session_start();
require_once "../classes/hotel.php";

$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$room_type = $_POST['room_type'];
$pet_name = $_POST['pet_name'];
$pet_gender = $_POST['pet_gender'];
$pet_num = $_POST['pet_num'];
$customer_id = $_SESSION['user_id'];
$service = $_POST['service'];

$hotel = new Hotel;

if(!$_SESSION['user_id']){
    header("location: ../views/register.php");
    exit;
}else{
    $hotel->reserveHotel($check_in,$check_out,$room_type,$pet_name,$pet_gender,$pet_num,$customer_id,$service);
}

