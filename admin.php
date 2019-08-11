<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Packagess - Dashboard</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/admin.css" rel="stylesheet">
       <link href="css/fonts.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
               <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-boxes"></i>
               </div>
               <div class="sidebar-brand-text mx-3">Packagess Admin</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
               <a class="nav-link" href="admin.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Interface
            </div>
            <!-- Nav Item - Log a Packages-->
            <li class="nav-item">
               <a class="nav-link collapsed" href="log-package.html" aria-expanded="true">
               <i class="fas fa-fw fa-clipboard"></i>
               <span>Log a Package</span>
               </a>
            </li>
            <!-- Nav Item - Package Pick-Up -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="package-pickup.html" aria-expanded="true" >
               <i class="fas fa-fw fa-handshake"></i>
               <span>Package Pick-Up</span>
               </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Data
            </div>
            <!-- Nav Item - Pending Pick-Up-->
            <li class="nav-item">
               <a class="nav-link collapsed" href="pending-pickup.php" aria-expanded="true" >
               <i class="fas fa-fw fa-handshake"></i>
               <span>Pending Pick-Up</span>
               </a>
            </li>
            <!-- Nav Item - Picked-Up Packages -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="picked-up-packages.php" aria-expanded="true" >
               <i class="fas fa-fw fa-box-open"></i>
               <span>Picked-Up Packages</span>
               </a>
            </li>
            <!-- Nav Item - Overdue Packages -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="overdue-packages.html" aria-expanded="true" >
               <i class="fas fa-fw fa-clock"></i>
               <span>Overdue Packages</span>
               </a>
            </li>
            <!-- Divider 
               <hr class="sidebar-divider d-none d-md-block">
               
               <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
         </ul>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                  </button>
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <div class="topbar-divider d-none d-sm-block"></div>
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Washington Sports Club</span>
                        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="admin-settings.html">
                           <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                           Settings
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
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Content Row -->
                  <div class="row">
                     <!-- Log a Delivery -->
                     <div class="col-xl-6 col-lg-7">
                        <div class="alert alert-success">
                           <strong>Success!</strong> Package #123 has been logged!
                        </div>
                        <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                              <h6 class="m-0 font-weight-bold text-primary">Log a Delivery</h6>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              <form method = "post" action = "log_delivery.php">
                                  <div class="row mb-3">
                                    <div class="col">
                                       <input name = "memberid" type="text" class="form-control" placeholder="Member ID" required>
                                    </div>
                                    <div class="col">
                                       <input name = "postal" type="text" class="form-control" placeholder="Postal Service">
                                    </div>
                                 </div>
                                 <div class="row mb-3">
                                    <div class="col">
                                       <input name = "firstname" type="text" class="form-control" placeholder="First name" required>
                                    </div>
                                    <div class="col">
                                       <input name="lastname" type="text" class="form-control" placeholder="Last name" required>
                                    </div>
                                 </div>
                                
                                 <button type="submit" class="btn btn-block btn-md btn-primary">Log Package</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- Package Pick-Up -->
                     <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                              <h6 class="m-0 font-weight-bold text-success">Package Pick-Up </h6>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              <form method = "post" action = "pickup.php">
                                 <div class="row mb-3">
                                    <div class="col">
                                       <input name= "pickup_code" type="text" class="form-control" placeholder="Pick-Up Code" required>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-block btn-md btn-success">Enter</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <h2 class="font-weight-bold text-info">Matching Package</h2>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">Package #</th>
                                 <th scope="col">First Name</th>
                                 <th scope="col">Last Name</th>
                                 <th scope="col">Phone Number</th>
                                 <th scope="col">Mark as Picked-Up</th>
                              </tr>
                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                    
                     <!-- Pending Pick-Up -->
                     <div class="col-xl-4 col-md-4 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Pick-Up</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-handshake fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Packages (Picked Up) -->
                     <div class="col-xl-4 col-md-4 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Picked-Up Packages</div>
                                    <div class="row no-gutters align-items-center">
                                       <div class="col-auto">
                                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">45</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-box-open fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Pending Requests Card Example -->
                     <div class="col-xl-4 col-md-4 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Packages OverDue</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Packagess</span>
                  </div>
               </div>
            </footer>
            <!-- End of Footer -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="index.html">Logout</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/admin.js"></script>
      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="js/chart-area-demo.js"></script>
      <script src="js/chart-pie-demo.js"></script>
   </body>
</html>