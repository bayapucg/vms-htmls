<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contacts</a></li>
            <li class="active">Edit Contact</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Edit Contact</h3>
                <span class="pull-right"><a href="contacts-list.php" class="btn btn-info btn-sm">Back</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Company Name</label>
                                        <input type=" text" class="form-control" name="companyname" value="Pracha Tech">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Customer Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="customername" value="John Deo" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Phone Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" value="810xxxxxx2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Email Id</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="username" value="example@gmail.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">GST Number</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="gstnumber" value="12xcv5218" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Address</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="address" value="9-25, nimakur, guntur, andhra pradesh."/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Saved Address</label>
                                        <div class="form-group">    
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked>
                                                    Plot No. 177, Sri Vani Nilayam, 1st floor, Beside Sri Chaitanya High School, Sardar Patel Nagar, Opp Nizampet X-Road, Hyderabad, Telangana - 500072.
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked>
                                                    Plot No. 177, Sri Vani Nilayam, 1st floor, Beside Sri Chaitanya High School, Sardar Patel Nagar, Opp Nizampet X-Road, Hyderabad, Telangana - 500072.
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Plot No. 177, Sri Vani Nilayam, 1st floor, Beside Sri Chaitanya High School, Sardar Patel Nagar, Opp Nizampet X-Road, Hyderabad, Telangana - 500072.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="button" class="btn btn-primary next-step">Submit</button></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>