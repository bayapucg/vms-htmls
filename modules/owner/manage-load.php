<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
            Load Booking
        </h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>Loads</li>
			<li class="active">Load Booking</li>
		</ol>
	</section>
	<section class="content">
		<div class="panel with-nav-tabs panel-default">
			<div class="panel-body border-1px-ddd py-3 px-4">
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs">
							<li class="active">	<a data-toggle="tab" href="#tab1">Manage Bookings</a>
							</li>
							<li>	<a data-toggle="tab" href="#tab2">Cancel Bookings</a>
							</li>
							<li>	<a data-toggle="tab" href="#tab3">Deliver Bookings</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="tab1" class="tab-pane fade in active">
								<section class="content">
									
									<div class="panel with-nav-tabs " style="border:1px solid #ddd;">
									<div class="panel-header py-4" style="background:#ddd;position:relative;">
									<div class="px-4 ">
										<h3 class="panel-title ">Manage Bookings <span class="pull-right text-danger"> Pending for Acceptence </span></h3> 
										</div>
									</div>
										<div class="panel-body ">
											<div class="tab-content">
												<form action="" method="">
													<div class="row">
													<div class="col-md-8 ">
									<div class="row">
										<div class="col-md-4">
											<h4 >Hyderabad <i class="fa fa-thumb-tack" aria-hidden="true"></i></h4>
											<div>22-06-2019 10.15 Am</div>
										</div>
										<div class="col-md-4">
											<div class="mt-2" style="height:3px;background-color:red; width:100%"></div>
											<h5 class="text-center mt-1">15KM </h5>
										</div>
										<div class="col-md-4">
											<h4> <i class="fa fa-truck text-danger" aria-hidden="true"></i>    visakhapatnam</h4>
											<div>23-06-2019 10.15 Am</div>
										</div>
									</div>
									</div>
									<div class="col-md-2 text-danger">
									On Way
									</div>
									<div class="col-md-2 text-danger">
									Rs: 15500
									</div>
									
									<div class="clearfix">&nbsp;</div>
									<div class="clearfix">&nbsp;</div>
														<div class="col-md-12 b-vans ">
															<div class="" id="accordion">
																
																<div>
																	
                                            <div class="expand" >
												<div data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="right-arrow " style="">+</div>
												<div class="form-group">

													<a type="button" class="btn btn-default btn-xs  toggle-vechile-info-btn1 more_button right-arrow2">Read more</a>
												</div>
                                            </div>
									
									
									
                                            <div class="table-responsive table_res">
												<table  class="table table-bordered" width="100%">
													<tbody class="row">
													   <tr>
                                                                <th class="col-md-1">Date/time</th>
                                                                <th class="col-md-2">Booking Information</th>
																<th class="col-md-2">Route Info: </th>
                                                                <th class="col-md-2">Service-info</th>
                                                              
                                                               
                                                                <th class="col-md-1">Action</th>
                                                            </tr>
														<tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text form-group"><i class="fa fa-calendar-o" aria-hidden="true"></i> 24/06/2019</div>
                                                                <div class="bvv-text form-group"><i class="fa fa-calendar" aria-hidden="true"></i> 11 : 30 AM</div>
															 </td>
                                                            <td class="bv-capacity col-md-2">
															<table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>BookingID</th>
																				<td>: 45673</td>
																			</tr>
																			<tr>
																				<th>InvoiceNo </th>
																				<td>: 9856345</td>
																			</tr>
																			<tr>
																				<th>Lorry No</th>
																				<td>: TS67</td>
																			</tr>
																			<tr>
																				<th>Way Bill No </th>
																				<td>: 45673</td>
																			</tr>
																			<tr>
																				<th>Billti No </th>
																				<td>: 98567</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															<td rowspan="3" class="bv-loading-dt col-md-2">
															<table>
																		<thead></thead>
																		<tbody>
																			
																			<tr>
																				<td>Hyderabad</td>
																				<td>:visakhapatnam</td>
																			</tr>
																			
																		</tbody>
																	</table>
                                                               
                                                            </td>
                                                            <td   rowspan="3" class="bv-capacity ">
                                                                <table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>Reg No</th>
																				<td> :VMS00012</td>
																			</tr>
																			<tr>
																				<th>Size</th>
																				<td>: 20cm</td>
																			</tr>
																			<tr>
																				<th>Type </th>
																				<td>: steel</td>
																			</tr>
																			<tr>
																				<th>Capacity</th>
																				<td>: 5</td>
																			</tr>
																			<tr>
																				<th>Materail Catagory</th>
																				<td>: Wood</td>
																			</tr>
																			
																		</tbody>
																	</table>
                                                           </td>
															
															                                                            <td   rowspan="3" class="bv-capacity col-md-2">
<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal">Accept</button></div>
<div class="modal fade" id="myModal" role="dialog">
																		<div class="modal-dialog">
																			<!-- Modal content-->
																			<div class="modal-content">
																				<div class="modal-header btn-danger">
																					<button type="button" class="close" data-dismiss="modal">&times;</button>
																					<h4 class="modal-title">Vehicle Details</h4>
																</div>
																<div class="modal-body table-responsive">
																	<table class="table table-bordered" style="width:100%">
																		<thead></thead>
																		<tbody class="row">
																			<tr>
																				<th>Owner Name</th>
																				<td>: Venkateswarlu</td>
																			</tr>
																			<tr>
																				<th>Reg No</th>
																				<td>: TS67</td>
																			</tr>
																			<tr>
																				<th>Modal No</th>
																				<td>: TATA 1109</td>
																			</tr>
																			<tr>
																				<th>Driver Name</th>
																				<td>: Ragendra<a href="#" data-toggle="modal" data-target="#edit_vehicle"><i class="fa fa-pencil-square-o fa" aria-hidden="true"></i></a>
																				</td>
																			</tr>
																			<tr>
																				<th>Billti No</th>
																				<td>: 98567</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
													<div class="form-group">
														<button type="button" class="btn btn-default btn-sm btn-block">Reject</button>
													</div>
													<div class="form-group">
														<a href="view_details.php" target="_blank">
															<button type="button" class="btn btn-default btn-sm btn-block">View Details</button>
														</a>
													</div>
													<div class="form-group">
														<button type="button" class="btn btn-default btn-sm btn-block">Track</button>
													</div>
													<div class="form-group">
														<button type="button" class="btn btn-default btn-sm btn-block">Support</button>
													</div>
													<div>
														<a href="#">
															<button type="button" class="btn btn-default btn-sm btn-block">Refund</button>
														</a>
													</div>
													</td>
													</tr>
													<tr>
														<th> Insurance</th>
														<th> Goods Risu</th>
													</tr>
													<tr>
														<td> xxxxxxxx</td>
														<td> xxxxxxxx</td>
													</tr>
													</tbody>
													</table>
													<div style="display:none" id="toggle-vechile-info1">
														<table width="100%">
															<tbody class="row">
																<tr>
																	<td class="bv-vechile-info col-md-1">&nbsp;</td>
																	<td class="bv-capacity col-md-2">&nbsp;</td>
																	<td class="bv-rating col-md-2">&nbsp;</td>
																	<td class="bv-capacity col-md-2">
																		<table>
																			<thead></thead>
																			<tbody class="row">
																				<tr>
																					<td>15000/-</td>
																					<td>5000/-</td>
																				</tr>
																				<tr>
																					<td>10000/-</td>
																					<td>3000/-</td>
																				</tr>
																				<tr>
																					<td>12000/-</td>
																					<td>3500/-</td>
																				</tr>
																				<tr>
																					<td>9000/-</td>
																					<td>1500/-</td>
																				</tr>
																				<tr>
																					<td>10000/-</td>
																					<td>3000/-</td>
																				</tr>
																				<tr>
																					<td>12000/-</td>
																					<td>3500/-</td>
																				</tr>
																				<tr>
																					<td>9000/-</td>
																					<td>1500/-</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																	<td class="bv-capacity col-md-1">&nbsp;</td>
																	<td class="bv-capacity col-md-2">&nbsp;</td>
																	<td class="bv-capacity col-md-2">&nbsp;</td>
																	<td class="bv-capacity col-md-2">&nbsp;</td>
																	<td class=" col-md-2">
																		<div class="form-group">
																			<button type="button" class="btn btn-default btn-sm ">Print Invoice</button>
																		</div>
																	</td>
																	<!--<td class="bv-book col-md-1"><a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a></td>-->
																</tr>
															</tbody>
														</table>
													</div>
											</div>
											
										</div>
										<div id="collapse1" class="panel-collapse collapse">
											<div class="panel-body border-1px-ddd py-3 px-4">
												<div class="row">
													<div class="col-md-12">
														<ul class="nav nav-tabs">
															<li class="active"><a data-toggle="tab" href="#tab1_load">Reviews</a>
															</li>
															<li><a data-toggle="tab" href="#tab2_load">Features</a>
															</li>
															<li><a data-toggle="tab" href="#tab3_load">Vechile Images</a>
															</li>
														</ul>
														<div class="tab-content">
															<div id="tab1_load" class="tab-pane fade in active">
																<div class="media mt-10">
																	<div class="media-left">
																		<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																	</div>
																	<div class="media-body">
																		<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																		<div class="rating mb-0">
																			<ul class="list-inline">
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																				</li>
																			</ul>
																		</div>
																		<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																	</div>
																</div>
																<div class="media mt-10">
																	<div class="media-left">
																		<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																	</div>
																	<div class="media-body">
																		<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																		<div class="rating mb-0">
																			<ul class="list-inline">
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																				</li>
																			</ul>
																		</div>
																		<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																	</div>
																</div>
																<div class="media mt-10">
																	<div class="media-left">
																		<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																	</div>
																	<div class="media-body">
																		<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																		<div class="rating mb-0">
																			<ul class="list-inline">
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																				</li>
																			</ul>
																		</div>
																		<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																	</div>
																</div>
															</div>
															<div id="tab2_load" class="tab-pane fade">
																<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
															</div>
															<div id="tab3_load" class="tab-pane fade">
																<div class="mt-10">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br>
										<!-- One Vechile -->
									</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			</section>
		</div>
		<div id="tab2" class="tab-pane fade">
			<section class="content">
				<h3>Cancel Bookings</h3>
				<div class="panel with-nav-tabs panel-default">
					<div class="panel-body ">
						<div class="tab-content">
							<form action="" method="">
								<div class="row">
									<div class="col-md-12 b-vans ">
										<div class="panel-group row-sec" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title ">
                                                <div class="table-responsive">
                                                    <table width="100%">
                                                        <thead class="black white-text row">
                                                            <tr>
                                                                <th class="col-md-2">Date/time</th>
                                                                <th class="col-md-2">Booking Information</th>
																<th class="col-md-2">Load/Board Point </th>
                                                                <th class="col-md-2">Service-info</th>
                                                                <th class="col-md-3">Customer Option</th>
                                                                <th class="col-md-1">Status</th>
                                                                
                                                            </tr>
                                                        </thead>
													</table>
                                                </div>
                                            </h4>
												</div>
											</div>
											<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
												<h4 class="panel-title vechiles-list">
                                            <div class="expand" >
                 
<div data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="right-arrow " style="">+</div>
<div class="form-group">
							<a href="#">
								<a type="button" class="btn btn-default btn-sm  toggle-vechile-info-btn2 more_button right-arrow2">Read More</a>
							</a>
						</div>
                                            </div>
                                            <div class="table-responsive table_res">
												<table width="100%">
													<tbody class="row">
														<tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text form-group"><i class="fa fa-calendar-o" aria-hidden="true"></i> 24/06/2019</div>
                                                                <div class="bvv-text form-group"><i class="fa fa-calendar" aria-hidden="true"></i> 11 : 30 AM</div>
															 </td>
                                                            <td class="bv-capacity col-md-2">
															<table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>BookingID</th>
																				<td>: 45673</td>
																			</tr>
																			<tr>
																				<th>InvoiceNo </th>
																				<td>: 9856345</td>
																			</tr>
																			<tr>
																				<th>Lorry No</th>
																				<td>: TS67</td>
																			</tr>
																			<tr>
																				<th>Way Bill No </th>
																				<td>: 45673</td>
																			</tr>
																			<tr>
																				<th>Billti No </th>
																				<td>: 98567</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															<td class="bv-loading-dt col-md-2">
															<table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>Loading Point</th>
																				<td>:Hyderabad</td>
																			</tr>
																			<tr>
																				<th>Boarding Point</th>
																				<td>:Bangalore</td>
																			</tr>
																			<tr>
																				<th colspan="2">Route Info:</th>
																				
																			</tr>
																			<tr>
																				<td>Hyderabad</td>
																				<td>:Bangalore</td>
																			</tr>
																			
																		</tbody>
																	</table>
                                                               
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>Size</th>
																				<td>: 20cm</td>
																			</tr>
																			<tr>
																				<th>Type </th>
																				<td>: steel</td>
																			</tr>
																			<tr>
																				<th>Capacity</th>
																				<td>: 5</td>
																			</tr>
																			
																		</tbody>
																	</table>
                                                           </td>
															<td class="bv-capacity col-md-2">
                                                               <table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th></th>
																				<th>Date</th>
																				<th>Time</th>
																			</tr>
																			<tr>
																				<td>Hyderabad</td>
																				<td>08/05/2019</td>
																				<td>11:00AM</td>
																			</tr>
																			<tr>
																				<td>Bangalore</td>
																				<td>09/05/2019</td>
																				<td>05:00PM</td>
																			</tr>
																			<tr>
																				
																				<td colspan="3">                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
</td>
																				
																			</tr>
																			
																		</tbody>
																	</table>
                                                            </td>
																<td class="bv-capacity col-md-2">
                                                               <div class="form-group"><p>Cancelled</p></div>
                                                           </td>
                                                            
						</tr>
						</tbody>
						</table>
						<div style="display:none" id="toggle-vechile-info2">
							<table width="100%">
								<tbody class="row">
									<tr>
										<td class="bv-vechile-info col-md-1">&nbsp;</td>
										<td class="bv-capacity col-md-2">&nbsp;</td>
										<td class="bv-rating col-md-2">&nbsp;</td>
										<td class="bv-capacity col-md-2">
											<table>
												<thead></thead>
												<tbody class="row">
													<tr>
														<td>15000/-</td>
														<td>5000/-</td>
													</tr>
													<tr>
														<td>10000/-</td>
														<td>3000/-</td>
													</tr>
													<tr>
														<td>12000/-</td>
														<td>3500/-</td>
													</tr>
													<tr>
														<td>9000/-</td>
														<td>1500/-</td>
													</tr>
													<tr>
														<td>10000/-</td>
														<td>3000/-</td>
													</tr>
													<tr>
														<td>12000/-</td>
														<td>3500/-</td>
													</tr>
													<tr>
														<td>9000/-</td>
														<td>1500/-</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td class="bv-capacity col-md-1">&nbsp;</td>
										<td class="bv-capacity col-md-1">&nbsp;</td>
										<td class=" col-md-2">
                                                               <div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block">Active</button></div>
<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >On Way</button></div>
<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >Reject</button></div>
<div><a href="#"><button type="button" class="btn btn-default btn-sm btn-block">Cance1</button></a></div>
                                                           </td>
										<!--<td class="bv-book col-md-1"><a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a></td>-->
									</tr>
								</tbody>
							</table>
						</div>
				</div>
                                        </h4>
											</div>
											<div id="collapse4" class="panel-collapse collapse">
												<div class="panel-body border-1px-ddd py-3 px-4">
													<div class="row">
														<div class="col-md-12">
															<ul class="nav nav-tabs">
																<li class="active"><a data-toggle="tab" href="#tab10_load">Reviews</a>
																</li>
																<li><a data-toggle="tab" href="#tab11_load">Features</a>
																</li>
																<li><a data-toggle="tab" href="#tab12_load">Vechile Images</a>
																</li>
															</ul>
															<div class="tab-content">
																<div id="tab10_load" class="tab-pane fade in active">
																	<div class="media mt-10">
																		<div class="media-left">
																			<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																		</div>
																		<div class="media-body">
																			<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																			<div class="rating mb-0">
																				<ul class="list-inline">
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																					</li>
																				</ul>
																			</div>
																			<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																		</div>
																	</div>
																	<div class="media mt-10">
																		<div class="media-left">
																			<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																		</div>
																		<div class="media-body">
																			<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																			<div class="rating mb-0">
																				<ul class="list-inline">
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																					</li>
																				</ul>
																			</div>
																			<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																		</div>
																	</div>
																	<div class="media mt-10">
																		<div class="media-left">
																			<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																		</div>
																		<div class="media-body">
																			<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																			<div class="rating mb-0">
																				<ul class="list-inline">
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																					</li>
																					<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																					</li>
																				</ul>
																			</div>
																			<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																		</div>
																	</div>
																</div>
																<div id="tab11_load" class="tab-pane fade">
																	<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																	<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																</div>
																<div id="tab12_load" class="tab-pane fade">
																	<div class="mt-10">
																		<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																		<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																		<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																		<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																		<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																		<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																		<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																		<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<br>
											<!-- One Vechile -->
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="panel-body">
						<div class="tab-content">
							<form action="" method="">
								<div class="row">
									<div class="col-md-12 b-vans">
										<div class="panel-group row-sec" id="accordion">
											<div class="panel panel-default"></div>
											<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
												<h4 class="panel-title vechiles-list">
                                            <div class="expand">
                                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="right-arrow " style="">+</div>
                                            </div>
                                            <div class="table-responsive">
                                                <table width="100%">
													<tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text">Venkateswarlu</div>
																<p class="bvv-number">15820</p>
                                                                <div class="text-center">
                                                                    <i class="fa fa-truck fa-5x"></i>
                                                                    <br>
                                                                    <p class="bvv-name">TATA 1109</p>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <p>Height : 40cm</p>
                                                                <p>Width  : 25cm</p>
																<p><i class="fa fa-balance-scale"></i> 16 Ton</p>
                                                                <p>Wheel Type:Steel</p>
                                                                <p>Axle</p>
                                                            </td>
                                                            <td class="bv-loading-dt col-md-2">
                                                                <div class="media">
                                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                                    <div class="media-body">
                                                                        <p class="">06:00 - 10:00 AM</p>
                                                                        <p class="pt-0">02/01/1995</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="bv col-md-1">
                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                                            </td>
                                                            <td class="bv-rating col-md-2">
                                                                <p>4.5</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                                <p class="text-mute">359 Reviews</p>
                                                                <p class="text-success">520 Load</p>
                                                            </td>
                                                            <td class="bv-price col-md-2">
                                                                <h4>INR 2000.00</h4>
												</td>
												</tr>
												</tbody>
												</table>
											</div>
											</h4>
											<div class="clearfix">&nbsp;</div>
										</div>
										<div id="collapse5" class="panel-collapse collapse">
											<div class="panel-body border-1px-ddd py-3 px-4">
												<div class="row">
													<div class="col-md-12">
														<ul class="nav nav-tabs">
															<li class="active"><a data-toggle="tab" href="#tab4_load">Reviews</a>
															</li>
															<li><a data-toggle="tab" href="#tab5_load">Features</a>
															</li>
															<li><a data-toggle="tab" href="#tab6_load">Vechile Images</a>
															</li>
														</ul>
														<div class="tab-content">
															<div id="tab4_load" class="tab-pane fade in active">
																<div class="media mt-10">
																	<div class="media-left">
																		<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																	</div>
																	<div class="media-body">
																		<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																		<div class="rating mb-0">
																			<ul class="list-inline">
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																				</li>
																			</ul>
																		</div>
																		<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																	</div>
																</div>
																<div class="media mt-10">
																	<div class="media-left">
																		<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																	</div>
																	<div class="media-body">
																		<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																		<div class="rating mb-0">
																			<ul class="list-inline">
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																				</li>
																			</ul>
																		</div>
																		<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																	</div>
																</div>
																<div class="media mt-10">
																	<div class="media-left">
																		<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																	</div>
																	<div class="media-body">
																		<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																		<div class="rating mb-0">
																			<ul class="list-inline">
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																				</li>
																				<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																				</li>
																			</ul>
																		</div>
																		<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																	</div>
																</div>
															</div>
															<div id="tab5_load" class="tab-pane fade">
																<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
																<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
															</div>
															<div id="tab6_load" class="tab-pane fade">
																<div class="mt-10">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																	<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br>
										<!-- One Vechile -->
									</div>
								</div>
						</div>
						</form>
					</div>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<form action="" method="">
							<div class="row">
								<div class="col-md-12 b-vans">
									<div class="panel-group row-sec" id="accordion">
										<div class="panel panel-default"></div>
										<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
											<h4 class="panel-title vechiles-list">
                                            <div class="expand">
                                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="right-arrow " style="">+</div>
                                            </div>
                                            <div class="table-responsive">
                                                <table width="100%">

                                                    <tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text">Venkateswarlu</div>
																<p class="bvv-number">15820</p>
                                                                <div class="text-center">
                                                                    <i class="fa fa-truck fa-5x"></i>
                                                                    <br>
                                                                    <p class="bvv-name">TATA 1109</p>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <p>Height:40cm</p>
                                                                <p>Width:25cm</p>
																<p><i class="fa fa-balance-scale"></i> 16 Ton</p>
                                                                <p>Type:Steel</p>
                                                                <p>Axle</p>
                                                            </td>
                                                            <td class="bv-loading-dt col-md-2">
                                                                <div class="media">
                                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                                    <div class="media-body">
                                                                        <p class="">06:00 - 10:00 AM</p>
                                                                        <p class="pt-0">02/01/1995</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="bv col-md-1">
                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                                            </td>
                                                            <td class="bv-rating col-md-2">
                                                                <p>4.5</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                                <p class="text-mute">359 Reviews</p>
                                                                <p class="text-success">520 Load</p>
                                                            </td>
                                                            <td class="bv-price col-md-2">
                                                                <h4>INR 2000.00</h4>
											</td>
											</tr>
											</tbody>
											</table>
										</div>
										</h4>
										<div class="clearfix">&nbsp;</div>
									</div>
									<div id="collapse6" class="panel-collapse collapse">
										<div class="panel-body border-1px-ddd py-3 px-4">
											<div class="row">
												<div class="col-md-12">
													<ul class="nav nav-tabs">
														<li class="active"><a data-toggle="tab" href="#tab7">Reviews</a>
														</li>
														<li><a data-toggle="tab" href="#tab8">Features</a>
														</li>
														<li><a data-toggle="tab" href="#tab9">Vechile Images</a>
														</li>
													</ul>
													<div class="tab-content">
														<div id="tab7" class="tab-pane fade in active">
															<div class="media mt-10">
																<div class="media-left">
																	<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																</div>
																<div class="media-body">
																	<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																	<div class="rating mb-0">
																		<ul class="list-inline">
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																			</li>
																		</ul>
																	</div>
																	<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																</div>
															</div>
															<div class="media mt-10">
																<div class="media-left">
																	<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																</div>
																<div class="media-body">
																	<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																	<div class="rating mb-0">
																		<ul class="list-inline">
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																			</li>
																		</ul>
																	</div>
																	<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																</div>
															</div>
															<div class="media mt-10">
																<div class="media-left">
																	<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																</div>
																<div class="media-body">
																	<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																	<div class="rating mb-0">
																		<ul class="list-inline">
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																			</li>
																		</ul>
																	</div>
																	<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																</div>
															</div>
														</div>
														<div id="tab8" class="tab-pane fade">
															<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
															<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
														</div>
														<div id="tab9" class="tab-pane fade">
															<div class="mt-10">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br>
									<!-- One Vechile -->
								</div>
							</div>
					</div>
					</form>
				</div>
		</div>
</div>
</section>
</div>
<div id="tab3" class="tab-pane fade">
	<section class="content">
		<h3>Deliver Bookings</h3>
		<div class="panel with-nav-tabs panel-default">
			<div class="panel-body ">
				<div class="tab-content">
					<form action="" method="">
						<div class="row">
							<div class="col-md-12 b-vans ">
								<div class="panel-group row-sec" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title ">
                                                <div class="table-responsive">
                                                    <table width="100%">
                                                        <thead class="black white-text row">
                                                            <tr>
                                                                <th class="col-md-2">Date/time</th>
                                                                <th class="col-md-2">Booking Information</th>
																<th class="col-md-2">Load/Board Point </th>
                                                                <th class="col-md-2">Service-info</th>
                                                                <th class="col-md-2">Customer Option</th>
                                                                <th class="col-md-1">Status</th>
                                                            </tr>
                                                        </thead>
													</table>
                                                </div>
                                            </h4>
										</div>
									</div>
									<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
										<h4 class="panel-title vechiles-list">
                                            <div class="expand" >
                 
<div data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="right-arrow " style="">+</div>
<div class="form-group">
							<a href="#">
								<a type="button" class="btn btn-default btn-sm  toggle-vechile-info-btn3 more_button right-arrow2">Read More</a>
							</a>
						</div>
                                            </div>
                                            <div class="table-responsive table_res">
												<table width="100%">
													<tbody class="row">
														<tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text form-group"><i class="fa fa-calendar-o" aria-hidden="true"></i> 24/06/2019</div>
                                                                <div class="bvv-text form-group"><i class="fa fa-calendar" aria-hidden="true"></i> 11 : 30 AM</div>
															 </td>
                                                            <td class="bv-capacity col-md-2">
															<table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>BookingID</th>
																				<td>: 45673</td>
																			</tr>
																			<tr>
																				<th>InvoiceNo </th>
																				<td>: 9856345</td>
																			</tr>
																			<tr>
																				<th>Lorry No</th>
																				<td>: TS67</td>
																			</tr>
																			<tr>
																				<th>Way Bill No </th>
																				<td>: 45673</td>
																			</tr>
																			<tr>
																				<th>Billti No </th>
																				<td>: 98567</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															<td class="bv-loading-dt col-md-2">
															<table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>Loading Point</th>
																				<td>:Hyderabad</td>
																			</tr>
																			<tr>
																				<th>Boarding Point</th>
																				<td>:Bangalore</td>
																			</tr>
																			<tr>
																				<th colspan="2">Route Info:</th>
																				
																			</tr>
																			<tr>
																				<td>Hyderabad</td>
																				<td>:Bangalore</td>
																			</tr>
																			
																		</tbody>
																	</table>
                                                               
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th>Size</th>
																				<td>: 20cm</td>
																			</tr>
																			<tr>
																				<th>Type </th>
																				<td>: steel</td>
																			</tr>
																			<tr>
																				<th>Capacity</th>
																				<td>: 5</td>
																			</tr>
																			
																		</tbody>
																	</table>
                                                           </td>
															<td class="bv-capacity col-md-2">
                                                               <table>
																		<thead></thead>
																		<tbody>
																			<tr>
																				<th></th>
																				<th>Date</th>
																				<th>Time</th>
																			</tr>
																			<tr>
																				<td>Hyderabad</td>
																				<td>08/05/2019</td>
																				<td>11:00AM</td>
																			</tr>
																			<tr>
																				<td>Bangalore</td>
																				<td>09/05/2019</td>
																				<td>05:00PM</td>
																			</tr>
																			<tr>
																				
																				<td colspan="3">                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
</td>
																				
																			</tr>
																			
																		</tbody>
																	</table>
                                                            </td>
																<td class="bv-capacity col-md-2">
                                                               <div class="form-group"><p>Deliverd</p></div>
                                                           </td>
                                                            
						</tr>
						</tbody>
						</table>
						<div style="display:none" id="toggle-vechile-info3">
							<table width="100%">
								<tbody class="row">
									<tr>
										<td class="bv-vechile-info col-md-1">&nbsp;</td>
										<td class="bv-capacity col-md-2">&nbsp;</td>
										<td class="bv-rating col-md-2">&nbsp;</td>
										<td class="bv-capacity col-md-2">
											<table>
												<thead></thead>
												<tbody class="row">
													<tr>
														<td>15000/-</td>
														<td>5000/-</td>
													</tr>
													<tr>
														<td>10000/-</td>
														<td>3000/-</td>
													</tr>
													<tr>
														<td>12000/-</td>
														<td>3500/-</td>
													</tr>
													<tr>
														<td>9000/-</td>
														<td>1500/-</td>
													</tr>
													<tr>
														<td>10000/-</td>
														<td>3000/-</td>
													</tr>
													<tr>
														<td>12000/-</td>
														<td>3500/-</td>
													</tr>
													<tr>
														<td>9000/-</td>
														<td>1500/-</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td class="bv-capacity col-md-1">&nbsp;</td>
										<td class="bv-capacity col-md-1">&nbsp;</td>
										<td class=" col-md-2">
                                                               <div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block">Active</button></div>
<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >On Way</button></div>
<div class="form-group"><button type="button" class="btn btn-default btn-sm btn-block" >Reject</button></div>
<div><a href="#"><button type="button" class="btn btn-default btn-sm btn-block">Cance1</button></a></div>
                                                           </td>
										<!--<td class="bv-book col-md-1"><a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a></td>-->
									</tr>
								</tbody>
							</table>
						</div>
				</div>
                                        </h4>
									</div>
									<div id="collapse7" class="panel-collapse collapse">
										<div class="panel-body border-1px-ddd py-3 px-4">
											<div class="row">
												<div class="col-md-12">
													<ul class="nav nav-tabs">
														<li class="active"><a data-toggle="tab" href="#tab1_load">Reviews</a>
														</li>
														<li><a data-toggle="tab" href="#tab2_load">Features</a>
														</li>
														<li><a data-toggle="tab" href="#tab3_load">Vechile Images</a>
														</li>
													</ul>
													<div class="tab-content">
														<div id="tab1_load" class="tab-pane fade in active">
															<div class="media mt-10">
																<div class="media-left">
																	<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																</div>
																<div class="media-body">
																	<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																	<div class="rating mb-0">
																		<ul class="list-inline">
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																			</li>
																		</ul>
																	</div>
																	<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																</div>
															</div>
															<div class="media mt-10">
																<div class="media-left">
																	<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																</div>
																<div class="media-body">
																	<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																	<div class="rating mb-0">
																		<ul class="list-inline">
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																			</li>
																		</ul>
																	</div>
																	<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																</div>
															</div>
															<div class="media mt-10">
																<div class="media-left">
																	<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
																</div>
																<div class="media-body">
																	<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																	<div class="rating mb-0">
																		<ul class="list-inline">
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																			</li>
																			<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																			</li>
																		</ul>
																	</div>
																	<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
																</div>
															</div>
														</div>
														<div id="tab2_load" class="tab-pane fade">
															<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
															<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
														</div>
														<div id="tab3_load" class="tab-pane fade">
															<div class="mt-10">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
																<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br>
									<!-- One Vechile -->
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="panel-body">
				<div class="tab-content">
					<form action="" method="">
						<div class="row">
							<div class="col-md-12 b-vans">
								<div class="panel-group row-sec" id="accordion">
									<div class="panel panel-default"></div>
									<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
										<h4 class="panel-title vechiles-list">
                                            <div class="expand">
                                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="right-arrow " style="">+</div>
                                            </div>
                                            <div class="table-responsive">
                                                <table width="100%">
													<tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text">Venkateswarlu</div>
																<p class="bvv-number">15820</p>
                                                                <div class="text-center">
                                                                    <i class="fa fa-truck fa-5x"></i>
                                                                    <br>
                                                                    <p class="bvv-name">TATA 1109</p>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <p>Height : 40cm</p>
                                                                <p>Width  : 25cm</p>
																<p><i class="fa fa-balance-scale"></i> 16 Ton</p>
                                                                <p>Wheel Type:Steel</p>
                                                                <p>Axle</p>
                                                            </td>
                                                            <td class="bv-loading-dt col-md-2">
                                                                <div class="media">
                                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                                    <div class="media-body">
                                                                        <p class="">06:00 - 10:00 AM</p>
                                                                        <p class="pt-0">02/01/1995</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="bv col-md-1">
                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                                            </td>
                                                            <td class="bv-rating col-md-2">
                                                                <p>4.5</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                                <p class="text-mute">359 Reviews</p>
                                                                <p class="text-success">520 Load</p>
                                                            </td>
                                                            <td class="bv-price col-md-2">
                                                                <h4>INR 2000.00</h4>
										</td>
										</tr>
										</tbody>
										</table>
									</div>
									</h4>
									<div class="clearfix">&nbsp;</div>
								</div>
								<div id="collapse8" class="panel-collapse collapse">
									<div class="panel-body border-1px-ddd py-3 px-4">
										<div class="row">
											<div class="col-md-12">
												<ul class="nav nav-tabs">
													<li class="active"><a data-toggle="tab" href="#tab4_load">Reviews</a>
													</li>
													<li><a data-toggle="tab" href="#tab5_load">Features</a>
													</li>
													<li><a data-toggle="tab" href="#tab6_load">Vechile Images</a>
													</li>
												</ul>
												<div class="tab-content">
													<div id="tab4_load" class="tab-pane fade in active">
														<div class="media mt-10">
															<div class="media-left">
																<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
															</div>
															<div class="media-body">
																<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																<div class="rating mb-0">
																	<ul class="list-inline">
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																		</li>
																	</ul>
																</div>
																<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
															</div>
														</div>
														<div class="media mt-10">
															<div class="media-left">
																<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
															</div>
															<div class="media-body">
																<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																<div class="rating mb-0">
																	<ul class="list-inline">
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																		</li>
																	</ul>
																</div>
																<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
															</div>
														</div>
														<div class="media mt-10">
															<div class="media-left">
																<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
															</div>
															<div class="media-body">
																<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
																<div class="rating mb-0">
																	<ul class="list-inline">
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																		</li>
																		<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																		</li>
																	</ul>
																</div>
																<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
															</div>
														</div>
													</div>
													<div id="tab5_load" class="tab-pane fade">
														<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
														<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
													</div>
													<div id="tab6_load" class="tab-pane fade">
														<div class="mt-10">
															<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
															<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
															<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
															<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
															<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
															<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
															<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
															<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<!-- One Vechile -->
							</div>
						</div>
				</div>
				</form>
			</div>
		</div>
		<div class="panel-body">
			<div class="tab-content">
				<form action="" method="">
					<div class="row">
						<div class="col-md-12 b-vans">
							<div class="panel-group row-sec" id="accordion">
								<div class="panel panel-default"></div>
								<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
									<h4 class="panel-title vechiles-list">
                                            <div class="expand">
                                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="right-arrow " style="">+</div>
                                            </div>
                                            <div class="table-responsive">
                                                <table width="100%">

                                                    <tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text">Venkateswarlu</div>
																<p class="bvv-number">15820</p>
                                                                <div class="text-center">
                                                                    <i class="fa fa-truck fa-5x"></i>
                                                                    <br>
                                                                    <p class="bvv-name">TATA 1109</p>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <p>Height:40cm</p>
                                                                <p>Width:25cm</p>
																<p><i class="fa fa-balance-scale"></i> 16 Ton</p>
                                                                <p>Type:Steel</p>
                                                                <p>Axle</p>
                                                            </td>
                                                            <td class="bv-loading-dt col-md-2">
                                                                <div class="media">
                                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                                    <div class="media-body">
                                                                        <p class="">06:00 - 10:00 AM</p>
                                                                        <p class="pt-0">02/01/1995</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="bv col-md-1">
                                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                                            </td>
                                                            <td class="bv-rating col-md-2">
                                                                <p>4.5</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                                <p class="text-mute">359 Reviews</p>
                                                                <p class="text-success">520 Load</p>
                                                            </td>
                                                            <td class="bv-price col-md-2">
                                                                <h4>INR 2000.00</h4>
									</td>
									</tr>
									</tbody>
									</table>
								</div>
								</h4>
								<div class="clearfix">&nbsp;</div>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body border-1px-ddd py-3 px-4">
									<div class="row">
										<div class="col-md-12">
											<ul class="nav nav-tabs">
												<li class="active"><a data-toggle="tab" href="#tab7">Reviews</a>
												</li>
												<li><a data-toggle="tab" href="#tab8">Features</a>
												</li>
												<li><a data-toggle="tab" href="#tab9">Vechile Images</a>
												</li>
											</ul>
											<div class="tab-content">
												<div id="tab7" class="tab-pane fade in active">
													<div class="media mt-10">
														<div class="media-left">
															<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
														</div>
														<div class="media-body">
															<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
															<div class="rating mb-0">
																<ul class="list-inline">
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																	</li>
																</ul>
															</div>
															<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
														</div>
													</div>
													<div class="media mt-10">
														<div class="media-left">
															<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
														</div>
														<div class="media-body">
															<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
															<div class="rating mb-0">
																<ul class="list-inline">
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																	</li>
																</ul>
															</div>
															<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
														</div>
													</div>
													<div class="media mt-10">
														<div class="media-left">
															<img src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="image" width="auto" height="40px" class="media-object">
														</div>
														<div class="media-body">
															<h5 class="mb-5 mt-0 font-weight-bold">Customer Name</h5>
															<div class="rating mb-0">
																<ul class="list-inline">
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star"></i>
																	</li>
																	<li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i>
																	</li>
																</ul>
															</div>
															<p class="mt-0 font-w-400">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
														</div>
													</div>
												</div>
												<div id="tab8" class="tab-pane fade">
													<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
													<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
												</div>
												<div id="tab9" class="tab-pane fade">
													<div class="mt-10">
														<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
														<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
														<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
														<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
														<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
														<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
														<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
														<img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<br>
							<!-- One Vechile -->
						</div>
					</div>
			</div>
			</form>
		</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
	$(document).ready(function(){
	  $(".toggle-vechile-info-btn1").click(function(){
	    $("#toggle-vechile-info1").toggle();
	  });
	});
	$(document).ready(function(){
	  $(".toggle-vechile-info-btn2").click(function(){
	    $("#toggle-vechile-info2").toggle();
	  });
	});
	$(document).ready(function(){
	  $(".toggle-vechile-info-btn3").click(function(){
	    $("#toggle-vechile-info3").toggle();
	  });
	});
</script>
<script>
	$(function() {
	        $(".expand").on("click", function() {
	            // $(this).next().slideToggle(200);
	            $expand = $(this).find(">:first-child");
	
	            if ($expand.text() == "+") {
	                $expand.text("-");
	            } else {
	                $expand.text("+");
	            }
	        });
	    });
</script>
<script>
	$(document).ready(function() {
	        //Initialize tooltips
	        $('.nav-tabs > li a[title]').tooltip();
	
	        //Wizard
	        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
	
	            var $target = $(e.target);
	
	            if ($target.parent().hasClass('disabled')) {
	                return false;
	            }
	        });
	
	        $(".next-step").click(function(e) {
	
	            var $active = $('.wizard .nav-tabs li.active');
	            $active.next().removeClass('disabled');
	            nextTab($active);
	
	        });
	        $(".prev-step").click(function(e) {
	
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
<?php include( "footer.php"); ?>
<script>
	//Date picker
	    $('.datepicker').datepicker({
	        autoclose: true
	    });
</script>