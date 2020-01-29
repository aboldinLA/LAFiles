<?php


						
						$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 24;
            $limit = ($limit == 'all') ? $totalProdCount : $limit;
                        
						$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; 
						$allProds = array();
						$brandVenList = array();
						
						
						
						
//						if(isset($_POST['brandVen'])){
//							$_SESSION['A'] = $_POST['brandVen'];
//						}
						
						//need to clear session brandVen on clear btn or resubmit with no brands checked
						
						print_r($_SESSION['brandVen']);

						
						
						
						if(isset($_POST['brandVen'])){
							
							$companyProds = array();
							$sql1 = '';
							
							for($i1 = 0; $i1 < sizeof($_POST['brandVen']); $i1++){
									$sql1 .= "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status > 2 AND vendor_id = '" . $_POST['brandVen'][$i1] . "'";
									if($i1 < (sizeof($_POST['brandVen']) - 1)){
										$sql1 .= " UNION ";
									} else {
										$sql1 .= " ORDER BY product_name ASC";
									}
							}
								$result1 = $conn->query($sql1); 
								
								while($row = mysqli_fetch_array($result1)) {

										if ($vendorID != $row['vendor_id']) {				 	

												$vendorID = $row['vendor_id'];

												array_push($companyProds, $row);


										} else {

												array_push($companyProds, $row);

										}
									}
											
							$brandVenList = $_POST['brandVen'];
							$allProds = $companyProds;
							$totalProdCount = sizeof($companyProds);
							} else {
								$allProds = $mainList + $altList;
							}
						
						$maxPages =  ceil( $totalProdCount / $limit );
						$results = getData($limit, $page, $maxPages, $allProds, $brandVenList);
						
						displayData($results, $conn, $xlistNumber);
                                													 
		
		
		
					 function getData($limit, $page, $maxPages, $allProds, $brandVenList) {
			
								$results = array();
								$amountofProds = sizeof($allProds);

								$startIndex = number_format($limit * ($page - 1));
								$endIndex = number_format($startIndex + $limit);
								
								if($endIndex > $amountofProds){
									$endIndex = $amountofProds;
								}

								$x = $startIndex;
								for($y = $startIndex; $x < $endIndex; $y++){
									
									if(!empty($brandVenList)){
										foreach($brandVenList as $brandVen){
											if($brandVen == $allProds[$y]["id"]){
												array_push($results, $allProds[$y]);
												$x++;
											}
										}
									} else {
										array_push($results, $allProds[$y]);
										$x++;
									}

								}

								return $results;		
				     }
					
                      
                  
									
                       
					function createPageLinks($maxPages, $page, $limit, $totalProdCount) {
							
							if ( $limit == 'all' ) {
								return '';
							} else {

                                $link  = 'https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=' . $_GET['ad'] . '&xlist=' . $_GET['xlist'] . '&brand=y';

                                $last  =  $maxPages;

                                $start = ( ( $page - $maxPages ) > 0 ) ? $page - $maxPages : 1;
                                $end   = ( ( $page + $maxPages ) < $last ) ? $page + $maxPages : $last;

                                $class = ( $page == 1 ) ? "disable" : "active";
                                $html = '<a href="'. $link . '&limit=' . $limit . '&page=' . ( $page - 1 ) . '" class="' . $class . ' prev">Prev</a>';

                                if ( $start > 1 ) {
                                        $html   .= '<a href="'. $link . '&limit=' . $limit . '&page=1">1</a>';
                                        $html   .= '<a href="#" class="disabled"><span>...</span></li>';
                                }

                                for ( $i = $start ; $i <= $end; $i++ ) {
                                        $class  = ( $page == $i ) ? "disable" : "";
                                        $html   .= '<a href="'. $link . '&limit=' . $limit . '&page=' . $i . '" class="' . $class . '">' . $i . '</a>';
                                }

                                if ( $end < $last ) {
                                        $html   .= '<a href="#" class="disable"><span>...</span></a>';
                                        $html   .= '<a href="'. $link . '&limit=' . $limit . '&page=' . $last . '">' . $last . '</a>';
                                }

                                $class = ( $page == $last ) ? "disable" : "active";
                                $html .= '<a href="'. $link . '&limit=' . $limit . '&page=' . ( $page + 1 ) . '" class="' . $class . ' nxt">Next</a>';

                                return $html;
                            }
					}

											
				
			
					function displayData($results, $conn, $xlistNumber){                   
                        
								foreach ($results as $product){

									$sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $product['vendor_id'] ."' AND series_product = 0";
									$result99 = $conn->query($sql99);  

									$rowcount99=mysqli_num_rows($result99);    

									$prodName = substr($product['product_name'],0,21);
									$companyName = substr($product['company_name'],0,20);



									echo '<a href="https://landscapearchitect.com/LandscapeProducts/product-details.php?number=' . $product['vendor_id'] . '&prodNum=' . $product[0] . '" class="col-md-4 col-sm-6 col-xs-6 for_small">
																				<div class="full_width brdr">
																								<img src="https://www.landscapearchitect.com/products/images/'. $product['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
																								<span class="full_width he_det">
																												<h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products</span></h4>
																								</span>
																				</div>    
																				</a>'; 
								}
								unset($product);
				 
				}
				 
				 

?>