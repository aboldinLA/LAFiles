
<?			
    include 'connect4.inc';


      $sql1 = "SELECT * FROM xlist WHERE idParent = '" . $_POST['adCat'] . "' AND name NOT LIKE '%*%' ORDER BY name ASC";
      $result1 = $conn->query($sql1);  


        while($row = mysqli_fetch_array($result1)) {

             $sql = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
              $result = $conn->query($sql);
              $rowcount=mysqli_num_rows($result);

            if($rowcount != 0) {

              $subCatList .= '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=28&xlist=' . $row['id'] .'">' . $row['name'] .' <span style="font-weight: 200">('. $rowcount34 .')</span></a>';  

            }
        }


   mysqli_close($conn);
   $data = ['success' => true, 'subCatList' => $subCatList];

   header('Content-type: application/json');
   echo json_encode($data);
    
?>