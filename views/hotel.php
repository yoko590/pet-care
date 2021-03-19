<body>
    <link rel="stylesheet" href="../assets/css/hotel.css">
    <?php include "menu.php";?>

    <main>
        <section class="text-center text-muted" id="showcase">
            <p class="display-4">Pet Hotel</p>
            <h6 class="lead">Cozy and Relaxing room for your lovely pet..</h6>
        </section>

        <section class="row" id="reference">
           <!-- left side -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h3 class="text-center">- About Our Pet Day Care Service -</h3>
               <!-- change text later -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aspernatur quae at vitae tenetur voluptas.</p>
            </div>

           <!-- right side -->
            <div class="col-sm-12 col-md-6 col-lg-6">
               
            </div>
            
        </section>

        <section class="container" id="room_type">
            <h3 class="py-5">- Room Type -</h3>
            <!-- Small Room -->
            <article class="row" id="room1">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- img -->
                    <img src="" alt="small_room">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- contents -->
                    <h4>- Small Room -</h4>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- contents -->
                </div>
            </article>
            
            <!-- Medium/Large Room -->
            <article class="row" id="room2">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- contents -->
                    <h4>- Medium / Large Room -</h4>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- contents -->
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- img -->
                    <img src="" alt="medium_Large_room">
                </div>
            </article>

            <!-- Xtra Large Room -->
            <article class="row" id="room3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- img -->
                    <img src="" alt="xtra_large_room">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- contents -->
                    <h4>- Xtra Large Room -</h4>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <!-- contents -->
                </div>
            </article>

            <a href="../views/reservation.php" class="btn btn-outline-warning w-50 my-5" style="font-size:26px;">Book Now!</a>
        </section>
    </main>
</body>

    <?php include "footer.php";?>