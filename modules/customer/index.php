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
.text-white {
	color:#fff;
	font-weight:400;
}
.full-load-bg{
	background:#23b14d;
	padding-left:5px;
}
.part-load-bg{
	background:#ff7e26;
	padding-left:5px;
}
.box-load-bg{
	background:#fef200;
	padding-left:5px;
}
.help-radio .col-md-2{
	padding-left:0px;
	padding-right:0px;
}
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
        <div>
	
    <div class="card col-md-12 " style="background:#000">
       
        <div class="card-body" style="padding-right:10%;padding-left:10%">
		
            <!-- Form -->
            <form name="">
				<div class="mb-2 row help-radio">
					<div class="col-md-2 ">
						<label class="text-white" >
						   Full Load
						</label>
						<div class="full-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>
					<div class="col-md-2 ">
						<label class="text-white" >
						  Part Load
						</label>
						<div class="part-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>
					<div class="col-md-2 ">
						<label class="text-white" >
						   Box Load
						</label>
						<div class="box-load-bg">
							<input  type="radio" name="opt" checked>
						</div>
					</div>
					
				</div>
                <div class="row "style="" >
                <div>
                    <div class=" col-md-4 " style="border-right:1px solid #ddd;background:#fff;padding:3px;">
                        <select class="form-control select_vms" style="">
                            <option selected disabled>Pickup Point</option>
                            <option value="1">Kukatpaly</option>
                            <option value="2">Ameerpet</option>
                            <option value="3">Miyapur</option>
                        </select>
                    </div>
                    <div class=" col-md-3" style="border-right:1px solid #ddd;background:#fff;padding:3px;">
                        <select class="form-control select_vms" style="">
                            <option selected>Delivery Point</option>
                            <option value="1">Guntur</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="background:#fff;padding:3px;">
                        <input type="text" class="form-control datetimepicker1 select_vms" placeholder="Date">
                    </div>
                    <div class=" col-md-2" style="padding:0px;">
                        <button style="border-radius:0px;padding:9px 3px;" type="button" class="btn btn-danger btn-block" >Search</button>
                    </div>
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