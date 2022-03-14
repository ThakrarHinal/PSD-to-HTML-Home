<?php 

class database{

	public $host = HOST;
	public $user = USER;
	public $database = DATABASE;
	public $password = PASSWORD;
	public $con;
	public $result;

	public function __construct(){

		try {
			
			$this->con = new PDO("mysql:host=" . $this->host . 
				";dbname=" . $this->database, $this->user, $this->password);
			if (!$this->con) {
				// code...
				echo "Not Connection active";
			}
			else{
				return $this->con;
			}
			

			$this->con->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);


		} catch (PDOException $e) {
					echo "database connection Error: ".$e->getMessage();	
		}

	}

	public function Query($qry, $params = []){
		if (empty($params)) {
			// code...
			$res;
			$this->result = $this->con->prepare($qry);
			return $this->result->execute();
		}
		else{
			// echo "started";
			$this->result = $this->con->prepare($qry);
			return $this->result->execute($params);
		}
		// print_r($this->result->errorInfo());
		// echo $res ? "true" : "false";
		// return $res;
	}

	public function rowCount(){
		return $this->result->rowCount();
	}

	public function fetchall(){
		return $this->result->fetchall(PDO::FETCH_OBJ);
	}

	public function fetch(){
		return $this->result->fetch(PDO::FETCH_OBJ);
	}
}

?>