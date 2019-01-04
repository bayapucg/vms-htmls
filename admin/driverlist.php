<?php include("header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Driver List
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Owner</a></li>
        <li><a href="#">Add Driver</a></li>
        <li class="active">DriverList</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <!--<h3 class="box-title"></h3>-->
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
                  <td><a href="edit-driver.php"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></td>
                </tr>
                <tr>
                  <td>ram</td>
                  <td>mohan
                  </td>
                  <td>AFGFHFT1134</td>
                  <td>12</td>
                  <td>rammohan@gmail.com</td>
                  <td>8765XXXXXX</td>
                  <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>
<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></td>
                </tr>
                <tr>
                  <td>ram</td>
                  <td>mohan
                  </td>
                  <td>AFGFHFT1134</td>
                  <td>12</td>
                  <td>rammohan@gmail.com</td>
                  <td>8765XXXXXX</td>
                  <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>
<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></td>
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
  </div>	
  <script>
  $(function () {
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