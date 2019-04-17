<?php include("header-links.php"); ?>
<style>
.bv-form .help-block {
    margin-bottom: 0;
	color:red;
}
</style>
<div class="view" style="background-image: url('img/search-bg.png'); background-repeat:repeat;" >
   <!-- Mask & flexbox options-->
   <div class="card col-md-4 " style="position:absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%);transform: translate(-50%,-50%);">
      <div class="position:relative">
        
		  <form id="defaultForm" method="post" class="form-horizontal   p-5" action="driver-login.php">
            <a href="index.php"><img src="img/heading-img.png" class="" style="width:150px;height:auto;margin:0 auto;"></a>
					<p class="h4 mb-4 text-center">Driver Login</p>
						<div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="email"  placeholder="enter your email"/>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="password"  placeholder="enter Password"/>
                            </div>
                        </div>

                        
            <div class="row" >
               <label class="col-sm-3 control-label" id="captchaOperation"></label>
               <div class="col-sm-9">
                  <input type="text" placeholder="Enter Captcha " class="form-control" name="captcha" />
               </div>
            </div>
            <div class="d-flex justify-content-around mt-2">
               <div>
                  <!-- Remember me -->
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                     <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                  </div>
               </div>
               <div>
                  <!-- Forgot password -->
                  <a href="forgot-password.php">Forgot password?</a>
               </div>
            </div>
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
            <!-- Register -->
            <p>Not a member?
               <a href="register.php">Register</a>
            </p>
         </form>
         <!-- Default form login -->
         <div class="" style="position:absolute;top:10px;">
            <a href="index.php"><i class="fa fa-arrow-left " style="font-size:20px;color:#aaa"> </i></a>
         </div>
      </div>
   </div>
   <div class=" mdb-color lighten-5 py-3" style="position:fixed;width:100%;bottom:0;" >
      <div class="container">
         <div class="row">
            <div class="co1-md-3 ">
               &nbsp;
            </div>
            <div class="co1-md-6 mx-auto ">
               <ul class="login-bottom">
                  <a href="#">
                     <li>Notices</li>
                  </a>
                  <a href="#">
                     <li>Terms & Conditions</li>
                  </a>
                  <a href="#">
                     <li>Privacy Policy</li>
                  </a>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("footer_links.php"); ?>
<script type="text/javascript">
   $(document).ready(function() {
       // Generate a simple captcha
       function randomNumber(min, max) {
           return Math.floor(Math.random() * (max - min + 1) + min);
       };
       $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
   
       $('#defaultForm').bootstrapValidator({
   //        live: 'disabled',
           message: 'This value is not valid',
           feedbackIcons: {
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               firstName: {
                   group: '.col-lg-4',
                   validators: {
                       notEmpty: {
                           message: 'The first name is required and cannot be empty'
                       }
                   }
               },
               lastName: {
                   group: '.col-lg-4',
                   validators: {
                       notEmpty: {
                           message: 'The last name is required and cannot be empty'
                       }
                   }
               },
               username: {
                   message: 'The username is not valid',
                   validators: {
                       notEmpty: {
                           message: 'The username is required and cannot be empty'
                       },
                       stringLength: {
                           min: 6,
                           max: 30,
                           message: 'The username must be more than 6 and less than 30 characters long'
                       },
                       regexp: {
                           regexp: /^[a-zA-Z0-9_\.]+$/,
                           message: 'The username can only consist of alphabetical, number, dot and underscore'
                       },
                       remote: {
                           type: 'POST',
                           url: 'remote.php',
                           message: 'The username is not available'
                       },
                       different: {
                           field: 'password,confirmPassword',
                           message: 'The username and password cannot be the same as each other'
                       }
                   }
               },
               email: {
                   validators: {
                       notEmpty: {
                           message: 'The input is not a valid email address'
                       }
                   }
               },
               password: {
                   validators: {
                       notEmpty: {
                           message: 'The password is required and cannot be empty'
                       },
                       identical: {
                           field: 'confirmPassword',
                           message: 'The password and its confirm are not the same'
                       },
                       different: {
                           field: 'username',
                           message: 'The password cannot be the same as username'
                       }
                   }
               },
               confirmPassword: {
                   validators: {
                       notEmpty: {
                           message: 'The confirm password is required and cannot be empty'
                       },
                       identical: {
                           field: 'password',
                           message: 'The password and its confirm are not the same'
                       },
                       different: {
                           field: 'username',
                           message: 'The password cannot be the same as username'
                       }
                   }
               },
               birthday: {
                   validators: {
                       date: {
                           format: 'YYYY/MM/DD',
                           message: 'The birthday is not valid'
                       }
                   }
               },
               gender: {
                   validators: {
                       notEmpty: {
                           message: 'The gender is required'
                       }
                   }
               },
               'languages[]': {
                   validators: {
                       notEmpty: {
                           message: 'Please specify at least one language you can speak'
                       }
                   }
               },
               'programs[]': {
                   validators: {
                       choice: {
                           min: 2,
                           max: 4,
                           message: 'Please choose 2 - 4 programming languages you are good at'
                       }
                   }
               },
               captcha: {
                   validators: {
                       callback: {
                           message: 'Wrong answer',
                           callback: function(value, validator) {
                               var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                               return value == sum;
                           }
                       }
                   }
               }
           }
       });
   
       // Validate the form manually
       $('#validateBtn').click(function() {
           $('#defaultForm').bootstrapValidator('validate');
       });
   
       $('#resetBtn').click(function() {
           $('#defaultForm').data('bootstrapValidator').resetForm(true);
       });
   });
</script>