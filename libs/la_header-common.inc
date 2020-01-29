<?php
 function get_category_count( $category_parent = null){
    $total = 0;
    $select_query = "select id from xlist where idParent = ".$category_parent;
    $query = mysql_query($select_query);
    $num_rows = mysql_num_rows($query); 
    while($row = mysql_fetch_array( $query )) {
   $id = $row['id'];
   $count_products = "SELECT * FROM  `vendor_product` WHERE FIND_IN_SET( $id, `xlist` ) >0 ";
    $count_product = mysql_query($count_products);
    $count_products = mysql_num_rows($count_product); 
    if( $count_products > 0){
       $total+=$count_products;
    }
    }
    if( !empty($total) ){
        return  "(" .$total. ")";
    } else {
       return  $total;
    }
}


 function get_subCategory_count( $category_parent = null){
    $total = 0;
    $select_query = "select id from xlist where id = ".$category_parent;
    $query = mysql_query($select_query);
    $num_rows = mysql_num_rows($query); 
    while($row = mysql_fetch_array( $query )) {
   $id = $row['id'];
   $count_products = "SELECT * FROM  `vendor_product` WHERE FIND_IN_SET( $id, `xlist` ) >0 ";
    $count_product = mysql_query($count_products);
    $count_products = mysql_num_rows($count_product); 
    if( $count_products > 0){
       $total+=$count_products;
    }
    }
    if( !empty($total) ){
        return  "(" .$total. ")";
    } else {
       return  $total;
    }
}





?>





<div id="menu">
    <ul class="menu">
        <li><a href="https://landscapearchitect.com" class="parent"><span>Home</span></a>
            <div><ul>
                <li><a href="https://landscapearchitect.com" class="parent"><span>Landscape Online</span></a></li>
                <li><a href="https://landscapeonline.com/TLE-LB/the-landscape-expo.php"><span>The Landscape Expo - Long Beach - Oct. 10-11</span></a></li>
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>Articles &amp; Research</span></a>
            <div><ul>
                <li><a href="https://landscapearchitect.com/Search-Site.php"><span>
                <!-- Search Site -->Search Landscape Articles
                </span></a></li>
                <!-- <li><a href="https://landscapearchitect.com/Search-Products.php"><span>Search Products</span></a></li> -->
                <li><a href="https://landscapearchitect.com/digital-mags/index.php"><span>Digital Landscape Magazines</span></a></li>
                <li><a href="https://landscapearchitect.com/index.php/#top"><span>Top Stories of the Week</span></a></li>
                <li><a href="https://landscapearchitect.com/index.php/#featured"><span>Featured Products</span></a></li>
                <li><a href="https://landscapearchitect.com/index.php/#legislation"><span>Landscape Legislation News</span></a>
					<div style="padding-left: 100px"><ul>
                		<li><a href="https://landscapearchitect.com/research/article-legis-a.php"><span>More Legislation News</span></a></li>
					</ul></div>                
                </li> 
                <li><a href="https://landscapearchitect.com/index.php/#association"><span>Association News</span></a>
                	<div style="padding-left: 100px"><ul>
                		<li><a href="https://landscapearchitect.com/research/article-assoc-a.php"><span>More Association News</span></a></li>
					</ul></div>                
                </li>                               
                <li><a href="https://landscapearchitect.com/index.php/#economic"><span>Economic News</span></a>
                	<div style="padding-left: 100px"><ul>
                		<li><a href="https://landscapearchitect.com/research/article-econo-a.php"><span>More Economic News</span></a></li>
                		<li><a href="https://landscapearchitect.com/lcsi/index-a.php"><span>Landscape Communications Stock Index</span></a></li>
					</ul></div>
                </li>                                                                            
                <li><a href="https://landscapearchitect.com/index.php/#education"><span>Education News</span></a>
					<div style="padding-left: 100px"><ul>
                		<li><a href="https://landscapearchitect.com/research/article-educ-a.php"><span>More Education News</span></a></li>
					</ul></div>                
                </li>
                                
                <li><a href="https://landscapearchitect.com/index.php/#morenews"><span>More News</span></a>
                	<div style="padding-left: 100px"><ul>
                		<li><a href="https://landscapearchitect.com/research/recent_news-a.php"><span>Recent News</span></a></li>
					</ul></div>
                </li>                
                <li><a href="https://landscapearchitect.com/research/submissions/Submit-Editorial.php"><span>Submit Editoral</span></a></li>
                <li><a href="https://landscapearchitect.com/lmb2/" target="_blank"><span style="font-weight: bold; color: yellow">Blog</span></a></li>
            </ul></div>
        </li>
  
        <li><a href="#"><span>Associations/Events</span></a>
            <div><ul>
                <li><a href="https://landscapeonline.com/industry/Association-Search.php" class="parent"><span>Find an Association</span></a></li>
                <li><a href="https://landscapeonline.com/calendar/Association-Event.php"><span>Search for Events</span></a></li>
                <li><a href="https://landscapeonline.com/industry/List-Association.php"><span>List Your Association / Event</span></a></li>
                <li><a href="https://landscapeonline.com/member/Edit-Association.php?t=as"><span>Edit Your Association / Event</span></a></li>
                <li><a href="https://landscapeonline.com/TLE-LB/the-landscape-expo.php"><span>The Landscape Expo 2019 - Oct. 23-24</span></a></li>
            </ul></div>
        </li>
        <li><a href="#"><span>Login/Sign-Up</span></a>
            <div><ul>
                <li><a href="https://landscapearchitect.com/subscriptions/subscribe.php?action=new"><span>New Subscription Request</span></a></li>
                <li><a href="https://landscapearchitect.com/member/login3.php?t=s"><span>Renew/Update Subscriber Info</span></a></li>
                <li><a href="https://landscapeonline.com/vendor/signup/Vendor-Signup.php"><span>New Vendor/Services Listing</span></a></li>
                <li><a href="https://landscapeonline.com/member/login2.php?t=v"><span>Update Vendor/Services Listing</span></a></li>
                <li><a href="https://landscapeonline.com/member/login2.php?t=v"><span>Lead Retrieval</span></a></li>
                <li><a href="https://landscapearchitect.com/industry/List-Association.php"><span>List Your Association</span></a></li>
                <li><a href="https://landscapearchitect.com/member/Edit-Association.php?t=as"><span>Edit Your Association</span></a></li>
            </ul></div>
        </li>
        
        <li><a href="https://landscapeonline.com/TLE-LB/the-landscape-expo.php"><span>Landscape Expo</span></a>
            <div><ul>
                <li><a href="https://landscapeonline.com/TLE-LB/the-landscape-expo.php"><span>Landscape Expo Home</span></a></li>
                <li><a href="https://landscapeonline.com/subscriptions/subscribe-lb-19.php?action=new"><span>Expo Registration</span></a></li>
                <li><a href="https://landscapeonline.com/TLE-LB/Seminars-2019/Seminar-Schedule.php"><span>Landscape Seminars</span></a></li>
				<li><a href="https://landscapeonline.com/TLE-LB/exhibitor-List-2019.php"><span>Exhibitor List - 2019 Exhibitors</span></a></li>
                <li><a href="https://landscapeonline.com/TLE-LB/exhibitor-signup-2019.php"><span>Exhibitor Sign-Up</span></a></li>
                <li><a href="https://landscapeonline.com/TLE-LB/floor-plan-2019.php"><span>Floor Plan</span></a></li>
                <li><a href="https://landscapearchitect.com/TLE-LB/contact_us-2019.php"><span>Contact The Show</span></a></li>

            </ul></div>
        </li>           
        
     
        <!-- <li><a href="https://landscapearchitect.com/LO-Store/"><span>E-Store</span></a></li> -->
        <li><a href="#"><span>Contact Us</span></a>
            <div style="position:absolute; left:-125px"><ul>
                <li><a href="https://landscapearchitect.com/contact/Contact-General.php" class="parent"><span>General Landscape Online Info</span></a></li>
                <li><a href="https://landscapearchitect.com/advertising/Advertising-Information.php"><span>Advertising Info</span></a></li>
                <li><a href="https://landscapearchitect.com/guideinfo/Product-Guide-Information.php"><span>Landscape Product Guide Info</span></a></li>
                <li><a href="https://landscapearchitect.com/research/submissions/Submit-Editorial.php"><span>Submit Editorial</span></a></li>
                <li><a href="https://landscapearchitect.com/subscriptions/subscribe.php?action=new"><span>Subscriber Sign-Up</span></a></li>
                <li><a href="https://landscapearchitect.com/vendor/signup/index2.php"><span>Vendor Sign-Up</span></a></li>
            </ul></div>
        </li>
        
        <!-- <li><a href="https://landscapearchitect.com/lmb2/" target="_blank"><span style="font-weight: bold; color: yellow">Blog</span></a></li> -->       
        
    </ul>
</div>