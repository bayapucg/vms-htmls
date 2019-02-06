<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Driver
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Edit Driver</a></li>
      </ol>
    </section>

    <section class="content">
     <div class="panel with-nav-tabs panel-default">
                
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
							<div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title pull-left">Driver</h3>
			  
			  <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
						<section>
        <div class="wizard">
            <form role="form">
                       <div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">First Name</label>

								<div class="">
						
								  <input type="text" class="form-control " name="username" placeholder="Enter First Name" value="ram" >
								</div>
								<!-- /.input group -->
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Last Name</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Last Name" value="mohan"/>
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							 <div class="form-group">
							<label>License No</label>
							<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter License No" value="AFGFHFT1134" />
								</div>
						  </div>
                        </div>
						<div class="col-md-6">
							 <div class="form-group">
							<label>Badge No</label>
							<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Badge No" value="12"/>
								</div>
						  </div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Email Id</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Emailid" value="rammohan@gmail.com" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Phone Number</label>
								<div class="">
									<input type="text" class="form-control" name="username" placeholder="Enter Phonrnumber" value="8765XXXXXX"/>
								</div>
							</div>
                        </div>
						
					   </div>
                        <ul class="list-inline text-center">
                            <li><a href="driver.php"><button type="button" class="btn btn-primary next-step">Submit</button></a></li>
                        </ul>
                    </div>
    </section>
				</div>
              </div>
            </div>
          </div>
        </div>
							
						</div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                        
                    </div>
                </div>
            </div>
      

     

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
 $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>
  <?php include("footer.php"); ?>
  


  <script>
   //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
</script>

 