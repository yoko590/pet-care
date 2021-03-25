<?php include "menu.php";?>
<link rel="stylesheet" href="../assets/css/insideCart.css">

<?php
require_once "../classes/product.php";

$product = new Product;

$inside_cart = $product->insideCart($_SESSION['user_id']);
$customer_details = $product->getCustomer($_SESSION['user_id']);

$added_cart = $product->addedCart($_SESSION['user_id']);

?>
<body>
    <main>
        <section class="container text-white mt-3" id="showcase">
            <div class="jumbotron">
                <h3>Shopping Cart</h3>
            </div>
        </section>

        <section class="container row mx-auto" id="details">
            <article class="col-sm-12 col-md-9 col-lg-9" id="item_detail">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    
                    <?php
                        $total_total = 0;
                        while($item = $inside_cart->fetch_assoc()){
                            $price_total = $item['product_number'] * $item['price'];
                            $total_total += $price_total;
                     ?>

                    <tbody>
                        <tr>
                            <td><?= $item['name']?></td>
                            <td class="font-weight-bold" style="font-size:20px;"><?= $item['product_number']?></td>
                            <td class="font-weight-bold" style="font-size:22px;">$ <?= $price_total?></td>
                            <td><a href="../actions/deleteProduct.php?cart_id=<?=$item['id']?>" class="btn btn-outline-danger"><i class="far fa-window-close"></i> Cancel Reservation</a></td>
                        </tr>
                    </tbody>

                    <?php
                        }
                    ?>
                    
                </table>
            </article>

            <article class="col-sm-12 col-md-3 col-lg-3">
                <div class="card text-center font-weight-bold">
                    <div class="card-body">
                        <h5>Total Amount :</h5>
                        <!-- PHP HERE -->
                        <p style="font-size:30px;">$ <?=$total_total?></p>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="../views/product.php" class="btn btn-outline-warning rounded-pill p-2">Go back to Shop Page</a>
                </div>
                
            </article>
        </section>

      <!-- customer detail -->
        <?php
            if($added_cart){
        ?>
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
        <?php
            }else{

            }
        ?>
        
    </main>
</body>
<?php include "footer.php";?>
