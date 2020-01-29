 	<?



        $query ="SELECT * FROM subscribe WHERE comp_name = '$comp_name' AND subscribe = '$subscribe'";
	   
		$result =$this->db->query($query);
		
		
	 $row = $this->db->fetch_array($result);
		if (is_array($row))
			{
			   return $row['id'];
		    }
            else
		         return "no";





 ?>
			</td>
		</tr>
