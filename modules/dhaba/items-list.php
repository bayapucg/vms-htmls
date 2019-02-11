<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Menu Items List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Menu</a></li>
            <li class="active">Items List</li>
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
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Sub-Category</th>
                                        <th>Name</th>
                                        <th>Cost</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="../img/download.jpg" width="70px" height="auto"></td>
                                        <td>Main Course</td>
                                        <td>Veg Main Course</td>
                                        <td>Veg Biryani</td>
                                        <td>₹ 180</td>
                                        <td>
                                            <a href="edit-item.php" class="btn btn-warning btn-sm mb-5"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="../img/download.jpg" width="70px" height="auto"></td>
                                        <td>Main Course</td>
                                        <td>Egg Main Course</td>
                                        <td>Egg Biryani</td>
                                        <td>₹ 180</td>
                                        <td>
                                            <a href="edit-item.php" class="btn btn-warning btn-sm mb-5"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="../img/download.jpg" width="70px" height="auto"></td>
                                        <td>Main Course</td>
                                        <td>Non-Veg Main Course</td>
                                        <td>Chicken Biryani</td>
                                        <td>₹ 180</td>
                                        <td>
                                            <a href="edit-item.php" class="btn btn-warning btn-sm mb-5"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="../img/download.jpg" width="70px" height="auto"></td>
                                        <td>Main Course</td>
                                        <td>Non-Veg Main Course</td>
                                        <td>Mutton Biryani</td>
                                        <td>₹ 180</td>
                                        <td>
                                            <a href="edit-item.php" class="btn btn-warning btn-sm mb-5"><i class="fa fa-edit"></i></a>
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