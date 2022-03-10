<?php
// session_start();
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade bg-info" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>


            <input type="hidden" name="usertype" value="admin">
        </div>
        <div class="form-group">
                <label>upload Image</label>
                <input type="file" name="ad_image" id="ad_image"  required>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registeradmin" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>



<div class="modal fade bg-info" id="addstudentprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add student Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <input type="hidden" name="usertype" value="student">
        <div class="form-group">
                <label>upload Image</label>
                <input type="file" name="st_image" id="st_image"  required>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerstudent" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<html>
  <head>
</head>
<body>
<div class="modal fade bg-info" id="addteacherprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add teacher Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" onsubmit="validation()" id="login"  enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" onclick="ONClICK(this)" onmouseleave="onMouseLeave(this)" placeholder="Enter Username"required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" onclick="ONClICK(this)" onmouseleave="onMouseLeave(this)" placeholder="Enter Email"required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" onclick="ONClICK(this)" onmouseleave="onMouseLeave(this)" placeholder="Enter Password"required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" onclick="ONClICK(this)" onmouseleave="onMouseLeave(this)" placeholder="Confirm Password"required>
            </div>
        
        </div>
        <input type="hidden" name="usertype" value="teacher">
        <div class="form-group">
        <label>upload Image</label>
                <input type="file" name="te_image" id="te_image"  required>
            </div>
      
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerteacher" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

</body>
</html>



<script type="text/javascript">
    function ONClICK(ele) {
      ele.style.background = "yellow";
      ele.style.color = "black";
    }

    function onMouseLeave(ele) {
      ele.style.background = "palegreen";
      ele.style.color = "red";
    }

  function validation() {
     var uname = document.forms["login"]["Username"].value;
    var Email = document.forms["login"]["email"].value;
  //     // var Address = document.forms["login"]["address"].value;
    var p2 = document.forms["login"]["ComPassword"].value;
  //     // var phone = document.forms["login"]["Phone"].value;
  //     if (Address.length >= 20) {
  //       alert("Sorry Address length is to large");
  //     }
      if ((uname.length >= 20) || (uname.length <= 6)) {
        if ((uname.length) >= 20) {
          alert("Sorry username is to large");
       } else {
          alert("Sorry username is very samll");
      }
     }
       if ((!isNaN(uname))) {
        if (isNaN(uname)) {

        } else {
          alert("please enter character");
       }
      }
       if (p1.length >= 12) {
        alert("Password Length is to large");
      }
       if (p1.length <= 8) {
        alert("Password length is small");
     }
     if (p2.length >= 12) {
        alert("Password Length is to large");
      }
      if (p2.length <= 6) {
       alert("Password length is small");
      }
      if (p1 != p2) {
       alert("Password is not match with confirm password");
      }
      // if (isNaN(phone)) {
      //   if (!isNaN(phone)) {

  //       } else {
  //         alert("please enter numeric value onlly");
  //       }
  //     }
  //   }
   </script>



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

<div class="container-fluid">
 <div class="row ">



  <div class=" col-lg-12 col-md-12 col-sm-12 wow fadeInDown">

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="1" class="active"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="wow bounceInRight" src="s1.png" alt="Los Angeles" width="100%" height="600px" style="padding-top:15px; padding-bottom: ;"  >
        <div class="carousel-caption">
        <h3 style="color: green; font-family: serif; font-size: 50px;">Awesome Instructors Panel</h3>
        
      </div> 
    </div>
    <div class="carousel-item">
      <img src="s2.png" alt="Chicago" width="100%" height="600px"  style="padding-top:15px; padding-bottom: ;"   >
      <div class="carousel-caption">
        <h3 style="color: teal; font-family: serif; font-size: 50px;">Top Experts</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="boys.png" alt="New York" width="100%" height="600px"style="padding-top:15px; padding-bottom: px;"  >
      <div class="carousel-caption">
        <h3 style="color: red; font-family: serif; font-size: 50px;">Unmatched Approach</h3>
       
      </div>   
    </div>

     <div class="carousel-item">
      <img src="s3.png" alt="New York" width="100%" height="600px"style="padding-top:15px; padding-bottom: px;"  >
      <div class="carousel-caption">
        <h3 style="color: red; font-family: serif; font-size: 50px;">Unmatched Approach</h3>
       
      </div>   
    </div>

    <div class="carousel-item">
      <img src="aca3.png" alt="New York" width="100%" height="600px"style="padding-top:15px; padding-bottom: px;"  >
      <div class="carousel-caption">
        <h3 style="color: red; font-family: serif; font-size: 50px;">Awesome Instructors Panel</h3>
       
      </div>   
    </div>
 

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>


</div>


    
<?php
include('includes/scripts.php');

?>