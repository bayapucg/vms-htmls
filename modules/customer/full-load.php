<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Full Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="load-booking.php">Load Booking</a></li>
            <li><a href="#">Full Load</a></li>
            <li class="active">Basic Load</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mt-0 mb-0">Basic load</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="progress active mt-5">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span>0% Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <form id="" name="" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loading Point</label>
                                    <input type="text" class="form-control" name="loadPoint" placeholder="Enter Your Loading  point" />
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Droping Point</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Your Droping  point" />
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right datepicker" id="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="vechile-inforamtion-fl.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
                        </ul>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>

<script>
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });
</script>