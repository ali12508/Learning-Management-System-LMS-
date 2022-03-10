<?php
// include('security.php'); 

session_start();





$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registercourse']))
{
    $Date=date('yy-m-d');
    $username = $_POST['username'];
    $fathername= $_POST['fathername'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $adresss = $_POST['adress'];
    $coursetype=$_POST['coursetype'];
    $courseduration=$_POST['courseduration'];
    $images=$_FILES["co_image"]['name'];

    

        $query = "INSERT INTO course (date,username,fathername,email,contact,adress,coursetype,courseduration,image) VALUES ('$Date','$username','$fathername' ,'$email', '$contact', '$adresss','$coursetype','$courseduration','$images')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
           

            move_uploaded_file($_FILES["co_image"]["tmp_name"],"upload/".$_FILES["co_image"]['name']);
            $_SESSION['success'] =  "course is Added Successfully";
            header('Location: viewcourse.php');
        }
        else 
        {
    
            $_SESSION['status'] =  "course is Not Added";
            header('Location: addcourse.php');
        }
    }
    // else 
    // {
    //     echo "pass no match";
    //     $_SESSION['status'] =  "Password and Confirm Password Does not Match";
    //     header('Location: addstudent.php');
    // }












                  // register admin //

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registeradmin']))
{
    $Date=date('yy-m-d');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $usertype=$_POST['usertype'];
  
    
//  if(strlen($username) <=5)
//     {
//         echo"<span style='color:red;'>Username Should Be more than 5 characters </span>";
//     }

// define variables and set to empty values
// $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $username = $email = $gender = $comment = $website = "";
// if (empty($_POST["username"])) {
//     $nameErr = "Name is required";
//   }

    if($password === $confirm_password)
    {
        $query = "INSERT INTO register ( date,username,email,password,usertype,image) VALUES ('$Date','$username','$email', MD5('.$password.') ,'$usertype','$images')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            // echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: viewadmin.php');
        }
        else 
        {
            // echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: viewadmin.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: addadmin.php');
    }

}
           // register student //

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerstudent']))
{

    $Date=date('yy-m-d');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $usertype=$_POST['usertype'];
    $images=$_FILES["st_image"]['name'];

    if($password === $confirm_password)
    {
        $query = "INSERT INTO student (date,username,email,password,usertype,image) VALUES ('$Date','$username','$email', MD5('.$password.'),'$usertype','$images')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "done";
            move_uploaded_file($_FILES["st_image"]["tmp_name"],"upload/".$_FILES["st_image"]['name']);

            $_SESSION['success'] =  "student is Added Successfully";
            header('Location: viewstudent.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "student is Not Added";
            header('Location: addstudent.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: addstudent.php');
    }

}
     // register teacher//

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerteacher']))
{
    $Date=date('yy-m-d');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $usertype=$_POST['usertype'];
    $images=$_FILES["te_image"]['name'];
    

    if($password === $confirm_password)
    {
        $query = "INSERT INTO teacher (date,username,email,password,usertype,image) VALUES ('$Date','$username','$email', MD5('.$password.'),'$usertype','$images')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "done";
            move_uploaded_file($_FILES["te_image"]["tmp_name"],"upload/".$_FILES["te_image"]['name']);

            $_SESSION['success'] =  "teacher is Added Successfully";
            header('Location: viewteacher.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "teacher is Not Added";
            header('Location: viewteacher.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: addteacher.php');
    }
}


                 // update admin //
 $connection = mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['update_ad']))
{
    $id=$_POST['edit_add'];
    $username= $_POST['edit_username'];
    $email= $_POST['edit_email'];
    $password= $_POST['edit_password'];
    $usertypeupdate= $_POST['update_usertype'];


    $query="UPDATE register SET username='$username',email='$email',password='$password', usertype='$usertypeupdate' , image='$images' WHERE id='$id' ";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
     {
      
        $_SESSION['success']="your data is updated";
        header('location: viewadmin.php');

     }
     else{
        $_SESSION['status']="your data is NOT updated";
        header('location: viewadmin.php');

     }
}
if(isset($_POST['delete_ad']))
{
    $id=$_POST['delete_aid'];
    $query="DELETE FROM register  WHERE id='$id' ";
    $query_run=mysqli_query($connection,$query);

if($query_run)
{

   $_SESSION['success']="your data is deleted successfully";
   header('location: deleteadmin.php');

}
else{
   $_SESSION['status']="your data is NOT deleted";
   header('location:  deleteadmin.php');

}
}
 
 // update  student //

 $connection = mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['update_st']))
{
    $id=$_POST['edit_sd'];
    $username= $_POST['edit_username'];
    $email= $_POST['edit_email'];
    $password= $_POST['edit_password'];
    $usertypeupdate= $_POST['update_usertype'];
    $images=$_FILES["s_image"]['name'];

    $query="UPDATE student SET username='$username',email='$email',password='$password', usertype='$usertypeupdate', image='$images' WHERE id='$id' ";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
     {
     
        $_SESSION['success']="your data is updated";
        header('location: viewstudent.php');

     }
     else{
        $_SESSION['status']="your data is NOT updated";
        header('location: viewstudent.php');

     }
}
if(isset($_POST['delete_st']))
{
    $id=$_POST['delete_sid'];
    $query="DELETE FROM student  WHERE id='$id' ";
    $query_run=mysqli_query($connection,$query);

if($query_run)
{

   $_SESSION['success']="your data is deleted";
   header('location: deletestudent.php');

}
else{
   $_SESSION['status']="your data is NOT deleted";
   header('location: deletestudent.php');

}
}
 
 // update teacher //

 $connection = mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['update_te']))
{
    $id=$_POST['edit_td'];
    $username= $_POST['edit_username'];
    $email= $_POST['edit_email'];
    $password= $_POST['edit_password'];
    $usertypeupdate= $_POST['update_usertype'];
    $images=$_FILES["t_image"]['name'];

    $query="UPDATE teacher SET username='$username',email='$email',password='$password', usertype='$usertypeupdate', image='$images' WHERE id='$id' ";
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
if(isset($_POST['delete_te']))
{
    $id=$_POST['delete_tid'];
    $query="DELETE FROM teacher WHERE id='$id' ";
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
 






    
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['update_co']))
{
    $id=$_POST['edit_cd'];
    $username = $_POST['username'];
    $fathername= $_POST['fathername'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $adress = $_POST['adress'];
    $coursetype=$_POST['coursetype'];
    $courseduration=$_POST['courseduration'];
    $images=$_FILES["co_image"]['name'];

    

        $query = "UPDATE course SET username='$username', fathername='$fathername', email='$email', contact='$contact', adress='$adress', coursetype='$coursetype', courseduration='$courseduration', image='$images' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
       
    
        if($query_run)
        {
           

            move_uploaded_file($_FILES["co_image"]["tmp_name"],"upload/".$_FILES["co_image"]['name']);
            $_SESSION['success'] =  "course is UPDATED Successfully";
            header('Location: updatecourse.php');
        }
        else 
        {
    
            $_SESSION['status'] =  "course is Not UPDATED";
            header('Location: updatecourse.php');
        }
    }


        if(isset($_POST['delete_co']))
        {
            $id=$_POST['delete_cid'];
            $query="DELETE FROM course WHERE id='$id' ";
            $query_run=mysqli_query($connection,$query);
        
        if($query_run)
        {
        
           $_SESSION['success']="your data is deleted";
           header('location: deletecourse.php');
        
        }
        else{
           $_SESSION['status']="your data is NOT deleted";
           header('location: deletecourse.php');
        
        }



    }





?>