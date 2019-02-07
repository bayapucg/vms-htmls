<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Driver
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manpower Management</a></li>
            <li class="active">Add Driver</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">Driver Details</h3>
                <span class="pull-right"><a href="driverlist.php" class="btn btn-primary btn-sm">Drivers List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type=" text" class="form-control " name="username" placeholder="Enter First Name">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Last Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="Enter Last Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>License No</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="Enter License No" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Badge No</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="Enter Badge No" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Email Id</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="Enter Emailid" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Phone Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="Enter Phonrnumber" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Experience</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="Enter Experience" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Salary</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="Enter Salary" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="button" class="btn btn-primary next-step">Submit</button></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>