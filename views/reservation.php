<body>
    <link rel="stylesheet" href="../assets/css/reservation.css">
    <?php include "menu.php";?>

    <main>
      <!-- Showcases area -->
        <section class="text-center text-muted" id="showcase">
                <p class="display-4">Reservation</p>
                <h6 class="lead">We look forward to seeing you soon!</h6>
        </section>

      <!-- On the left side -->
        <section class="row container mx-auto" id="reservation">
            <article class="col-sm-12 col-md-5 col-lg-5">
                <!-- working Hour -->
                <div class="row text-center">
                    <h5 class="col-12 font-italic text-center mb-3">- Working Hour -</h5>

                    <div class="col-4">
                        <h7>Monday-Friday</h7>
                        <p>8:00AM-8:00PM</p>
                    </div>
                    <div class="col-4">
                        <h7>Saturday</h7>
                        <p>8:00AM-6:00PM</p>
                    </div>
                    <div class="col-4">
                        <h7>Sunday</h7>
                        <p>9:00AM-5:00PM</p>
                    </div>
                </div>
                    
                <!-- direct contact -->
                <div class="text-center">
                    <h5 class="font-italic">- Direct Contact -</h5>
                    <p><i class="far fa-envelope"></i> petcare@google.com</p>
                    <p><i class="fas fa-phone mb-4"></i> (257) 563-7401</p>
                </div>

                <!-- references -->
                <div class="text-center">
                    <h5 class="font-italic">- NOTE -</h5>
                    <p>Please Pick up and Collect your furry friend WITHIN Working Hour. </p>

                </div>
            </article>

         <!-- On the right side -->
            <article class="col-sm-12 col-md-7 col-lg-7">
                <div class="card w-75 mx-auto">
                    <div class="card-body text-center">
                        <form action="../actions/reservation.php" method="post">
                            <label for="check_in" class="input-group-label mr-5 pr-5">Check In Date</label>
                            <label for="check_in ">Check Out Date</label>

                            <div class="input-group mb-4">
                                <input type="date" name="check_in" id="check_in" class="nput-group-input form-control rounded-pill mr-4" required>
                                
                                <input type="date" name="check_out" id="check_out" class="input-group-input form-control rounded-pill" required>
                            </div>

                            <select name="room_type" class="form-control rounded-pill w-75" id="room_type" required>
                                <option value=""hidden> Room Type</option>
                                <!-- PHP Here -->
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>

                            <p class="pt-5">- Tell us about your Pet Information -</p>
                            <input type="text" name="pet_name" id="pet_name" class="form-control rounded-pill mb-3" required placeholder="Pet Name">

                            <span class="float-left mb-2">Select your pet's gender</span>
                            <div class="input-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" name="gender" id="male" value="M" class="custom-control-input">
                                    <label for="male" class="custom-control-label ml-3">M</label>
                                </div>
                                <div class="custom-control custom-radio text-right">
                                    <input type="radio" name="gender" id="female" value="F" class="custom-control-input">
                                    <label for="female" class="custom-control-label ml-5">F</label>
                                </div>

                                <input type="number" name="pet_num" id="pet_num" class="form-control rounded-pill w-50 ml-5" required placeholder="Number of Pet">
                            </div>

                            <p class="pt-5">- Additional Options -</p>
                            <select name="service" class="form-control rounded-pill w-75 mb-4 mx-auto" id="service" required>
                                <option value=""hidden> Services</option>
                                <!-- PHP Here -->
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>

                            <button type="submit" class="btn btn-outline-warning">Reserve</button>
                        </form>
                    </div>
                </div>
                
            </article>
        </section>

        <section class="container my-5" id="address">
            <!-- adress -->
            <h3 class="font-italic py-3">- Address -</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 711-2880 Nulla St.
                        Mankato Mississippi 96522</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443642.8920992645!2d-92.89879444771285!3d32.55464636616605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86282b4e3cbbd785%3A0x1a91cedd6361019c!2sPet%20Haven%20LLC!5e0!3m2!1sja!2sjp!4v1615869436246!5m2!1sja!2sjp" width="100%" height="60%" style="border:0;" allowfullscreen="" loading="lazy" class="mb-3"></iframe>
        </section>
    </main>
</body>
    <?php include "footer.php";?>
