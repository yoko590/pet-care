<?php
require "database.php";

class Hotel extends Database{
    public function getRooms(){
        $sql = "SELECT * FROM rooms";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving rooms" . $this->conn->error);
        }
    }

    public function getServices(){
        $sql = "SELECT * FROM services";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving services" . $this->conn->error);
        }
    }

    public function reserveHotel($check_in,$check_out,$room_type,$pet_name,$pet_gender,$pet_num,$customer_id,$service){
        $sql = "INSERT INTO reservations(check_in,check_out,room_id,pet_name,pet_gender,num_pet,customer_id,service_id) VALUES ('$check_in','$check_out',$room_type,'$pet_name','$pet_gender',$pet_num, $customer_id,$service)";

        if($this->conn->query($sql)){
            header("location: ../views/hotelConfirmation.php");
            exit;
        }else{
            die("Error reserving hotel" . $this->conn->error);
        }
    }

    public function getReservation($user_id){
        $sql = "SELECT *, rooms.price AS r_price, services.price AS s_price
                FROM rooms
                INNER JOIN reservations
                ON rooms.id = reservations.room_id
                INNER JOIN services
                ON services.id = reservations.service_id
                INNER JOIN customers
                ON customers.id = reservations.customer_id
                WHERE customer_id = $user_id";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving reservations" . $this->conn->error);
        }
    }

    public function getCustomer($user_id){
        $sql = "SELECT * 
                FROM customers      
                INNER JOIN reservations
                ON customers.id = reservations.customer_id
                WHERE customer_id = $user_id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error retrieving reservations" . $this->conn->error);
        }
    }

    public function deleteReservation($reservation_id){
        $sql = "DELETE FROM reservations WHERE id = $reservation_id";

        if($this->conn->query($sql)){
            header("location: ../views/home.php");
            exit;
        }else{
            die("Error deleting reservation" . $this->conn->error);
        }
    }

} 