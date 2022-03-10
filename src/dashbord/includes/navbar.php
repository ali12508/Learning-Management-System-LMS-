   
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .aa{
      padding-bottom: 6px;
      color: green;
    }
   .aa:hover{
      background: aqua;
      color: black!important;
      font-weight: 700;
      font-size: 15px;
      border-radius: 20px;
    }
  </style>
  <title></title>
</head>
<body>


   <!-- Sidebar -->
   <ul style="background-color:#FF1493	;" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">ADMIN <sup>Panel</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>




<li class="nav-item">
  <a class="nav-link" href="register.php">
    <i class="fas fa-fw fa-chart-area text-info"></i>
    <span> Profiles</span></a>
</li>



<!-- Nav Item - Utilities Collapse Menu -->
<h4 class=" text-info font-weight-bold pl-4">STUDENT</h4>
<li class="nav-item aa ">

              <a style="background: purple; border-radius: 20px;" class="nav-link " id="active" href="addstudent.php"><i class="fa fa-user"  data-toggle="modal" data-target="#addstudentprofile"  ></i>  Add Student
               </a>
            </li>

            <li class="nav-item aa ">
              <a style="background: purple; border-radius: 20px;" class="nav-link "  href="updatestudent.php"><i class="fa fa-user"></i>  update Student
               </a>
            </li>

            <li class="nav-item aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link"  href="viewstudent.php"><i class="fa fa-user"></i> View Student
               </a>
            </li>
            <li class="nav-item aa ">
              <a style="background: purple; border-radius: 20px;" class="nav-link"  href="deletestudent.php"><i class="fa fa-user"></i> Delete Student
               </a>
            </li>
            <h4 class=" text-info font-weight-bold pl-4">COURSE</h4>
            <li class="nav-item aa ">
              <a style="background: purple; border-radius: 20px;" class="nav-link"  href="addcourse.php"><i class="fa fa-home"></i> Register course
               </a>
            </li>

            <li class="nav-item aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link"  href="viewcourse.php"><i class="fa fa-home"></i> View course
               </a>
            </li>

            <li class="nav-item aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link"  href="updatecourse.php"><i class="fa fa-home"></i> update course
               </a>
            </li>
            <li class="nav-item aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link"  href="deletecourse.php"><i class="fa fa-home"></i> Delete course
               </a>
            </li>
            <h4 class=" text-info font-weight-bold pl-4">TEACHER</h4>

            <li class="nav-item aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link" id="active" href="addteacher.php"><i class="fa fa-users"></i>  Add Teacher
               </a>
            </li>

            <li class="nav-item aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link" id="active" href="updateteacher.php"><i class="fa fa-users"></i> Update Teacher
               </a>
            </li>
            <li class="nav-item aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link" id="active" href="viewteacher.php"><i class="fa fa-users"></i> view Teacher
               </a>
            </li>

            <li class="nav-item aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link" id="active" href="deleteteacher.php"><i class="fa fa-users"></i> Delete Teacher
               </a>
            </li>
       <h4 class=" text-info font-weight-bold pl-4">ADMIN</h4>

            <li class="nav-item  aa ">
              <a style="background: purple; border-radius: 20px;" class="nav-link" id="active" href="addadmin.php"><i class="fa fa-address-card"></i>Add Admin Profile
               </a>
            </li>
            <li class="nav-item aa ">
              <a style="background: purple; border-radius: 20px;" class="nav-link" id="active" href="updateadmin.php"><i class="fa fa-address-card"></i>Update Admin Profile
               </a>
            </li>
            <li class="nav-item aa ">
              <a style="background: purple; border-radius: 20px;" class="nav-link" id="active" href="viewadmin.php"><i class="fa fa-address-card"></i>view Admin Profile
               </a>
            </li>
            <li class="nav-item  aa">
              <a style="background: purple; border-radius: 20px;" class="nav-link" id="active" href="deleteadmin.php"><i class="fa fa-address-card"></i>Delete Admin Profile
               </a>
            </li>







</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav style="background-color:purple;" class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars text-info"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline  mr-auto   navbar-search">
            <div class="input-group">
              <input  style="border-radius:13px;" type="text" class="form-control bg-light  small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group">
                <button style="border-radius:px;" class=" form-control btn btn-info" type="button">
                  <i class="fas fa-search  text-white"></i>
                </button>
              </div>
            </div>
          </form>


          <!-- Topbar Navbar -->
          <ul   class="navbar-nav ml-auto ">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
              <img style="width:40px; height:40px;  border-radius:50%;" ;class="img-profile  " src="https://cdn.pixabay.com/photo/2017/03/04/12/15/programming-2115930_960_720.jpg">

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
          
            <h6 style="font-size:14px; position: relative; top: 7px!important; left: 10%; font-weight:900;" class="text-danger ">Admin Profile </h6>
          
              
                  
                </span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div  class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div style="background-color:aqua;" class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div style="background-color:aqua;" class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div style="background-color:aqua;" class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div>