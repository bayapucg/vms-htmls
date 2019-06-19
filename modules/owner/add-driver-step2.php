<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Driver
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Listing</li>
            <li><a href="vehicle.php">Driver</a></li>
            <li class="active">Add Driver</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Upload Documents</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="add-driver.php" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href=".php" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>	
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Recent Photo </label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Driving License </label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Batch  </label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Training  </label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Driver ID Proof  </label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Address Proof</label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                </div>
								<div class="col-md-6">
										 <div class="form-group">
                                        <label class="control-label">Criminal Record    </label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                </div>
                            </div>
                           
                            
                            
                            
                            <br>
                            <ul class="list-inline text-center">
                                <li><a href="add-driver-step3.php" type="button" class="btn btn-primary next-step">Submit</a></li>
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