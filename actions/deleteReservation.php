<?php
include_once "../classes/hotel.php";

$hotel = new Hotel;
$reservation_id = $_GET['reservation_id'];
$hotel->deleteReservation($reservation_id);