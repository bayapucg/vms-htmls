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
   <!-- Content Header (Page header) -->
   <section class="content">
      <div class="panel panel-default">
         <div class="panel-heading">
            <div class="row">
               <div class="col-md-3">
                  <h3 class="mt-0 mb-0">Add Driver</h3>
               </div>
               <div class="col-md-9">
                  <div class="stepper">
                     <ul class="nav nav-tabs">
                        <li role="presentation" class="active">
                           <a class="persistant-disabled" href="full-load.php" title="Step 1">
                           <span class="round-tab">1</span>
                           </a>
                        </li>
                        <li role="presentation" class="disabled">
                           <a class="persistant-disabled" href="vechile-inforamtion-fl.php" title="Step 2">
                           <span class="round-tab">2</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="panel-body">
          
			<form role="form">
		
            <div class="row">

				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Basic Details</legend>
						 <div class="">
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Name</label>
								  <input type=" text" class="form-control " name="username" placeholder="Enter Name">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Address</label>
								  <input type=" text" class="form-control " name="username" placeholder="Enter Address">
							   </div>
							   <!-- /.input group -->
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
							<div class="col-md-4">
							   <div class="form-group">
								  <label>Date Of Birth </label>
								  <div class="">
									 <input type="number" class="form-control" name="DOB" placeholder="Date of Birth"/>
								  </div>
							   </div>
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label>Marital status  </label>
								  <div class="">
									 <select class="form-control">
										<option>Select</option>
										<option>Married</option>
										<option>Un Married</option>
									 </select>
								  </div>
							   </div>
							</div>
						 </div>
						 <hr>
				  
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Identy Proof </legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">ID Proof Name  </label>
								  <select class="form-control">
									<option>Select</option>
									<option>voter Id</option>
									<option>Aadhar</option>
									<option>Passport</option>
								  </select>
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Number</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Number">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Driving  </label>
								  <select class="form-control">
									<option>Select</option>
									<option>Type1</option>
									<option>Type2</option>
									
								  </select>
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Number</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Number">
							   </div>
							   <!-- /.input group -->
							</div>
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Address Proof </legend>
						 <div class="">
							<div class="col-md-6">
							   <div class="form-group">
								  <label class="control-label">Address Proof Name  </label>
								  <select class="form-control">
									<option>Select</option>
									<option>voter Id</option>
									<option>Aadhar</option>
									<option>Passport</option>
								  </select>
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-6">
							   <div class="form-group">
								  <label class="control-label">Number</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Number">
							   </div>
							   <!-- /.input group -->
							</div>
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Driving Details </legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Driving Licence  No  </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Driving Licence  No">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Date Of issue</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Date Of issue">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Expiry Date</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Expiry Date">
							   </div>
							</div>
							<div class="col-md-3">
							     <div class="form-group">
								  <label class="control-label">Licence Type   </label>
								  <select class="form-control">
									<option>Select</option>
									<option>Type 1</option>
									<option>Type 2</option>
								  </select>
							   </div>
							</div>
							<div class="col-md-3">
							     <div class="form-group">
								  <label class="control-label">Batch No  </label>
								    <input type=" text" class="form-control " name="" placeholder="Enter Batch No ">
							   </div>
							</div>
							<div class="col-md-3">
							     <div class="form-group">
								  <label class="control-label">Date Of issue  </label>
								    <input type=" text" class="form-control " name="" placeholder="Enter Date Of issue ">
							   </div>
							</div>
							<div class="col-md-3">
							     <div class="form-group">
								  <label class="control-label">Expiry Date  </label>
								    <input type=" text" class="form-control " name="" placeholder="Enter Expiry Date ">
							   </div>
							</div>
						 </div>
				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Qualifiction </legend>
							<fieldset class="scheduler-border">
								<legend class="scheduler-border">Eductional qualifiction  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Name of Qualifiction   </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Qualifiction">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Institute </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Institute ">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Year of passing </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Year of passing ">
									   </div>
									</div>
									
								 </div>
						   </fieldset>
						   	<fieldset class="scheduler-border">
								<legend class="scheduler-border">Driving Training Institue Name  </legend>
								 <div class="">
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Certificate No   </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Certificate No">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Certificate issue Date </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Certificate issue Date ">
									   </div>
									</div>
									<div class="col-md-4">
									   <div class="form-group">
										  <label class="control-label">Time period </label>
										  <input type=" text" class="form-control " name="" placeholder="Enter Time period ">
									   </div>
									</div>
									
								 </div>
						   </fieldset>

				   </fieldset>
				</div>
				<div class="col-md-12">
					 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Driving Experience  </legend>
						 <div class="">
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Years  </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Years">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Months</label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Month">
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Size Catagory </label>
								  <input type=" text" class="form-control " name="" placeholder="Enter Size Catagory ">
							   </div>
							</div>
							<div class="col-md-3">
							     <div class="form-group">
								  <label class="control-label">Types    </label>
								  <select class="form-control">
									<option>Select</option>
									<option>Type 1</option>
									<option>Type 2</option>
								  </select>
							   </div>
							</div>
							<div class="col-md-3">
							     <div class="form-group">
								  <label class="control-label">You have Any industrial Experience    </label>
								  <select class="form-control">
									<option>Select</option>
									<option>Yes</option>
									<option>No</option>
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