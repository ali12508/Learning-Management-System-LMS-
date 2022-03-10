<?php
//  include('security.php'); 
 session_start();






$connection = mysqli_connect("localhost","root","","adminpanel");
$query="SELECT * FROM student WHERE email='$email' AND password='$password'";
$query_run=mysqli_query($connection,$query);


 $usertype=mysqli_fetch_array($query_run);
 if($usertype['usertype'] == "student")
{
  $_SESSION['username']=$email;
 header('Location: admission.php');
}



//  else if($usertypes['usertype'] == "student")

//  {
//      $_SESSION['username']=$email_login;     header('Location: ./lms/src/index.html');
//  }

//  else if($usertypes['usertype'] == "teacher")

//  {     $_SESSION['username']=$email_login;
//      header('Location: register.php');
//  }

 else
 {
 $_SESSION['status']='email id/ password is invalid';

 header('Location: login.html');
 }












?>