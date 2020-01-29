


<? $collapse = $_GET['ad'] ?>
            
            
<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
     <div class="panel panel-default">
       <div class="panel-heading" role="tab">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">Business Services &amp; Software</a></h4>
       </div>
       <div id="collapseOne1" class="panel-collapse collapse <? if ($collapse == 28) { echo 'in'; } ?>">
         <div class="panel-body business">
             
             <?

                                                       
            
            
											

											$sql1 = "SELECT * FROM xlist WHERE idParent = '28' AND name NOT LIKE '%*%' ORDER BY name ASC";
											$result1 = $conn->query($sql1);  


												while($row = mysqli_fetch_array($result1)) {
															
														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
															$result34 = $conn->query($sql34);
															$rowcount34=mysqli_num_rows($result34);

														if($rowcount34 != 0) {

														echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=28&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  

														}


												}              
//             
            ?>
           
               
             <script>
                
//               window.onload = function(){
//                 quickLoadSidebar(28);
//               }
//              
            </script>
           
           
           </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">Erosion Control</a></h4>
       </div>
       <div id="collapseTwo1" class="panel-collapse collapse <? if ($collapse == 30) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                              
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '30' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                       while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=30&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }             
             
            ?>           
           
           </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">Fencing</a></h4>
       </div>
       <div id="collapseThree1" class="panel-collapse collapse <? if ($collapse == 1300) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1300' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                         while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1300&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }              
             
            ?>           
           
           </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">Irrigation</a></h4>
       </div>
       <div id="collapseFour1" class="panel-collapse collapse <? if ($collapse == 1139) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1139' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                         while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1139&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }                
             
            ?>           
           
           </div>
       </div>
     </div>    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">Lighting / Electrical</a></h4>
       </div>
       <div id="collapseFive1" class="panel-collapse collapse <? if ($collapse == 32) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '32' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                         while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=32&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }              
             
            ?>           
           
           </div>
       </div>
     </div>        
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1">Outdoor Living</a></h4>
       </div>
       <div id="collapseSix1" class="panel-collapse collapse <? if ($collapse == 1214) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1214' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                          while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1214&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }                
             
            ?>           
           
           </div>
       </div>
     </div>            
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven1">Park &amp; Recreation</a></h4>
       </div>
       <div id="collapseSeven1" class="panel-collapse collapse <? if ($collapse == 33) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '33' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                        while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=33&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }             
             
            ?>           
           
           </div>
       </div>
     </div>                
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseEight1">Pavers, Masonry, Blocks, Rocks</a></h4>
       </div>
       <div id="collapseEight1" class="panel-collapse collapse <? if ($collapse == 38) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '38' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                          while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=38&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }              
             
            ?>           
           
           </div>
       </div>
     </div>                    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseNine1">Pest/Wildlife</a></h4>
       </div>
       <div id="collapseNine1" class="panel-collapse collapse <? if ($collapse == 1212) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1212' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                       while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1212&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }    
            ?>           
           
           </div>
       </div>
     </div>                    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTen1">Plant Accessories &amp; Amendments</a></h4>
       </div>
       <div id="collapseTen1" class="panel-collapse collapse <? if ($collapse == 1002) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1002' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                        while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1002&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }    
            ?>           
           
           </div>
       </div>
     </div>                    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseEleven1">Pool &amp; Spa</a></h4>
       </div>
       <div id="collapseEleven1" class="panel-collapse collapse <? if ($collapse == 1394) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1394' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                       while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1394&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }              
             
            ?>           
           
           </div>
       </div>
     </div>                    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwelve1">Site Amenities</a></h4>
       </div>
       <div id="collapseTwelve1" class="panel-collapse collapse <? if ($collapse == 29) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '29' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                       while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=29&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }               
             
            ?>           
           
           </div>
       </div>
     </div>                    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThirteen1">Site Furnishings &amp; Receptacles</a></h4>
       </div>
       <div id="collapseThirteen1" class="panel-collapse collapse <? if ($collapse == 1215) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1215' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                       while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1215&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }                
             
            ?>           
           
           </div>
       </div>
     </div>                    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseFourteen1">Sculpture / Art / Garden Ornaments</a></h4>
       </div>
       <div id="collapseFourteen1" class="panel-collapse collapse <? if ($collapse == 1301) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1301' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                    while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1301&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }              
             
            ?>           
           
           </div>
       </div>
     </div>                    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseFifteen1">Water Features</a></h4>
       </div>
       <div id="collapseFifteen1" class="panel-collapse collapse <? if ($collapse == 41) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '41' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                   while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=41&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }                
             
            ?>           
           
           </div>
       </div>
     </div>                    
     <div class="panel panel-default">
       <div class="panel-heading">
         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseSixteen1">Water Management</a></h4>
       </div>
       <div id="collapseSixteen1" class="panel-collapse collapse <? if ($collapse == 1213) { echo 'in'; } ?>">
         <div class="panel-body">
             
             <?

                                               
            
														
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '1213' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
  while($row = mysqli_fetch_array($result1)) {
																												
																														 $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
																															$result34 = $conn->query($sql34);
																															$rowcount34=mysqli_num_rows($result34);

																														if($rowcount34 != 0) {

                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=1213&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  
																														
																														}
                                                            
                                                            
                                                        }    
             
            ?>           
           
           </div>
       </div>
     </div>                        
    
    
</div>              
 
