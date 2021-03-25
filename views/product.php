<link rel="stylesheet" href="../assets/css/product.css">
<?php include "menu.php";?>

<body>
   <main>
      <!-- showcase area -->
       <section class="text-center text-muted" id="showcase">
         <p class="display-4 font-weight-bold">Our Products</p>
         <h6 class="lead font-italic">Come. Stay. Shop with us!</h6>
       </section>

       <section class="text-center p-5 text-white" id="catch_phrase">
         <h3 class="font-italic mb-4">The store for happy pets</h3>
         <p class="w-50 mx-auto">We are happy to offer our healthy pet food and cute toys for your furry family!</p>
       </section>

      <!-- products area -->
       <section id="products">
         <div class="row p-4" id="product_bg">
            <h3 class="col-12 text-center w-50 mx-auto text-white mb-5">- What We Offer -</h3>

            <!-- dog food -->
            <article class="col-sm-12 col-md-4 col-lg-4 text-center" id="dog_food">
               <div class="card w-75 rounded-pill p-4 mx-auto">
                  <div class="card-img-top mb-4">
                     <i class="fas fa-bone" style="font-size:120px;"></i>
                  </div>

                  <div class="card-body">
                      <h4 class="mb-3">Dog Food</h4>
                      <h5 class="lead">Healthy & Delicious Treat for your cute fluffy friend!</h5>
                      <a href="../views/dogFood.php" class="text-muted">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                  </div>
               </div>
            </article>

            <!-- dog toy -->
            <article class="col-sm-12 col-md-4 col-lg-4 text-center" id="dog_toy">
               <div class="card w-75 rounded-pill p-4 mx-auto">
                  <div class="card-img-top mb-4">
                      <i class="fas fa-dog" style="font-size:120px;"></i>
                  </div>

                  <div class="card-body">
                     <h4 class="mb-3">Dog Toy</h4>
                     <h5 class="lead">Looking for new toys for your pets? Here you are!</h5>
                     <a href="../views/dogToy.php" class="text-muted">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                  </div>
               </div>
            </article>

            <!-- cat food -->
            <article class="col-sm-12 col-md-4 col-lg-4 text-center" id="cat_food">
               <div class="card w-75 rounded-pill p-4 mx-auto">
                  <div class="card-img-top mb-4">
                     <i class="fas fa-fish" style="font-size:120px;"></i>
                  </div>

                  <div class="card-body">
                     <h4 class="mb-3">Cat Food</h4>
                     <h5 class="lead">Natural and healthy food for your little buddy! </h5>
                     <a href="../views/catFood.php" class="text-muted">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                  </div>
               </div>
            </article>
         </div>
       </section>

       

   </main>

</body>

   <?php include "../views/footer.php";?>
