<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Vehicle Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Listing</li>
            <li><a href="vehicle.php">Vehicle</a></li>
            <li><a href="vehicle-list.php">Vehicles List</a></li>
            <li class="active">Edit Vehicle</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="m-0 pull-left">Vehicle Info</h3>
                <span class="pull-right"><a href="vehiclelist.php" class="btn btn-info btn-sm"><i class="fa fa-arrow-left mr-2"></i>Back</a></span>
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
                                        <input type=" text" class="form-control " name="username" value="123456">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Issued Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username" value="30/01/2019"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username" value="30/01/2019"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicle Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" value="Tata 1209"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Capacity(in ton's)</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" value="16"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Size</label>
                                        <select class="form-control" name="">
                                            <option value="" disabled>Select</option>
                                            <option value="">Small</option>
                                            <option value="" selected>Medium</option>
                                            <option value="">Large</option>
                                            <option value="">Extra Large</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Vehicle Type</label>
                                        <select class="form-control" name="">
                                            <option value="" disabled>Select</option>
                                            <option value="" selected>Open</option>
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
                                            <input type="text" class="form-control" name="fuel" value="90" placeholder="in liters"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">RTO Document</label>
                                        <div class="">
                                            <input type="file" class="form-control" name=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">R.C Number</label>
                                        <input type=" text" class="form-control " name="username" value="123HNFD">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Issued Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username" value="30/01/2019"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username" value="30/01/2019"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Pollution Under Control Certificate Number</label>
                                        <input type=" text" class="form-control " name="username" value="KHJT49CF">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Issued Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username" value="30/01/2019"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username" value="30/01/2019"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Insurance Policy Number</label>
                                        <input type="text" class="form-control " name="username" value="KHJT49CF">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class=" control-label">Issued Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username" value="30/01/2019"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <div class="">
                                            <input type="date" class="form-control" name="username" value="30/01/2019"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="button" class="btn btn-primary next-step">Save Changes</button></li>
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