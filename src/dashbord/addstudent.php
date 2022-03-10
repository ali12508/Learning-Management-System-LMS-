<?php
// session_start();
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card-body">
  <?php

if(isset($_SESSION['success'])&& $_SESSION['success']!="" ){
  echo '<h2 class="bg-primary text-light">'. $_SESSION['success']. '</h2>';
  unset( $_SESSION['success']);
}
if(isset($_SESSION['status'])&& $_SESSION['status']!="" ){
  echo '<h2 class="bg-info text-light">'.$_SESSION['status']. '</h2>';
  unset( $_SESSION['status']);
}
?>


<div class="row">
<div class="col-md-2">
</div>

<div class="col-md-8">

      <form action="code.php" class="bg-info" method="POST" enctype="multipart/form-data">

        

            <div class="form-group">
                <label class="pl-5 text-white"> Username </label>
                <input style ="width:50%;" type="text" name="username" class="form-control ml-5" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Email</label>
                <input  style ="width:50%;" type="email" name="email" class="form-control ml-5" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Password</label>
                <input  style ="width:50%;" type="password" name="password" class="form-control ml-5" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Confirm Password</label>
                <input  style ="width:50%;" type="password" name="confirmpassword" class="form-control ml-5" placeholder="Confirm Password" required>
            </div>
      
        <input type="hidden" name="usertype" value="student">
        <div class="form-group">
                <label class="pl-5 text-white">upload Image</label>
                <input  style ="width:50%;" type="file" name="st_image" id="st_image"  required>
            </div>
 
            <button type="submit" name="registerstudent" class="btn btn-primary ml-5 text-white">Save</button>
        
      </form>
      </div>
      <div class="col-md-2">
</div>
      </div>

 


  




















<?php
include('includes/scripts.php');
include('includes/footer.php');
?>