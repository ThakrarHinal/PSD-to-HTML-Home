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
			
			$this->con = $this->con = new PDO("mysql:host=" . $this->host . 
				";dbname=" . $this->database, $this->user, $this->password);
			if (!$this->con) {
				// code...
				echo "Not Connection activw";
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
			$this->result = $this->con->prepare($qry);
			return $this->result->execute();
		}
		else{
			$this->result = $this->con->prepare($qry);
			return $this->result->execute($params);
		}
	}

}

?>