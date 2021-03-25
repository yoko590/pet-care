
<?php include "menu.php";?>
<link rel="stylesheet" href="../assets/css/hotelConfirmation.css">

<?php
require_once "../classes/hotel.php";

$hotel = new Hotel;

$reservation_details = $hotel->getReservation($_SESSION['user_id']);
$customer_details = $hotel->getCustomer($_SESSION['user_id']);

// Calculation area
   //   DATE
//    function nightsCalc($start_date,$end_date){
//        // Declare two dates
        // $start_date = strtotime($start_date);
        // $end_date = strtotime($end_date);

//         // Get the difference and divide into 
//         // total no. seconds 60/60/24 to get 
//         // number of days
        // $nights = ($end_date - $start_date)/60/60/24;
//         echo $nights;
//    }
 
?>

<body>
    <section id="showcase">
        <h3 class="w-50 mx-auto text-center text-white">Hotel Confirmation Page</h3>
    </section>

    <section class="w-50 mx-auto" id="reservation_detail">
        <h4 class="text-center my-5">- Reservation Confirmation -</h4>
  
        <?php
            while($reservation = $reservation_details->fetch_assoc()){
                $start_date = strtotime($reservation['check_in']);
                $end_date = strtotime($reservation['check_out']);

                $nights = ($end_date - $start_date)/60/60/24;
                $r_price_total = $nights * $reservation['r_price'];
                $total_amount = $r_price_total + $reservation['s_price'];
        ?>
            <table class="table table-bordered">
                <tbody>
                    <tr class="font-weight-bold bg-dark text-white">
                        <td>Check In Date</td>
                        <td>Check Out Date</td>
                    </tr>

                    <tr>
                        <td><?=$reservation['check_in']?></td>
                        <td><?=$reservation['check_out']?></td>
                    </tr>

                    <tr colspan="2">
                        <td><span class="font-weight-bold mr-3"> Nights : </span>
                        <?= $nights?></td>
                    </tr>

                    <tr>
                        <td><span class="font-weight-bold mr-3"> Room Type : </span><?=$reservation['type']?></td>
                        <td class="font-weight-bold"><span class="mr-3"> Price : </span> <span style="font-size:25px;"> $<?=$r_price_total?></span></td>
                    </tr>

                    <tr class="bg-light">
                        <td colspan="2"><h5 class="font-italic">- Pet Information -</h5></td> 
                    </tr>

                    <tr>
                        <td><span class="font-weight-bold mr-3"> Name : </span><?=$reservation['pet_name']?></td>
                    </tr>

                    <tr>
                        <td><span class="font-weight-bold mr-3"> Gender : </span><?=$reservation['pet_gender']?></td>
                        <td><span class="font-weight-bold mr-3"> Number of Pet : </span><?=$reservation['num_pet']?></td>
                    </tr>

                    <tr class="bg-light">
                        <td colspan="2"><h5 class="font-italic">- Additional Options -</h5></td> 
                    </tr>

                    <tr>
                        <td><span class="font-weight-bold mr-3"> Service : </span><?=$reservation['name']?></td>
                        <td class="font-weight-bold"><span class="mr-3"> Price : </span> <span style="font-size:25px;">$<?=$reservation['s_price']?></span></td>
                    </tr> 

                    <tr>
                        <td colspan="2" class="text-center font-weight-bold bg-light">
                            <span class="mr-3" style="font-size:20px;">Total Price : </span> <span style="font-size:28px;">$<?=$total_amount ?></span>
                            <a href="../actions/deleteReservation.php?reservation_id=<?=$customer_details['id']?>" class="btn btn-outline-danger ml-5">Cancel Reservation</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        <?php
            }
        ?>
        
    </section>

    <section class="w-50 mx-auto mt-5" id="customer_detail">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="h4 text-center bg-dark text-white">- Your Information -</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="font-weight-bold">Full Name :</td>
                    <td><?=$customer_details['first_name'] . " " . $customer_details['last_name'] ?></td>
                </tr>

                <tr>
                    <td class="font-weight-bold">Address :</td>
                    <td><?=$customer_details['address']?></td>
                </tr>

                <tr>
                    <td class="font-weight-bold">Email :</td>
                    <td><?=$customer_details['email']?></td>
                </tr>

                <tr>
                    <td class="font-weight-bold">Phone Number :</td>
                    <td><?=$customer_details['contact_number']?></td>
                </tr>
            </tbody>
        </table>
        
        <div id="button">
            <span class="font-italic">Do you want to change your profile? Go to <a href="../views/profile.php">Profile Page</a></span>
        </div>
    </section>
</body>

<?php include "footer.php"?>

    