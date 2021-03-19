<body>
    <link rel="stylesheet" href="../assets/css/service.css">
    <?php include "menu.php";?>

    <main>
       <section class="text-muted" id="showcase">
            <p class="display-4">Our Services</p>
            <h6 class="lead"></h6>
       </section>

       <section class="container rounded-pill" id="bg">
            <p class="text-center">background</p> 
       </section>

       <section class="row w-75 mx-auto" id="services">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Full Grooming</h5>
                        <span class="small text-success font-weight-bold font-italic"><i class="far fa-check-circle"></i> Recommend!</span>
                    </div>

                    <div class="card-body">
                        <p></p>

                        <a href="" class="btn btn-outline-dark rounded-pill">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                    </div>
                </div>
           </div>

          <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Bath & Dry</h5>
                        <span><i class="fas fa-bath" style="font-size:20px;"></i></span>
                    </div>

                    <div class="card-body">
                        <p></p>

                        <a href="" class="btn btn-outline-dark rounded-pill">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                    </div>
                </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Styling</h5>
                        <span><i class="fas fa-cut" style="font-size:20px;"></i></span>
                    </div>

                    <div class="card-body">
                        <p></p>

                        <a href="" class="btn btn-outline-dark rounded-pill">See Details <i class="fas fa-arrow-alt-circle-right"></i> </a>
                    </div>
                </div>
          </div>
       </section>
       
       <section id="gallery"> 
           <p>gallery</p> 
            <div class="row">
                <!-- some img and <a> to Gallery Page -->
                <article class="col-sm-12 col-md-4 col-lg-4" id="group1">
                    <!-- img*2 -->
                    <img src="" alt="">
                    <img src="" alt="">
                </article>

                <article class="col-sm-12 col-md-4 col-lg-4" id="group2">
                    <!-- img*2 -->
                    <img src="" alt="">
                    <img src="" alt="">
                </article>

                <article class="col-sm-12 col-md-4 col-lg-4" id="group3">
                    <!-- img*2 -->
                    <img src="" alt="">
                    <img src="" alt="">
                </article>
            </div>

            <a href="../views/gallery.php" class="btn btn-outline-success">See More <i class="far fa-arrow-alt-circle-right"></i></a>
       </section>


    </main>

</body>

<?php include "footer.php";?>