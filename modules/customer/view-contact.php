<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts
        </h1>
        <ol class="breadcrumb">
            <li><a href="booking-summary.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contacts</a></li>
            <li class="active">Booking Summary</li>
        </ol>
    </section>

    <section class="content">
      <div class="panel-body">
                    <form action="" method="">
                        <div class="row">
						<div class="col-xs-12">
					    <div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="mt-0 pull-left mb-0"> Contact View</h3>
					<span class="pull-right"> <a class="btn btn-primary btn-xs " href="add-contact.php"> Add Contact</a></span>
					<div class="clearfix">&nbsp;</div>
				</div>
               
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Name of the Customer</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>GST Number</th>
                                        <th>Map</th>
                                        <th>Address</th>
                                        <th>Saved address</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>Name of the company belong to</td>
                                        <td>Customer Name</td>
                                        <td>98xxxxxx20</td>
                                        <td>example@gmail.com</td>
                                        <td>653xxx122x22</td>
                                        <td>Some Text</td>
                                        <td>Address of the customer</td>
                                        <td>Address he already saved before<br>
                                            <hr>Address he already saved before</td>
                                      
                                    </tr>
                                    
									
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
                    </form>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>