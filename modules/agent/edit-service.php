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
            <li class="active">Edit Service</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Edit Service</h3>
                <span class="pull-right"><a href="services-list.php" class="btn btn-info btn-sm">Back</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Service Name</label>
                                        <input type=" text" class="form-control" name="itemname" value="Insurance"/>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Cost(in rupees)</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="customername" value="180"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Comment</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="comment" value="Is there any comments then they display here"/>
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
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>