<?php
 session_start();
// include('security.php'); 

include('includes/header.php'); 
?>



<body style="background: url(background.jpg) ;"  >
<div class="container-fluid">


<!-- Outer Row -->
<div class="row justify-content-center">

<div class="col-md-4  col-sm-12"> 

    <div style="width:440px; height:335px;" class="card shadow-lg  text-primary  shadow-lg mt-5">
    <div class="card-header bg-info p-4 mb-3">
     
                <h1 class="h4 text-dark font-weight-bolder   text-center">Login Here!</h1>
    </div>
      <div class="card-body p-0">
        
        
       
<!--           
                <?php

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h6 class="bg-danger text-white"> '.$_SESSION['status'].' </h6>';
                        unset($_SESSION['status']);
                    }
                ?>
             -->
              

                <form class="user" action="loginadmin.php" method="POST">



                <!-- <div class="loginBox ">
		
		<img src="user.png" class="user">
		<h2>Log In Here</h2>
		<form>
			<p>Email Adress </p>
			<input type="email" name = "email" placeholder="Enter Email Adress">
			<p>Password</p>
			<input type="password" name = "password" placeholder="Enter Password">
			<input type="submit" name = "login_btn" value="sign In"> -->

<!-- 
            <label> Username </label><br> -->
                    <div class="form-group">

                    <label class="ml-5"> Username/Email </label><br>
                    <input style="width:80%;" type="email" name="email" class="form-control ml-5" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                    
                    <label class="ml-5">Password </label><br>
                    <input style="width:80%;" type="password" name="password" class=" form-control ml-5" placeholder="Password">
                  
            <input type="hidden" name="usertype" value="admin">
                    </div>
           
                    <button style="position:absolute; left:40%; top:84%; border-radius:14px; padding:10px 38px;" type="submit" name="login_btn" size="15px" class="btn btn-primary " > Login </button>
                    <hr>
                </form>
                


</div>


<?php
include('includes/scripts.php'); 

?>