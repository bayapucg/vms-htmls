<?php include("header.php"); ?>
<style type="text/css">

      
      .carousel {
        height: 60vh;
      }
	.font {
		font-size:17px;
	}

    </style>
<!--Carousel Wrapper-->
    <div  class="page-start" >
    
		<div class="">
		<section >
		<div class="container">
			<div class="py-4 d-flex justify-content-center">
				<div class="col-md-6">
				<!-- Material form register -->
	<div class="card">
    
   
  
    <h5 class="card-header  text-center py-4">
        <strong>Forgot Password</strong>
    </h5>	
    <!--Card content-->
	<div class="card-body px-lg-5 pt-0">
	

<div class="container">
	<div class="row">
		 <div class="col-md-4 col-sm-4 col-xs-12 form-group">
		          <div class="form-check-inline">
					<label class="customradio"><span class="radiotext" >Customer</span>
					  <input type="radio" checked="checked" name="radio">
					  <span class="checkmark"></span>
					</label>       
					<label class="customradio"><span class="radiotext">Owner</span>
					  <input type="radio" name="radio">
					  <span class="checkmark"></span>
					</label>
					<label class="customradio"><span class="radiotext">Driver</span>
					  <input type="radio"  name="radio">
					  <span class="checkmark"></span>
					</label> 
				</div>
		  </div>
	</div>
</div>
		
		
		
	</div>
	
    <div class="card-body px-lg-5 pt-0">
	
		
        <!-- Form -->
		
        <form class="text-center" action="changepwd.php" target="_blank" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">Email</label>
                    </div>
                </div>    
            </div>
            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Submit</button>
		

        

            <!-- Terms of service 
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>-->

        </form>
		
        <!-- Form -->
   
		
    </div>

</div>
<!-- Material form register -->
		
				</div>
			</div>
			</div>
			
		</section>
		
		
		</div>
		</div>
		<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php include("footer.php"); ?>