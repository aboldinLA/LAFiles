<?



class DB{ 
  
    // Database configuration 
    private $dbHost     = "localhost"; 
    private $dbUsername = "land_patchew";
    private $dbPassword = "59q2GB6k$3"; 
    private $dbName     = "land_landscap_lollive";
  
     
    function __construct(){ 
        if(!isset($this->db)){ 
            // Connect to the database 
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName); 
            if($conn->connect_error){ 
                die("Failed to connect with MySQL: " . $conn->connect_error); 
            }else{ 
                $this->db = $conn; 
            } 
        } 
    } 
     
    /* 
     * Get rows from images table 
     */ 
    function getRows(){ 
        
        $coNumber = $_GET['venNum'];
        
        $query = $this->db->query("SELECT * FROM vendor_product WHERE vendor_id = '$coNumber' AND series_product = '0' AND imported='0' ORDER BY img_order ASC"); 
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){ 
                $result[] = $row; 
            } 
        }else{ 
            $result = FALSE; 
        } 
        return $result; 
    } 
     
    /* 
     * Update image order 
     */ 
    function updateOrder($id_array){ 
        
        $coNumber = $_GET['venNum'];
        
        $count = 1; 
        foreach ($id_array as $id){ 
            
            $number = sprintf("%03d", $count); 
            
            $count = $number;
            
            $update = $this->db->query("UPDATE vendor_product SET img_order = '$number', photo_time = NOW() WHERE vendor_id = '$coNumber' AND id = $id"); 
            
            $count ++;     
        } 
        return TRUE; 
    } 
}






?>
