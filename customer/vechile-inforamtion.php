<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Part Load
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Vechile inforamtion</li>
      </ol>
    </section>

    <section class="content">
     <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                      <h3>Vechile inforamtion</h3>
                </div>
                <div class="panel-body">
                   <div class="tab-content">
                   
                       <div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label>Select Size of  Vehicle</label>
								<select class="form-control " style="width: 100%;">
								
								  <option>Eicher 14 Ft</option>
								  <option>Eicher 17 Ft</option>
								  <option>Eicher 19 Ft</option>
								  <option>20 Ft closed Containers</option>
								  <option>32 Ft closed Containers 7 to</option>
								  <option>32 Ft closed Containers  14 ton</option>
								  <option>Truck 19-ton</option>
								  <option>Taurus 16 ton</option>
								 
								</select>
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label>Select Vehicle</label>
								<select class="form-control " style="width: 100%;">
								  <option>Tata Ace</option>
								  <option>Bolero Pick up</option>
								  
								 
								</select>
							</div>
							</div>	
							<div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">no of vechiles</label>
									<div class="">
										<input type="text" class="form-control" name="username" placeholder="Enter Your no of vechiles" />
									</div>
								</div>
							</div>
							
							
						
					   </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    
            </div>
      

     

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <?php include("footer.php"); ?>
  


  <script>
   //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
</script>

 