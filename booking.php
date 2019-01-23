<?php include("header-links.php"); ?>

<style type="text/css">
    .b-filters{
        background: #eee;
        margin-left: 0px;
    }
    .bff-type p{
        font-weight: bold;
        padding-top: 10px;
        font-size: 15px;
        margin-bottom: 5px;
    }
    .bff-checkbox{
        margin-bottom: 5px;
    }
    .b-vans tr th{
        font-size: 14px;
        padding: 5px 10px;
    }
    .b-vans tr td{
        padding: 5px 10px;
    }
    .b-vans tr th .input-group button{
        font-size: 11px;
    }
    .b-vans tr th .input-group .btn{
        padding: 3px 10px;
    }
    .b-vans p{
        padding-top: 5px;
        font-size: 14px;
        margin-bottom: 0px;
        font-weight: 600;
    }
    .bv-vechile-info .bvv-name{
        padding-top: 0px;
    }
    .bv-capacity i, .bv-loading-dt i{
        margin-right: 10px
    }
    .bv-capacity p, .bv-loading-dt p{
        line-height: 22px;
        padding-top: 0px;
    }
    .bv-rating .list-inline{
        margin-bottom: 1px;
    }
    .bv-rating .list-inline-item{
        margin-right: 1px;
    }
    .bv-rating p{
        padding-top: 0px;
        line-height: 22px;
    }
    .bv-rating i{
        color: orange;
        font-size: 15px;
    }
    .bv-price h4{
        font-weight: 600;
    }
    .bv-book .btn{
        font-size: 13px;
    }
</style>

<section class="booking">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 b-filters">
                <div class="bf-fields">
                    <div class="bff-type">
                        <p>Loading Time</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label" for="defaultInline1">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                <label class="custom-control-label" for="defaultInline2">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                <label class="custom-control-label" for="defaultInline3">Checkbox3</label>
                            </div>
                        </div>
                    </div>

                    <div class="bff-type">
                        <p>Vechile Type</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label" for="defaultInline1">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                <label class="custom-control-label" for="defaultInline2">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                <label class="custom-control-label" for="defaultInline3">Checkbox3</label>
                            </div>
                        </div>
                    </div>

                    <div class="bff-type">
                        <p>Pickup Point</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label" for="defaultInline1">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                <label class="custom-control-label" for="defaultInline2">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                <label class="custom-control-label" for="defaultInline3">Checkbox3</label>
                            </div>
                        </div>
                    </div>

                    <div class="bff-type">
                        <p>Deliver Point</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label" for="defaultInline1">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                <label class="custom-control-label" for="defaultInline2">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                <label class="custom-control-label" for="defaultInline3">Checkbox3</label>
                            </div>
                        </div>
                    </div>

                    <div class="bff-type">
                        <p>Amenities</p>
                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label" for="defaultInline1">Checkbox1</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                <label class="custom-control-label" for="defaultInline2">Checkbox2</label>
                            </div>
                        </div>

                        <div class="bff-checkbox">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                <label class="custom-control-label" for="defaultInline3">Checkbox3</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 b-vans">
			<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4  class="panel-title ">
           
         <div class="table-responsive">
                    <table width="100%">
                        <thead class="black white-text">
                            <tr>
                                <th style="width:15%;">Vehicle Info</th>
                                <th style="width:10%;">Capacity</th>
                                <th style="width:17%;">Loading Date / Time</th>
                                <th style="width:10%;">&nbsp;</th>
                                <th style="width:13%;">Rating</th>
                                <th style="width:10%;">Price</th>
                                <th style="width:8%;">
                                    No.of Load
                                    <br>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-info">4</button>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"></a>
                                                <a class="dropdown-item" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="text-center" style="width:12%;">Book</th>
                            </tr>
                        </thead>
                        
                    </table>
        </h4>
      </div>
    
    </div>
	 <div class="panel-heading py-4" style="background:#ddd;position:relative;border:1px solid #ddd;">
        <h4  class="panel-title ">
		<div class="expand">
           <div  data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="right-arrow " style="">+</div>
		   </div>
         <div class="table-responsive">
                    <table width="100%">
                        
                        <tbody class="">
                            <tr>
                                <td class="bv-vechile-info">
                                    <p class="bvv-number">15820</p>
                                    <div class="text-center">
                                        <i class="fa fa-truck fa-5x"></i>
                                        <br>
                                        <p class="bvv-name">TATA 1109</p>
                                    </div>
                                </td>
                                <td class="bv-capacity">
                                    <p><i class="fa fa-weight"></i> 16 Ton</p>
                                    <p><i class="fa fa-arrows-h"></i>18 fit</p>
                                </td>
                                <td class="bv-loading-dt">
                                    <div class="media">
                                        <i class="fa fa-calendar fa-2x mt-2"></i>
                                        <div class="media-body">
                                            <p class="">06:00 - 10:00 AM</p>
                                            <p class="pt-0">02/01/1995</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="bv">
                                    <p><i class="fa fa-clock-o"></i> 16 hrs</p>
                                </td>
                                <td class="bv-rating">
                                    <p>4.5</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                    <p class="text-mute">359 Reviews</p>
                                    <p class="text-success">520 Load</p>
                                </td> 
                                <td class="bv-price">
                                    <h4>INR 2000.00</h4>
                                </td>
                                <td>&nbsp;</td>
                                <td class="bv-book">
                                    <button class="btn btn-md btn-warning">Book Now</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
        </h4>
		  <div class="clearfix">&nbsp;</div>
      </div>
	
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body border-1px-ddd py-3 px-4">
			<div class="row">
				<div class="col">
					<a href=""> <h3>Heading 1</h3></a>
				</div>
				<div class="col">
					<a href=""> <h3>Heading 1</h3></a>
				</div>
				<div class="col">
					<a href=""> <h3>Heading 1</h3></a>
				</div>
				<div class="col">
					<a href=""> <h3>Heading 1</h3></a>
				</div>
			</div>
		</div>
      </div>
    </div>
    
  </div> 
                
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
<script>
$(function() {
  $(".expand").on( "click", function() {
    // $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});
</script>