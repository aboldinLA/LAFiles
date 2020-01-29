<?

// --------------------------------------------------------------------------------------------------

// check user name

// --------------------------------------------------------------------------------------------------

function checkusername($name,$action="register",$uid=0) {



	GLOBAL $db;



	if ($name=="") return "- enter username";

	if (strlen($uname)<5) return "- enter 5 characters at least";



	if (!eregi("^([a-zA-Z0-9]|_)+$",$uname)) return "- enter only letters, numbers<br>and underscore character";



	$sql="SELECT username FROM users WHERE username='$uname'";

	if ($action=="edit") $sql.=" AND uid!=$uid";

	$result=$db->query($sql);

	if ($db->num_rows($result)!=0) {

		return "- username taken"; 

	}  else return true; // checking username in database

	

} // function checkUname



// --------------------------------------------------------------------------------------------------

// check password

// --------------------------------------------------------------------------------------------------

function checkpasswords ($pass,$confpass) {



	if ($pass=="") return "- enter password";



	if (strlen($pass)<5) return "- enter 5 characters at least";



	if (!eregi("^([a-zA-Z0-9]|_)+$",$pass)) return "- enter only letters, numbers<br> and underscore character";



	if ($pass==$confpass) return true;

		else return "- passwords don't match";



} // function checkPasswords





// --------------------------------------------------------------------------------------------------

// valid date - returns int unix system time if ok else returns false

// --------------------------------------------------------------------------------------------------

// requires a 'm/d/y' format

function valid_date($date)

{



	if ($date=="")

		return false;

	

	$unix_date = strtotime($date);

	

	if ( date('m/d/y', $unix_date) == $date )

		return $unix_date;

	else 

		return false;



} // function checkEmail





// --------------------------------------------------------------------------------------------------

// check e-mail

// --------------------------------------------------------------------------------------------------

function checke$this->send_mail($email) {



	if ($email=="")

		return false;

	if (eregi("^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$", $email))

		return true;

	else 

		return false;



} // function checkEmail



// --------------------------------------------------------------------------------------------------

// alphanum check for form entry

// $option=0 -> data without spaces

// $option=1 -> data with spaces

// $option=2 -> data with spaces, not required

// --------------------------------------------------------------------------------------------------

function alphanumcheck($string,$errortext="",$option=0) {

	if ($string=="" && $option!=2) {

		return "- enter $errortext";

	} elseif ($string=="" && $option==2) {

		return true;

	}

	if (!eregi("^([a-zA-Z0-9]|_)+$",$string) && $option==0) {

			return "- enter only letters, numbers<br>and underscore character";

	} elseif (!eregi("^([a-zA-Z0-9]|_| |#|\.|,|/|\(|\)|-)+$",$string) && ($option==1 || $option==2 )) {

			return "- enter only letters, numbers,<br>#,./\()- characters and space";

	} else {

		return true;

	}

}



// --------------------------------------------------------------------------------------------------

// check zip code

// --------------------------------------------------------------------------------------------------

function checkzipcode($zip) {



	if ($zip=="")

		return false;



	if ( !ereg("^([0-9]{5})(-[0-9]{4})?$",$zip) )

		return false;



	else

		return true;



} // function checkZipCode



/************************************************************************ 

 * 

 * CCVal - Credit Card Validation function. 

 * 

 * Copyright (c) 1999 Holotech Enterprises. All rights reserved. 

 * You may freely modify and use this function for your own purposes. You 

 * may freely distribute it, without modification and with this notice 

 * and entire header intact. 

 * 

 * This function accepts a credit card number and, optionally, a code for  

 * a credit card name. If a Name code is specified, the number is checked 

 * against card-specific criteria, then validated with the Luhn Mod 10  

 * formula. Otherwise it is only checked against the formula. Valid name 

 * codes are: 

 * 

 *    mcd - Master Card 

 *    vis - Visa 

 *    amx - American Express 

 *    dsc - Discover 

 *    dnc - Diners Club 

 *    jcb - JCB 

 * 

 * A description of the criteria used in this function can be found at 

 * http://www.beachnet.com/~hstiles/cardtype.html. If you have any  

 * questions or comments, please direct them to ccval@holotech.net 

 * 

 *                                          Alan Little 

 *                                          Holotech Enterprises 

 *                                          http://www.holotech.net/ 

 *                                          September 1999 

 * 

 ************************************************************************/ 



  function checkcc($Num, $Name = 'n/a') { 



	if ($Num=="") return false;



//  Innocent until proven guilty 

    $GoodCard = true; 



//  Get rid of any non-digits 

    $Num = ereg_replace("[^[:digit:]]", "", $Num); 



//  Perform card-specific checks, if applicable 

    switch ($Name) { 



    case "mastercard" : 

      $GoodCard = ereg("^5[1-5].{14}$", $Num); 

      break; 



    case "visa" : 

      $GoodCard = ereg("^4.{15}$|^4.{12}$", $Num); 

      break; 



    case "amex" : 

      $GoodCard = ereg("^3[47].{13}$", $Num); 

      break; 



    case "discover" : 

      $GoodCard = ereg("^6011.{12}$", $Num); 

      break; 



    case "dinersclub" : 

      $GoodCard = ereg("^30[0-5].{11}$|^3[68].{12}$", $Num); 

      break; 



    case "jcb" : 

      $GoodCard = ereg("^3.{15}$|^2131|1800.{11}$", $Num); 

      break; 

    } 



//  The Luhn formula works right to left, so reverse the number. 

    $Num = strrev($Num); 



    $Total = 0; 



    for ($x=0; $x<strlen($Num); $x++) { 

      $digit = substr($Num,$x,1); 



//    If it's an odd digit, double it 

      if ($x/2 != floor($x/2)) { 

        $digit *= 2; 



//    If the result is two digits, add them 

        if (strlen($digit) == 2)  

          $digit = substr($digit,0,1) + substr($digit,1,1); 

      } 



//    Add the current digit, doubled and added if applicable, to the Total 

      $Total += $digit; 

    } 



//  If it passed (or bypassed) the card-specific check and the Total is 

//  evenly divisible by 10, it's cool! 

    if ($GoodCard && $Total % 10 == 0) return true; else return false; 

  } 



// --------------------------------------------------------------------------------------------------

function checkwebsite($website)

{

	if ($website == "") return "- enter a website";

	if (eregi("(([a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$", $website))

		return true;

	else 

		return false;



}

?>

