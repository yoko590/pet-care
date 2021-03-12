<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
<title>Login</title>
</head>

<body>
    <!-- Need to change the bg-color later -->
    <nav class="navbar navbar-expand-md navbar-dark">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-auto" id="main_nav">
            <ul class="navbar-nav ml-auto pt-2">
                <li class="nav-item mr-4"><a href="../views/about.php" class="nav-link text-white">About us</a></li>
                <li class="nav-item mr-4"><a href="../views/contact.php" class="nav-link text-white">Contact</a></li>
                
                <!-- sns icons -->
                <li class="nav-item mr-3"><a href="#" style="font-size:25px;"><i class="fab fa-twitter-square text-white"></i></a></li>
                <li class="nav-item mr-5"><a href="#" style="font-size:25px;"></i><i class="fab fa-facebook-square text-white"></i></a></li>
            </ul>
        </div>
    </nav>

   <main class="w-50 mx-auto">
        <p class="display-4 text-center mb-5" style="font-family:'Akaya Telivigala', cursive;">Pet Care <i class="fas fa-paw"></i></p>

       <div class="card text-center p-2">
           <div class="card-body">
             <p class="lead pb-3">Login Here <i class="fas fa-sign-in-alt"></i></p>

             <form action="../actions/login.php" method="post">
                  <div class="input-group mb-3 w-50 mx-auto">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-user"></i></span>
                      </div>
                      <input type="text" name="username" id="username" class="input1 form-control" placeholder="Username">
                  </div>

                  <div class="input-group mb-3 w-50 mx-auto">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                      </div>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
   
                  <button type="submit" class="btn btn-dark mt-3 mb-3 rounded-pill">Log in</button>


                  <p class="font-italic">
                      <a href="../views/register.php" class="text-white font-weight-bold small mr-3">CREATE ACCOUNT</a>
                      <a href="../views/home.php" class="text-white font-weight-bold small">Click Here to Skip!</a>
                  </p>
            
             </form>
           </div>
       </div>
   </main>

   <footer class="text-center text-white mt-4 small">
     <p>Copyright&copy;2021PETCARE Corp.</p> 
   </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>