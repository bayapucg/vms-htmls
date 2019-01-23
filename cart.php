<?php include("header-links.php"); ?>

<style>
    .navbar-nav p, .navbar-nav i{
        padding-top: 10px;
        margin-bottom: 10px;
    }
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
<div class="fixed-top">
    <!---->
    <nav class="navbar  navbar-expand-lg navbar-dark scrolling-navbar">

        <div class="container" style="padding:0px;margin:0px;max-width:100%">
            <a class="navbar-brand" href="index.php">
                <strong><img style="width:60px;height:auto;" class="img-fluid" src="img/logo.png"></strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right -->
                <ul class="navbar-nav mx-auto text-white">
                    <li class="nav-item mx-3">
                        <p>Hyderabad</p>
                    </li>
                    <li class="nav-item mx-3">
                        <span><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></span>
                    </li>
                    <li class="nav-item mx-3">
                        <p>Guntur</p>
                    </li>
                    <li class="nav-item mx-3 mt-3">
                        <span class="line">|</span>
                    </li>
                    <li class="nav-item mx-3">
                        <p>02/01/2019</p>
                    </li>
                    <li class="nav-item mx-3 pt-3">
                        <select class="browser-default custom-select">
                            <option selected>Medium</option>
                            <option value="1">Option</option>
                            <option value="2">Option</option>
                            <option value="3">Option</option>
                        </select>
                    </li>
                    <li class="nav-item mx-3 pt-3">
                        <select class="browser-default custom-select">
                            <option selected>Full Load</option>
                            <option value="1">Option</option>
                            <option value="2">Option</option>
                            <option value="3">Option</option>
                        </select>
                    </li>
                    <li class="nav-item mx-3 text-center">
                        <i class="fa fa-truck fa-2x pt-2 mb-0"></i><br>
                        <span>Container</span>
                    </li>
                    <li class="nav-item mx-3 text-center">
                        <i class="fa fa-tint fa-2x pt-2 mb-0"></i><br>
                        <span>Food Oil</span>
                    </li>
                    <li class="nav-item mx-3">
                        <button class="btn btn-md btn-warning mt-3 px-3 py-2 font-20">Modify</button>
                    </li>
                </ul>
                
                <ul class="navbar-right ml-auto text-white">
                    <i class="fa fa-user-plus fa-2x mt-3" aria-hidden="true"></i>
                </ul>
            </div>

        </div>
    </nav>
</div>

<section class="booking mt-5 pt-4">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-9 b-vans">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title ">

                                <div class="table-responsive">
                                    <table width="100%">
                                        <thead class="black white-text">
                                            <tr>
                                                <th>Vehicle Info</th>
                                                <th>Capacity</th>
                                                <th>Loading Date / Time</th>
                                                <th>&nbsp;</th>
                                                <th>Rating</th>
                                                <th>Price</th>
                                                <th>
                                                    No.of Load
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-info">4</button>
                                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#"></a>
                                                                <a class="dropdown-item" href="#"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th class="text-center">&nbsp;</th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>
                            </h4>
                        </div>

                    </div>
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
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
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
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
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
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
                        <h4 class="panel-title ">
                            <div class="expand">
                                <div data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="right-arrow " style="">+</div>
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
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </h4>
                        <div class="clearfix">&nbsp;</div>
                    </div>

                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body border-1px-ddd py-3 px-4">
                            <div class="row">
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Heading 1</h3>
                                    </a>
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