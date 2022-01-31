<?php

class framework{
	public function view($viewName){
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
    	if (isset($_POST['submit'])) {
    		// code...
    		return $_POST[$inputName];
    	}
    	elseif (isset($_GET['submit'])) {
    		// code...

    		return $_GET[$inputName];
    	}
    }

    
    
}

?>