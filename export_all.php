<?php

error_reporting(-1);

$start=$_REQUEST['start'];

$limit=$_REQUEST['limit'];

$field_name=$_REQUEST['field_name'];

$keyword=$_REQUEST['keyword'];



 /* Php code to get data form database */

include "includes/connection_ctn.php";

include 'PHPExcel-1.8/Classes/PHPExcel.php';

$objPHPExcel     = new PHPExcel();

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

											AND pal.id_lang = 1 and p.active = 1";

											

											

											$sql.=" GROUP BY  p.id_product";

										 

										

											$sql.=" ORDER BY p.id_product, pac.id_attribute ";	 

												 

												 

												

												$result=mysql_query($sql);

												//echo "566".$count=mysql_num_rows($result);

											$count=1;	

																						

			$table ='<table class="table table-striped table-bordered table-hover" border="1">

                                                <thead>

                                                    <tr>

														

                                                        <th rowspan="2"> # </th>

														<th rowspan="2"> Image Url </th>

                                                        <th rowspan="2"> Reference </th>

                                                        

                                                        <th rowspan="2"> Price</th>

                                                       

                                                        <th rowspan="2"> Name </th>

														<th rowspan="2"> Catagory </th>

														<th rowspan="2"> Season </th>
														<th rowspan="2"> Location </th>

														<th rowspan="2"> Color </th>

                                                        <th colspan="7" > Combination </th>

														

                                                        <th rowspan="2"> Quantity </th>

                                                        

                                                       

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

                                                <tbody>';

												 

												

												while($row_data=mysql_fetch_array($result))

												{

													

												

												

												

												

                                      $table .='              <tr >';

													   

                                      $table .='        <td rowspan="4">'.  $row_data['id_product'].' </td>';

	  

				$content = file_get_contents($row_data['url_image']);

				file_put_contents('tmpimg/'.$count.'.jpg', $content);

			

										$table .='		<td rowspan="4">  </td>

                                                        <td rowspan="4">'.  explode("-",explode(";", $row_data['reference'])[0])[0].' </td>

                                                        

                                                        <td rowspan="4">'.  round($row_data['price'],2).' </td>

                                                        

                                                        <td rowspan="4">'.  $row_data['name'].' </td>';

														if( $row_data['id_category_default']=="78") {$cat="LM";}

														else if( $row_data['id_category_default']=="277") $cat="Cancel Stock" ;else $cat="---";

										$table .='		<td rowspan="4"> '.$cat.'  </td>

														<td rowspan="4"> '.$row_data['lm_season'].' </td>
														<td rowspan="4"> '.$row_data['lm_location'].' </td>';

														$color=explode(";", $row_data['combination'])[1];

														

														

                                        $table .='       <td rowspan="4"> '. $color.' </td>';

														

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

														

										$table .='		<td rowspan="4"> '.  $res_data['quantity'].'</td>';

														

															 }

															$cnt2=$cnt2+1;}

														

															if(mysql_num_rows($res_quat)<7)

															{

															$tot_td=7-mysql_num_rows($res_quat);

															for($i=1;$i<=$tot_td;$i++){

																

										$table .='						<td rowspan="4"></td>';

																} 

																}

										

															$sql_tot_qunt="SELECT  sum(pq.quantity) as total FROM ps_product p LEFT JOIN ps_product_attribute pa

														ON (p.id_product = pa.id_product) LEFT JOIN ps_stock_available pq ON (p.id_product = pq.id_product

														AND pa.id_product_attribute = pq.id_product_attribute) where p.id_product='".$row_data['id_product']."' ";

														$res_tot_quat=mysql_query($sql_tot_qunt);

														$total=mysql_fetch_array($res_tot_quat);

														

										 $table .='		<td rowspan="4"> '. $total['total'].' </td>

                                                        

                                                       

                                                    </tr>

                                                   <tr></tr>

												   <tr></tr>

												   <tr></tr>

												   ';

												

                                                       

                                                   

                                                  

												$count++;

												

												} 

                                          $table .='      </tbody>

												

                                            </table>';

											





	$co=3;

				for($i=1;$i<$count;$i++)

				{

					$objDrawing = new PHPExcel_Worksheet_Drawing();    //create object for Worksheet drawing



$path = 'tmpimg/'.$i.'.jpg';    //Path to signature .jpg file

$imgsize = filesize( $path );

if($imgsize=="0")

{

	$signature="img/white.jpg";

}

else

{

	$signature = 'tmpimg/'.$i.'.jpg';

}

$objDrawing->setPath($signature);



$objDrawing->setCoordinates('B'.$co);        //set image to cell

$objDrawing->setWidth(80);                 //set width, height

$objDrawing->setHeight(80);  



$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());  //save 

$co=$co+4;

				}





//echo $table;exit();





// save $table inside temporary file that will be deleted later

$tmpfile = tempnam(sys_get_temp_dir(), 'html');

file_put_contents($tmpfile, $table);



// insert $table into $objPHPExcel's Active Sheet through $excelHTMLReader



$excelHTMLReader = PHPExcel_IOFactory::createReader('HTML');

$excelHTMLReader->loadIntoExisting($tmpfile, $objPHPExcel);

$objPHPExcel->getActiveSheet()->setTitle('Result'); // Change sheet's title if you want



unlink($tmpfile); // delete temporary file because it isn't needed anymore







$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

header('Content-Type: application/vnd.ms-excel');

header('Content-Disposition: attachment;filename="Result.xls"');

header('Cache-Control: max-age=0');

$objWriter->save('php://output');







$dir = 'tmpimg/';

foreach(glob($dir.'*.*') as $v){

    unlink($v);

}









exit;

?>