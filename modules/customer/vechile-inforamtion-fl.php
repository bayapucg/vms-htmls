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
            <li class="active">Vehicle inforamtion</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mt-0 mb-0">Vehicle inforamtion</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="progress active mt-5">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span>20% Completed</span>
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
                                    <label>Select Size of Vehicle</label>
                                    <select class="form-control " style="width: 100%;">

                                        <option>Eicher 14 Ft</option>
                                        <option>Eicher 17 Ft</option>
                                        <option>Eicher 19 Ft</option>
                                        <option>20 Ft closed Containers</option>
                                        <option>32 Ft closed Containers 7 to</option>
                                        <option>32 Ft closed Containers 14 ton</option>
                                        <option>Truck 19-ton</option>
                                        <option>Taurus 16 ton</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Vehicle</label>
                                    <select class="form-control " style="width: 100%;">
                                        <option>Tata Ace</option>
                                        <option>Bolero Pick up</option>


                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" control-label">No.of Vechiles</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="username" placeholder="Enter Your no of vechiles" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="material-type-fl.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
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