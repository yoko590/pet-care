<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">



<!-- Nav 1 -->
   <nav class="nav1 navbar navbar-expand-md navbar-dark" style="background-color: #000000b4;">
      
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="main_nav">
        <ul class="navbar-nav ml-auto pt-2">
            <li class="nav-item mr-4">
                <?php
                   session_start();
                   if(!$_SESSION){
                      echo "<span class='nav-link text-white'>Hello Guest!</span>";
                   }else{
                      echo "<a href='../views/profile.php' class='nav-link text-white font-weight-bold font-italic'>Hello " . $_SESSION['username'] . "!</a>";
                   }
                ?>
            </li>
            <li class="nav-item mr-3"><a href="../views/index.php" class="nav-link">Login</a></li>
            <li class="nav-item mr-3"><a href="../views/register.php" class="nav-link ">Register</a></li>
            <li class="nav-item mr-5"><a href="../views/confirmaton.php" class="nav-link"><i class="fas fa-shopping-cart btn btn-outline-light"style="font-size:18px;"></i></a></li>
             <li class="nav-item mr-3"><a href="../actions/logout.php" class="nav-link text-danger">Log out</a></li>

            <!-- sns icons -->
            <li class="nav-item mr-3 mt-3"><a href="#" style="font-size:25px;"><i class="fab fa-twitter-square text-white"></i></a></li>
            <li class="nav-item mr-5 mt-3"><a href="#" style="font-size:25px;"></i><i class="fab fa-facebook-square text-white"></i></a></li>
        </ul>
      </div>
   </nav>

<!-- Nav 2 -->
   <nav class="nav2 navbar navbar-expand-md navbar-light py-3 sticky-top" style="background-color: #edc7b7d0;">
     <div class="collapse navbar-collapse">
        <ul class="navbar-nav h5" style="font-family:'Montserrat', sans-serif;">
            <li class="nav-item ml-2 mr-5"><a href="index.php" class="navbar-brand" style="font-family:'Akaya Telivigala', cursive; font-size:24px;">Pet Care <i class="fas fa-paw"></i></a></li>

            <li class="nav-item ml-5"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item ml-5"><a href="../views/about.php" class="nav-link">About</a></li>
            <li class="nav-item ml-5 font-weight-bold font-italic border-bottom"><a href="../views/hotel.php" class="nav-link">Hotel</a></li>
            <li class="nav-item ml-5"><a href="../views/service.php" class="nav-link">Services</a></li>
            <li class="nav-item ml-5"><a href="../views/product.php" class="nav-link">Shop</a></li>
            <li class="nav-item ml-5"><a href="../views/gallery.php" class="nav-link">Gallery</a></li>
            <li class="nav-item ml-5"><a href="../views/contact.php" class="nav-link">Contact</a></li>
        </ul>
    </div>
   </nav>


