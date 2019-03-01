<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vehicle
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Listing</li>
            <li class="active">Vehicle</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                Select your module
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel  panel-default back-load">
                            <a class="" href="add-vehicle.php">
                                <div class="panel-body">
                                    <h3 class="text-center"><i class="fa fa-plus mr-3"></i>Add Vehicle</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel  panel-default back-load">
                            <a class="" href="assign-driver.php">
                                <div class="panel-body">
                                    <h3 class="text-center"><i class="fa fa-user-plus mr-3"></i>Assign Driver</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel  panel-default back-load">
                            <a class="" href="third-paty-services.php">
                                <div class="panel-body">
                                    <h3 class="text-center"><i class="fa fa-cogs mr-3"></i>Third Party Services</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="p-5"></div>
</div>
<!-- /.content-wrapper -->
<?php include("footer.php"); 