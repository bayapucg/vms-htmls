<?php include("header-links.php"); ?>
    <div class="view" style="background-image: url('img/search-bg.png'); background-repeat:repeat;" >

          <!-- Mask & flexbox options-->
          <div class="card col-md-4 mx-auto my-4 align-middle">
			<!-- Default form login -->
<form class="text-center  p-5">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="">Register</a>
    </p>

    

</form>
<!-- Default form login -->
			
          </div>
          <!-- Mask & flexbox options-->

        </div>

<?php include("footer_links.php"); ?>
  