<?php include("header.php"); ?>
<style type="text/css">

      
      .carousel {
        height: 60vh;
      }
	.font {
		font-size:17px;
	}
.radiotext {
  color: #213751;
  font-size: 18px;
}
.customradio {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 0px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  margin-bottom:-100px;
  
}
.customradio input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 22px;
  width: 22px;
  background-color: white;
  border-radius: 50%;
  border:1px solid #BEBEBE;
  
}
.customradio:hover input ~ .checkmark {
  background-color: transparent;
}
.customradio input:checked ~ .checkmark {
  background-color: white;
  border:1px solid #BEBEBE;
}
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.customradio input:checked ~ .checkmark:after {
  display: block;
}
.customradio .checkmark:after {
  top: 2px;
  left: 2px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #213751;
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
        <strong>Login</strong>
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
					</label>  &nbsp;      
					<label class="customradio"><span class="radiotext">Owner</span>
					  <input type="radio" name="radio">
					  <span class="checkmark"></span>
					</label>&nbsp;
					<label class="customradio"><span class="radiotext">Driver</span>
					  <input type="radio"  name="radio">
					  <span class="checkmark"></span>
					</label> &nbsp;
				</div>
		  </div>
	</div>
</div>
		
		
		
	</div>
	
    <div class="card-body px-lg-5 pt-0">
	
		
        <!-- Form -->
		
        <form class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">User Name</label>
                    </div>
                </div>
                
            </div>
			<div class="form-row">
            <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormLastName" class="form-control">
                        <label for="materialRegisterFormLastName">Password</label>
                    </div>
                </div>

           </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Login</button>

            <!-- Social register -->
            <p>or Login with:</p>

            <a type="button" class="btn-floating btn-fb btn-sm">
                <i class="fa fa-facebook"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i class="fa fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-gplus btn-sm">
                <i class="fa fa-google-plus"></i>
            </a>
           

        

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>

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