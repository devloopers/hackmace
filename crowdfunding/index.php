<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BLOCK FARM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    
    
    
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html">BLOCK FARM</a>
        <a class="navbar-brand brand-logo-mini" href="index.html">BFARM</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">

              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    
    
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fdetails.php">
              <i class="ti-files menu-icon"></i>
              <span class="menu-title">Farm Details</span>
            </a>
          </li>
        </ul>
      </nav>
      
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Enter Plot Details</h4>
                    <p class="card-description">
                      Information About Your Plot
                    </p>
                    <form class="forms-sample" method="post">
                      <div class="form-group" >
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" required name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Area of Plot</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="In Cent " name="area"required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Locality</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Locality" name="local"required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Town</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Town" name="town"required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">District</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="District" name="dist" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">State</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="State" name="state"required>
                      </div>
                    
                      <input type="submit" class="btn btn-primary mr-2" value="Submit" name="submit">
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Powered by devloopers<a href="https://www.devloopers.co.in.com/" target="_blank"></a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>
<?php
  include "connect.php";
  if(isset($_POST['submit']))

  {
    $name=$_POST['name'];
    $area=$_POST['area'];
    $add=$_POST['local'].$_POST['town'].$_POST['dist'].$_POST['state'];
    $qry = "INSERT INTO `hack1`( `name`, `area`, `address`) VALUES ('$name',$area,'$add')";
    $insert = $connection->query($qry);
    //var_dump($qry);
    if($insert)
            {
                echo "<script> alert('successfully registered');</script>";
            }
            else
            {
                echo "<script> alert('Registration failed');</script>";
            }
  }

?>

</html>
