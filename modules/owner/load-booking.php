<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Load Booking
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Loads</li>
            <li class="active">Load Booking</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            
            
				<div class="panel-body border-1px-ddd py-3 px-4">
					<div class="row">
						<div class="col-md-12">
							<ul class="nav nav-tabs">
								<li class="active">	<a data-toggle="tab" href="#tab1">Create Bookings</a>
								</li>
								<li>	<a data-toggle="tab" href="#tab2">Manage Bookings</a>
								</li>
								<li>	<a data-toggle="tab" href="#tab3">Cancel Bookings</a>
								</li>
								<li>	<a data-toggle="tab" href="#tab4">Deliver Bookings</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									
									
									
								</div>
								<div id="tab2" class="tab-pane fade">
									
								</div>
								<div id="tab3" class="tab-pane fade">
									
								</div>
							</div>
						</div>
					</div>
				
			</div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function(e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function(e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>
<?php include("footer.php"); ?>

<script>
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });
</script>