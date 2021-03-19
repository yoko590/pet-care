<?php
require "database.php";

class User extends Database{

     public function createUser($first_name,$last_name,$address,$email,$contact_num,$username,$password){
         $sql1 = "INSERT INTO accounts(username,`password`) VALUES ('$username','$password')";

         if($this->conn->query($sql1)){
             $sql2 = "INSERT INTO customers(first_name,last_name,`address`,email,contact_number,account_id) VALUES ('$first_name','$last_name','$address','$email','$contact_num',". $this->conn->insert_id . ")";
                if($this->conn->query($sql2)){
                   header("location: index.php");
                   exit;
                }else{
                   die("Error creating user: " . $this->conn->error);
                }
         }else{
             die("Error creating user: " . $this->conn->error);
         }
     }

     public function login($username,$password){
         $error = "The username or password you entered is incorrect.";
         $sql = "SELECT * FROM accounts WHERE username = '$username'";

         $result = $this->conn->query($sql);
         if($result->num_rows == 1){
            $user_details = $result->fetch_assoc();
            if(password_verify($password, $user_details['password'])){
                session_start();

                $_SESSION['user_id'] = $user_details['id'];
                $_SESSION['username'] = $user_details['username'];

                header("location: ../views/home.php");
                exit;
            }else{
                echo $error;
            }
         }else{
            echo $error;
         }
     }

     public function getUser($user_id){
         $sql = "SELECT id, first_name,last_name,`address`,email,contact_number FROM customers WHERE account_id = $user_id";

         if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
         }else{
            die("Error retrieving user: " . $this->conn->error);
         }
     }

     public function getUsername($user_id){
        $sql = "SELECT id, username FROM accounts WHERE id = $user_id";

        if($result = $this->conn->query($sql)){
           return $result->fetch_assoc();
        }else{
           die("Error retrieving user: " . $this->conn->error);
        }
     }

     public function updateUser($user_id,$first_name,$last_name,$address,$email,$contact_num){
        $sql ="UPDATE customers SET first_name = '$first_name', last_name = '$last_name', `address` = '$address', email = '$email', contact_number = '$contact_num' WHERE account_id = $user_id";

        if($this->conn->query($sql)){
            header("location: ../views/profile.php");
            exit;
        }else{
            die("Eroor updating user: " . $this->conn->error);
        }
     }

     public function updateUsername($user_id,$username,$password){
         $sql = "UPDATE accounts SET username = '$username', `password` = '$password' WHERE id = $user_id";

         if($this->conn->query($sql)){
            header("location: ../views/index.php");
            exit;
         }else{
            die("Eroor updating user: " . $this->conn->error);
         }
     }




}


