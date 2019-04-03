<?php include("header.php"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="m-0 pull-left">Driver Info</h3>
                <span class="pull-right"><a href="drivers-list.php" class="btn btn-primary btn-sm">Drivers List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Profile pic</label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                    <!-- /.input group -->
                                </div>   
								<div class="col-md-6">
                                    <div class="">
										 <img style="width:100px;height:auto;border-radius:50%" src="../img/user.png" />
									</div>
                                </div>
                            </div>
							<div class="row pt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Id Proof </label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                    <!-- /.input group -->
                                </div>   
								<div class="col-md-6">
                                    <div class="">
										 <img style="width:100px;height:auto;" src="https://upload.wikimedia.org/wikipedia/commons/3/3f/A_sample_of_Aadhaar_card.jpg" />
									</div>
                                </div>
                            </div>
							<div class="row pt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Criminal Record  </label>
                                        <input type="file" class="form-control "  >
                                    </div>
                                    <!-- /.input group -->
                                </div>   
								<div class="col-md-6">
                                    <div class="">
										 <img style="width:100px;height:auto;" src="https://upload.wikimedia.org/wikipedia/commons/8/86/Word_2013_Icon.PNG" />
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
    <div class="p-5"></div>
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>