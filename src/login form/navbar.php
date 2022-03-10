
 



        <!-- Topbar -->
        <nav style="background-color:purple;" class="navbar ">

       

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



 <a class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
              <img style="width:40px; height:40px;  border-radius:50%;" ;class="img-profile  " src="https://cdn.pixabay.com/photo/2017/03/04/12/15/programming-2115930_960_720.jpg">

          
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
                <a class="dropdown-item"  data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
        

          </ul>

        </nav>
        <!-- End of Topbar -->
  
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



