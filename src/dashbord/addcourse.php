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
                <label class="pl-5 text-white"> name of Applicant </label>
                <input style ="width:50%;" type="text" name="username" class="form-control ml-5" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white"> Father name </label>
                <input style ="width:50%;" type="text" name="fathername" class="form-control ml-5" placeholder="Enter fathername" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Email Id</label>
                <input  style ="width:50%;" type="email" name="email" class="form-control ml-5" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Contact No</label>
                <input  style ="width:50%;" type="contact" name="contact" class="form-control ml-5" placeholder="Enter contact" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Adress</label>
                <input  style ="width:50%;" type="adress" name="adress" class="form-control ml-5" placeholder="Enter Adress" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white">kind of course Do u want</label>
                <select name="coursetype"required >
            <option>designing</option>
            <option >Devolopement</option>
            <option >Electronics</option>
            <option >Architecture</option>
            <option >Computer LAnguages</option>

            </select>
            </div>
            <div class="form-group">
                <label class="pl-5 text-white">upload Image</label>
                <input  style ="width:50%;" type="file" name="co_image" id="co_image"  required>
            </div>
 

            <div class="form-group">
                <label class="pl-5 text-white"> course Duration</label>
                <select name="courseduration" required >
            <option >2 month</option>
            <option >3 month</option>
            <option >4 month</option>
            <option >6 month</option>
          

            </select>
            </div>
          
      
     
            <button type="submit" name="registercourse" class="btn btn-primary ml-5 text-white">Save</button>
      
        
      </form>
      </div>
      <div class="col-md-2">
</div>
      </div>

 


  




















<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
