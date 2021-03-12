<body>
     <?php 
        include "menu.php";
        require_once "../classes/user.php";

        $user = new User;
        $user_details = $user->getUser($_SESSION['user_id']);
     ?>

    <main class="container w-50 my-5">
      <div class="card">
        <div class="card-header bg-white text-center">
            <p class="lead">Update Username & Password</p>
        </div>
         
        <div class="card-body">
         <form action="../actions/updateUsername.php" method="post">
             <input type="hidden" name="user_id" value="<?= $user_details['id']?>">
             
             <label for="username">New Username</label>
             <input type="text" name="username" id="username" class="form-control mb-3" placeholder="Username">

             <label for="password">New Password</label>
             <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password">

             <label for="confirm_password">Confirm Password</label>
             <input type="password" name="confirm_password" id="confirm_password" class="form-control mb-3" placeholder="Confirm Password">

             <button type="submit" class="form-control btn btn-outline-warning mb-3">Update</button>
         </form>

             <a href="../views/profile.php" class="btn btn-outline-danger">Cancel</a>
        </div>
      </div>
    </main>

    <?php include "footer.php";?>

</body>