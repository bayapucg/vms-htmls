<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="shortcut icon" href="img/heading-img.png" type="image/x-icon"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="css/custom.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
	<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/vms.css">
  <!-- jQuery 2.2.3 -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrapValidator.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>



</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img style="width:50px;height:auto;" src="img/logo.png"/></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="width:100px;height:auto;" src="img/logo.png"/></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
		<div class="navbar-custom-menu1">
        <ul class="nav navbar-nav ">
          <li class="">
            <a href="#" >
             <p>VEHICLE MANAGEMNET SYSTEM PVT.LTD</p>  
            </a>
          </li>
          <li class="">
            <a href="#" class="" >
             <p>13456</p> 
            </a>
          </li>
        </ul>
      </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav ">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="">
            <a href="#" >
              
              <p>help</p>
            </a>
           
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="">
            <a href="#" >
             
              <p>video</p>
            </a>
            
          </li>
		   <li class="">
            <a href="#" >
             
              <p>dummy</p>
            </a>
            
          </li>
		   <li class="">
            <a href="#" >
             
              <p>dummy</p>
            </a>
            
          </li>
		   <li class="">
            <a href="#" >
             
              <p>dummy</p>
            </a>
            
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs">admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/user.png" class="img-circle" alt="User Image">

                <p>
                  Customer 1
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Customer 1</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>  
		<li class="treeview">
          <a href="profile.php">
            <i class="fa fa-user" aria-hidden="true"></i> <span>My Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li> 
		<li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Load Bookings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="load-booking.php"><i class="fa fa-circle-o"></i> Load Booking</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Booking summary</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Payment</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Reference code</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Support</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Contact</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> About us</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Blog</a></li>
          </ul>
        </li>
		<li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Driver</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="driverdash.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            <li><a href="driverprofile.php"><i class="fa fa-circle-o"></i>My profile</a></li>
            <li class="active"><a href="confirm-booking.php"><i class="fa fa-circle-o"></i>Confirm booking</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Booking summary</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Toll gate</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Employment</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Support</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Contact</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>About us</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Blog</a></li>
          </ul>
        </li>
		<li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Owner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="ownerdash.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            <li><a href="ownerprofile.php"><i class="fa fa-circle-o"></i>My profile</a></li>
			<li class=" treeview">
            <a href="#">
            <i class="fa fa-circle-o"></i> <span>Add Driver</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  
			<ul class="treeview-menu">
			<li class="active"><a href="driver.php">Driver </a></li>
            <li class="active"><a href="driverlist.php">Driver List</a></li>
			</ul>
			</li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Confirm booking</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Vehicle management</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Booking summary</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Load information</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Payment management</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Manpower management</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Support</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Contact</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>About us</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Blog</a></li>
          </ul>
        </li>
		<!--<li class="treeview">
          <a href="ck-editor.php">
            <i class="fa fa-dashboard"></i> <span>Editor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="form-validations.php">
            <i class="fa fa-dashboard"></i> <span>form validations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>
		<li class="treeview">
          <a href="datatable.php">
            <i class="fa fa-dashboard"></i> <span>Datatables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li class="active"><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>-->
       
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->