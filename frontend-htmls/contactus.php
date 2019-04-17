<?php include("header.php"); ?>
<style type="text/css">

      
      .carousel {
        height: 60vh;
      }


    
    </style>
<!--Carousel Wrapper-->
    <div  class="page-start" >
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

     

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('img/contact-us-img.png'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong class="site-text-shadow" >Contact Us</strong>
                </h1>

                
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
		</div>
		</div>
		<div class="">
		<section>
		<div class="container">
			<div class="py-4">
			<div class="section-heading">
				<h2>Contact <span>Us</span></h2>
				<span>
					<img src="img/heading-img.png" alt="Heading">
				</span>
			</div>
			 <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" >Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map fa-2x"></i>
                    <p>FOLIYOO TECHNOLOGIES PRIVATE LIMITED</p>
                    <p>2nd floor, Bidhyaharpur Balugaon, khordha ,<br> Odisha -752030 INDIA
</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+91 0675625 0116</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>info@foliyoo.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
	
			</div>
			</div>
			<div class="">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7957.022624481009!2d85.2046409464203!3d19.746038094699475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a18172ac012c0b5%3A0xa86933962ec48dc8!2sFoliyoo+Technologies+Private+Limited!5e0!3m2!1sen!2sin!4v1545816716243" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
		</section>
		
		
		</div>
		</div>
<?php include("footer.php"); ?>