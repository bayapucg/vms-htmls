<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Load Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Load Booking</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <h3>Basic load</h3>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="">
                                                            <input type="text" class="form-control" name="loadPoint" placeholder="Enter Your Loading  point" />
                                                        </div>
                                                    </div>
                                                </td>
												<td>
                                                    <div class="form-group">
                                                        <div class="">
                                                            <input type="text" class="form-control" name="username" placeholder="Enter Your Droping  point" />
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-md mt-10" id="addRow">Add Row</button>
                                </div>
                            </div>
                        <ul class="list-inline pull-right">
                            <li><a href="vechile-inforamtion.php" type="button" class="btn btn-primary next-step">Save and continue</a></li>
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

            cols += '<td><input type="text" class="form-control" name="loadPoint' + counter + '" placeholder="Enter Your Loading  point"/></td>';
            
            cols += '<td><input type="text" class="form-control" name="username" placeholder="Enter Your Droping  point" /></td>';

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

