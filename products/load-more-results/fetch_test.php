<?php
$servername = "localhost";
$username = "landscap_lol";
$password = "meow2meow";
$dbname = "landscap_lollive";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT tt.*
FROM vendor_product_lg_approvals tt
INNER JOIN
    (SELECT vendor_product_id, MAX(revision) AS MaxRevision
    FROM vendor_product_lg_approvals
    GROUP BY vendor_product_id) groupedtt 
ON tt.vendor_product_id = groupedtt.vendor_product_id 
AND tt.revision = groupedtt.MaxRevision";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ID: ". $row["id"]. "&nbsp;-&nbsp;Product: ". $row["vendor_product_id"]. " - Revsion " . $row["revision"] . " - Status " . $row["status"] . "<br>";
			
     }
} else {
     echo "0 results";
}

$conn->close();
?>  
