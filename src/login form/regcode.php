<?php


session_start();


$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['submit']))
{
    $Date=date('yy-m-d');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['compass'];
    $usertype=$_POST['usertype'];
    $images=$_FILES["st_image"]['name'];

     if($password === $confirm_password)
     {
        $query = "INSERT INTO student (date,username,email,password,usertype,image) VALUES ( '$Date','$username','$email', MD5('.$password.'),'$usertype','$images')";
        $query_run = mysqli_query($connection, $query);
  
        if($query_run)
        {
        
       // echo "<script> 


       //    alert('Student data inserted Successfully');

       //         </script>";

            move_uploaded_file($_FILES["st_image"]["tmp_name"],"../dashbord/upload/".$_FILES["st_image"]['name']);

            header('Location: register.php');
        }
        else 
        {
            echo "student is Not Added";
            header('Location: register.php');
        }
    }

 }

?>