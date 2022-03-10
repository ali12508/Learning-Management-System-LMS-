<?php
  include('security.php'); 
// session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div style="background-color: #00FA9A;" class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

                <?php
           $connection = mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT id FROM register ORDER BY id ";
                $query_run=mysqli_query($connection,$query);
                 $row=mysqli_num_rows($query_run);
                 echo'<h3>Total Admin:'.$row. '</h3>';


                ?>
              

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div style="background-color: pink;"   class="card border-left-success shadow h-100 py-2">
        <div  class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold  text-primary text-uppercase mb-1">Total Registered Students</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">


              <?php
           $connection = mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT id FROM student ORDER BY id ";
                $query_run=mysqli_query($connection,$query);
                 $row=mysqli_num_rows($query_run);
                 echo'<h4>Total Students:'.$row. '</h4>';


                ?>
             

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-xl-3 col-md-6 mb-4">
      <div style="background-color: aqua;"   class="card border-left-success shadow h-100 py-2">
        <div  class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold  text-primary text-uppercase mb-1">Total Registered Teachers</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">


              <?php
           $connection = mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT id FROM teacher ORDER BY id ";
                $query_run=mysqli_query($connection,$query);
                 $row=mysqli_num_rows($query_run);
                 echo'<h4>Total Teachers:'.$row. '</h4>';


                ?>
             

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-card fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div style="background-color: orange;" class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold  text-primary text-uppercase mb-1">Registered Courses</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php
           $connection = mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT id FROM course ORDER BY id ";
                $query_run=mysqli_query($connection,$query);
                 $row=mysqli_num_rows($query_run);
                 echo'<h4>Total courses:'.$row. '</h4>';


                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
// include('includes/footer.php');
?>