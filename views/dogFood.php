<?php
require_once "../classes/product.php";

$product = new Product;

$dog_food_list = $product->getDogFood();

?>

<link rel="stylesheet" href="../assets/css/dogFood.css">
<?php include "menu.php";?>

<body>
    <main>
        <section id="showcase">
            <h3 class="text-white">The best food for your furry friend</h3>
        </section>

        <section class="row container mx-auto" id="contents">
           <!-- product detail -->
            <article class="col-sm-12 col-md-9 col-lg-9" id="product">
                <h4 class="text-center">Pet Care's Dog Food</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="../assets/img/product/dog_food_m.jpg" alt="dog_food" class="w-100 rounded-pill">
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- description -->
                        <p class="text-warning ml-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>

                        <p class="pb-3 w-75 mx-auto">Clinically proven complete dietetic dry food for adult dogs with chronic hepatic insufficiency, helping to reduce strain on the liver and combat nutritional deficiencies with a reduced copper content.</p>

                        <h5 class="pl-3">Price:</h5>
                        <table class="table ml-4" style="font-size:18px;">
                            <tbody class="font-weight-bold">
                                <tr>
                                    <td>Small</td>
                                    <td style="font-size:26px;">$5</td>
                                </tr>
                                <tr>
                                    <td>Medium</td>
                                    <td style="font-size:26px;">$10</td>
                                </tr>
                                <tr>
                                    <td>Large</td>
                                    <td style="font-size:26px;">$15</td>
                                </tr>
                            </tbody>
                        </table>

                        <form action="../actions/addCart.php" method="post">
                            <select name="products" id="dog_food" class="form-control mb-3">
                                <option value="" hidden>Select Item</option>
                                <!-- PHP HERE -->
                                <?php
                                    while($dog_food = $dog_food_list->fetch_assoc()){
                                ?>
                                    <option value="<?=$dog_food['id']?>"><?= $dog_food['name']?></option>
                                    
                                <?php
                                    }
                                ?>
                            </select>
                            <input type="number" class="form-control w-50 mb-4" placeholder="Number" name="product_num">
                            
                            
                            
                            <button type="submit" class="btn btn-outline-primary">Add to Cart <i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                    
                </div>
            </article>

           <!-- other references -->
            <article class="col-sm-12 col-md-3 col-lg-3 w-50" id="option">
                <h4 class="mb-3 text-center">- Other Products -</h4>
                <ul class="mb-5 w-50 mx-auto">
                    <li style="font-size: 20px;"><a href="../views/dogToy.php" class="text-dark">Dog Toy</a></li>
                    <li style="font-size: 20px;"><a href="../views/catFood.php" class="text-dark">Cat Food</a></li>
                </ul>
            </article>
        </section>

        <!-- descriptions area -->
        <section class="container" id="description">
            <h3>- Description -</h3>
            <p class="mb-5">Feed your canine companion a hypoallergenic kibble specifically designed to restore balance and healthy functioning of your dogs gut and digestive system.</p>

            <h5 class="mb-3"><span class="text-warning"><i class="fas fa-star"></i></span> Key Benefits</h5>
            <p>- Packed with protein: over 90% animal sourced as nature intended.</p> 
            <p>- Coated with Probiotics and Digestive Enzymes</p>
            <p>- 4 All Natural Preservatives </p> 
            <p>- Kept at 55-60 F in our warehouse to preserve maximum freshness.</p> 
            <p>- Made in the USA with the world's finest ingredients. </p>
            <p>- Food Form: Dry Food</p>
            <p>- Food Flavor: Turkey, Chicken, Lamb, Goat, Venison</p>
            <p>- LIFESTAGE: Puppy, Adult, All Stage</p>
            <p>- BREED SIZE: Small / Medium / Large Breeds </p>
            <p>- SPECIAL DIET: Grain-Free, High-Protein, Gluten Free, Natural</p> 
            
            <span class="small font-italic">Sample Pack Net Weight: 3 oz; 100 k/cal per pack (400 k/cal per cup) </span> 

            <p>Brothers has earned the highest ratings from the respected, independent online dog food reviewer Dog Food Advisor on all our formulas. We are family owned and operated.  </p>
        </section>

        <section class="container row w-75 mx-auto" id="image">
            <figure class="col-sm-12 col-md-6 col-lg-6">
                <figcaption class="font-italic">Small Size</figcaption>
                <img src="../assets/img/product/dog_food_s.jpg" alt="dog_food_s" class="w-100">
            </figure>

            <figure class="col-sm-12 col-md-6 col-lg-6">
                <figcaption class="font-italic">Large Size</figcaption>
                <img src="../assets/img/product/dog_food_L.jpg" alt="dog_food_L" class="ml-5">
            </figure>
        </section>
    </main>
</body>

<?php include "footer.php";?>