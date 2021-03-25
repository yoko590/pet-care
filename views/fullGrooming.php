<?php include "menu.php";?>
<link rel="stylesheet" href="../assets/css/fullGrooming.css">

<body>
    <main>
        <section class="text-dark" id="showcase">
            <div id="title">
                <p class="display-4 pb-2 font-weight-bold">Full Grooming</p>
                <h6 class="lead ml-5">Best Recommended service of Pet Care</h6>
            </div>
        </section>

        <section id="content1">
            <h3 class="py-5 ml-3">- How We Work -</h3>

            <div class="row p-3">
                <div class="col-sm-12 col-md-5 col-lg-5 text-center">
                    <h5 class="mt-4 mb-4 font-weight-bold">① Welcome !</h5>
                    <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor erat lectus, euismod posuere erat aliquet quis. Etiam sit amet nunc sed quam dapibus non efficitur at in metus. Nam et metus eget arcu volutpat rhoncus et eu mi. Donec id tellus sed nulla faucibus aliquam.</p>
                </div>

                <div class="col-sm-12 col-md-5 col-lg-5">
                    <img src="../assets/img/service/welcome_dog.jpg" alt="welcome_img" class="w-100 rounded-pill">
                </div>

                <div class="col-sm-12 col-md-2 col-lg-2 border p-3 bg-light rounded h-75">
                    <h4 class="mb-4 text-center">- Services -</h4>
                    <ul >
                        <li><a href="../views/bath.php" class="text-dark">Bath & Dry</a></li>
                        <li><a href="../views/styling.php" class="text-dark">Styling</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="p-5" id="content2">
             <div class="row container">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="../assets/img/service/pet_bath3.jpg" alt="pet_bath" class="w-100 rounded-pill">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <h5 class="mt-4 mb-4 font-weight-bold">② Full Grooming</h5>
                    <p class="font-italic"><span class="font-weight-bold">What's Included:</span> - Cut and style - Deep-cleaning shampoo - Blow-dry - 15-min brushout - Scented spritz - Gland expression - Nail trim</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi est nibh, hendrerit bibendum enim eu, vehicula porta nisi. Donec at ligula sed turpis mollis commodo in convallis magna. </p>
                    <p class="font-weight-bold font-italic border-bottom" style="font-size:18px;">The time it takes: Apploximately <span style="color:red;">1 Hour 30 min</span></p>

                    <img src="../assets/img/service/pet_nail_cut.jpg" alt="pet_nail_cut" class="w-75 rounded-pill mt-4">
                </div>
            </div>
        </section>
        
        <section class="container" id="content3">
            <div class="row container">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <h5 class="mt-5 mb-4 font-weight-bold">③ Thank you and see you next time !</h5>
                    <p>Lastly, we see you off with gratitude of choosing us, rely on us for the service. We look forward to seeing you soon! </p>
                    <p>Ut et mauris auctor, aliquet nulla sed, aliquam mauris. Vestibulum sed malesuada dolor. Integer fringilla odio a dolor aliquet, eu euismod lectus porttitor.</p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="../assets/img/service/petting_dog.jpg" alt="petting_dog" class="w-100 rounded-pill">
                </div>
            </div>
        </section>

    <!-- Reference area -->
        <section class="row container mx-auto" id="references">
            <article class="col-sm-12 col-md-6 col-lg-6">
                <div class="card w-75">
                    <div class="card-header">
                        <h3 class="text-center">- Price -</h3>
                    </div>

                    <div class="card-body">
                        <p><span class="font-weight-bold">Small</span> size : <span class="font-weight-bold ml-3" style="font-size:30px;" >$40</span></p>
                        <p><span class="font-weight-bold" >Medium</span> size : <span class="font-weight-bold ml-3" style="font-size:30px;">$50</span></p>
                        <p><span class="font-weight-bold">Large</span> size : <span class="font-weight-bold ml-3" style="font-size:30px;">$60</span></p>
                    </div>
                </div>
            </article>

            <article class="col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">- Service Working Hour -</h3>
                    </div>

                    <div class="card-body text-center">
                        <div class="">
                            <h5>Monday-Friday</h5>
                            <p>9:00AM-6:00PM</p>
                        </div>
                        <div class="">
                            <h5>Saturday</h5>
                            <p>9:00AM-4:00PM</p>
                        </div>
                        <div class="">
                            <h5>Sunday</h5>
                            <p>10:00AM-4:00PM</p>
                        </div>
                    </div>
                </div>
            </article>

            <a href="../views/contact.php" class="btn btn-warning font-italic px-5 py-2" style="font-size:30px;">Contact Us! <i class="fas fa-phone-volume"></i></a>
        </section>

        
    </main>
</body>

<?php include "footer.php";?>