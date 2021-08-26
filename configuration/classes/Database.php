<?
class Database{
	function __construct($database, $user, $password, $host)
	{
	    $this->link = mysqli_connect($host, $user, $password, $database); 
		$this->link->set_charset("utf8mb4");
	}
	public function query($query){
		return $this->query($query);
	}
	
	public function select($query){
		return mysqli_fetch_assoc($this->query($query));
	}


	public function fetch($query){
		$arr = [];
		$result = $this->query($query);
		while($item = mysqli_fetch_assoc($result)){
			$arr[] = $item;
		}
		return $arr;
	}

	public function numbering($query){
		$arr = [];
		$result = $this->query($query);
		while($item = mysqli_fetch_row($result)){
			$arr[] = $item;
		}
		return $arr;
	}

	public function count($query){
        	return $this->query($query)->num_rows;
	}
}
