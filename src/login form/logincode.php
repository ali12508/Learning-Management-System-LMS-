<?php
//  include('security.php'); 
 session_start();




 $connection = mysqli_connect("localhost","root","","adminpanel");

 if(isset($_POST['login_btn']))
 {  
        $email=$_POST['email'];
 $password=$_POST['password'];

 
 
 $query="SELECT * FROM student WHERE email='$email' AND password='$password'";
 $query_run=mysqli_query($connection,$query);
 
 
  $usertype=mysqli_fetch_array($query_run);
  if($usertype['usertype'] == "student")
 {
   $_SESSION['username']=$email;
  header('Location: admission.php');
 }
 
 
 
  else
  {
  echo'email id/ password is invalid';
 
  header('Location:login.html');
  }
 


 
 }
 
 
 















?>