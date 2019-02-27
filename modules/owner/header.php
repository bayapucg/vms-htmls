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

<body class="hold-transition skin-blue layout-top-nav">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand" style="padding-top: 2px;">
                            <img style="width:100px;height:auto;" src="../img/logo.png" />
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left custom-style" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.php">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="confirmed-bookings.php">
                                    <span>Listing</span><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="add-vehicle.php">Add Vehicle</a></li>
                                    <li><a href="vehiclelist.php">Vehicles List</a></li>
                                    <li><a href="add-driver.php">Add Driver</a></li>
                                    <li><a href="driverlist.php">Drivers List</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">
                                    <span>Loads</span><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="load-booking.php">Load Booking</a></li>
                                    <li><a href="active-bookings.php">Active Bookings</a></li>
                                    <li><a href="cancelled-bookings.php">Cancelled Bookings</a></li>
                                    <li><a href="load-delivery-list.php">Load Delivered List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="support.php">
                                    <span>Support</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
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
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>

        <!-- =============================================== -->