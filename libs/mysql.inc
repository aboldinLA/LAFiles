<?

class MySQLdatabase

{

	var $host;

	var $username;

	var $password;

	var $database;

	var $query_count;



	var $link;



	var $connected=false;



	function sethost($host)	{

		$this->host=$host;

	}



	function setusername($username)	{

		$this->username=$username;

	}



	function setpassword($password)	{

		$this->password=$password;

	}



	function connect(){

		$this->query_count = 0;

		$this->link=mysql_connect($this->host,$this->username,$this->password);

		if ($this->link)	{

			$this->connected=true;

		} else	{

			echo("unable to connect to database");

		}

	}



	function select_db($database)	{

		$this->database=$database;

		if (!$this->connected) $this->connect();

		if (mysql_select_db($database,$this->link)) return true;

		else	{

			echo ("Could not select database $database");

		}

	}



	function query($query) {

		$this->query_count++;

		return mysql_query($query,$this->link);

	}



	function num_rows($result) {

		return mysql_num_rows($result);

	}

	

	function fetch_array($result) {

		return mysql_fetch_array($result);

	}

	

	function fetch_row($result) {

		return mysql_fetch_row($result);

	}



	function insert_id() {

		return mysql_insert_id();

	}

	

	function error() {

		return mysql_error();

	}

		

	

}

?>