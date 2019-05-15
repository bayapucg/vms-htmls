<?php include("header.php"); ?>

<style>
    #pic{
    display: none;
}
       
.newbtn{
    cursor: pointer;
}
#blah{
    max-width:100px;
    height:100px;
    margin-top:20px;
}

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>

    <section class="content">

        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="mt-0 mb-0 pull-left">Personal Info</h3>
                            <span class="pull-right"><a href="update-profile.php" class="btn btn-primary btn-sm">Update / Edit</a></span>
                            <div class="clearfix">&nbsp;</div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center">
                                    <div>
                                        <label class=newbtn>
                                            <img id="blah" alt="User Pic" src="../img/user.png" class="img-circle img-responsive">

                                            <input id="pic" class='pis' onchange="readURL(this);" type="file">
                                        </label>
                                    </div>
                                </div>


                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-user-information">
                                        <tbody>
                                            <tr>
                                                <td>Registration No:</td>
                                                <td>123456</td>
                                            </tr>
                                            <tr>
                                                <td>Gst:</td>
                                                <td>850022xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Pan</td>
                                                <td>45676845xxxx</td>
                                            </tr>

                                            <tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>Rajendra</td>
                                            </tr>
											<tr>
                                                <td>Company Name:</td>
                                                <td>Prachatech</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile number:</td>
                                                <td>850022xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Email Id</td>
                                                <td>customer1@gamil.com</td>
                                            </tr>

                                            <tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>Pistha House Fortune signature</td>
                                            </tr>
<tr>
                                                <td>Geo Location</td>
                                                <td>customer1@gamil.com</td>
                                            </tr>

                                            <tr>
                                            <tr>
                                                <td>Godan Address</td>
                                                <td>Pistha House Fortune signature</td>
                                            </tr>


                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>




    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("footer.php"); ?>
<script>
    $('.newbtn').bind("click", function() {
        $('#pic').click();
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>