<?php include("header.php"); ?>

<style>
 hr{
   margin-top:0px
   }
   fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
</style>
<div class="content-wrapper">
	<section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="m-0 pull-left">Add Vehicle </h3>
                <span class="pull-right"><a href="vehicle.php" class="btn btn-primary btn-sm">Vehicles List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <form role="form">
		
            <div class="row">

				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Basic Information</legend>
						 <div class="">
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Registration No</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Registration No">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Owner Name</label>
								  <input type=" text" class="form-control " name="username" placeholder="Enter Owner Name">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label>Address</label>
								  <div class="">
									 <input type="text" class="form-control" name="mobile" placeholder="Enter Address"/>
								  </div>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label>Mobile Number</label>
								  <div class="">
									 <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile No"/>
								  </div>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label>Email id</label>
								  <div class="">
									 <input type="email" class="form-control" name="email" placeholder="Enter Email id"/>
								  </div>
							   </div>
							</div>
							
						 </div>
						 <hr>
				  
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Vehicle Details </legend>
						 <div class="">
						 <div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Registration No</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Registration No">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Manufacturer Name</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Manufacturer Name">
							   </div>
							   <!-- /.input group -->
							</div>
							
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Model  Name and number </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Model  Name and number ">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">No of Wheel</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter No of Wheel ">
							   </div>
							</div>	
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">No of Axel</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter No of Axel ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Fuel Capacity</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Fuel Capacity ">
							   </div>
							</div>	
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Chassis No</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Chassis No ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Engine No</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Engine No ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Body Types</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Body Types ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Manufacturing Year</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Manufacturing Year ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Registration Date </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Registration Date  ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Sitting Capacity </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Sitting Capacity  ">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Already run in Km </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Already run in Km  ">
							   </div>
							</div>
						 </div>
				   </fieldset>
				</div>
			
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Insurance</legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Insurance company Name  </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Insurance company Name">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Policy Number</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Policy Number">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Date of Issue</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Date of Issue">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Date of Expiry</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Date of Issue">
							   </div>
							</div>
							
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">RTO Document </legend>
						 <div class="">
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Road Tax  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Issue date </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Issue date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Due date</label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Due date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Expire Date</label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Expire Date">
									   </div>
									</div>
								 </div>
							</fieldset>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Fitness  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Issue date </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Issue date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Due date</label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Due date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Expire Date</label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Expire Date">
									   </div>
									</div>
								 </div>
							</fieldset>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Pollution  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Issue date </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Issue date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Due date</label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Due date">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Expire Date</label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Expire Date">
									   </div>
									</div>
								 </div>
							</fieldset>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Road permit  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">State name </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter State name">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Validity </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Validity">
									   </div>
									</div>
								 </div>
							</fieldset>
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">INFORMATION </legend>
						 <div class="">
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Load Types </label>
									 <select class="form-control">
										<option>Select</option>
										<option>Full</option>
										<option>Part</option>
									 </select>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Size </label>
									  <select class="form-control">
										<option>Select</option>
										<option>SMALL</option>
										<option>MEDIUM</option>
										<option>LARGE</option>
										<option>EXTRA LARD</option>
									 </select>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Types </label>
									 <select class="form-control">
										<option>Select</option>
										<option>Open</option>
										<option>Container</option>
										<option>Trailer </option>
									 </select>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Material </label>
									 <select class="form-control">
										<option>Select</option>
										<option>Material 1</option>
										<option>Material 2</option>
										<option>Material 3</option>
									 </select>
							   </div>
							</div>
							<div class="col-md-2">
							   <div class="form-group">
								  <label class="control-label">Capacity </label>
									 <select class="form-control">
										<option>Select</option>
										<option>Capacity 1</option>
										<option>Capacity 2</option>
										<option>Capacity 3</option>
									 </select>
							   </div>
							</div>
							<div class="col-md-2">
							   <div class="form-group">
								  <label class="control-label">High </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter High">
							   </div>
							</div>
							<div class="col-md-2">
							   <div class="form-group">
								  <label class="control-label">Length </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Length">
							   </div>
							</div>
							<div class="col-md-2">
							   <div class="form-group">
								  <label class="control-label">Width </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Length">
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Amenities </label>
									 <select class="form-control">
										<option>Select</option>
										<option>Live Tracking </option>
										<option>UPI Payment</option>
										<option>Standard Roping Technology</option>
										<option>Multi Driver</option>
									 </select>
							   </div>
							</div>
							
							
						 </div>
				   </fieldset>
				</div>
            </div>
			
            <br>
            <ul class="list-inline text-center">
            <li><a href="add-driver-step2.php" class="btn btn-primary next-step">Save & Continue</a></li>
            </ul>
            </form>
            </div>
        </div>
	</section>
</div>
   

<?php include("footer.php"); ?>