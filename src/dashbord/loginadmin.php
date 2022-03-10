<?php
//  include('security.php'); 
 session_start();




 $connection = mysqli_connect("localhost","root","","adminpanel");

 if(isset($_POST['login_btn']))
 {  
        $email=$_POST['email'];
 $password=$_POST['password'];

 
 
 $query="SELECT * FROM register WHERE email='$email' AND password='$password'";
 $query_run=mysqli_query($connection,$query);
 
 
  $usertype=mysqli_fetch_array($query_run);
  if($usertype['usertype'] == "admin")
 {
   $_SESSION['username']=$email ;
//    echo"admin is logged on Successfully";
  header('Location: register.php');
 }
 
 
 
  else
  {
  echo" <script> alert('email id/ password is invalid');  </script>";
 
  // header('Location:login.php');
  }
 


 
 }


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!-- <form action="login.php">
 -->  
 <a href="login.php">Go Back</a>
<!-- </form>
 --></body>
</html>