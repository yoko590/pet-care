<body>
    <link rel="stylesheet" href="../assets/css/contact.css">

    <?php include "menu.php";?>

    <main>
       <section class="text-center text-muted"id="showcase">
           <p class="display-4">Contact Us</p>
           <h6 class="lead">We'd love to hear from you!</h6>
       </section>

       <section class="container text-center mx-auto" id="contents">
           <!-- Working Hour -->
           <div class="row my-5 w-50 mx-auto border-bottom">
                    <h3 class="col-12 font-italic text-center mb-3">- Working Hour -</h3>
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

            <div class="row">
                <!--  Form area -->
                <div class="col-sm-12 col-md-7 col-lg-7">
                        <h3 class="font-italic text-center">-- Get in Touch --</h3>
                        <form action="" method="post">
                        <table class="table table-borderless">
                            <tr>
                                <td>
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </td>
                                <td>
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="How may we help you?"></textarea>
                                </td>
                            </tr>
                        </table>

                        <button type="submit" class="btn btn-outline-dark w-50" name="submit">Submit</button>
                        </form>
                </div>

                <!-- Contact Info and Address area -->
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <h3 class="font-italic text-center">- Direct Contact -</h3>
                    <p><i class="far fa-envelope"></i> petcare@google.com</p>
                    <p><i class="fas fa-phone mb-4"></i> (257) 563-7401</p>
                        
                        
                    <h3 class="font-italic text-center">- Location -</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 711-2880 Nulla St.
                        Mankato Mississippi 96522</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443642.8920992645!2d-92.89879444771285!3d32.55464636616605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86282b4e3cbbd785%3A0x1a91cedd6361019c!2sPet%20Haven%20LLC!5e0!3m2!1sja!2sjp!4v1615869436246!5m2!1sja!2sjp" width="80%" height="50%" style="border:0;" allowfullscreen="" loading="lazy" class="mb-3"></iframe>
                </div>
            </div>
       </section>

    </main>

    <?php include "footer.php";?>

    

</body>
