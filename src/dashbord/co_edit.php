
<?php
 session_start();
//  include('security.php'); 

include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Profile       
    </h6>
  </div>

  <div class="card-body">
               <!-- retrieve admin data from tables -->



               <?php
    $connection=mysqli_connect("localhost","root","","adminpanel");

  if(isset($_POST['edit_co']))
{
    $id=$_POST['edit_cid'];
     $query="SELECT * FROM course WHERE ID='$id' ";
     
     $query_run=mysqli_query($connection,$query);
     foreach($query_run as $row)
     {
         ?>




      <form action="code.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="edit_cd"value="<?php echo $row['id']; ?>" >
  
      <div class="form-group">
                <label class="pl-5 text-dark"> name of Applicant </label>
                <input style ="width:50%;" type="text" name="username"value="<?php echo $row['username']; ?>" class="form-control ml-5" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-dark"> Father name </label>
                <input style ="width:50%;" type="text" name="fathername"value="<?php echo $row['fathername']; ?>" class="form-control ml-5" placeholder="Enter fathername" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-dark">Email Id</label>
                <input  style ="width:50%;" type="email" name="email"value="<?php echo $row['email']; ?>" class="form-control ml-5" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-dark">Contact No</label>
                <input  style ="width:50%;" type="contact" name="contact"value="<?php echo $row['contact']; ?>" class="form-control ml-5" placeholder="Enter contact" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-dark">Adress</label>
                <input  style ="width:50%;" type="adress" name="adress"value="<?php echo $row['adress']; ?>" class="form-control ml-5" placeholder="Enter Adress" required>
            </div>
            <div class="form-group">
                <label class="pl-5 text-dark">kind of course Do u want</label>
                <select name="coursetype"value="<?php echo $row['coursetype']; ?>"required >
            <option>designing</option>
            <option >Devolopement</option>
            <option >Electronics</option>
            <option >Architecture</option>
            <option >Computer LAnguages</option>

            </select>
            </div>
            <div class="form-group">
                <label class="pl-5 text-dark">upload Image</label>
                <input  style ="width:50%;" type="file" name="co_image"value="<?php echo $row['co_image']; ?>" id="co_image"  required>
            </div>
 

            <div class="form-group">
                <label class="pl-5 text-dark"> course Duration</label>
                <select name="courseduration"value="<?php echo $row['courseduration']; ?>" required >
            <option >2 month</option>
            <option >3 month</option>
            <option >4 month</option>
            <option >6 month</option>
          

            </select>
            </div>
            
            <a href="addstudent.php" class="btn btn-danger">Cancel</a>
            <button type= "submit" name="update_co"class="btn btn-primary">Update</button>
   </form>
            <?php
        }
    }

?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>