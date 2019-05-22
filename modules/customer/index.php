<?php include("header.php"); ?>
<style>
    ul li{
	list-style-type:none;
}
</style>
<div class="content-wrapper">


    
    <section class=" bg-breadcumb">
        <div class="row">
            <div class="col-md-6 bottom-nav1">
                <ul class="pad-breadcumb">
                    <li class="icon_size1"><a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

                        </a></li>
                    <li class="icon_size1"><a href="profile.php">
                            <i class="fa fa-user" aria-hidden="true"></i> <span>My Profile</span>

                        </a>
                        </i>
                    </li>
					<li class="icon_size1"><a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

                        </a></li>
                    <li class="icon_size1"><a href="profile.php">
                            <i class="fa fa-user" aria-hidden="true"></i> <span>My Profile</span>

                        </a>
                        </i>
                    </li>




                </ul>
            </div>
            <div class=" col-md-6">

                <ul class="bottom-nav">

                    <li class="icon_size1"><i class="fa fa-heart" aria-hidden="true"></i>
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
	<img src="../img/banner-vehicle.jpg" style="width:100%;height:350px;">
	</div>
    <section class="content">
	
        <!-- Info boxes -->
        <div style="position:absolute;top:70%;left:25%;width:50%;-webkit-transform: translate(5%, -50%);
  transform: translate(20%, -50%);">
    <div class="row py-2">
        <div class="col-md-12 ">
            <div class="px-5 search-main-label">

                <!-- Default inline 1-->
			<label class="radio-inline">
				  <input type="radio" name="optradio" checked> Full Load
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio"> Part Load
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio"> Box
				</label>
            </div>
        </div>
    </div>
    <div class="card col-md-12 px-5 " style="border-radius:50px;border:2px solid #333;">
        <!--Card content-->
        <div class="card-body" style="padding:0;">
            <!-- Form -->
            <form name="">
                <div class="row main-search">
                    <div class="form-group col-md-3 md-form mt-3">
                        <select class="form-control" style="">
                            <option selected disabled>Pickup Point</option>
                            <option value="1">Kukatpaly</option>
                            <option value="2">Ameerpet</option>
                            <option value="3">Miyapur</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 md-form mt-3">
                        <select class="form-control" style="">
                            <option selected>Delivery Point</option>
                            <option value="1">Guntur</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 md-form mt-3">
                        <input id="datetimepicker1" type="text" class="form-control" placeholder="Date">
                    </div>
                    <div class="md-form col-md-2 md-form mt-3">
                        <button  data-toggle="modal" data-target="#myModal" type="button" class="btn btn-indigo btn-md pull-right">Search</button>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['task', 'Hours per Day'],
            ['BOOKING HISTORY', 8],
            ['PAYMENT HISTORY', 8],
            ['WALLET', 2],
            ['DUMMY', 4],
        ]);
        var options = {
            'title': '',
            'width': 400,
            'height': 300
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
<script>
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "DAY TO DAY LOADS"
            },
            axisY: {
                includeZero: false
            },
            data: [{
                type: "line",
                dataPoints: [{
                        y: 450
                    },
                    {
                        y: 414
                    },
                    {
                        y: 520,
                        indexLabel: "highest",
                        markerColor: "red",
                        markerType: "triangle"
                    },
                    {
                        y: 460
                    },
                    {
                        y: 450
                    },
                    {
                        y: 500
                    },
                    {
                        y: 480
                    },
                    {
                        y: 480
                    },
                    {
                        y: 410,
                        indexLabel: "lowest",
                        markerColor: "DarkSlateGrey",
                        markerType: "cross"
                    },
                    {
                        y: 500
                    },
                    {
                        y: 480
                    },
                    {
                        y: 510
                    }
                ]
            }]
        });
        chart.render();
    }
</script>