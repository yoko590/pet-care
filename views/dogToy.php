<?php
require_once "../classes/product.php";

$product = new Product;
$dog_toy_list = $product->getDogToy();

?>

<link rel="stylesheet" href="../assets/css/dogToy.css">
<?php include "menu.php";?>

<body>
    <main>
        <section id="showcase">
            <h3 class="text-center text-muted">The best toy for your furry friend</h3>
        </section>

        <section class="row container mx-auto" id="contents">
           <!-- product 1 detail -->
            <article class="col-sm-12 col-md-9 col-lg-9" id="title">
                <h4 class="text-center">Pet Care's Dog Toy</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <img src="../assets/img/product/duck.jpg" alt="duck_toy" class="w-100 rounded mb-4">
                        <img src="../assets/img/product/ball_dog_toy.jpg" alt="ball_dog_toy" class="w-100 rounded">
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img src="../assets/img/product/teddy_bear.jpg" alt="teddy_bear" class="w-100 rounded">
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <!-- description -->
                        <h5 class="text-center mb-4">Helping your dog live a fuller life!</h5>

                        <p class="pb-3 w-75 mx-auto">Keep your pet busy and having fun with the Wobble Wag Giggle Ball. Its 6 clutch pockets provide numerous opportunities for your dog to grab, carry, and toss the toy and the more he does the more giggles and fun sounds are emitted to amuse your pet.</p>

                        <form action="../actions/addCart.php" method="post">
                            <select name="products" id="dog_toy" class="form-control mb-3" required>
                                <option value="" hidden>Select Item</option>
                                <!-- PHP HERE -->
                                <?php
                                    while($dog_toy = $dog_toy_list->fetch_assoc()){
                                ?>
                                    <option value="<?=$dog_toy['id']?>"><?= $dog_toy['name']?></option>
                                    
                                <?php
                                    }
                                ?>
                            </select>
                            <input type="number" class="form-control w-50 mb-4" placeholder="Quantity" name="product_num" required>
                            
                            <button type="submit" class="btn btn-outline-primary">Add to Cart <i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                    
                </div>
            </article>

           <!-- other references -->
            <article class="col-sm-12 col-md-3 col-lg-3 w-50" id="option">
                <h4 class="mb-3 text-center">- Other Products -</h4>
                <ul class="mb-5 w-75 mx-auto">
                    <li style="font-size: 20px;"><a href="../views/dogFood.php" class="text-dark">Dog Food</a></li>
                    <li style="font-size: 20px;"><a href="../views/catFood.php" class="text-dark">Cat Food</a></li>
                </ul>
            </article>
        </section>

        <!-- Other Toy area -->
        <section class="row" id="descriptions">
            <h3 class="pb-3 col-12 ml-5">- Description -</h3>

            <!-- Ball -->
            <article class="col-sm-12 col-md-12 col-lg-12 p-5" id="ball">
                <div class="row container mx-auto">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="../assets/img/product/ball_dog_toy.jpg" alt="ball_dog_toy" class="w-100">
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h5 class="text-center mb-4 mt-3">Ball Dog Toy</h5>
                        <p class="text-warning ml-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>

                        <p class="pt-3">Interactive Dog Toy, Fun Giggle Sounds When Rolled or Shaken, Pets Know Best, As Seen On TV</p>

                        <p>Key Benefits</p> 
                        <p>- FUN FOR ALL BIG OR SMALL Wobble Wag Giggle Ball is great for dogs of all ages and sizes! The 6 clutch pockets on the toy make it easy for your dog to pick up during playtime!</p> 
                        <p>- WOBBLE WAG GIGGLE Ball With just the nudge of a nose, off the ball goes! Wobble Wag Giggle does not require batteries - the secret is the internal tube noisemaker inside of the ball, the enticing “play-with-me” sounds are sure to engage your pup as the toy rolls around!</p> 
                        

                        <h5 class="text-center"><span class="mr-4" style="font-size:25px;">Price: </span> <span style="font-size:30px;">$3</span></h5>
                    </div>
                </div>
            </article>

            <!-- Teddy Bear -->
            <article class="col-sm-12 col-md-6 col-lg-6 p-5 border" id="teddy">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="../assets/img/product/teddy_bear.jpg" alt="teddy_bear" class="w-100">
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h5 class="text-center mb-4 mt-3">Teddy Bear Dog Toy</h5>
                        <p class="text-warning ml-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>

                        <p class="pt-3">The KONG Teddy Bear dog toy is a low-stuffing toy made of quality plush material with a replaceable squeaker for extra fun!</p> 
                        <p>This soft, durable bear is the perfect chew or cuddle companion for your furry friend.</p> 

                        <h5 class="text-center"><span class="mr-4" style="font-size:25px;">Price: </span> <span style="font-size:30px;">$2</span></h5>
                    </div>
                </div>
                
            </article>

            <!-- Duck -->
            <article class="col-sm-12 col-md-6 col-lg-6 p-5 border" id="duck">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 image">
                        <img src="../assets/img/product/duck.jpg" alt="duck" class="w-100">
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h5 class="text-center mb-4 mt-3">Duck Dog Toy</h5>
                        <p class="text-warning ml-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>

                        <p class="pt-3">These delightfully cute dog toys come with an attitude! KONG Plush Ducks are strong, durable, soft toys with no stuffing and a replaceable squeaker.</p> 
                        <p>These toys are really unique and safe, with no buttons to chew and digest.</p>

                        <h5 class="text-center"><span class="mr-4" style="font-size:25px;">Price: </span> <span style="font-size:30px;">$3</span></h5>
                    </div>
                </div>
                
            </article>
        </section>
    </main>
</body>

<?php include "footer.php";?>