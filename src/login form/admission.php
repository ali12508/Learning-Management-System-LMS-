
<?php



include('security.php'); 

?>

<html>


<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anony
    mous" />

           
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
 crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    
     <style>

         body{
             background: url(pic.jpg);
             background-position: center;
             background-size: cover;
         }
     </style>
</head>
<body>
   

  <nav style="background-color:purple;" class="navbar ">

       

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline  mr-auto   navbar-search">
            <div class="input-group">
              <input  style="border-radius:13px;" type="text" class="form-control bg-light  small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group">

                <button style="border-radius:px;" class=" form-control btn btn-info" type="button">
                  <i class="fas fa-search  text-white"></i>
                </button>
              </div>
            </div>
          </form>



 <a class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 
              <img style="width:40px; height:40px;  border-radius:50%;" ;class="img-profile  " src="https://cdn.pixabay.com/photo/2017/03/04/12/15/programming-2115930_960_720.jpg">

          
 
          
              
                         </span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
        

          </ul>

        </nav>
        <!-- End of Topbar -->
  
  <!-- Logout Modal-->
  <div  class="modal fade"  id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div style="background-color:aqua;" class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>

        <div style="background-color:aqua;" class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div style="background-color:aqua;" class="modal-footer">
          <button class="btn btn-secondary mb-3" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>   

</div>
</div></div></div>


<div  class="d-flex justify-content-center mt-3  ">
    <div style="width:500px; height:740px; " class="card ">
        <div class="card-header">
            <h3 class="text-info font-weight-bold text-center  " >Course Registration Form</h3>
        </div>
                                   
<form action="admission.php"  class="forms" id="login" onsubmit="return validation()" method="POST" enctype="multipart/form-data">

        
<div class="card-body bg-success">
            <div class="form-group">
                <label class="pl-5 text-white"> name of Applicant </label>
                <input style ="width:50%;" type="text" name="username" class="form-control ml-5" placeholder="Enter Username" required>
                 <span id="message1" class="text-danger font-weight-bold"> </span>

            </div>
            <div class="form-group">
                <label class="pl-5 text-white"> Father name </label>
                <input style ="width:50%;" type="text" name="fathername" class="form-control ml-5" placeholder="Enter fathername" required>
                <span id="message3" class="text-danger font-weight-bold"> </span>

            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Email Id</label>
                <input  style ="width:50%;" type="email" name="email" class="form-control ml-5" placeholder="Enter Email" required>
                     <span id="message2" class="text-danger font-weight-bold"> </span>

            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Contact No</label>
                <input  style ="width:50%;" type="contact" name="contact" class="form-control ml-5" placeholder="Enter contact" required>
         <span id="message5" class="text-danger font-weight-bold"> </span>

            </div>
            <div class="form-group">
                <label class="pl-5 text-white">Adress</label>
                <input  style ="width:50%;" type="adress" name="adress" class="form-control ml-5" placeholder="Enter Adress" required>
           <span id="message4" class="text-danger font-weight-bold"> </span>

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
            <button  type="submit" name="submit" onClick="confSubmit(this.form);" class="btn  btn-primary ml-5  px-4 text-white">Save</button>
        </div>

          
      
     
          
      
        
      </form>
    </div>
    </div>    



<script type="text/javascript">

        


    function validation() {
      var letter = /^[A-Za-z ]+$/;

      var EmailValid = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var uname = document.forms["login"]["username"].value;
      var fname = document.forms["login"]["fathername"].value;
       var AddressValid = /^[0-9a-zA-Z]+$/;
      var PhoneValid = /^\(?([0-9]{4})\)?[-. ]?([0-9]{7})$/;
   var Address = document.forms["login"]["adress"].value;
    var phone = document.forms["login"]["contact"].value;
      var Email = document.forms["login"]["email"].value;
    
 
      var m=0;

 if (!(Email.match(EmailValid))){
        document.getElementById('message2').innerHTML=" **sorry invalid email";
        m=1;
      }
      if ((uname.length >= 30) || (uname.length <= 4)) {
        if ((uname.length) >= 30) {
          document.getElementById('message1').innerHTML=" **Sorry username is to large";
          m=1;
        } else {
          document.getElementById('message1').innerHTML=" **Sorry username is very samll";
          m=1;
        }
      }

     if ((fname.length >= 30) || (fname.length <= 4)) {
        if ((fname.length) >= 30) {
          document.getElementById('message3').innerHTML=" **Sorry fathername is to large";
          m=1;
        } else {
          document.getElementById('message3').innerHTML=" **Sorry fathername is very samll";
          m=1;
        }
      }

       if (!(phone.match(PhoneValid))) {
      
        document.getElementById('message5').innerHTML=" **Phone no is invalid.";
        m=1;
      }

      
        if (!(Address.match(AddressValid))) {
      
        document.getElementById('message4').innerHTML=" **Adress is invalid.";
        m=1;
      }

      if (!(uname.match(letter))) {
    
        document.getElementById('message1').innerHTML=" **username must have alphabet only";
        m=1;
      }

     
      if(true)
      {
        if(m==1)
        {
          return false;
        }
        else{
          return true;
        }
      }
    }




    </script>


    <script type="text/javascript">

        function confSubmit(form) {
        if (confirm("Are you sure you want to submit the form?")) {
        form.submit();
        }
        
        else {
        alert("You decided to not submit the form!");
        }
        }
        </script>
        
        <script type="text/javascript">
        
        $('form').on('submit',function(){
                   alert('submitted');
        });
        
        
        </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
	

</html>
</body>




<?php
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $fathername= $_POST['fathername'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $adresss = $_POST['adress'];
    $coursetype=$_POST['coursetype'];
    $courseduration=$_POST['courseduration'];
    $images=$_FILES["co_image"]['name'];

    

        $query = "INSERT INTO course (username,fathername,email,contact,adress,coursetype,courseduration,image) VALUES ('$username','$fathername' ,'$email', '$contact', '$adresss','$coursetype','$courseduration','$images')";
        $query_run = mysqli_query($connection, $query);
      
    
        if($query_run)
        {
           

            move_uploaded_file($_FILES["co_image"]["tmp_name"],"../dashbord/upload/".$_FILES["co_image"]['name']);
          echo "course is Added Successfully";
         
        }
        else 
        {
    echo "course is Not Added";
            header('Location: admission.php ');
}
}




   ?>