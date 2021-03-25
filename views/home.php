<body>
   <link rel="stylesheet" href="../assets/css/home.css">
   <?php include "../views/menu.php";?>

    <main>
       <!-- Showcase area -->
         <section id="about">
            <div class="container text-center">
               <h2 class="display-4 mb-5 border-bottom w-75 mx-auto">We care for your pets</h2>
               <p class="mb-4 w-50 mx-auto font-italic" style="font-size:20px;">From the time our friends sniff their way through the door until they wag their tails out in the afternoon, we cater to their nature.</p>
               <a href="../views/about.php" class="btn btn-outline-light rounded-pill p-2">About Us</a>
            </div>
         </section>

         <!-- Hotel area -->
         <section class="container row mx-auto" id="hotel">
            <!-- left side -->
            <div class="col-sm-12 col-md-6 col-lg-6">
               <img src="../assets/img/sleeping_dog.jpg" alt="sleeping_dog" class="w-100" >
            </div>

            <!-- right side -->
            <div class="col-sm-12 col-md-6 col-lg-6 text-center content">
               <p class="text-center title mb-2">- Pet Daycare -</p>
               <p class="mb-5"><i class="fas fa-bed" style="font-size:27px;"></i></p>
               <p class="my-auto pb-3">Say NO to staying alone at home.
                  Give your pet the best day at our daycare centres while you are at work or shopping. Let us keep your furry friend entertained and happy for the day!
               </p>

               <a href="../views/reservation.php" class="btn btn-warning rounded-pill w-25 mr-3">Book</a>
               <a href="../views/hotel.php" class="btn btn-outline-dark rounded-pill w-25">Details</a>
            </div>
         </section>

      <!-- Service area -->
         <section class="container row mx-auto" id="service">
            <!-- left side -->
            <div class="col-sm-12 col-md-6 col-lg-6">
               <p class="text-center pt-3">- Services We Offer -</p>

               <div class="row text-center">
                  <!-- 1 Full Grooming -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card w-50 mx-auto mt-3 mb-4 rounded-pill">
                            <div class="card-header bg-white">
                                 <h5>Full Grooming</h5>
                                 <span class="small text-success font-weight-bold font-italic"><i class="far fa-check-circle"></i> Recommend!</span>
                            </div>

                            <div class="card-body">
                                 <h5 class="lead small">Full-Service Bath & Styling + Nail Trim </h5>

                                 <a href="../views/fullGrooming.php" class="text-muted d-block">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                            </div>
                        </div>
                    </div>

                  <!-- 2 Bath & Dry -->
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                        <div class="card rounded-pill">
                              <div class="card-header bg-white">
                                 <h5 class="pb-1">Bath & Dry</h5>
                                 <span><i class="fas fa-bath" style="font-size:20px;"></i></span>
                              </div>

                              <div class="card-body">
                                 <h5 class="lead small font-italic">Included in Full-Service Bath</h5>

                                 <a href="../views/bath.php" class="text-muted">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                              </div>
                        </div>
                    </div>

                  <!-- 3 Styling -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="card rounded-pill">
                              <div class="card-header bg-white">
                                    <h5 class="pb-1">Styling</h5>
                                    <span><i class="fas fa-cut" style="font-size:20px;"></i></span>
                              </div>

                              <div class="card-body">
                                    <h5 class="lead small font-italic">Included in Cut and Style</h5>

                                    <a href="../views/styling.php" class="text-muted">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                              </div>
                           </div>
                     </div>
               </div>
            </div>

            <!-- right side -->
            <div class="col-sm-12 col-md-6 col-lg-6">
               <img src="../assets/img/dog_trimm.jpg" alt="dog_bath" class="w-100 h-100">
            </div>
         </section>

      <!-- Products area -->
         <section class="row mx-auto border rounded-pill" id="shop">
            <p class="col-12 text-center mb-5">- Our Products -</p>

            <article class="col-sm-12 col-md-4 col-lg-4 text-center">
               <div class="card article1">
                  <div class="card-img-top mb-4">
                     <i class="fas fa-bone" style="font-size:120px;"></i>
                  </div>

                  <div class="card-body">
                      <h3 class="mb-3">Dog Food</h3>
                      <h5 class="lead">Healthy & Delicious Treat for your cute fluffy friend!</h5>
                      <a href="../views/dogFood.php" class="text-muted">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                  </div>
               </div>
            </article>

            <article class="col-sm-12 col-md-4 col-lg-4">
               <div class="card rounded-pill mt-5">
                  <div class="card-body">
                       <img src="../assets/img/dog-food.jpg" alt="dog_food" class="w-100 rounded-pill">
                  </div>
               </div>
            </article>

            <article class="col-sm-12 col-md-4 col-lg-4 text-center">
               <div class="card article2">
                  <div class="card-img-top mb-4">
                      <i class="fas fa-dog" style="font-size:120px;"></i>
                  </div>

                  <div class="card-body">
                     <h3 class="mb-3">Dog Toy</h3>
                     <h5 class="lead">Looking for new toys for your pets? Here you are!</h5>
                     <a href="../views/dogToy.php" class="text-muted">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                  </div>
               </div>
            </article>

            <article class="col-12 mt-5 text-center">
               <div class="card article3 mx-auto">
                  <div class="card-img-top mb-4">
                     <i class="fas fa-fish" style="font-size:120px;"></i>
                  </div>

                  <div class="card-body">
                     <h3 class="mb-3">Cat Food</h3>
                     <h5 class="lead">Natural and healthy food for your little buddy! </h5>
                     <a href="../views/catFood.php" class="text-muted">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                  </div>
               </div>
            </article>
         </section>

       <!-- Trivia area -->
         <section class="row mx-auto text-center" id="trivia">
            <p class="text-center col-12">- Trivia about Pets -</p>

            <article class="col-sm-12 col-md-4 col-lg-4">
                  <div class="card">
                     <img src="../assets/img/book.jpg" alt="book_img" class="card-img-top">
                     <div class="card-body">
                         <h4 class="pb-2">Some dogs can learn more than 1,000 words</h4>
                         <a href="#" class="d-block w-50 mx-auto text-dark">Read More <i class="far fa-arrow-alt-circle-right"></i></a>
                     </div>
                  </div>
            </article>

            <article class="col-sm-12 col-md-4 col-lg-4">
                 <div class="card">
                     <img src="../assets/img/puppy.jpg" alt="puppy_img" class="card-img-top">
                     <div class="card-body">
                         <h4 class="pb-2">Like human infants, puppies enjoy high and seek</h4>
                         <a href="#" class="d-block w-50 mx-auto text-dark">Read More <i class="far fa-arrow-alt-circle-right"></i></a>
                     </div>
                 </div>
            </article>

            <article class="col-sm-12 col-md-4 col-lg-4">
                  <div class="card">
                     <img src="../assets/img/dog_article.jpg" alt="dog_img" class="card-img-top">
                     <div class="card-body">
                         <h4 class="pb-2">Dogs stop growing between 12 and 24 months of age</h4>
                         <a href="#" class="d-block w-50 mx-auto text-dark">Read More <i class="far fa-arrow-alt-circle-right"></i></a>
                     </div>
                  </div>
            </article>
         </section>
    
    </main>
</body>

    <?php include "../views/footer.php";?>


