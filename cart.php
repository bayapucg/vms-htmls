<?php include("header.php"); ?>

<style>
    .btn.font-20{
        font-size: 11px;
    }
    span.line{
        font-size: 16px;
    }
    .bv-book .btn.btn-sm .fa {
        font-size: 13px;
    }
</style>
<!-- Navbar -->

<section class="booking mt-3 mb-3">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9 b-vans">
                <div class="card mt-3">
                    <div class="card-header">
                        Review Your Booking
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 text-center mt-4">
                                <i class="fa fa-truck fa-3x pt-2 mb-0"></i><br>
                                <span>Container</span>
                            </div>
                            <div class="col-9">
                                <div class="row text-center">
                                    <div class="col bv">
                                        <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <h3>Hyderabad</h3>
                                    </div>
                                    <div class="col-6" style="position: relative;">
                                        <hr>
                                        <i class="fa fa-fighter-jet fa-3x" style="position: absolute; color: #aaa; top: -6px; left: 50%; transform: translateX(-50%);"></i>
                                    </div>
                                    <div class="col-3">
                                        <h3>Guntur</h3>
                                    </div>
                                </div>
                                <div class="row mt-3 text-center">
                                    <div class="col-2"></div>
                                    <div class="col-2">
                                        <i class="fa fa-bus"></i>
                                        <span>Medium</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-calendar fa-1x mt-2"></i>
                                        <span class="">06:00 - 10:00 AM</span>
                                        <span class="">02/01/1995</span>
                                    </div>
                                    <div class="col-2">
                                        <i class="fa fa-tint"></i>
                                        <span>Food Oil</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="panel-group" id="accordion">
                    <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
                        <h4 class="panel-title ">
                            <div class="expand">
                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="right-arrow " style="">+</div>
                            </div>
                            <div class="table-responsive">
                                <table width="100%">

                                    <tbody class="">
                                        <tr>
                                            <td class="bv-vechile-info">
                                                <p class="bvv-number">15820</p>
                                                <div class="text-center">
                                                    <i class="fa fa-truck fa-5x"></i>
                                                    <br>
                                                    <p class="bvv-name">TATA 1109</p>
                                                </div>
                                            </td>
                                            <td class="bv-capacity">
                                                <p><i class="fa fa-tachometer"></i> 16 Ton</p>
                                                <p><i class="fa fa-arrows-h"></i> 18 fit</p>
                                            </td>
                                            <td class="bv-loading-dt">
                                                <div class="media">
                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                    <div class="media-body">
                                                        <p class="">06:00 - 10:00 AM</p>
                                                        <p class="pt-0">02/01/1995</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="bv">
                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                            </td>
                                            <td class="bv-rating">
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
                                            <td class="bv-price">
                                                <h4>INR 2000.00</h4>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td class="bv-book">
                                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </h4>
                        <div class="clearfix">&nbsp;</div>
                    </div>

                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body border-1px-ddd py-3 px-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tab1">Reviews</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">Vechile Images</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade pt-3 show active" id="tab1" role="tabpanel">
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade pt-3" id="tab2" role="tabpanel">
                                            
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                                            <br>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        
                                        <div class="tab-pane fade pt-3" id="tab3" role="tabpanel">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image"><img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    
                    <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
                        <h4 class="panel-title ">
                            <div class="expand">
                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="right-arrow " style="">+</div>
                            </div>
                            <div class="table-responsive">
                                <table width="100%">

                                    <tbody class="">
                                        <tr>
                                            <td class="bv-vechile-info">
                                                <p class="bvv-number">15820</p>
                                                <div class="text-center">
                                                    <i class="fa fa-truck fa-5x"></i>
                                                    <br>
                                                    <p class="bvv-name">TATA 1109</p>
                                                </div>
                                            </td>
                                            <td class="bv-capacity">
                                                <p><i class="fa fa-tachometer"></i> 16 Ton</p>
                                                <p><i class="fa fa-arrows-h"></i> 18 fit</p>
                                            </td>
                                            <td class="bv-loading-dt">
                                                <div class="media">
                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                    <div class="media-body">
                                                        <p class="">06:00 - 10:00 AM</p>
                                                        <p class="pt-0">02/01/1995</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="bv">
                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                            </td>
                                            <td class="bv-rating">
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
                                            <td class="bv-price">
                                                <h4>INR 2000.00</h4>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td class="bv-book">
                                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
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
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tab4">Reviews</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab5" role="tab">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab6" role="tab">Vechile Images</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade pt-3 show active" id="tab4" role="tabpanel">
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade pt-3" id="tab5" role="tabpanel">
                                            
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                                            <br>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        
                                        <div class="tab-pane fade pt-3" id="tab6" role="tabpanel">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image"><img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    
                    <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
                        <h4 class="panel-title ">
                            <div class="expand">
                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="right-arrow " style="">+</div>
                            </div>
                            <div class="table-responsive">
                                <table width="100%">

                                    <tbody class="">
                                        <tr>
                                            <td class="bv-vechile-info">
                                                <p class="bvv-number">15820</p>
                                                <div class="text-center">
                                                    <i class="fa fa-truck fa-5x"></i>
                                                    <br>
                                                    <p class="bvv-name">TATA 1109</p>
                                                </div>
                                            </td>
                                            <td class="bv-capacity">
                                                <p><i class="fa fa-tachometer"></i> 16 Ton</p>
                                                <p><i class="fa fa-arrows-h"></i> 18 fit</p>
                                            </td>
                                            <td class="bv-loading-dt">
                                                <div class="media">
                                                    <i class="fa fa-calendar fa-2x mt-2"></i>
                                                    <div class="media-body">
                                                        <p class="">06:00 - 10:00 AM</p>
                                                        <p class="pt-0">02/01/1995</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="bv">
                                                <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                            </td>
                                            <td class="bv-rating">
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
                                            <td class="bv-price">
                                                <h4>INR 2000.00</h4>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td class="bv-book">
                                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tab7">Reviews</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab8" role="tab">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab9" role="tab">Vechile Images</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade pt-3 show active" id="tab7" role="tabpanel">
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <img class="d-flex mr-3" src="http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="Generic placeholder image" width="auto" height="40px">
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-weight-bold">Customer Name</h5>
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade pt-3" id="tab8" role="tabpanel">
                                            
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                                            <br>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        
                                        <div class="tab-pane fade pt-3" id="tab9" role="tabpanel">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image"><img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail"src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="image">
                                            <img class="mr-3 img-thumbnail" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                </div>
                
            </div>
            <div class="col-md-3 mt-3">
                <div class="card">
                    <div class="card-header">
                        Insurance
                    </div>
                    <div class="card-body">
                        <!-- Default unchecked -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Insurance</label>
                        </div>

                        <form class="px-2" action="#">
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Material Value:</label>
                                <input type="text" class="form-control col-md-6" id="">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Insurance Provider:</label>
                                <select class="form-control col-md-6">
                                    <option>HDFC</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Total Insurance Value:</label>
                                <span class="col-md-6"> INR 15000/-</span>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Fare Details
                    </div>
                    <div class="card-body">
                        <form class="px-2" action="#">

                            <div class="form-group row">
                                <label class="col-md-6" for="email">Basic Fare (4 Load)</label>
                                <span class="col-md-6"> INR 36000/-</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Fee & Surcharges</label>
                                <span class="col-md-6"> INR 120.14/-</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Insurance</label>
                                <span class="col-md-6"> INR 1500/-</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Discount</label>
                                <span class="col-md-6"> INR 500/-</span>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Total Load Value</label>
                                <span class="col-md-6"> INR 37,120.14/-</span>
                            </div>
                            <button class="btn btn-success btn-sm">PAY NOW</button>
                        </form>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Coupon Code
                    </div>
                    <div class="card-body">

                        <form class="px-2" action="#">
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Coupon Code:</label>
                                <input type="text" class="form-control col-md-6" placeholder="Coupon Code">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Paytm Coupon Code:</label>
                                <input type="text" class="form-control col-md-6" placeholder="Coupon Code">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="email">Other Coupon Code:</label>
                                <input type="text" class="form-control col-md-6" placeholder="Coupon Code">
                            </div>
                            <button class="btn btn-success btn-sm">APPLY</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
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