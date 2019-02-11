<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Services
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Services</a></li>
            <li class="active">Add Service</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Add Service</h3>
                <span class="pull-right"><a href="services-list.php" class="btn btn-primary btn-sm">Services List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control" name="itemname">
                                            <option value="" selected disabled>Select</option>
                                            <option value="">Repairs</option>
                                            <option value="">Upholstery</option>
                                            <option value="">Paint Work</option>
                                        </select>
                                    </div>
                                </div> 
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type=" text" class="form-control" name="itemname" placeholder="Enter Name of the Service">
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Cost</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="customername" placeholder="Enter Cost of the service"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Comment</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="comment" placeholder="Enter here" />
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