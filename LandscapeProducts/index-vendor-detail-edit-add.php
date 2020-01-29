<?

// Top Section - HTML
include '../../includes/la-lad-top.inc';

?>
	
	
<?

// Top Section - Nav Section
		include("../../includes/la-lad-header.inc");

?>

            

	
	
	
		<style>
			.banner_holder{
				width: 100%;
				height: 300px;
				min-height: 200px;
				overflow: hidden;
				background-color: dimgrey;
				display: block;
			}

			.banner_holder img{
				width: 100%;
			}
			
			.limage {
				width: 100%;
				height: 250px;    
				overflow: hidden;
				margin-top: 5px;
				text-align: center;
				line-height: 75px;
			}
			.limage2 {
				max-width: 100%;
				max-height: 100%;
				vertical-align: middle;
				position: relative;
				top: 50%;.
				transform: translateY(-50%);			
			}	

			.limage3 {
				width: 100%;
				height: 75px;    
				overflow: hidden;
				margin-top: 5px;
				text-align: left;
				line-height: 75px;
			}
			.limage4 {
				max-width: 100%;
				max-height: 100%;
				vertical-align: middle;
				position: relative;
				top: 50%;
				transform: translateY(-50%);			
			}

			.limage5 {
				width: 100%;
				height: 350px;    
				overflow: hidden;
				margin-top: 5px;
				text-align: center;
				line-height: 150px;
			}
			.limage6 {
				max-width: 200%;
				max-height: 100%;
				vertical-align: middle;
				position: relative;
				top: 50%;
				transform: translateY(-50%);				
			}								
				
			
		</style>	
	
	
	
	
 
  <div class="row">
    <div class="col-lg-12">
		


      
<div class="container">
  <div class="row">
      
    <div class="col-lg-9">
        <div class="row">
				<a id="cprods">&nbsp;</a>
				<div style="width: 125%">
				 <center><h1>Add a Product for this Vendor</h1></center>
                    
                    <?
                    
										// Vendor Start

											$servername = "localhost";
											$username = "land_patchew";
											$password = "59q2GB6k$3";
											$dbname = "land_landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 


										// start article from table
							
											$key2 = $_GET['number'];
											$key22 = $_GET['prodNum'];
                                            $idVen = $key2;
		
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "'";
											$result = $conn->query($sql);									
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
                                                
                                                $logoPic = $row['logo'];
                                                $coName = $row['company_name'];
												
								                echo '<div><center><img width="20%" src="https://landscapearchitect.com/products/images/' . $logoPic . '" alt="company logo" ></center></div><br><br>';
                                            
                                            }
												                    
                    
                    ?>
                    
                    
									<form name="form_detail"  method="post" action="uploader-master/demo/index-words-add.php" > 
										<input type="hidden" name="id" value="<? echo $idVen; ?>" >
										<input type="hidden" name="coName" value="<? echo $coName; ?>" >
                                        
										<center><p>Enter the name for the product you wish to enter.<br>
                                           <em>You can change the name later if needed</em></p>
                                        
										<p><strong>Product Name: </strong><br><input type="text" name="product_name" value="" style="width: 255px" required></p>
                                            
                                            
                                        <!--<div class="g-recaptcha" data-sitekey="6LfbIFoUAAAAAFxVEEkqOVzAJvDpfaag82j8NNuy"></div><br> -->
                                            
                                        
 										<input type="submit" value="Submit &amp; Save"  style="background-color: #5ee330; font-weight: bold; font-size: 18px"><br><br>	
                                        
                                        
                                                    <input type="button" value="Cancel" onclick="self.close()" style="background-color: #6f8da7; font-weight: bold; font-size: 18px"></center>                                       
                                        
                                    </form>
                    
                    
                    
                    
                                        
                                    <script>
                                        
                                       /* window.onload = function() {
                                            var $recaptcha = document.querySelector('#g-recaptcha-response');

                                            if($recaptcha) {
                                                $recaptcha.setAttribute("required", "required");
                                            }
                                        };                                        
                                        
                                        
                                        
                                    var myWindow;

                              
                                    function closeWin() {
                                      myWindow.close();
                                    } */
                                    </script>                    
                    
                    
				</div>	

      
      
                                 
		  
      </div>
    </div>
	  



	  
						
											
                                               
		  
     
	  


  </div>
</div>
<p>&nbsp;</p>







<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
		include("../../includes/la-lad-bottom.inc"); 

?>	

<?
    include("../../includes/lo_footer-main2-new.inc");
?>
	