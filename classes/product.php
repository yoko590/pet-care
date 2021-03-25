<?php
require "database.php";

class Product extends Database{

    public function getDogFood(){
        $sql = "SELECT * FROM products WHERE id IN (1,2,3)";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving Dog Food" . $this->conn->error);
        }
    }

    public function getCatFood(){
        $sql = "SELECT * FROM products WHERE id IN (7,8)";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving Dog Food" . $this->conn->error);
        }
    }

    public function getDogToy(){
        $sql = "SELECT * FROM products WHERE id IN (4,5,6)";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving Dog Food" . $this->conn->error);
        }
    }

    public function addCart($product_id,$product_num,$customer_id){
        $sql = "INSERT INTO carts(product_id,product_number,customer_id) VALUES($product_id,$product_num,$customer_id)";

        if($this->conn->query($sql)){
            header("location: ../views/insideCart.php");
            exit;
        }else{
            die("Error adding Cart" . $this->conn->error);
        }
    }

    public function insideCart($user_id){
        $sql = "SELECT * 
                FROM products 
                INNER JOIN carts
                ON products.id = carts.product_id
                WHERE customer_id = $user_id";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving Cart's details" . $this->conn->error);
        }
    }

    public function getCustomer($user_id){
        $sql = "SELECT * 
                FROM customers
                INNER JOIN carts
                ON customers.id = carts.customer_id
                WHERE customer_id = $user_id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error retrieving User details" . $this->conn->error);
        }
    }

    public function addedCart($user_id){
        $sql = "SELECT *
                FROM carts
                WHERE customer_id = $user_id";
  
        if($result = $this->conn->query($sql)){
           if($result->num_rows > 0){
              return true;
           }else{
              return false;
           }
        }else{
            die("Error retrieving cart" . $this->conn->error);
        }
    }

    public function deleteProduct($cart_id){
        $sql = "DELETE FROM carts WHERE id = $cart_id";

        if($this->conn->query($sql)){
            header("location: ../views/insideCart.php");
            exit;
        }else{
            die("Error deleting cart's items" . $this->conn->error);
        }
    }
}