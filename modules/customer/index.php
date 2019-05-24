<?php include("header.php"); ?>
<style>
    ul li{
	list-style-type:none;
}
.select_vms {
	    border-top: 0px solid black;
	    border-right: 0px solid black;
	    border-left: 0px solid black;
    
}
.radio-inline {
	color:#333;
	font-weight:400;
}
<!--.bg-img {
	background-image:url("../img/banner-vehicle.jpg");
	background-size: cover;
	
}-->
</style>
<div class="content-wrapper ">


    
    <section class=" bg-breadcumb">
        <div class="row">
            <div class="col-md-6 bottom-nav1">
                <ul class="pad-breadcumb">
                    <li class="icon_size1">
						<a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Home</span>
						</a>
					</li>
				</ul>
            </div>
            <div class=" col-md-6">
				<ul class="bottom-nav">
					<li class="icon_size1">
						<i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-heart-o" aria-hidden="true"></i></li>
                    <li>
                        <p>3.0</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
	<div>
	<img src="../img/bg-back.png" class="img-responsive" style="max-height:200px;width:100%">
	</div>
    <section class="content">
	
        <!-- Info boxes -->
        <div  style="position:absolute;top:66%;left:25%;width:50%;-webkit-transform: translate(5%, -50%);
  transform: translate(20%, -50%);">
 
    <div class="card col-md-12 px-5 " style="border-radius:0px;border:2px solid #d73925;">
        <!--Card content-->
        <div class="card-body" style="padding:0;">
		
            <!-- Form -->
            <form name="">
                <div class="row main-search">
                    <div class=" col-md-3 md-form mt-3">
                        <select class="form-control select_vms" style="">
                            <option selected disabled>Pickup Point</option>
                            <option value="1">Kukatpaly</option>
                            <option value="2">Ameerpet</option>
                            <option value="3">Miyapur</option>
                        </select>
                    </div>
                    <div class=" col-md-3 md-form mt-3">
                        <select class="form-control select_vms" style="">
                            <option selected>Delivery Point</option>
                            <option value="1">Guntur</option>
                        </select>
                    </div>
                    <div class="col-md-3 md-form mt-3 ">
                        <input type="text" class="form-control datetimepicker1 select_vms" placeholder="Date">
                    </div>
                    <div class="md-form col-md-2 md-form mt-3">
                        <button  data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger btn-md pull-right" >Search</button>
                    </div>
                </div>
            </form>
            <!-- Form -->
        </div>
    </div>
</div>
        
        
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("footer.php"); ?>
<script type="text/javascript">
    $(function() {
        $('.datetimepicker1').datetimepicker();
    });
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>