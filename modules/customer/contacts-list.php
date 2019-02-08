<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contacts</a></li>
            <li class="active">Contacts List</li>
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
                                        <th>Company Name</th>
                                        <th>Name of the Customer</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>GST Number</th>
                                        <th>Map</th>
                                        <th>Address</th>
                                        <th>Saved address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Name of the company belong to</td>
                                        <td>Customer Name</td>
                                        <td>98xxxxxx20</td>
                                        <td>example@gmail.com</td>
                                        <td>653xxx122x22</td>
                                        <td>Some Text</td>
                                        <td>Address of the customer</td>
                                        <td>Address he already saved before<br>
                                            <hr>Address he already saved before</td>
                                        <td>
                                            <a href="view-contact.php" class="btn btn-info btn-sm mb-5"><i class="fa fa-eye"></i></a><br>
                                            <a href="edit-contact.php" class="btn btn-warning btn-sm mb-5"><i class="fa fa-edit"></i></a><br>
                                            <a href="#" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Name of the company belong to</td>
                                        <td>Customer Name</td>
                                        <td>98xxxxxx20</td>
                                        <td>example@gmail.com</td>
                                        <td>653xxx122x22</td>
                                        <td>Some Text</td>
                                        <td>Address of the customer</td>
                                        <td>Address he already saved before<br>
                                            <hr>Address he already saved before</td>
                                        <td>
                                            <a href="view-contact.php" class="btn btn-info btn-sm mb-5"><i class="fa fa-eye"></i></a><br>
                                            <a href="edit-contact.php" class="btn btn-warning btn-sm mb-5"><i class="fa fa-edit"></i></a><br>
                                            <a href="#" class="btn btn-danger btn-sm mb-5"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Name of the company belong to</td>
                                        <td>Customer Name</td>
                                        <td>98xxxxxx20</td>
                                        <td>example@gmail.com</td>
                                        <td>653xxx122x22</td>
                                        <td>Some Text</td>
                                        <td>Address of the customer</td>
                                        <td>Address he already saved before<br>
                                            <hr>Address he already saved before</td>
                                        <td>
                                            <a href="view-contact.php" class="btn btn-info btn-sm mb-5"><i class="fa fa-eye"></i></a><br>
                                            <a href="edit-contact.php" class="btn btn-warning btn-sm mb-5"><i class="fa fa-edit"></i></a><br>
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