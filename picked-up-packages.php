<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Packagess - Picked-Up Packages</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/admin.css" rel="stylesheet">
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
            <!-- Nav Item - Delivered Packages -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="delivered-packages.html" aria-expanded="true" >
               <i class="fas fa-fw fa-boxes"></i>
               <span>Delivered Packages</span>
               </a>
            </li>
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
                     <h2 class="font-weight-bold text-success">Picked-Up Packages</h2>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">First Name</th>
                                 <th scope="col">Last Name</th>
                                 <th scope="col">Date Delivered</th>
                                 <th scope="col">Date Picked Up</th>
                              </tr>
                           </thead>
                           <tbody>
                               <?php

                               $host = "localhost";
                               $dbusername = "root";
                               $dbpassword = "NorthHigh2015";
                               $dbname = "packagess";

                               $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

                               if(mysqli_connect_error()){
                                   die('Connect Error with databse'); 
                               }


                               mysqli_select_db($conn, "picked_up_packages"); // not sure if I need this
                               $query = "SELECT * FROM picked_up_packages;";
                               $result = mysqli_query($conn,$query);

                               while ($row = mysqli_fetch_array($result)){

                                echo "<tr>";
                                 echo "<td>$row[first_name] </td>";
                                 echo "<td>$row[last_name] </td>";
                                 echo "<td>$row[date_delivered]</td>";
                                 echo "<td>$row[date_picked_up]</td>";
                                 echo "</tr>" ;

                               }

                               ?>
                              
                           </tbody>
                        </table>
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