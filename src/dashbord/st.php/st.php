<?php
// include('security.php'); 


$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerbt']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];

    if($password === $confirm_password)
    {
        $query = "INSERT INTO student (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: register.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: register.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: register.php');
    }

}

if(isset($_POST['update_btn']))
{
    $id=$_POST['edit_id'];
    $username= $_POST['edit_username'];
    $email= $_POST['edit_email'];
    $password= $_POST['edit_password'];

    $query="UPDATE student SET username='$username',email='$email',password='$password' WHERE id='$id' ";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
     {
     
        $_SESSION['success']="your data is updated";
        header('location: register.php');

     }
     else{
        $_SESSION['status']="your data is NOT updated";
        header('location: register.php');

     }
}
if(isset($_POST['delete_btn']))
{
    $id=$_POST['delete_id'];
    $query="DELETE FROM student  WHERE id='$id' ";
    $query_run=mysqli_query($connection,$query);

if($query_run)
{

   $_SESSION['success']="your data is deleted";
   header('location: register.php');

}
else{
   $_SESSION['status']="your data is NOT deleted";
   header('location: register.php');

}
}



    
?>