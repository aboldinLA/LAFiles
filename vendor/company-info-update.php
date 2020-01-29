
	    <?

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


											$sql2333 = "SELECT * FROM new_vendor WHERE id = '" . $_GET['id'] . "'";
											$result2333 = $conn->query($sql2333);									
									
												
											while($row = mysqli_fetch_array($result2333)) {
												
												
												

?>

<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  #profile {
    font-size: 15px;
  }
  
</style>

 
<h1>Company Information Update</h1>


<!--
  <div class="container">
    <div class="row"> input_fl 
    
-->

	  
  <form method="post" action="company-info-update-web.php">
 	<input type="hidden" name="venNum" value="<? echo $_GET['id']; ?>">
	  
	  
    <label for="company_name">Company Name</label></td><br>
    <input type="text" id="company_name" name="company_name" value="<? echo $row['company_name']; ?>"><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" value="<? echo $row['address']; ?>"><br>

    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" value="<? echo $row['city']; ?>"><br>

    <label for="state">State</label><br>
    <select id="state" name="state">
			<option value="AL" <? if ($row['state'] == 'AL') { echo 'selected'; };  ?>>Alabama</option>
			<option value="AK" <? if ($row['state'] == 'AK') { echo 'selected'; };  ?>>Alaska</option>
			<option value="AB" <? if ($row['state'] == 'AB') { echo 'selected'; };  ?>>Alberta</option>
			<option value="AZ" <? if ($row['state'] == 'AZ') { echo 'selected'; };  ?>>Arizona</option>
			<option value="AR" <? if ($row['state'] == 'AR') { echo 'selected'; };  ?>>Arkansas</option>
			<option value="BC" <? if ($row['state'] == 'BC') { echo 'selected'; };  ?>>British Columbia</option>
			<option value="CA" <? if ($row['state'] == 'CA') { echo 'selected'; };  ?>>California</option>
			<option value="CO" <? if ($row['state'] == 'CO') { echo 'selected'; };  ?>>Colorado</option>
			<option value="CT" <? if ($row['state'] == 'CT') { echo 'selected'; };  ?>>Connecticut</option>
			<option value="DE" <? if ($row['state'] == 'DE') { echo 'selected'; };  ?>>Delaware</option>
			<option value="DC" <? if ($row['state'] == 'DC') { echo 'selected'; };  ?>>District Of Columbia</option>
			<option value="FL" <? if ($row['state'] == 'FL') { echo 'selected'; };  ?>>Florida</option>
			<option value="GA" <? if ($row['state'] == 'GA') { echo 'selected'; };  ?>>Georgia</option>
			<option value="HI" <? if ($row['state'] == 'HI') { echo 'selected'; };  ?>>Hawaii</option>
			<option value="ID" <? if ($row['state'] == 'ID') { echo 'selected'; };  ?>>Idaho</option>
			<option value="IL" <? if ($row['state'] == 'IL') { echo 'selected'; };  ?>>Illinois</option>
			<option value="IN" <? if ($row['state'] == 'IN') { echo 'selected'; };  ?>>Indiana</option>
			<option value="IA" <? if ($row['state'] == 'IA') { echo 'selected'; };  ?>>Iowa</option>
			<option value="KS" <? if ($row['state'] == 'KS') { echo 'selected'; };  ?>>Kansas</option>
			<option value="KY" <? if ($row['state'] == 'KY') { echo 'selected'; };  ?>>Kentucky</option>
			<option value="LA" <? if ($row['state'] == 'LA') { echo 'selected'; };  ?>>Louisiana</option>
			<option value="ME" <? if ($row['state'] == 'ME') { echo 'selected'; };  ?>>Maine</option>
			<option value="MB" <? if ($row['state'] == 'MB') { echo 'selected'; };  ?>>Manitoba</option>
			<option value="MD" <? if ($row['state'] == 'MD') { echo 'selected'; };  ?>>Maryland</option>
			<option value="MA" <? if ($row['state'] == 'MA') { echo 'selected'; };  ?>>Massachusetts</option>
			<option value="MI" <? if ($row['state'] == 'MI') { echo 'selected'; };  ?>>Michigan</option>
			<option value="MN" <? if ($row['state'] == 'MN') { echo 'selected'; };  ?>>Minnesota</option>
			<option value="MS" <? if ($row['state'] == 'MS') { echo 'selected'; };  ?>>Mississippi</option>
			<option value="MO" <? if ($row['state'] == 'MO') { echo 'selected'; };  ?>>Missouri</option>
			<option value="MT" <? if ($row['state'] == 'MT') { echo 'selected'; };  ?>>Montana</option>
			<option value="NE" <? if ($row['state'] == 'NE') { echo 'selected'; };  ?>>Nebraska</option>
			<option value="NV" <? if ($row['state'] == 'NV') { echo 'selected'; };  ?>>Nevada</option>
			<option value="NB" <? if ($row['state'] == 'NB') { echo 'selected'; };  ?>>New Brunswick</option>
			<option value="NH" <? if ($row['state'] == 'NH') { echo 'selected'; };  ?>>New Hampshire</option>
			<option value="NJ" <? if ($row['state'] == 'NJ') { echo 'selected'; };  ?>>New Jersey</option>
			<option value="NM" <? if ($row['state'] == 'NM') { echo 'selected'; };  ?>>New Mexico</option>
			<option value="NY" <? if ($row['state'] == 'NY') { echo 'selected'; };  ?>>New York</option>
			<option value="NC" <? if ($row['state'] == 'NC') { echo 'selected'; };  ?>>North Carolina</option>
			<option value="ND" <? if ($row['state'] == 'ND') { echo 'selected'; };  ?>>North Dakota</option>
			<option value="NT" <? if ($row['state'] == 'NT') { echo 'selected'; };  ?>>Northwest Territories</option>
			<option value="NS" <? if ($row['state'] == 'NS') { echo 'selected'; };  ?>>Nova Scotia</option>
			<option value="OH" <? if ($row['state'] == 'OH') { echo 'selected'; };  ?>>Ohio</option>
			<option value="OK" <? if ($row['state'] == 'OK') { echo 'selected'; };  ?>>Oklahoma</option>
      <option value="ON" <? if ($row['state'] == 'ON') { echo 'selected'; };  ?>>Ontario</option>
			<option value="OR" <? if ($row['state'] == 'OR') { echo 'selected'; };  ?>>Oregon</option>
			<option value="PA" <? if ($row['state'] == 'PA') { echo 'selected'; };  ?>>Pennsylvania</option>
			<option value="PE" <? if ($row['state'] == 'PE') { echo 'selected'; };  ?>>Prince Edward Island</option>
			<option value="QC" <? if ($row['state'] == 'QC') { echo 'selected'; };  ?>>Quebec</option>
			<option value="RI" <? if ($row['state'] == 'RI') { echo 'selected'; };  ?>>Rhode Island</option>
			<option value="SK" <? if ($row['state'] == 'SK') { echo 'selected'; };  ?>>Saskatchewan</option>
			<option value="SC" <? if ($row['state'] == 'SC') { echo 'selected'; };  ?>>South Carolina</option>
			<option value="SD" <? if ($row['state'] == 'SD') { echo 'selected'; };  ?>>South Dakota</option>
			<option value="TN" <? if ($row['state'] == 'TN') { echo 'selected'; };  ?>>Tennessee</option>
			<option value="TX" <? if ($row['state'] == 'TX') { echo 'selected'; };  ?>>Texas</option>
			<option value="UT" <? if ($row['state'] == 'UT') { echo 'selected'; };  ?>>Utah</option>
			<option value="VT" <? if ($row['state'] == 'VT') { echo 'selected'; };  ?>>Vermont</option>
			<option value="VA" <? if ($row['state'] == 'VA') { echo 'selected'; };  ?>>Virginia</option>
			<option value="WA" <? if ($row['state'] == 'WA') { echo 'selected'; };  ?>>Washington</option>
			<option value="WV" <? if ($row['state'] == 'WV') { echo 'selected'; };  ?>>West Virginia</option>
			<option value="WI" <? if ($row['state'] == 'WI') { echo 'selected'; };  ?>>Wisconsin</option>
			<option value="WY" <? if ($row['state'] == 'WY') { echo 'selected'; };  ?>>Wyoming</option>
			<option value="YT" <? if ($row['state'] == 'YT') { echo 'selected'; };  ?>>Yukon</option>
      <option value="NA" <? if ($row['state'] == 'NA') { echo 'selected'; };  ?>>None of the Above</option>
    </select><br>

    <label for="zip">Zip:</label><br>
    <input type="text" id="zip" name="zip" value="<? echo $row['zip']; ?>"><br>

    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" value="<? echo $row['phone']; ?>"><br>

    <label for="fax">Fax:</label><br>
    <input type="text" id="fax" name="fax" value="<? echo $row['fax']; ?>"><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="<? echo $row['email']; ?>"><br>

    <label for="contact_us">Contact Us:</label><br>
    <input type="text" id="contact_us" name="contact_us" value="<? echo $row['contact_us']; ?>"><br>

    <label for="lname">Profile:</label><br>
	  <textarea id="profile" name="profile"  rows="8" cols="130"><? echo $row['profile']; ?></textarea><br>

  
    <input type="submit" value="Submit">

 
		
	</form>
<!--
		    </div>
  </div>
-->

				<?  }  ?>


<script>
    
// window.onload = function() {
//    if(!window.location.hash) {
//        window.location = window.location + '#loaded';
//        window.location.reload();
//    }
//}
    
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
    
    function close_window() {
      
        close();
    }
    
    
    
</script>




