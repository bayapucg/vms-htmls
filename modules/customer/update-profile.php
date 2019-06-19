<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border"> <a href="profile.php" type="button" class="btn btn-info btn-sm pull-right">Back</a>
						<h3 class="mt-0 mb-0">Update Profile</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="" action="update-profile.php">
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Registration No</label>
									<div class="">
										<p>123456</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Gst</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="850022xxxx" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Pan</label>
									<div class="">
										<input type="mail" class="form-control" name="username" value="customer1@gmail.com" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Name</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="Rajendra" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Company Name</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="Prachatech" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Mobile Number</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="872345xxxx" />
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-6 mx-4">
								<div class="form-group">
									<label class=" control-label">Email Id</label>
									<div class="">
										<input type="text" class="form-control" name="username" value="prachatech@gmail.com" />
									</div>
								</div>
							</div>
							</div>
						
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Billing Address</label>
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
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Godan Address</label>
									<div class="">
										<textarea class="form-control"></textarea>
									</div>
								</div>
							<div style="position:relative">	
							<a style="position: absolute;left:12px;bottom:-10px;" data-toggle="modal" data-target="#billingloation" href="">Add More</a>
								<a style="position: absolute;right:12px;bottom:-10px;" data-toggle="modal" data-target="#billingloation" href="">Set location</a>
								
							</div>
						
								<p class="mt-5">Fortune Signature, Flat No 306, Nizampet X roads, Sardar Patel Nagar, IDPL Staff Cooperative Housing Society, Kukatpally Housing Board Colony, Kukatpally, Hyderabad, Telangana 500085</p>
								<div class="pull-right">
									<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> &nbsp; &nbsp;
									<a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
							</div>
							</div>
							
							<div class="clearfix">&nbsp;</div>
							<div class="col-md-6 mt-5">
								<div class="row">
									<div class="form-group col-md-9">
										<label class=" control-label">Profile</label>
										<div class="">
											<input type="file" class="form-control" name="username" value="Prachatech" />
										</div>
									</div>
									<div class="col-md-3">
										<label class=" control-label">Present pic</label>
										<div class="">
											<img style="width:30px;height:30px;" src="../img/user.png">
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="pull-right mr-3">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save Changes</button>
								</div>
							</div>
						</form>
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<!-- /.row -->
	</section>

</div>


<?php include( "footer.php"); ?>
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