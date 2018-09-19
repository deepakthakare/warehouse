<?php

error_reporting(0);
include "check_session.php";
/* Php code to get data form database */
include "includes/connection_ctn.php";
if(!empty($_REQUEST['sucmsg']))
{
 $msg=$_REQUEST['sucmsg'];
switch($msg)
{
	case msg1:$msgstatus="Log Added Succefully";

				break;

	case msg2:$msgstatus="Log Updated Succefully";

				break;
}

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Container LM Report</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <meta content="Preview page of Container LM Report form layouts" name="description" />

        <meta content="" name="author" />

        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <link href="css/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />

        <link href="css/clockface/css/clockface.css" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->

        <link href="css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />

        <link href="css/plugins.min.css" rel="stylesheet" type="text/css" />

        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->

        <link href="css/layout/css/layout.min.css" rel="stylesheet" type="text/css" />

        <link href="css/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />

        <link href="css/layout/css/custom.min.css" rel="stylesheet" type="text/css" />

        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="favicon.ico" /> 

		<link href='css/style.css' rel='stylesheet' type='text/css'>

		</head>

    <!-- END HEAD -->



    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">

	<!-- BEGIN JS FOR FUNCTIONS--> 

			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

			

		   <script type="text/javascript" src="js/check_data.js">  </script>

		<!-- END JS FOR FUNCTIONS --> 

	<script type="text/javascript">

	

	

		$(document).ready(function() {

			

	

		

	 $('body').addClass('page-sidebar-closed');

	



		$('.page-sidebar-menu.page-header-fixed').addClass('page-sidebar-menu-closed');

	

		});

		function exportdata(field_name,keyword)

		{

			start=$("#startlim").val();

			end=$("#endlim").val();

			

			window.location.href = 'export_record.php?start='+start+'&limit='+end+'&field_name='+field_name+'&keyword='+keyword;

			

		}

		function exportall()

		{

			start=$("#startlim").val();

			end=$("#endlim").val();

			

			window.location.href = 'export_all.php?start='+start+'&limit='+end+'&field_name='+field_name+'&keyword='+keyword;

			

		}

		function resetpage()

		{

			//alert("55");

			window.location.href="list_entries.php?limit=all";

		}

		

		 

	</script>

	

        <div class="page-wrapper">

            <!-- BEGIN HEADER -->

            <div class="page-header navbar navbar-fixed-top">

                <!-- BEGIN HEADER INNER -->

                <div class="page-header-inner ">

                    <!-- BEGIN LOGO -->

                    <div class="page-logo">

                        <a href="">

                            <img src="img/container_lm.jpg" alt="logo" class="logo-default" style="width:125px;"/> </a> 

                        <div class="menu-toggler sidebar-toggler">

                            <span></span>

                        </div>

                    </div>

                    <!-- END LOGO -->

                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">

                        <span></span>

                    </a>

                    <!-- END RESPONSIVE MENU TOGGLER -->

                    <!-- BEGIN TOP NAVIGATION MENU -->

                    <div class="top-menu">

                        <ul class="nav navbar-nav pull-right">

                            <!-- BEGIN USER LOGIN DROPDOWN -->

                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                            <li class="dropdown dropdown-user">

                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                                    <img alt="" class="img-circle" src="css/layout/img/white.png" />

                                    <span class="username username-hide-on-mobile"> <?php echo $_SESSION['username'];?> </span>

                                    <i class="fa fa-angle-down"></i>

                                </a>

                                <ul class="dropdown-menu dropdown-menu-default">

                                  <!--  <li>

                                        <a href="page_user_profile_1.html">

                                            <i class="icon-user"></i> My Profile </a>

                                    </li>

                                -->

                                    <li>

                                        <a href="logout.php">

                                            <i class="icon-key"></i> Log Out </a>

                                    </li>

                                </ul>

                            </li>

                            <!-- END USER LOGIN DROPDOWN -->

                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->

                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                            <li class="dropdown dropdown-quick-sidebar-toggler">

                                <a href="javascript:;" class="dropdown-toggle">

                                    <i class="icon-logout"></i>

                                </a>

                            </li>

                            <!-- END QUICK SIDEBAR TOGGLER -->

                        </ul>

                    </div>

                    <!-- END TOP NAVIGATION MENU -->

                </div>

                <!-- END HEADER INNER -->

            </div>

            <!-- END HEADER -->

            <!-- BEGIN HEADER & CONTENT DIVIDER -->

            <div class="clearfix"> </div>

            <!-- END HEADER & CONTENT DIVIDER -->

            <!-- BEGIN CONTAINER -->

            <div class="page-container">

                <!-- BEGIN SIDEBAR -->

                <div class="page-sidebar-wrapper">

                    <!-- BEGIN SIDEBAR -->

                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->

                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

                    <div class="page-sidebar navbar-collapse collapse">

                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">

                            <li class="sidebar-toggler-wrapper hide">

                                <div class="sidebar-toggler">

                                    <span></span>

                                </div>

                            </li>

                            <li class="nav-item start ">

                                <a href="#" class="nav-link nav-toggle">

                                   <i class="fa fa-list"></i>

                                    <span class="title">Container LM Report</span>

                                </a>

                            </li>

                        </ul>

                        <!-- END SIDEBAR MENU -->

                        <!-- END SIDEBAR MENU -->

                    </div>

                    <!-- END SIDEBAR -->

                </div>

                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->

                <div class="page-content-wrapper">

                    <!-- BEGIN CONTENT BODY -->

                    <div class="page-content">

                        <!-- BEGIN PAGE HEADER-->

                        <!-- BEGIN PAGE BAR -->

                        <div class="page-bar">

                            <ul class="page-breadcrumb">

                                <li>

                                    <a href="">Home</a>

                                    <i class="fa fa-circle"></i>

                                </li>

                                <li>

                                    <span>Container LM Report </span>

                                </li>

                            </ul>

                            

                        </div>

                        <!-- END PAGE BAR -->

                        <!-- END PAGE HEADER-->

                        <div class="row">

                            <div class="col-md-12">

                                <div class="tabbable-line boxless tabbable-reversed">

                                    <div class="tab-content">

									 <div style="text-align:center;color:green;" id="msgstat"><?php if($msgstatus!=""){echo $msgstatus;}?></div>

                                        <div class="tab-pane active" id="tab_0">

                                            <div class="portlet light bordered">

                                                <div class="portlet-title">

                                                    <div class="caption">

                                                        <i class="icon-equalizer font-red-sunglo"></i>

                                                        <span class="caption-subject font-red-sunglo bold uppercase">Container LM Report</span>

                                                        

                                                    </div>

                                                    	 <div class="actions">

                                           						<a href="javascript:exportall()"><button type="button" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-down"  >

															<span class="ladda-label">Export All</span>

															<span class="ladda-spinner"></span></button></a>

														</div>

                                                </div>

												

												<div class="panel-group" id="accordion">

												<div class="panel panel-default">

													<div class="search-panel panel-heading">

													<div style="float:right;"><a href="javascript:resetpage();" style="color: black; font-size: 16px;"><b>Reset </b></a></div>

													

														<h4 class="panel-title">

															<a aria-expanded="false" class="search accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#panel1"><i class="fa fa-search"></i><b>Search </b></a>

														</h4>

													</div>

													<form action="" method="get" enctype="text/plain" name="search" id="search">

														<div style="height: 64px;" aria-expanded="flase" id="panel1" class="panel-collapse collapse">

															<div class="search-box panel-body">

																<div class="row">

																	<div class="col-lg-2"><label class="label2">Field Name:</label></div> 

																	<div class="col-lg-3"> <select class="bs-select form-control" id="field_name" name="field_name">

																	<option value="" >--Select Field Name-- </option>

																	<option value="instock" <?php if(isset($_REQUEST['field_name']) && $_REQUEST['field_name']=="instock") {?> selected="selected"<?php } ?>>Container Stock</option> 

																	<option value="total" <?php if(isset($_REQUEST['field_name']) && $_REQUEST['field_name']=="total") {?> selected="selected"<?php } ?>>Out of Stock</option>

																<!--	<option value="stylecode" <?php if(isset($_REQUEST['field_name']) && $_REQUEST['field_name']=="stylecode") {?> selected="selected"<?php } ?>>Style Code</option> -->

																	<option value="cancelstock" <?php if(isset($_REQUEST['field_name']) && $_REQUEST['field_name']=="cancelstock") {?> selected="selected"<?php } ?>>Cancel Stock</option>

																<!--	<option value="season" <?php if(isset($_REQUEST['field_name']) && $_REQUEST['field_name']=="season") {?> selected="selected"<?php } ?>>Season</option>

																	<option value="little_mistress" <?php if(isset($_REQUEST['field_name']) && $_REQUEST['field_name']=="little_mistress") {?> selected="selected"<?php } ?>>Little Mistress</option>

																	<option value="cancel_stock" <?php if(isset($_REQUEST['field_name']) && $_REQUEST['field_name']=="cancel_stock") {?> selected="selected"<?php } ?>>Cancel Stock</option>

																	<option value="email_subject" <?php if(isset($_REQUEST['field_name']) && $_REQUEST['field_name']=="email_subject") {?> selected="selected"<?php } ?>>Email Subject </option> -->

																	

																	

                   

                                                                    </select></div>

																	<!-- <div class="col-lg-2"><label class="label2">Keyword:</label></div> -->

																	<div class="col-lg-3"><input class="form-control input" name="keyword" id="keyword" placeholder="keyword" value="<?php echo $_REQUEST['keyword'];?>"></div> 

																	<input type="hidden" name="limit" value="<?php echo $limit;?>">

																	<div class="col-lg-2 text-center"><button type="submit" class="btn btn-success marginTop9"> Search </button></div>

																<!--	<div class="col-lg-2 text-center"><a href="javascript:resetpage();"><button type="button" class="btn btn-success marginTop9" > Reset </button></a></div> -->

																	<div class="actions col-lg-2 text-center">

																	<a href="javascript:exportdata('<?php echo $_REQUEST['field_name']; ?>','<?php echo $_REQUEST['keyword'];?>')"><button type="button" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-down"  >

																	<span class="ladda-label">Export to Excel</span>

																	<span class="ladda-spinner"></span></button></a>

																	</div>

																</div>

														   </div>

														</div>

													</form>

												   </div>

												</div> 

												

                                                <div class="portlet-body form">

                                                    <!-- BEGIN FORM-->

                                                    <div class="portlet box yellow">

                                    <div class="portlet-title">

                                        <div class="caption">

                                            <i class="fa fa-cogs"></i>Container List </div>

                                        

                                        <div class="tools">

                                            <a href="javascript:;" class="collapse"> </a>

                                            <a href="javascript:;" class="reload"> </a>

                                        </div>

                                    </div>

                                    <div class="portlet-body">

                                        <div class="table-responsive"  id="posts_content">

										

										<?php 

										//Include pagination class file

										include('Pagination.php');

										

										

										$field_name=$_REQUEST['field_name'];

										$keyword=$_REQUEST['keyword'];

										

										 //get number of rows

										$queryNum = "SELECT

												p.id_product,

												GROUP_CONCAT(DISTINCT(pa.reference) SEPARATOR ';') as reference,

												substring_index(GROUP_CONCAT(DISTINCT(pa.reference) SEPARATOR ';') ,'-',1) as stylecode,

												pa.upc,

												p.price,

												pai.id_image,

												pl.name,

												p.id_category_default,

												p.lm_season,

                                                p.lm_location,

												GROUP_CONCAT(DISTINCT(pal.name) SEPARATOR ';') as combination,

												p.active,

												sum(pq.quantity) as out_of_s,

												concat( 'http://ctn-stk.little-mistresswholesale.com/img/p/',mid(im.id_image,1,1),'/', if (length(im.id_image)>1,concat(mid(im.id_image,2,1),'/'),''),if (length(im.id_image)>2,concat(mid(im.id_image,3,1),'/'),''),if (length(im.id_image)>3,concat(mid(im.id_image,4,1),'/'),''),if (length(im.id_image)>4,concat(mid(im.id_image,5,1),'/'),''), im.id_image, '.jpg' ) AS url_image

											FROM ps_product p

											LEFT JOIN ps_product_attribute pa ON (p.id_product = pa.id_product)

											LEFT JOIN ps_stock_available pq ON (p.id_product = pq.id_product AND pa.id_product_attribute = pq.id_product_attribute)

											LEFT JOIN ps_product_lang pl ON (p.id_product = pl.id_product)

											LEFT JOIN ps_product_attribute_combination pac ON (pa.id_product_attribute = pac.id_product_attribute)

											LEFT JOIN ps_attribute_lang pal ON (pac.id_attribute = pal.id_attribute)

											LEFT JOIN ps_product_attribute_image pai on(pa.id_product_attribute = pai.id_product_attribute)

											LEFT JOIN ps_image im ON p.id_product = im.id_product

											WHERE pl.id_lang = 1

											AND pal.id_lang = 1 AND p.active = 1";

											

											if($field_name!='' and $field_name!='total' and $field_name!='instock' and $field_name!='cancelstock')

												 {

													 if($field_name=="date_value")

													 {

														 $keyword=date("Y-m-d",strtotime($keyword));

													 }

													 $queryNum.=" AND ".$field_name." like '%".$keyword."%'";

												 }

									$queryNum.=" GROUP BY  p.id_product";

											

												if($field_name!='' and $field_name=='total')

												 {

													 

													 $queryNum.=" having out_of_s='0'";

												 }

												 

												 if($field_name!='' and $field_name=='instock')

											 {

												 

												 $queryNum.=" having out_of_s!='0'";

											 }

											  if($field_name!='' and $field_name=='cancelstock')

											 {

												 

												 $queryNum.=" having id_category_default='277'";

											 }

											    if($keyword!='' and $field_name=='')

											 {

												 

												 $queryNum.=" having stylecode like '%".$keyword."%'";

											 }

									$queryNum.=" ORDER BY p.id_product, pac.id_attribute";			 

											//	echo $queryNum;

										$resultNum=	mysql_query($queryNum);

										

										$rowCount1 = mysql_num_rows($resultNum);

										

										/*get limit */

										if($_REQUEST['limit']=="")

										{

											$limit = $rowCount1;

										}

										else if($_REQUEST['limit']=="all")

										{

											$limit = $rowCount1;

										}

										else 

										{

											$limit = $_REQUEST['limit'];

										}

									

										

										 //initialize pagination class

										$pagConfig = array('baseURL'=>'getData.php?field_name='.$field_name.'&keyword='.$keyword.'&limit='.$limit.'', 'totalRows'=>$rowCount1, 'perPage'=>$limit, 'contentDiv'=>'posts_content');

										$pagination =  new Pagination($pagConfig);

										

										

										

										/*DISPLAY TABLE DATA*/

										

										$field_name=$_REQUEST['field_name'];

										$keyword=$_REQUEST['keyword'];

												$sql="SELECT
												p.id_product,
												GROUP_CONCAT(DISTINCT(pa.reference) SEPARATOR ';') as reference,
												substring_index(GROUP_CONCAT(DISTINCT(pa.reference) SEPARATOR ';') ,'-',1) as stylecode,
												pa.upc,
												p.price,
												pai.id_image,
												pl.name,
												p.id_category_default,
												p.lm_season,
                                                p.lm_location,
												GROUP_CONCAT(DISTINCT(pal.name) SEPARATOR ';') as combination,
												p.active,
												sum(pq.quantity) as out_of_s,
												concat( 'http://ctn-stk.little-mistresswholesale.com/img/p/',mid(im.id_image,1,1),'/', if (length(im.id_image)>1,concat(mid(im.id_image,2,1),'/'),''),if (length(im.id_image)>2,concat(mid(im.id_image,3,1),'/'),''),if (length(im.id_image)>3,concat(mid(im.id_image,4,1),'/'),''),if (length(im.id_image)>4,concat(mid(im.id_image,5,1),'/'),''), im.id_image, '-tm_cart_default.jpg' ) AS url_image

											FROM ps_product p

											LEFT JOIN ps_product_attribute pa ON (p.id_product = pa.id_product)

											LEFT JOIN ps_stock_available pq ON (p.id_product = pq.id_product AND pa.id_product_attribute = pq.id_product_attribute)

											LEFT JOIN ps_product_lang pl ON (p.id_product = pl.id_product)

											LEFT JOIN ps_product_attribute_combination pac ON (pa.id_product_attribute = pac.id_product_attribute)

											LEFT JOIN ps_attribute_lang pal ON (pac.id_attribute = pal.id_attribute)

											LEFT JOIN ps_product_attribute_image pai on(pa.id_product_attribute = pai.id_product_attribute)

											LEFT JOIN ps_image im ON p.id_product = im.id_product

											WHERE pl.id_lang = 1

											AND pal.id_lang = 1 AND p.active =1 "; 

											if($field_name!='' and $field_name!='total' and $field_name!='instock' and $field_name!='cancelstock')

												 {
													 $sql.=" AND ".$field_name." like '%".$keyword."%'";
												 }

											$sql.=" GROUP BY  p.id_product";
											if($field_name!='' and $field_name=='instock')
											 {
												 $sql.=" having out_of_s!='0'";

    										 }
    										if($field_name!='' and $field_name=='total')

											 {
												 $sql.=" having out_of_s='0'";
											 }
											 if($field_name!='' and $field_name=='cancelstock')
											 {

    											 $sql.=" having id_category_default='277'";
											 }	 
											 if($keyword!='' and $field_name=='')
											 {
												 $sql.=" having stylecode like '%".$keyword."%'";
											 }

											$sql.=" ORDER BY p.id_product, pac.id_attribute limit $limit";
                                        	$result=mysql_query($sql);

												//echo "566".$count=mysql_num_rows($result);

												?>

                                            <table class="table table-striped table-bordered table-hover">

                                                <thead>

                                                    <tr>

														<!-- <th> <input type="checkbox" id="selectall" > </th> -->

                                                        <th rowspan="2"> # </th>
														<th rowspan="2"> Image Url </th>
                                                        <th rowspan="2"> Style Code </th>
                                                        <!--<th> Upc </th> -->
                                                        <th rowspan="2"> Price</th>
                                                        <!-- <th> Id_Image </th> -->
                                                        <th rowspan="2"> Name </th>
														<th rowspan="2"> Catagory </th>
														<th rowspan="2"> Season </th>
                                                        <th rowspan="2"> Location </th>
														<th rowspan="2"> Color </th>
                                                        <th colspan="7" > Combination </th>
                                                        <th rowspan="2"> Quantity </th>
                                                       <!--  <th> Action </th> -->
                                                    </tr>
													 <tr>
                                                       <th > 06 </th>
														<th > 08 </th>
														<th > 10 </th>
														<th > 12 </th>
														<th > 14 </th>
														<th > 16 </th>
														<th > 18 </th>
													</tr>
                                                </thead>
                                                <tbody>
												<?php 
												if(mysql_num_rows($result)>0)
												{
												$cnt=1;
												while($row_data=mysql_fetch_array($result))
												{
												?>
                                                    <tr id="row<?php echo $row_data['sr_no'];?>">
													   <!-- <td rowspan="2"> <input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $row_data['sr_no'];?>" > </td> -->
                                                        <td > <?php echo $row_data['id_product'];?> </td>
														<?php if($row_data['url_image']!="") {?>
														<td > <img src="<?php echo $row_data['url_image'];?>" height="50" width="50"/> </td>
														<? }
														else {?>
														<td > No Image </td>
														<?php }?>
                                                        <td > <?php echo explode("-",explode(";", $row_data['reference'])[0])[0];?> </td>
                                                        <!--<td rowspan="2"> <?php echo $row_data['upc'];?> </td> -->
                                                        <td > <?php echo round($row_data['price'],2);?> </td>
                                                        <!-- <td rowspan="2"> <?php echo $row_data['id_image'];?> </td>-->
                                                        <td > <?php echo $row_data['name'];?> </td>
														<td > <?php if( $row_data['id_category_default']=="78")echo 'LM';else if( $row_data['id_category_default']=="277")echo 'Cancel Stock';else echo '---';?> </td>

														<td > <?php echo $row_data['lm_season'];?>  </td>
                                                        <td > <?php echo $row_data['lm_location'];?>  </td>
														<?php 
													     $color=explode(";", $row_data['combination'])[1];
														//echo $str[1];
														?>
														 <td > <?php echo $color;?> </td>
													   <?php 
												    	$sql_qunt="SELECT  pq.quantity FROM ps_product p LEFT JOIN ps_product_attribute pa
														ON (p.id_product = pa.id_product) LEFT JOIN ps_stock_available pq ON (p.id_product = pq.id_product
														AND pa.id_product_attribute = pq.id_product_attribute) where p.id_product='".$row_data['id_product']."' ";
														$res_quat=mysql_query($sql_qunt);
													   $cnt2=1;
    													while($res_data=mysql_fetch_array($res_quat))
														{
															 $cnt2;
															if($cnt2<8)
															{
														?>
    													<td > <?php echo  $res_data['quantity'];?> </td>
															<?php }
															$cnt2=$cnt2+1;}
															if(mysql_num_rows($res_quat)<7)
															{
															$tot_td=7-mysql_num_rows($res_quat);

															for($i=1;$i<=$tot_td;$i++){

																?>

																<td></td>

																<?} 

																}

														?>
														<?php 

															$sql_tot_qunt="SELECT  sum(pq.quantity) as total FROM ps_product p LEFT JOIN ps_product_attribute pa

														ON (p.id_product = pa.id_product) LEFT JOIN ps_stock_available pq ON (p.id_product = pq.id_product

														AND pa.id_product_attribute = pq.id_product_attribute) where p.id_product='".$row_data['id_product']."' ";

														$res_tot_quat=mysql_query($sql_tot_qunt);

														$total=mysql_fetch_array($res_tot_quat);

														?>

														<td > <?php echo $total['total'];?> </td>

                                                       <!-- <td> <a href="add_new_log.php?id=<?php echo $row_data['sr_no'];?>" class="btn btn-icon-only green">

                                                                <i class="fa fa-edit"></i>

                                                            </a>

                                                            <a href="javascript:delete_entry(<?php echo $row_data['sr_no'];?>);" class="btn btn-icon-only red">

                                                                <i class="fa fa-close"></i>

                                                            </a>

                                                        </td> -->

                                                    </tr>

                                                  <!-- <tr>

														<?php 

													$sql_qunt="SELECT  pq.quantity FROM ps_product p LEFT JOIN ps_product_attribute pa

														ON (p.id_product = pa.id_product) LEFT JOIN ps_stock_available pq ON (p.id_product = pq.id_product

														AND pa.id_product_attribute = pq.id_product_attribute) where p.id_product='".$row_data['id_product']."' ";

														$res_quat=mysql_query($sql_qunt);

														$cnt=1;

														while($res_data=mysql_fetch_array($res_quat))

														{

															 $cnt;

															if($cnt<8)

															{

														?>

														<td > <?php echo  $res_data['quantity'];?> </td>

														

															<?php }

															$cnt=$cnt+1;}

														?>
                                                   </tr> -->
												<?php

												$cnt++;

												}

												}												?> 

                                                </tbody>

                                            </table>

											<input type="hidden" id="startlim" value="0">

											<input type="hidden" id="endlim" value="<?php echo $limit;?>">

											

											<?php echo $pagination->createLinks();?>

											

											<button type="button" class="btn btn-success mt-ladda-btn ladda-button" data-style="expand-down" style="" onclick="javascript:showall();">

                                                        <span class="ladda-label">Show All</span>

                                                    <span class="ladda-spinner"></span></button> 
													<?
													if($_REQUEST['limit']=="all")

														$padding="0";

													else if($limit<101)

														$padding="20";

													else if($limit==$rowCount1)

														$padding="0";

													else

														$padding="0";
														?>
											<!--	<div style="float: right; padding-top: <?php echo $padding;?>px; width: 20%;"> 
												  <label><b>Display:</b></label>

																		<label>			

																		<select class="bs-select form-control selclient" id="showdata" name="showdata" onchange="getlist('<?php echo $_REQUEST['field_name']; ?>','<?php echo $_REQUEST['keyword'];?>');" style="float: right;">

														<option value="" <?php if(isset($_REQUEST['limit']) && $_REQUEST['limit']=="") {?> selected="selected"<?php } ?>>--Select-- </option>

														<option value="20" <?php if(isset($_REQUEST['limit']) && $_REQUEST['limit']=="20") {?> selected="selected"<?php } ?>>20</option>

														<option value="50" <?php if(isset($_REQUEST['limit']) && $_REQUEST['limit']=="50") {?> selected="selected"<?php } ?>>50</option>

														<option value="100" <?php if(isset($_REQUEST['limit']) && $_REQUEST['limit']=="100") {?> selected="selected"<?php } ?>>100</option>
                                                           </select>/<?php echo $rowCount1;?></label>
													</div> -->
													<div class="dataTables_length" id="sample_1_length" style="float: right;padding-top: <?php echo $padding;?>px;">

												<label>Display:</label>

												<label>

												<select name="sample_1_length" aria-controls="sample_1" class="form-control input-sm input-xsmall input-inline" id="showdata" name="showdata" onchange="getlist('<?php echo $_REQUEST['field_name']; ?>','<?php echo $_REQUEST['keyword'];?>');">

												<option value="" <?php if(isset($_REQUEST['limit']) && $_REQUEST['limit']=="") {?> selected="selected"<?php } ?>>--Select-- </option>

														<option value="20" <?php if(isset($_REQUEST['limit']) && $_REQUEST['limit']=="20") {?> selected="selected"<?php } ?>>20</option>

														<option value="50" <?php if(isset($_REQUEST['limit']) && $_REQUEST['limit']=="50") {?> selected="selected"<?php } ?>>50</option>

														<option value="100" <?php if(isset($_REQUEST['limit']) && $_REQUEST['limit']=="100") {?> selected="selected"<?php } ?>>100</option>

												</select> /<?php echo $rowCount1;?></label></div>
											<?php ?>
                                        </div>
                                    </div>
                                </div>
                                                    <!-- END FORM-->

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- END CONTENT BODY -->

                </div>

                <!-- END CONTENT -->

               

            </div>

            <!-- END CONTAINER -->

            <!-- BEGIN FOOTER -->

            <div class="page-footer">

                <div class="page-footer-inner"> 2016 &copy; Design & Develop By 

                    <a target="_blank" href="https://www.isuf.co.uk/">Isuf</a> &nbsp;

                </div>

            </div>

            <!-- END FOOTER -->

        </div>

        <!-- BEGIN QUICK NAV -->

        <div class="quick-nav-overlay"></div>

        <!-- END QUICK NAV -->

        <!--[if lt IE 9]>

<script src="../assets/global/plugins/respond.min.js"></script>

<script src="../assets/global/plugins/excanvas.min.js"></script> 

<script src="../assets/global/plugins/ie8.fix.min.js"></script> 

<![endif]-->

        <!-- BEGIN CORE PLUGINS -->

        <script src="js/global/plugins/jquery.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/js.cookie.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

        <!-- END CORE PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <script src="js/global/plugins/moment.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

        <script src="js/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->

        <script src="js/global/scripts/app.min.js" type="text/javascript"></script>

        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <script src="js/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- BEGIN THEME LAYOUT SCRIPTS -->

        <script src="js/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="js/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="js/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="js/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
</html>