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

<section class="booking mt-5 pt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 b-filters">
                <div class="bf-fields">
                    <div class="bff-type">
                        <p>Loading Time</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label" for="defaultInline1">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                <label class="custom-control-label" for="defaultInline2">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                <label class="custom-control-label" for="defaultInline3">Checkbox3</label>
                            </div>
                        </div>
                    </div>

                    <div class="bff-type">
                        <p>Vechile Type</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline4">
                                <label class="custom-control-label" for="defaultInline4">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline5">
                                <label class="custom-control-label" for="defaultInline5">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline6">
                                <label class="custom-control-label" for="defaultInline6">Checkbox3</label>
                            </div>
                        </div>
                    </div>

                    <div class="bff-type">
                        <p>Pickup Point</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline7">
                                <label class="custom-control-label" for="defaultInline7">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline8">
                                <label class="custom-control-label" for="defaultInline8">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline9">
                                <label class="custom-control-label" for="defaultInline9">Checkbox3</label>
                            </div>
                        </div>
                    </div>

                    <div class="bff-type">
                        <p>Deliver Point</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline10">
                                <label class="custom-control-label" for="defaultInline10">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline11">
                                <label class="custom-control-label" for="defaultInline11">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline12">
                                <label class="custom-control-label" for="defaultInline12">Checkbox3</label>
                            </div>
                        </div>
                    </div>

                    <div class="bff-type">
                        <p>Amenities</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline13">
                                <label class="custom-control-label" for="defaultInline13">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline14">
                                <label class="custom-control-label" for="defaultInline14">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline15">
                                <label class="custom-control-label" for="defaultInline15">Checkbox3</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 b-vans">
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
                                                <th class="text-center" style="width:12%;">Book</th>
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
                                                <p><i class="fa fa-weight"></i> 16 Ton</p>
                                                <p><i class="fa fa-arrows-h"></i>18 fit</p>
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
                                                <button class="btn btn-md btn-warning">Book Now</button>
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
                                                <p><i class="fa fa-weight"></i> 16 Ton</p>
                                                <p><i class="fa fa-arrows-h"></i>18 fit</p>
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
                                                <button class="btn btn-md btn-warning">Book Now</button>
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
                                                <p><i class="fa fa-weight"></i> 16 Ton</p>
                                                <p><i class="fa fa-arrows-h"></i>18 fit</p>
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
                                                <button class="btn btn-md btn-warning">Book Now</button>
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
                                                <p><i class="fa fa-weight"></i> 16 Ton</p>
                                                <p><i class="fa fa-arrows-h"></i>18 fit</p>
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
                                                <button class="btn btn-md btn-warning">Book Now</button>
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