<?
class Database{
	function __construct($database, $user, $password, $host)
	{
	    $this->link = mysqli_connect($host, $user, $password, $database); 
		$this->link->set_charset("utf8mb4");
	}

	function select($query){
		return mysqli_fetch_assoc(mysqli_query($this->link, $query));
	}

	function query($query){
		return mysqli_query($this->link, $query);
	}

	function fetch($query){
		$arr = [];
		$result = mysqli_query($this->link, $query);
		while($item = mysqli_fetch_assoc($result)){
			$arr[] = $item;
		}
		return $arr;
	}

	function numbering($query){
		$arr = [];
		$result = mysqli_query($this->link, $query);
		while($item = mysqli_fetch_row($result)){
			$arr[] = $item;
		}
		return $arr;
	}

	function count($query){
        return mysqli_query($this->link, $query)->num_rows;
	}
}