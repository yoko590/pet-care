<?php

require_once "../classes/user.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$inquiry = $_POST['inquiry'];

$user = new User;
$user->createInquiry($first_name,$last_name,$email,$inquiry);