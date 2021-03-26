<?php
require_once "../classes/product.php";

$product = new Product;

$cat_food_list = $product->getCatFood();
?>

<link rel="stylesheet" href="../assets/css/catFood.css">
<?php include "menu.php";?>

<body>
    <main>
        <section id="showcase">
            <h3 class="text-center text-white">The best food for your furry friend</h3>
        </section>

        <section class="row container mx-auto" id="contents">
           <!-- product detail -->
            <article class="col-sm-12 col-md-9 col-lg-9" id="product">
                <h4 class="text-center">Pet Care's Cat Food</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="../assets/img/product/cat_food_m.jpg" alt="cat_food" class="w-100 rounded">
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- description -->
                        <p class="text-warning ml-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>

                        <p class="pb-3 w-75 mx-auto">Give your cat the nutrition he needs, naturally. Cat Chow Natural offers great taste and wholesome nutrition without any artificial flavors or preservatives added.</p>

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
                            </tbody>
                        </table>
                        
                        <form action="../actions/addCart.php" method="post">
                            <select name="products" id="cat_food" class="form-control mb-4" required>
                                <option value="" hidden>Select Item</option>
                                <!-- PHP HERE -->
                                <?php
                                    while($cat_food = $cat_food_list->fetch_assoc()){
                                ?>
                                    <option value="<?=$cat_food['id']?>"><?= $cat_food['name']?></option>
                                    
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
                    <li style="font-size: 20px;"><a href="../views/dogToy.php" class="text-dark">Dog Toy</a></li>
                </ul>
            </article>
        </section>

        <!-- descriptions area -->
        <section class="container" id="description">
            <h3 class="pb-3">- Description -</h3>
            <p class="mb-5">Give your cat complete nutrition to support her long, healthy life when you serve Cat Chow Complete Dry Cat Food. This delicious recipe is formulated to support cats at every stage of life, providing them with 25 essential vitamins and minerals in every serving. The balanced nutrition in this dry food gives you peace of mind knowing that your feline friend is getting nutrients in her dish, helping to support her overall health and wellness. Give your cat the four cornerstones of nutrition at every feeding, including protein, healthy carbs, essential fatty acids and essential vitamins and minerals. This great-tasting recipe is sure to have your cat running when she hears crunchy kibble falling into her dish.</p>

            <h5 class="mb-3"><span class="text-warning"><i class="fas fa-star"></i></span> Key Benefits</h5>
            <p>- Nourishing ingredients combine with a great-tasting recipe to create a cat food that will bring your feline to her bowl.</p> 
            <p>- Chock full of protein to support your feline companion's lean muscles.</p>
            <p>- Healthy carbs help deliver vital energy to your kitty, so she can be the active cat you love to see. </p> 
            <p>- 25 vitamins and minerals to help support her overall health, including a healthy immune system.</p> 
            <p>- Essential fatty acids support her healthy skin and coat, giving her a shine worthy of a su-paw model. </p>
        
        </section>

        <section class="container row w-75 mx-auto" id="image">
            <figure class="col-sm-12 col-md-6 col-lg-6">
                <figcaption class="font-italic">Medium Size</figcaption>
                <img src="../assets/img/product/cat_food_m2.png" alt="cat_food_m" class="w-100">
            </figure>

            <figure class="col-sm-12 col-md-6 col-lg-6">
                <figcaption class="font-italic">Small Size</figcaption>
                <img src="../assets/img/product/cat_food_s.jpg" alt="cat_food_s" class="ml-5 w-100" style="height:500px;">
            </figure>
        </section>
    </main>
</body>

<?php include "footer.php";?>