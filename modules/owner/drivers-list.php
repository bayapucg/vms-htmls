<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box panel-default">
             <div class="panel-heading">
                <h3 class="m-0 pull-left">Drivers List</h3>
                <span class="pull-right"><a href="add-driver.php" class="btn btn-primary btn-sm">Add Driver</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>License No</th>
                                    <th>Badge No</th>
                                    <th>Email Id</th>
                                    <th>Phone Number</th>
                                    <th>Experience</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ram</td>
                                    <td>mohan
                                    </td>
                                    <td>AFGFHFT1134</td>
                                    <td>12</td>
                                    <td>rammohan@gmail.com</td>
                                    <td>8765XXXXXX</td>
                                    <td>3 yrs</td>
                                    <td>20000</td>
                                    <td>
                                        <a href="edit-driver.php" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ram</td>
                                    <td>mohan
                                    </td>
                                    <td>AFGFHFT1134</td>
                                    <td>12</td>
                                    <td>rammohan@gmail.com</td>
                                    <td>8765XXXXXX</td>
                                    <td>3 yrs</td>
                                    <td>20000</td>
                                    <td>
                                        <a href="edit-driver.php" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ram</td>
                                    <td>mohan
                                    </td>
                                    <td>AFGFHFT1134</td>
                                    <td>12</td>
                                    <td>rammohan@gmail.com</td>
                                    <td>8765XXXXXX</td>
                                    <td>3 yrs</td>
                                    <td>20000</td>
                                    <td>
                                        <a href="edit-driver.php" type="button" class="btn btn-warning btn-sm mr-2 mb-2"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>License No</th>
                                    <th>Badge No</th>
                                    <th>Email Id</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
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
    <div class="p-5"></div>
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