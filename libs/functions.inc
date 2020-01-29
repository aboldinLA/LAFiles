<?php







// general functions

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//





// usage: Generate_Pass ( number ); 

// example: Generate_Pass (10); 



function generate_pass($pass_len = 6)

{ 

	$nps = ""; 

	

	mt_srand ((double) microtime() * 1000000); 

	

	while (strlen($nps)<$pass_len)

	{ 

		$c = chr(mt_rand (0,255)); 

		if (eregi("^[a-z0-9]$", $c))

			$nps = $nps.$c; 

	} 

	

	return $nps; 

}





// ****************************************************************** //

// href_link takes a url and makes it into a link

// ****************************************************************** //

function href_link($link,$target)

{

	$link = strtolower($link);

	if(substr_count($link,"http://") > 0)

		echo "<a href=\"".$link."\"".($target=="" ? "" : "target=\"".$target."\"").">".$link."</a>";

	else

		echo "<a href=\"http://".$link."\"".($target=="" ? "" : "target=\"".$target."\"").">".$link."</a>";

	

//	echo strpos($link,"http://");

}



// ****************************************************************** //

// href_link takes a url and makes it into a link

// ****************************************************************** //

function mail_link($link)

{

	return "<a href=\"mailto:".$link."\">".$link."</a>";

}



// ****************************************************************** //

//

// hidden prints out a hidden form field with the name & value specified

//

// ****************************************************************** //

function hidden($name,$value){

echo "<input type=\"hidden\" name=\"" . $name . "\" value=\"" . $value . "\" >";

}







// Return the abbreviated month name

// params:

//   $m - month (0-11)

function month_short_name ( $m ) {

  switch ( $m ) {

    case 0: return "Jan";

    case 1: return "Feb";

    case 2: return "Mar";

    case 3: return "Apr";

    case 4: return "May";

    case 5: return "Jun";

    case 6: return "Jul";

    case 7: return "Aug";

    case 8: return "Sep";

    case 9: return "Oct";

    case 10: return "Nov";

    case 11: return "Dec";

  }

  return "unknown-month($m)";

}





// prints out date drop downs with the form name inputed for month day & year

// takes unix system time to indicate the selected date



function date_dropdowns($month_name,$day_name,$year_name,$time_selected,$by=0,$ey=0)

{

	$blank=0;

	// if 0 is input as time selected make a blank - as the selected option

	if($time_selected < 1000){

		$blank = true;

		$time_selected = time();

	}

	$monthNames = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");



	echo "<SELECT NAME=\"" . $month_name . "\">\n";



	if($blank)

		print "<OPTION VALUE=\"x\" > - </option>\n";

	

	$month = date ( "m", $time_selected );



	$year = date ( "Y", $time_selected );



	for ( $i = 1; $i <= 12; $i++ ) {

		$m = $monthNames[ $i - 1 ];

		if ($i < 10) { $i = "0" . $i;}

		print "<OPTION VALUE=\"$i\"" . ( $i == $month && !$blank ? " SELECTED" : "" ) . ">$m\n";

	}



	echo "</SELECT>\n";

	if ($day_name != "") {

   echo "<SELECT NAME=\"" . $day_name . "\">\n";

   

   if($blank) print "<OPTION VALUE=\"x\" selected > - </option>\n";

	

	$day = date ( "d", $time_selected );

	for ( $i = 1; $i <= 31; $i++ )

		echo "<OPTION " . ( $i == $day && !$blank ? " SELECTED" : "" ) . ">$i\n";



  echo "</SELECT>\n";

}

// year

   echo "<SELECT NAME=\"" . $year_name . "\">\n";

   if($blank)

		print "<OPTION VALUE=\"x\" selected > - </option>\n";

		if ($by > 0) {

			for ( $i = $by; $i < $ey; $i++ ) {

				print "<OPTION VALUE=\"$i\"" . ( $i == $year && !$blank ? " SELECTED" : "" ) . ">$i\n";

			}

		} else {	

		  for ( $i = -1; $i < 5; $i++ ) {

			$y = date ( "Y", $time_selected ) + $i;

			print "<OPTION VALUE=\"$y\"" . ( $y == $year && !$blank ? " SELECTED" : "" ) . ">$y\n";

		  }

	  }



  echo "</SELECT>\n";

}


function date_dropdowns2($month_name,$day_name,$year_name,$time_selected,$by=0,$ey=0)

{

	$blank=0;

	// if 0 is input as time selected make a blank - as the selected option

	if($time_selected < 1000){

		$blank = true;

		$time_selected = time();

	}

	$monthNames = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");



	echo "<SELECT style='height:20px; font-size:14px; color:#000; background-color:#CCC; padding-left:2px; box-shadow: 5px 5px 5px #888888' NAME=\"" . $month_name . "\">\n";



	if($blank)

		print "<OPTION VALUE=\"x\" > - </option>\n";

	

	$month = date ( "m", $time_selected );



	$year = date ( "Y", $time_selected );



	for ( $i = 1; $i <= 12; $i++ ) {

		$m = $monthNames[ $i - 1 ];

		if ($i < 10) { $i = "0" . $i;}

		print "<OPTION VALUE=\"$i\"" . ( $i == $month && !$blank ? " SELECTED" : "" ) . ">$m\n";

	}



	echo "</SELECT>\n";

	if ($day_name != "") {

   echo "<SELECT style='height:20px; font-size:14px; color:#000; background-color:#CCC; padding-left:2px; box-shadow: 5px 5px 5px #888888' NAME=\"" . $day_name . "\">\n";

   

   if($blank) print "<OPTION VALUE=\"x\" selected > - </option>\n";

	

	$day = date ( "d", $time_selected );

	for ( $i = 1; $i <= 31; $i++ )

		echo "<OPTION " . ( $i == $day && !$blank ? " SELECTED" : "" ) . ">$i\n";



  echo "</SELECT>\n";

}

// year

   echo "<SELECT style='height:20px; font-size:14px; color:#000; background-color:#CCC; padding-left:2px; box-shadow: 5px 5px 5px #888888' NAME=\"" . $year_name . "\">\n";

   if($blank)

		print "<OPTION VALUE=\"x\" selected > - </option>\n";

		if ($by > 0) {

			for ( $i = $by; $i < $ey; $i++ ) {

				print "<OPTION VALUE=\"$i\"" . ( $i == $year && !$blank ? " SELECTED" : "" ) . ">$i\n";

			}

		} else {	

		  for ( $i = -1; $i < 5; $i++ ) {

			$y = date ( "Y", $time_selected ) + $i;

			print "<OPTION VALUE=\"$y\"" . ( $y == $year && !$blank ? " SELECTED" : "" ) . ">$y\n";

		  }

	  }



  echo "</SELECT>\n";

}





// ****************************************************************** //

//

// Converts the post from the date_dropdowns into unix time - returns int unix time

//

// ****************************************************************** //

function date_dropdowns_to_int($month,$day,$year)

{

	if(($month == 'x') || ($day == 'x') || ($year == 'x'))

		return 0;

	else

		return strtotime("$month/$day/$year");

}



// ****************************************************************** //

//

// Displays int date as formated date

//

// ****************************************************************** //

function show_date($unix_ts)

{

	if($unix_ts < 1000)

		return "None Set";

	else

		return date("m/d/y",$unix_ts);

}



?>