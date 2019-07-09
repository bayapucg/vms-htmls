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
								<label>Mobile Number</label>

								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-mobile"></i>
								  </div>
								  <input type="text" class="form-control pull-right" value="+91">
								</div>
								<!-- /.input group -->
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
								<label>Date of Birth</label>

								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="datepicker">
								</div>
								<!-- /.input group -->
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
						
							<div class="row ">
							<div class="col-md-12 ">
							<div class="col-md-4 ">
							   <div class="form-group">
								  <label class="control-label">Address1</label>
								  <input type=" text" class="form-control " name="username" placeholder="Enter Address">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Address2</label>
								  <input type=" text" class="form-control " name="username" placeholder="Enter Address">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">City</label>
								  <input type=" text" class="form-control " name="username" placeholder="Enter Address">
							   </div>
							   <!-- /.input group -->
							</div>	
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">District</label>
								  <input type=" text" class="form-control " name="username" placeholder="Enter Address">
							   </div>
							   <!-- /.input group -->
							</div>
							<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">State</label>
								<select class="form-control">
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
								</select>
							   </div>
							   <!-- /.input group -->
							</div>
								<div class="col-md-4">
							   <div class="form-group">
								  <label class="control-label">Zipcode</label>
								  <input type=" text" class="form-control " name="username" placeholder="Enter Zipcode">
							   </div>
							   <!-- /.input group -->
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
									<option>Driving Licence</option>
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
									<option>Bank Passbook</option>
									<option>Electricity bill</option>
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
							<div class="col-md-12">
							   <table class="table table-bordered">
								
									<tbody>
									  <tr>
										<th>Vechicle Class</th>
										<th>LMV</th>
										<th>PSVBUS</th>
										<th>MCWG</th>
										<th>TRANS</th>
										<th>Batch Number</th>
									
									  </tr> 
									  <tr>
										<th>Date of Issue</th>
										<td><input type="text" class="form-control datepicker" id=""> </td>
										<td><input type="text" class="form-control datepicker" id=""> </td>
										<td><input type="text" class="form-control datepicker" id=""> </td>
										<td><input type="text" class="form-control datepicker" id=""> </td>
										<td><input type="text" class="form-control datepicker" id=""> </td>
									  </tr>
									  <tr>
										<th>Expiry Date</th>
										<td><input type="text" class="form-control datepicker" id=""> </td>
										<td><input type="text" class="form-control datepicker" id=""> </td>
										<td><input type="text" class="form-control datepicker" id=""> </td>
										<td><input type="text" class="form-control datepicker" id=""> </td>
										<td><input type="text" class="form-control datepicker" id=""> </td>
									  </tr>	
									  <tr>
									
									
									</tbody>
								  </table>
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
											<select class="form-control">
												<option>1970</option>
												<option>1971</option>
												<option>1972</option>
												<option>1973</option>
												<option>1974</option>
												<option>1975</option>
												<option>1976</option>
												<option>1977</option>
												<option>1978</option>
												<option>1979</option>
												<option>1980</option>
												<option>1981</option>
												<option>1981</option>
												<option>1983</option>
												<option>1984</option>
												<option>1985</option>
												<option>1986</option>
												<option>1987</option>
												<option>1988</option>
												<option>1989</option>
												<option>1990</option>
												<option>1991</option>
												<option>1992</option>
												<option>1993</option>
												<option>1994</option>
												<option>1995</option>
												<option>1996</option>
												<option>1997</option>
												<option>1998</option>
												<option>1999</option>
												<option>2000</option>
												<option>2001</option>
												<option>2002</option>
												<option>2003</option>
											</select>
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
										<select class="form-control">
												<option>Select</option>
												<option>1st Month</option>
												<option>2nd Month</option>
												<option>3rd Month</option>
												<option>4th Month</option>
												<option>5th Month</option>
												<option>6th Month</option>
												<option>7th Month</option>
												<option>8th Month</option>
												<option>9th Month</option>
												<option>10th Month</option>
												<option>11th Month</option>
												<option>12th Month</option>
												
											</select>
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
								  <label class="control-label">Years </label> <span style="font-size:20px;font-weight:600;color:red" class="pull-right" id="demo"></span>
								 <div>
									<div class="slidecontainer">
									  <input type="range" min="2" max="30" value="2" class="slider" id="myRange">
									
									</div>
								 </div>
							   </div>
							</div>
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Month </label> <span style="font-size:20px;font-weight:600;color:red" class="pull-right" id="demo1"></span>
								 <div>
									<div class="slidecontainer">
									  <input type="range" min="1" max="30" value="12" class="slider" id="myRange1">
									
									</div>
								 </div>
							   </div>
							</div>
					
							<div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Size Catagory </label>
								 <div>
									<ul class="list-inline select-catag">
										<li class="list-inline-item text-center">
											<a href="" class="active-cata"><i class="fa fa-truck fa-2x"></i><br>
											<span>Small</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a href=""><i class="fa fa-truck fa-3x"></i><br>
											<span>Medium</span></a>
										</li>
										<li class="list-inline-item text-center">
										<a href="">	<i class="fa fa-truck fa-4x"></i><br>
											<span>Large</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a href=""><i class="fa fa-truck fa-5x"></i><br>
											<span>Extra Large</span>
										</li>
									</ul>
									</div>
								 </div>
							   </div>
							   <div class="col-md-3">
							   <div class="form-group">
								  <label class="control-label">Vehicle Type</label>
								 <div>
									<ul class="list-inline select-catag">
										<li class="list-inline-item text-center">
											<a href="" class="active-cata"><i class="fa fa-truck fa-3x"></i><br>
											<span>Open</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a href=""><i class="fa fa-truck fa-3x"></i><br>
											<span>Container</span></a>
										</li>
										<li class="list-inline-item text-center">
										<a href="">	<i class="fa fa-truck fa-3x"></i><br>
											<span>Troller</span></a>
										</li>
										<li class="list-inline-item text-center">
											<a href=""><i class="fa fa-truck fa-3x"></i><br>
											<span>Some Type</span></a>
										</li>
									</ul>
									</div>
								 </div>
							   </div>
							
						<div class="clearfix">&nbsp;</div>
							<div class="row">
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
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<script>
var slider = document.getElementById("myRange1");
var output = document.getElementById("demo1");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<script>

   //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
</script>