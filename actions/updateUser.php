<?php

require_once "../classes/user.php";

$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$contact_num = $_POST['contact_num'];

$user = new User;
$user->updateUser($user_id,$first_name,$last_name,$address,$email,$contact_num);