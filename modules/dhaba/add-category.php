<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Category
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Add Category</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Add Category</h3>
                <span class="pull-right"><a href="category-list.php" class="btn btn-primary btn-sm">Category List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="" name="" action="" method="">
                            <table id="myTable" class="table table-list">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Sub-Category</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="category" placeholder="Enter Category Name"/>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="sub_category" placeholder="Enter Sub-Category Name"/>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-md" id="addRow">
                                                <i class="fa fa-plus"></i>
                                            </button>    
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <button type="submit" class="btn btn-md btn-primary btn-flat">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    $(document).ready(function() {
        var counter = 1;

        $("#addRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";
            
            cols += '<td><input type="text" class="form-control" name="category' + counter + '" placeholder="Enter Category Name"/></td>';
            
            cols += '<td><input type="text" class="form-control" name="sub_category' + counter + '" placeholder="Enter Sub-Category Name"/></td>';
            
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

