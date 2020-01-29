<?

include $include_path . "connect.inc";



	

 

//**********************************************************************************

	function view_xfile($emp_id,$categories,$lising_number,$listing_name)

	{	

		global $db;

		$query = "SELECT * FROM xlist ";

		$result = $db->query($query);

		while($row = $db->fetch_array($result))

		{

			//looping 

		

		}

	

	}// view the x-list data base

//**********************************************************************************

 

 

?>

