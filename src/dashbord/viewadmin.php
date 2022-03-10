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
$query="SELECT * FROM register";
$query_run= mysqli_query($connection,$query);

?>
  <table style="" class="table table-bordered   " id="dataTable" width="100%" cellspacing="0">
    <thead class="text-dark bg-warning font-weight-bolder">
      <tr class="text-info font-weight-bold ">
        <th > ID </th>
        <th> Username </th>
        <th>Email </th>
        <th>Password</th>
        <th>usertype</th>
        <th>Date</th>
     
        
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
<td> <?php echo $row['id'];      ?>  </td>
        <td  > <?php echo $row['username']; ?>  </td>
        <td  > <?php echo $row['email'];   ?>  </td>
        <td  > <?php echo $row['password']; ?>  </td>
        <td  > <?php echo $row['usertype']; ?>  </td>
         <td  > <?php echo $row['date']; ?>  </td>
        
        <td>
     
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