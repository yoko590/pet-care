<?php include "menu.php";?>
<link rel="stylesheet" href="../assets/css/service.css">

<body>
    
    <main>
      <!-- showcase area -->
       <section class="text-center text-muted" id="showcase">
            <p class="display-4 font-weight-bold">Our Services</p>
            <h6 class="lead font-italic" style="font-size:20px;">We treat pets like family.</h6>
       </section>

       <section class="text-center p-5 text-white" id="catch_phrase">
          <h3 class="font-italic mb-4">The best care for your best friend</h3>
          <p class="w-50 mx-auto">Whether your pet needs a quick shampoo or “the works,” our expert groomers will make your furry friend fabulous. Each appointment includes a free consultation to discuss your pet’s personal grooming and styling needs. Don't trust your pet's fur to just anyone — come find out why our clients choose us for treatments from head to paw.</p>
       </section>

      <!-- bg area -->
       <div id="bg_title">
            <h3 class="text-center  border-bottom w-50 mx-auto">What We Offer</h3>
            <section class="container rounded-pill" id="bg">
                <p class="text-center"></p> 
            </section>
        </div>

      <!-- services area -->
       <section class="row w-75 mx-auto" id="services">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="../assets/img/dog_trimm.jpg" alt="dog_trimming" class="w-100">
                    </div>

                    <div class="card-body text-center">
                        <h5>Full Grooming</h5>
                        <span class="small text-success font-weight-bold font-italic"><i class="far fa-check-circle"></i> Recommend!</span>

                        <p>Full-Service Bath & Styling + Nail Trim </p>

                        <a href="../views/fullGrooming.php" class="btn btn-outline-dark btn-sm rounded-pill">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                    </div>
                </div>
           </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="../assets/img/service/pet_bath.jpg" alt="pet_bath" class="w-100">
                    </div>

                    <div class="card-body text-center">
                        <h5 class="pb-1">Bath & Dry</h5>
                        <span><i class="fas fa-bath" style="font-size:30px;"></i></span>

                        <p class="pt-2">Included in Full-Service Bath</p>

                        <a href="../views/bath.php" class="btn btn-outline-dark btn-sm rounded-pill">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="../assets/img/service/scissor.jpg" alt="scissor" class="w-100">
                    </div>

                    <div class="card-body text-center">
                        <h5 class="pb-1">Styling</h5>
                        <span><i class="fas fa-cut" style="font-size:30px;"></i></span>

                        <p class="pt-2">Included in Cut and Style</p>

                        <a href="../views/styling.php" class="btn btn-outline-dark btn-sm rounded-pill">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                    </div>
                </div>
            </div>
       </section>
       
     <!-- Our team area -->
       <section class="container row w-75 mx-auto" id="team">
            <h3 class="col-12 text-center  border-bottom">Our Team</h3>

           <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="../assets/img/service/man_holding_cat.jpg" alt="man_holding_cat" class="w-100 rounded">
           </div>

           <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="../assets/img/service/lady_holding_cat.jpg" alt="lady_holding_cat" class="w-75 rounded">
           </div>

           <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="../assets/img/service/man_holding_dog2.jpg" alt="lady_holding_dog" class="w-100 rounded">
           </div>

           <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="../assets/img/service/lady_holding_dog.jpg" alt="lady_holding_dog" class="w-75 rounded">
           </div>

           <a href="../views/contact.php" class="btn btn-outline-warning font-italic px-5 py-2" style="font-size:30px;">Contact Us! <i class="fas fa-phone-volume"></i></a>
       </section>

       
    </main>

</body>

<?php include "footer.php";?>