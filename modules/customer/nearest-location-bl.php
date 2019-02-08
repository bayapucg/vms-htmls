<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Box Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="load-booking.php">Load Booking</a></li>
            <li><a href="#">Box Load</a></li>
            <li class="active">Nearest Location</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mt-0 mb-0">Location</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="progress active mt-5">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span>30% Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Nearest Location</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option value="" selected disabled>Select</option>
                                        <option value="">Location 1</option>
                                        <option value="">Location 2</option>
                                        <option value="">Location 3</option>
                                        <option value="">Location 4</option>
                                        <option value="">Location 5</option>
                                        <option value="">Location 6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="list-of-vechiles-bl.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
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