<?

class ODBCdatabase

{

	var $host;

	var $username;

	var $password;

	var $database;

	var $query_count;

	var $dsn;

	var $link;



	var $connected=false;

	function sethost($host)	{

		$this->host=$host;

	}

function setdsn($dsn) {

	$this->dsn=$dsn;

}



	function setusername($username)	{

		$this->username=$username;

	}



	function setpassword($password)	{

		$this->password=$password;

	}



	function connect(){

		$this->query_count = 0;

		$this->link=odbc_connect($this->dsn,$this->username,$this->password);

		if ($this->link)	{

			$this->connected=true;

		} else	{

			echo("unable to connect to database");

		}

	}



	function select_db($database)	{

		$this->database=$database;

		if (!$this->connected) $this->connect();

		//if (mysql_select_db($database,$this->link)) return true;

		//else	{

		//	echo ("Could not select database $database");

		//}

	}



	function query($query) {

		$this->query_count++;

		return odbc_exec($this->link,$query);

	}



	function num_rows($result) {

		return odbc_num_rows($result);

	}

	

	

	function fetch_row($result) {

		return odbc_fetch_row($result);

	}

function fetch_array($result, $rownumber=-1) {

if (PHP_VERSION > "4.1") {

if ($rownumber < 0) {

odbc_fetch_into($result, &$rs);

} else {

odbc_fetch_into($result, &$rs, $rownumber);

}

} else {

odbc_fetch_into($result, $rownumber, &$rs);

}

foreach ($rs as $key => $value) {

$rs_assoc[odbc_field_name($result, $key+1)] = $value;

}

return $rs_assoc;

}



	function insert_id() {

		$query="SELECT LAST_INSERT_ID();";

		return $this->query($query);

		//odbc_insert_id();

	}

	

	function error() {

		return odbc_error();

	}



	function odbc_tables() {

		$tablelist =odbc_tables($this->link);

	

while (odbc_fetch_row($tablelist)) { 

if (odbc_result($tablelist, 4) == "TABLE") 

echo "" . odbc_result($tablelist, 3) ."

"; 

} 

	}		

	

}

?>

