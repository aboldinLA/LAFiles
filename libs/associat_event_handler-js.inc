<? if($REQUEST_METHOD=="POST") {
		
	$error = "";
	if(strlen($type_event) < 2) $error .= "- Please enter a the type of event: Annual or Single<br>";
	if(strlen($place) < 2)	$error .= "- Please enter a Location<br>";
	
	if(strlen($contact) < 2) $error .= "- Please enter Contact Name<br>";
	
	if(strlen($fee) < 2) $error .= "- Please enter Fee<br>";
	
	if(!strlen($error)) {
		if (strlen($event_name) == 0) {
			$event_name="";
		}
		$input = $input_mon . '/' . $input_day . '/'. $input_year;
		//$error= $input;
	  	$I->meet_input($id,$event_name,$type_event,$input,$place,$contact,$fee);
		$event_name=$type_event=$input=$place=$contact=$fee="";
	  }
 }
?>