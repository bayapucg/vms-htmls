<?php include("header.php"); ?>
<!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

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
        <div class="view" style="background-image: url('img/slider1.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">


          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/slider2.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/slider3.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            

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
  <!--/.Carousel Wrapper-->
<div style="position:absolute;top:120px;right:2%">
	<div class="card col-md-12">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form name="">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Book Now!</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class=" prefix grey-text"><img src="img/location-icon.png"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Pick your Loction</label>
                  </div>

                  <div class="md-form custom-textarea">
                   <i class=" prefix grey-text"><img src="img/delivery-loaction.png"></i>
                    <textarea rows="2" type="text" id="form1" class="md-textarea"></textarea>
                    <label for="form1">Delivery Address</label>
                  </div>
				  <div class="md-form custom-textarea">
                   <i class=" prefix grey-text"><img src="img/calander-icon.png"></i>
				      <input type="text" id="datetimepicker1" class="form-control">
                 
                    <label for="datetimepicker1" >Select Date</label>
                  </div> 
				   <div class="md-form">
                    <i class=" prefix grey-text"><img src="img/weight-icon.png"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Enter Weight </label>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-indigo">Get Price</button>
                    
                    
                  </div>

                </form>
                <!-- Form -->

              </div>

            </div>
</div>
<?php include("footer_links.php"); ?>
  