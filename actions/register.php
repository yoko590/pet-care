<?php
require_once "../classes/user.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$contact_num = $_POST['contact_num'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$user = new User;

if($password == $confirm_password){
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->createUser($first_name,$last_name,$address,$email,$contact_num,$username,$password);
}else{
    echo "<p class='text-danger'>Password and Confirm Password do not match.</p>";
}

