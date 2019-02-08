<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Part Load
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="load-booking.php">Load Booking</a></li>
            <li><a href="#">Part Load</a></li>
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
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-list" style="margin-bottom:0px;">
                                        <thead>
                                            <tr>
												<th>Loading Point</th>
                                                <th>Droping Point</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="mb-0">
                                                <td>
                                                    <div class="form-group">
                                                            <input type="text" class="form-control" name="loadPoint" placeholder="Enter Your Loading  point" />
                                                    </div>
                                                </td>
												<td>
                                                    <div class="form-group">
                                                            <input type="text" class="form-control" name="username" placeholder="Enter Your Droping  point" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-md" id="addRow">Add Row</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                
                                <div class="col-md-5">
                                    <div class="form-group ml-10">
                                        <label>Date:</label>

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
                            <li><a href="vechile-inforamtion-pl.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
                        </ul>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        var counter = 0;

        $("#addRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><div class="form-group"><input type="text" class="form-control" name="loadPoint' + counter + '" placeholder="Enter Your Loading  point"/></div></td>';
            
            cols += '<td><div class="form-group"><input type="text" class="form-control" name="username" placeholder="Enter Your Droping  point" /></div></td>';

            cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
            newRow.append(cols);
            $("table.table-list").append(newRow);
            counter++;
        });

        $("table.table-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });
</script>
<?php include("footer.php"); ?>

<script>
    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });
</script>