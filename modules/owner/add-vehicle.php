<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Vehicle
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Listing</a></li>
            <li class="active">Add Vehicle</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">Vehicle Details</h3>
                <span class="pull-right"><a href="vehiclelist.php" class="btn btn-primary btn-sm">Vehicles List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Registration number</label>
                                        <input type=" text" class="form-control " name="username" placeholder="Enter First Name">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Issued Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicle Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="Enter Name"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Capacity</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" placeholder="in ton's"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Size</label>
                                        <select class="form-control" name="">
                                            <option value="" disabled selected>Select</option>
                                            <option value="">Small</option>
                                            <option value="">Medium</option>
                                            <option value="">Large</option>
                                            <option value="">Extra Large</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicle Type</label>
                                        <select class="form-control" name="">
                                            <option value="" disabled selected>Select</option>
                                            <option value="">Open</option>
                                            <option value="">Container</option>
                                            <option value="">Troller</option>
                                            <option value="">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Fuel Capacity</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="fuel" placeholder="in liter's"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">RTO Document</label>
                                        <div class="">
                                            <input type="file" class="form-control" name="rto"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">R.C Number</label>
                                        <input type=" text" class="form-control " name="username" placeholder="Enter R.C Number">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Issued Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Pollution Under Control Certificate Number</label>
                                        <input type=" text" class="form-control " name="username" placeholder="Enter Polluction Certificate Number">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Issued Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Insurance Policy Number</label>
                                        <input type=" text" class="form-control " name="username" placeholder="Enter Policy Number">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Issued Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username"/>
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