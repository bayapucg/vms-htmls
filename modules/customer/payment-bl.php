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
            <li class="active">Payment</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mt-0 mb-0">Payment</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="progress active mt-5">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span>90% Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <form action="" method="">
                        <p>Please wait redirecting to payment gateway....</p> 
                        <ul class="list-inline text-center">
                            <li><a href="load-booking.php" type="button" class="btn btn-primary next-step">Done</a></li>
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
    $(function() {
        $(".expand").on("click", function() {
            // $(this).next().slideToggle(200);
            $expand = $(this).find(">:first-child");

            if ($expand.text() == "+") {
                $expand.text("-");
            } else {
                $expand.text("+");
            }
        });
    });
</script>