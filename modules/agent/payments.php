<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Payments List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Payments</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <!--<h3 class="box-title"></h3>-->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer Name</th>
                                        <th>Serviced Name</th>
                                        <th>Cost</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Name of the customer</td>
                                        <td>Insurance</td>
                                        <td>₹ 180</td>
                                        <td>18-2-2018</td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Name of the customer</td>
                                        <td>R.C</td>
                                        <td>₹ 180</td>
                                        <td>18-2-2018</td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Name of the customer</td>
                                        <td>Pollution</td>
                                        <td>₹ 180</td>
                                        <td>18-2-2018</td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<?php include("footer.php"); ?>