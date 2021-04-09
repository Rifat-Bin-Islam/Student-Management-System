<?php


session_start();
ob_start();
include "dbcon.php";

if(!isset($_SESSION['login_id'] )){
header('Location: ../login.php');
}


$user=$_SESSION['login_id'];

 

?>

<?php 
      $user_name=mysqli_query($db,"SELECT * FROM users WHERE id = '$user'");
     $userData=mysqli_fetch_assoc($user_name);

     ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Khan Academy</title>
   <script src="https://kit.fontawesome.com/9fb987007f.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
     
	 
</head>
<body class="jumbotron  font-weight-bold">
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="admin.php">Khan Academy</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header" style="margin-left: 52px;">
        <div class="user-pics"  >

            <img src="../images/user/<?php echo $userData['photo'];?>"   style=" width:90px;
                      height: 90px;
                      border-radius: 50%;
                        border:3px solid #eee;"> 
      
     
        </div>
        <div class="user-info" style="font-size: 16px;
    font-style: italic;
    font-weight: 600;
    color: azure;">
           
            <?php echo $userData['name']; ?>
          
    
    
      
          <span class="user-role"style="font-size: 10px;
    font-style: italic;
    font-weight: 600;
    color: azure;"><?php echo $userData['email']; ?></span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li><!--  class="sidebar-dropdown" -->
            <a href="../admin/admin.php">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <!-- <span class="badge badge-pill badge-warning">New</span> -->
            </a>
            <!-- <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Dashboard 1
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="#">Dashboard 2</a>
                </li>
                <li>
                  <a href="#">Dashboard 3</a>
                </li>
              </ul>
            </div> -->
          </li>
          <li  >
            <a href="../admin/addstudent.php">
              <i class="fas fa-user-plus"></i>
              <span>Add Student</span>
              <!-- <span class="badge badge-pill badge-danger">3</span> -->
            </a>
            <!-- <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Products

                  </a>
                </li>
                <li>
                  <a href="#">Orders</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div> -->
          </li>
          <li  >
            <a href="../admin/allstudent.php">
              <i class="fas fa-users"></i> 
              <span>All Student</span>
            </a>
            <!-- <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div> -->
          </li>
          <li  >
            <a href="../register.php">
              <i class="fas fa-user-plus"></i>
              <span>Add Users</span>
            </a>
        </li>
        <li  >
            <a href="../admin/allusers.php">
              <i class="fas fa-users"></i>
              <span>All Users</span>
            </a>
        </li>
        <li  >
            <a href="../admin/myprofile.php">
              <i class="far fa-id-card"></i>
              <span>Profile</span>
            </a>
        </li>
        <li  >
            <a href="../admin/logout.php">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </a>
        </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      sidebar-menu  -->
   <!--  </div> -->
    <!-- sidebar-content  -->
    <!-- <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>  --> 
  </nav>
  <!-- sidebar-wrapper  -->


  <?php
   ob_end_flush();
  ?>