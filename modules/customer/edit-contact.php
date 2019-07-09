<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contacts</a></li>
            <li class="active">Edit Contact</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Edit Contact</h3>
                <span class="pull-right"><a href="contacts-list.php" class="btn btn-info btn-sm">Back</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Company Name</label>
                                        <input type=" text" class="form-control" name="companyname" value="Pracha Tech">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Customer Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="customername" value="John Deo" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Phone Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" value="810xxxxxx2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Email Id</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" value="example@gmail.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">GST Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="gstnumber" value="12xcv5218" />
                                        </div>
                                    </div>
                                </div>
                               <div class="col-md-6">
								<div class="form-group">
									<label class=" control-label"> Address</label>
									<div class="">
										<textarea class="form-control"></textarea>
									</div>
								</div>
							<div style="position:relative">	
								<a style="position: absolute;left:12px;bottom:-10px;" data-toggle="modal" data-target="#billingloation" href="">Add More</a>
								<a style="position: absolute;right:12px;bottom:-10px;" data-toggle="modal" data-target="#billingloation" href="">Set location</a>
							</div>
								<p class="mt-5">
									<div class="checkbox">
										  <label><input type="checkbox" value="">Fortune Signature, Flat No 306, Nizampet X roads, Sardar Patel Nagar, IDPL Staff Cooperative Housing Society, Kukatpally Housing Board Colony, Kukatpally, Hyderabad, Telangana 500085</label>
										</div>
								</p>
									<div class="pull-right">
									<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> &nbsp; &nbsp;
									<a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
<div class="modal fade" id="billingloation" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Billing Address</h4>
        </div>
        <div class="modal-body">
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15220.805702566095!2d78.3900965!3d17.4978956!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe33ae6c3ea74c04e!2sPrachaTech+Software+Solutions!5e0!3m2!1sen!2sin!4v1560753852151!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" >Use Location</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>