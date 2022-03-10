<?php
// session_start();
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

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

<div class="table-responsive">

<?php
$connection=mysqli_connect("localhost","root","","adminpanel");
$query="SELECT * FROM course";
$query_run= mysqli_query($connection,$query);

?>
  <table  class="table table-bordered   " id="dataTable" width="100%" cellspacing="0">
    <thead class="text-dark bg-warning font-weight-bolder">
      <tr class="text-info font-weight-bold ">
        <th > ID </th>
        <th> Username </th>
        <th> fathername </th>
      
        <th>Email </th>
        <th>contact</th>
        <th> adress</th>
        <th>coursetype</th>
        <th>courseduration</th>
        <th>Date</th>
        <th>image</th>
        <th>DELETE</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    if(mysqli_num_rows($query_run)> 0 )
    {
      while($row=mysqli_fetch_assoc($query_run))
      {
    
      ?>

      <tr >
        <td  class="text-center pt-5 "> <?php echo $row['id'];      ?>  </td>
        <td  class="text-center pt-5 "> <?php echo $row['username']; ?>  </td>
        <td  class="text-center pt-5 "> <?php echo $row['fathername']; ?>  </td>
        <td  class="text-center pt-5 "> <?php echo $row['email'];   ?>  </td>
        <td  class="text-center pt-5 "> <?php echo $row['contact']; ?>  </td>
        <td  class="text-center pt-5 "> <?php echo $row['adress']; ?>  </td>
        <td  class="text-center pt-5 "> <?php echo $row['coursetype']; ?>  </td>  
        <td  class="text-center pt-5 "> <?php echo $row['courseduration']; ?>  </td>
        <td  class="text-center pt-5 "> <?php echo $row['date']; ?>  </td>
        <td  class="text-center pt-5 "> <?php echo '<img src="upload/'.$row['image']. '" alt="image" width="60px;" height="60px;"> '?> </td>
        <td>
            <form action="code.php" method="post">
                <input type="hidden" name="delete_cid" value="<?php echo $row['id']; ?>">
                <button   type="submit" name="delete_co" class="btn btn-success mt-5 "> DELETE</button>
            </form>
        </td>
     

        
        </tr>
        <?php
      }
    }
    else{
      echo"NO RECORD FOUND";
    }
    ?>
    
    </div>
     

  




















<?php
include('includes/scripts.php');

?>