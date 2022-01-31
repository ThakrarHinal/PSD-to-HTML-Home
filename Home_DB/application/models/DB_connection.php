<?php

class DB_connection extends database{

    function contact($name, $mobile_number, $Email, $Subject, $Message, $file){


            if($this->Query("INSERT INTO ContactUs(Name, Mobile_number, Email, Subject, Message, FileName, CreatedOn) VALUES ('$name','$mobile_number', '$Email', '$Subject', '$Message', '$file', CURTIME())")){
            return true;
        }
        else{
            return false;
        }

        
        }

    }



?>

