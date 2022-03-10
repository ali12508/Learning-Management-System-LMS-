
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

  if(isset($_POST['edit_te']))
{
    $id=$_POST['edit_tid'];
     $query="SELECT * FROM teacher WHERE ID='$id' ";
     
     $query_run=mysqli_query($connection,$query);
     foreach($query_run as $row)
     {
         ?>




      <form action="code.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="edit_td"value="<?php echo $row['id']; ?>" >
  <div class="form-group">
                <label> Username </label>
                <input type="text" name="edit_username" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="edit_password" value="<?php echo $row['password']; ?>" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>usertype</label>
            <select name="update_usertype" >
            <option value="admin">Admin</option>
            <option value="student">Student</option>
            <option value="teacher">Tacher</option>
            </select>
            </div>
            <div class="form-group">
                <label>upload image</label>
                <input type="file" name="t_image" id="t_image" value="<?php echo $row['image']; ?>" class="form-control" placeholder="Enter Password">
            </div>
            
            <a href="addsteacher.php" class="btn btn-danger">Cancel</a>
            <button type= "submit" name="update_te"class="btn btn-primary">Update</button>
   </form>
            <?php
        }
    }

?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>