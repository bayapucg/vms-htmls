<?php include("header.php"); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
    </section>

    <section class="content">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="mt-0 mb-0">Vehicle Ids</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="stepper">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="customer-search.php" title="Step 1">
                                        <span class="round-tab">1</span>
                                    </a>
                                </li>
                                <li role="presentation" class="completed">
                                    <a class="persistant-disabled" href="vechilelist.php" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="active">
                                    <a class="persistant-disabled" href="#" title="Step 3">
                                        <span class="round-tab">3</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a class="persistant-disabled" href="#" title="Step 4">
                                        <span class="round-tab">4</span>
                                    </a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-12 b-vans">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title ">

                                                <div class="table-responsive">
                                                    <table width="100%">
                                                        <thead class="black white-text row">
                                                            <tr>
                                                                <th class="col-md-3">Vehicle ID</th>
                                                                <th class="col-md-3">Distance</th>
                                                                <th class="col-md-3">Charges</th>
                                                                <th class="col-md-3">Total Amount</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
                                        <h4 class="panel-title vechiles-list">
                                            <div class="table-responsive">
                                                <table width="100%">

                                                    <tbody class="row">
                                                        <tr>
                                                            <td class="bv-vechile-info col-md-2">
                                                                <h3>VMS15820</h3>
                                                            </td>
                                                            <td class="bv-capacity col-md-2">
                                                                <h4> 500Kms</h4>
                                                            </td>
                                                            <td class="bv-rating col-md-2">
															
                                                                <p>Tax : 18%</p>
																<p class="text-mute">Special Charges : 1000</p>
                                                                <p class="text-mute">Toll Gate : 500</p>
                                                            </td>
                                                            <td class="bv-price col-md-2">
                                                                <h4>INR 10000.00</h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </h4>
                                        <div class="clearfix">&nbsp;</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><a href="payment-vechicle.php" type="button" class="btn btn-primary next-step">Procced to Payment</a></li>
                        </ul>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>