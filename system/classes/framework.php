<?php

error_reporting(0);
class framework{
	public function view($viewName, $data = []){
		if (file_exists("../application/views/" . $viewName . ".php")) {
			// code...
			require_once "../application/views/$viewName.php";
		}

		else{
			echo "file not found";
		}
	}

	public function model($modelName){
        if (file_exists("../application/models/" . $modelName . ".php")) {
            // code...
            require_once "../application/models/$modelName.php";
            return new $modelName;
        }
        else{
            echo "model not found";
        }
    }

    public function input($inputName){
    	if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'post') {
    		// code...
    		return $_POST[$inputName];
    	}
    	elseif ($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'get') {
    		// code...

    		return $_GET[$inputName];
    	}
    }


    public function setSession($sessionName, $sessionValue){
    	if (!empty($sessionName) && !empty($sessionValue)) {
    		// code...
    		$_SESSION[$sessionName] = $sessionValue;
    	}
    }

    public function getSession($sessionName){
    	if (!empty($sessionName)) {
    		// code...
    		return $_SESSION[$sessionName];
    	}
    }

    public function unsetSession($sessionName){
    	if (!empty($sessionName)) {
    		// code...
    		unset($_SESSION[$sessionName]);
    	}
    }

    public function destroy(){
    	session_destroy();
    }
    
    public function setFlash($sessionName, $msg){
    	if (!empty($sessionName) && !empty($msg)) {
    		// code...
    		$_SESSION[$sessionName] = $msg;
    	}
    }

    public function flash($sessionName, $className){
    	if (!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName])) {
    		// code...
    		$msg = $_SESSION[$sessionName];
    		echo "<div class='". $className ."'>'". $msg ."'</div>";
    		unset($_SESSION[$sessionName]);
    	}
    }

 
    
}

?>