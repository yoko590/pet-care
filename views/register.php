<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
<title>Register</title>
</head>

<body>
    <?php include "menu.php";?>

    <main class="container mt-4">
        <div class="jumbotron rounded-pill mt-5 text-white" style="background-color:#e7717dbe;">
            <p class="display-4  text-center">Hello Guest ! <i class="far fa-smile"></i></p>
            <p class="h4 lead mb-3 text-center">Please fill out this form to join us !</p>
        </div>

        <div class="card w-50 mx-auto mb-5">
            <div class="card-body">
                <form action="../actions/register.php" method="post">
                    <label for="full_name">Full Name</label>
                    <div class="input-group">
                        <input type="text" name="first_name" id="full_name" class="form-control mb-3" placeholder="First Name" required autofocus>
                        
                        <input type="text" name="last_name" class="form-control mb-3" placeholder="Last Name" required>
                    </div>

                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control mb-3" placeholder="Address" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Email" required>

                    <label for="contact_num">Contact Number</label>
                    <input type="text" name="contact_num" id="contact_num" class="form-control mb-3" placeholder="Contact Number" required>

                    <label for="username" class="font-weight-bold" >Username</label>
                    <input type="text" name="username" id="username" class="form-control font-weight-bold mb-3" placeholder="Username" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password" required>

                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control mb-5" placeholder="Confirm Password"required>

                    <button type="submit" class="form-control btn btn-outline-dark">Register</button>
                </form>
            </div>
        </div>
    </main>

    <?php include "footer.php";?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>