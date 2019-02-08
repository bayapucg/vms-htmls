<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="shortcut icon" href="../img/heading-img.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/AdminLTE.min.css">

    <link rel="stylesheet" href="../css/_all-skins.min.css">
    <link rel="stylesheet" href="../css/vms.css">
    <!-- jQuery 2.2.3 -->
    <script src="../js/jquery-2.2.3.min.js"></script>
    <script src="../js/bootstrapValidator.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../js/bootstrap.min.js"></script>



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
                <span class="logo-mini"><img style="width:50px;height:auto;" src="../img/logo.png" /></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img style="width:100px;height:auto;" src="../img/logo.png" /></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->

            <nav class="navbar navbar-default nav_hover">
                <div class="container-fluid">
                    <div class="navbar-header">


                        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <i class="fa fa-arrow-down" aria-hidden="false" aria-hidden="true"></i>
                        </button>
                        <a class="navbar-brand" href="">
                            <p>OWNER MANAGEMNET SYSTEM </p>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="#" class="">
                                    <p>13456</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
<!--
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
                            <li><a href="#">text</a></li>
-->

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../img/user.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Owner</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../img/user.png" class="img-circle" alt="User Image">
                                        <p>
                                            Owner 1
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
                        <img src="../img/user.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Owner 1</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="profile.php">
                            <i class="fa fa-user" aria-hidden="true"></i> <span>My Profile</span>
                        </a>
                    </li>
                    <li class=" treeview">
                        <a href="#">
                            <i class="fa fa-truck"></i> <span>Load Information</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="confirmed-bookings.php"><i class="fa fa-circle-o"></i>Confirmed Bookings</a></li>
                            <li class="active"><a href="cancelled-bookings.php"><i class="fa fa-circle-o"></i>Cancelled Bookings</a></li>
                            <li class="active"><a href="onroad-bookings.php"><i class="fa fa-circle-o"></i>Onroad</a></li>
                            <li class="active"><a href="delivered-bookings.php"><i class="fa fa-circle-o"></i>Delivered</a></li>
                        </ul>
                    </li>
                    <li class=" treeview">
                        <a href="#">
                            <i class="fa fa-bus"></i> <span>Vehicle Management</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="add-vehicle.php"><i class="fa fa-circle-o"></i>Add Vehicle</a></li>
                            <li class="active"><a href="vehiclelist.php"><i class="fa fa-circle-o"></i>Vehicles List</a></li>
                        </ul>
                    </li>
                    <li class=" treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>Manpower Management</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="add-driver.php"><i class="fa fa-circle-o"></i>Add Driver</a></li>
                            <li class="active"><a href="driverlist.php"><i class="fa fa-circle-o"></i>Drivers List</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="payment.php">
                            <i class="fa fa-money" aria-hidden="true"></i> <span>Payment</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="partner-education.php">
                            <i class="fa fa-book" aria-hidden="true"></i> <span>Partner Education</span>
                        </a>
                    </li>
                    
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->