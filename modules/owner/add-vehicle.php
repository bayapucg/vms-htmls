<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="m-0 pull-left">Basic Details</h3>
                <span class="pull-right"><a href="vehicle-list.php" class="btn btn-primary btn-sm">Vehicles List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Vehicle owner name</label>
                                        <input type=" text" class="form-control " name="username" placeholder="Enter First Name">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Address</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Email</label>
                                        <div class="">
                                            <input type="email" class="form-control" name="username" placeholder="Enter Name"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <br>
                            <ul class="list-inline text-center">
                                <li><a href="add-vehicle-step2.php" class="btn btn-primary next-step">Save & Continue</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
    <div class="p-5"></div>
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>