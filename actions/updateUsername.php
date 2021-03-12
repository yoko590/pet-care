<?php

require_once "../classes/user.php";

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$user = new User;

if($password == $confirm_password){
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->updateUsername($user_id,$username,$password);
}else{
    echo "<p class='text-danger'>Password and Confirm Password do not match.</p>";
}