<?php include("header.php"); ?>
<style>
    #myModal .list-inline-item{
        margin-left: 5px;
        padding: 5px;
    }
    .list-inline-item.active{
        border: 1px solid red;
        color: red;
        padding: 5px;
    }
</style>

<!--Carousel Wrapper-->
<!--<div class="view" style="background-image: url('img/slider2.png'); ">-->
<div class="view">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light " style="background-image: url('img/search-bg.png'); ">
    </div>
    <!-- Mask & flexbox options-->

</div>
<!--/.Carousel Wrapper-->
<div style="position:absolute;top:55%;width:70%;-webkit-transform: translate(5%, -50%);
  transform: translate(20%, -50%);">
    <div class="row py-2">
        <div class="col-md-8 ">
            <div class="px-5 search-main-label">
                
                <!-- Default inline 1-->
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="defaultUnchecked1" name="types" value="fullLoad">
                  <label class="custom-control-label" for="defaultUnchecked1">Full Load</label>
                </div>

                <!-- Default inline 2-->
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="defaultUnchecked2" name="types" value="partLoad">
                  <label class="custom-control-label" for="defaultUnchecked2">Part Load</label>
                </div>

                <!-- Default inline 3-->
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="defaultUnchecked3" name="types" value="box">
                  <label class="custom-control-label" for="defaultUnchecked3">Box</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card col-md-12 px-5 " style="border-radius:50px;border:2px solid #f00;">
        <!--Card content-->
        <div class="card-body" style="padding:0;">
            <!-- Form -->
            <form name="">
                <div class="row main-search">
                    <div class="form-group col-md-3 md-form">

                        <input type="text" class="form-control" placeholder="Search For Pickup Point">
                    </div>
                    <div class="form-group col-md-4 md-form">
                        <input type="text" class="form-control" id="popupFocus" placeholder="Search For Delivery">
                    </div>
                    <div class="form-group col-md-3 md-form">
                        <input type="text" class="form-control" id="datetimepicker1" placeholder="Search For Delivery">
                    </div>

                    <div class="md-form col-md-2">
                        <button type="button" class="btn btn-indigo btn-sm pull-right" data-toggle="modal" data-target="#myModal">Find Price</button>
                    </div>
                </div>
            </form>
            <!-- Form -->
        </div>
    </div>
</div>
<main class="mt-5 pt-2">
    <div class="container">
        <div class="section-heading">
            <h2>Some <span>Text</span></h2>
            <span>
                <img src="img/heading-img.png" alt="Heading">
            </span>
        </div>
        <section class="text-center">
            <!--Grid row-->
            <div class="row mb-4 wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/st1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Push notifications</h4>
                            <!--Text-->


                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/st1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Push notifications</h4>
                            <!--Text-->


                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/st1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Push notifications</h4>
                            <!--Text-->


                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!--Section: Cards-->
    </div>
    <div class="container">
        <div class="section-heading">
            <h2>Why <span>Book</span> With VMS</h2>
            <span>
                <img src="img/heading-img.png" alt="Heading">
            </span>
        </div>
        <section class="text-center">
            <!--Grid row-->
            <div class="row mb-4 wow fadeIn">
                <!--Grid column-->
                <div class="col mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/st1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">notifications</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/st1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">notifications</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col  mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/st1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">notifications</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/st1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">notifications</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/st1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">notifications</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>



            </div>
            <!--Grid row-->
        </section>
        <!--Section: Cards-->
    </div>
    <div class="container">
        <div class="section-heading">
            <h2>Our <span>Services</span> </h2>
            <span>
                <img src="img/heading-img.png" alt="Heading">
            </span>
        </div>
        <section>

        </section>
        <section class="text-center">
            <!--Grid row-->
            <div class="row  wow fadeIn">
                <!--Grid column-->
                <div class="col mb-4">
                    <div class="">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/service1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">Service</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col mb-4">
                    <div class="">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/service1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">Service</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col mb-4">
                    <div class="">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/service1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">Service</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col mb-4">
                    <div class="">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/service1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">Service</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col mb-4">
                    <div class="">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/service1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">Service</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col mb-4">
                    <div class="">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/service1.png" class="card-img-top" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h6 class="card-title">Service</h6>
                            <!--Text-->
                        </div>
                    </div>
                    <!--/.Card-->
                </div>





            </div>
            <!--Grid row-->
        </section>
        <!--Section: Cards-->
    </div>
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: 60vh;">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Slider 1</strong>
                            </h1>


                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Slider 2</strong>
                            </h1>

                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Slider 3</strong>
                            </h1>

                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Third slide-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

    </div>
    <div class="container py-4">
        <div class="section-heading">
            <h2>As <span>Spotted in</span> </h2>
            <span>
                <img src="img/heading-img.png" alt="Heading">
            </span>
        </div>
        <section class="text-center">
            <!--Grid row-->
            <div class="">
                <div class="row blog">
                    <div class="col-md-12">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#blogCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->

                    </div>
                </div>
            </div>
        </section>
        <!--Section: Cards-->
    </div>
    <section class="bg-f5f5f5 py-4">
        <div class=" pb-4">
            <div class="section-heading">
                <h2>VMS <span>Mobile Apps</span> </h2>
                <span>
                    <img src="img/heading-img.png" alt="Heading">
                </span>
            </div>
            <section style="background-image: url('img/app-banner.png');background-repeat: no-repeat; background-size: cover; ">
                <!--Grid row-->
                <div class=" container">
                    <div class="row blog">
                        <div class="col-md-12" style="min-height:400px;">
                            <div class="py-4" style="margin-top:100px;">
                                <a href="#">
                                    <div class="h1 text-white"><i class="fa fa-android" aria-hidden="true"></i></div>
                                </a>
                                <a href="#">
                                    <div class="h1 text-white mt-4"><i class="fa fa-apple" aria-hidden="true"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Cards-->
        </div>
    </section>

</main>

<!-- Central Modal Small -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100" id="myModalLabel">Find Load</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <p class="pt-5 bold-text">Select Size</p>
                    </div>
                    <div class="col-8">
                        <ul class="list-inline">
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-2x"></i><br>
                                <span>Small</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Medium</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-4x"></i><br>
                                <span>Large</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-5x"></i><br>
                                <span>Extra Large</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row py-3">
                    <div class="col-4">
                        <p class="pt-3 bold-text">Vehicle Type</p>
                    </div>
                    <div class="col-8">
                        <ul class="list-inline">
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Open</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Container</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Troller</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-truck fa-3x"></i><br>
                                <span>Some Type</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row py-3">
                    <div class="col-4">
                        <p class="pt-3 bold-text">Select Material</p>
                    </div>
                    <div class="col-8">
                        <ul class="list-inline">
                            <li class="list-inline-item text-center active">
                                <i class="fa fa-archive fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-car fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-cog fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-cubes fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item text-center">
                                <i class="fa fa-leaf fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-flask fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-fire-extinguisher fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-home fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item text-center">
                                <i class="fa fa-leanpub fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-pagelines fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-lightbulb-o fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                            <li class="list-inline-item text-center">
                                <i class="fa fa-tint fa-2x"></i><br>
                                <span>Some Text</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-4 mx-auto">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-4 mx-auto">
                        <a href="booking.php" type="button" class="btn btn-primary btn-block">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Central Modal Small -->


<!-- Focus Modal -->
<div class="modal fade" id="focusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100" id="myModalLabel">Delivery Address</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked11" name="addresses">
                            <label class="custom-control-label" for="defaultUnchecked11">9-25, narayana, prathap road , gumadikonda, andhra pardesh.</label>
                        </div>

                        <!-- Default inline 2-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked22" name="addresses">
                            <label class="custom-control-label" for="defaultUnchecked22">9-25, narayana, prathap road , gumadikonda, andhra pardesh.</label>
                        </div>

                        <!-- Default inline 3-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked33" name="addresses">
                            <label class="custom-control-label" for="defaultUnchecked33">9-25, narayana, prathap road , gumadikonda, andhra pardesh.</label>
                        </div>
                        
                        <!-- Default inline 3-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked4" name="addresses">
                            <label class="custom-control-label" for="defaultUnchecked4">9-25, narayana, prathap road , gumadikonda, andhra pardesh.</label>
                        </div>
                        
                        <!-- Default inline 3-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked5" name="addresses">
                            <label class="custom-control-label" for="defaultUnchecked5">9-25, narayana, prathap road , gumadikonda, andhra pardesh.</label>
                        </div>
                        
                        <!-- Default inline 3-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked6" name="addresses">
                            <label class="custom-control-label" for="defaultUnchecked6">9-25, narayana, prathap road , gumadikonda, andhra pardesh.</label>
                        </div>
                        
                        <!-- Default inline 3-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked7" name="addresses">
                            <label class="custom-control-label" for="defaultUnchecked7">9-25, narayana, prathap road , gumadikonda, andhra pardesh.</label>
                        </div>
                        
                        <!-- Default inline 3-->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked8" name="addresses">
                            <label class="custom-control-label" for="defaultUnchecked8">9-25, narayana, prathap road , gumadikonda, andhra pardesh.</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-4 mx-auto">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-4 mx-auto">
                        <a href="booking.php" type="button" class="btn btn-primary btn-block">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>
<script>
    $('#blogCarousel').carousel({
        interval: 2000
    });
    $('#blogCarousel1').carousel({
        interval: 4000
    });
</script>

<script>
$('input:radio[name="types"]').change(function(){
    if (this.checked && this.value == 'partLoad') {
        $("#popupFocus").focus(function(){
            $("#popupFocus").attr("data-toggle","modal");
            $("#popupFocus").attr("data-target","#focusModal");
        });   
    }
});
</script>