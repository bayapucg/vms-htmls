<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Active Bookings List
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Loads</li>
            <li class="active">Active Bookings</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="panel with-nav-tabs panel-default">
			<div class="panel-heading">
				<h4 class="m-0 pull-left">Select your module</h4>
				<span class="pull-right"><a href="add-vehicle.php" class="btn btn-primary btn-sm">+ Add Vehicle</a></span>
				<div class="clearfix">&nbsp;</div>
			</div>
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
                                                                <th class="col-md-2">Order Details</th>
                                                                <th class="col-md-2">Load Details</th>
																<th class="col-md-2">Shipping Details</th>
                                                                <th class="col-md-2">Price</th>
                                                                <th class="col-md-2">Status</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>
                                            </h4>
										</div>
									</div>
									<div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
										<h4 class="panel-title vechiles-list">
                                            <div class="expand" id="expand_content">
                                                <div data-toggle="collapse" data-parent="#accordion" data-target="#collapse1" class="right-arrow " style="">+</div>
                                            </div>
                                            <div class="table-responsive">
                                                <table width="100%">

                                                    <tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <div class="bvv-text form-group"><i class="fa fa-calendar" aria-hidden="true"></i> 24/06/2019</div>
																<div class="bvv-number form-group">Invoice No : TD23456</div>
																<div class="bvv-number form-group">Order No : TD23456</div>
                                                               
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <p>Size : 40cm</p>
                                                                <p>Vehicle Type : Lorry</p>
                                                                <p>Capacity : Lorry</p>
                                                                <p>Height : 40cm</p>
                                                                <p>Width : 25cm</p>
																<p><i class="fa fa-balance-scale"></i> 16 Ton</p>
                                                                <p>Wheel Type : Steel</p>
                                                                <p>Axle</p>
                                                            </td>
															<td class="bv-loading-dt col-md-2">
                                                                <div class="media">
																 <p>Rajendra</p>
																 <p>Hyderabad - Vijayawada</p>
																 <p>272.2 km</p>
                                                                    
                                                                    <div class="media-body">
																	
                                                                        <p class=""><i class="fa fa-calendar"></i>06:00 - 10:00 AM</p>
                                                                        <p class="pt-0">02/01/1995</p>
                                                                    </div>
																	
                                                                <p>Vehicle Type : Lorry</p>
                                                                <p>Capacity : Lorry</p>
                                                                </div>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <h4>INR 2000.00</h4>
                                                                
																
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
<div>  
    <div class="onoffswitch2">
    <input type="checkbox" name="onoffswitch2" class="onoffswitch2-checkbox" id="myonoffswitch2" checked>
    <label class="onoffswitch2-label" for="myonoffswitch2">
        <span class="onoffswitch2-inner"></span>
        <span class="onoffswitch2-switch"></span>
    </label>
    </div>
</div>
                                                                <div class="form-group"><button type="button" class="btn btn-success" ><i class="fa fa-print" aria-hidden="true"></i>Print</button></div>
																<div class="form-group"><button type="button" class="btn btn-warning" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></div>

  <!-- Modal -->
  
  <div><a href="#"><button type="button" class="btn btn-danger"><i class="fa fa-truck" aria-hidden="true"></i>Track</button></a></div>
																
                                                            </td>
                                                            

                                                            <!--<td class="bv-book col-md-1">
                                                                <a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a>
                                                            </td>-->
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </h4>
										
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<div class="panel-body border-1px-ddd py-3 px-4">
											<div class="row">
												<div class="col-md-12">
													<ul class="nav nav-tabs">
														<li class="active"><a data-toggle="tab" href="#tab1">Reviews</a>
														</li>
														<li><a data-toggle="tab" href="#tab2">Features</a>
														</li>
														<li><a data-toggle="tab" href="#tab3">Vechile Images</a>
														</li>
													</ul>
													<div class="tab-content">
														<div id="tab1" class="tab-pane fade in active">
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
														<div id="tab2" class="tab-pane fade">
															<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
															<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
														</div>
														<div id="tab3" class="tab-pane fade">
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
                                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="right-arrow " style="">+</div>
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
										<!--<td class="bv-book col-md-1">
                                                                <a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a>
                                                            </td>-->
										</tr>
										</tbody>
										</table>
									</div>
									</h4>
									<div class="clearfix">&nbsp;</div>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body border-1px-ddd py-3 px-4">
										<div class="row">
											<div class="col-md-12">
												<ul class="nav nav-tabs">
													<li class="active"><a data-toggle="tab" href="#tab4">Reviews</a>
													</li>
													<li><a data-toggle="tab" href="#tab5">Features</a>
													</li>
													<li><a data-toggle="tab" href="#tab6">Vechile Images</a>
													</li>
												</ul>
												<div class="tab-content">
													<div id="tab4" class="tab-pane fade in active">
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
													<div id="tab5" class="tab-pane fade">
														<p class="mt-10">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
														<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
													</div>
													<div id="tab6" class="tab-pane fade">
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
									<!--<td class="bv-book col-md-1">
                                                                <a href="order-conformation-fl.php" class="btn btn-md btn-warning">Book Now</a>
                                                            </td>-->
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
    <!-- /.content -->
    <div class="p-5"></div>
</div>
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
<?php include("footer.php"); ?>