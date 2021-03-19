<body>
    <?php
     include "../views/menu.php";
     require_once "../classes/user.php";

     $user = new User;
     $user_details = $user->getUser($_SESSION['user_id']);
     $user_details2 = $user->getUsername($_SESSION['user_id']);
    
    ?>

    <main class="container row mx-auto my-5">
       <article class="col-sm-6 col-md-7 col-lg-7 mt-5">
          <div class="card">

             <div class="card-header text-center bg-warning">
                <div class="display-4"><?= $user_details['first_name'] . " " . $user_details['last_name']?></div>
             </div>

             <div class="card-body">
                <table class="table">
                  <tbody>
                     <tr>
                        <td class="font-weight-bold">Username</td>
                        <td><?= $user_details2['username']?></td>
                     </tr>
                     <tr>
                        <td class="font-weight-bold">Address</td>
                        <td><?= $user_details['address']?></td>
                     </tr>
                
                     <tr>
                        <td class="font-weight-bold">Email</td>
                        <td><?= $user_details['email']?></td>
                     </tr>
                
                     <tr>
                        <td class="font-weight-bold">Contact Number</td>
                        <td><?= $user_details['contact_number']?></td>
                     </tr>
                  </tbody>
                </table>
             </div>
          </div>


       </article>

    <!-- Upadte Info (w/ already updated info) -->
      <article class="card col-sm-6 col-md-5 col-lg-5">
        <div class="card-header bg-white text-center">
            <p class="lead pt-2" style="font-size:25px;">Update Details</p>
        </div>
         
        <div class="card-body">
         <form action="../actions/updateUser.php" method="post">
             <input type="hidden" name="user_id" value="<?= $user_details['id']?>">
             <label for="full_name">Full Name</label>
             <div class="input-group mb-3">
                <input type="text" name="first_name" id="full_name" class="form-control" placeholder="First Name" value="<?= $user_details['first_name']?>" autofocus>
                <input type="text" name="last_name" id="full_name" class="form-control" placeholder="Last Name" value="<?= $user_details['last_name']?>">
             </div>

             <label for="address">Address</label>
             <input type="text" name="address" id="address" class="form-control mb-3" placeholder="Address" value="<?= $user_details['address']?>">

             <label for="email">Email</label>
             <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Email" value="<?= $user_details['email']?>">

             <label for="contact_num">Contact Number</label>
             <input type="text" name="contact_num" id="contact_num" class="form-control mb-4" placeholder="Contact Number" value="<?= $user_details['contact_number']?>">

             <button type="submit" class="form-control btn btn-outline-warning mb-3">Update</button>
         </form>

              <p class="small font-italic text-right">Do you want to change Username and Password? <a href="../views/updateUsername.php">Click here</a></p>
        </div>
      </article>
    </main>

    <?php include "../views/footer.php";?>

</body>
