<?php
public function checkAvailability(){
                        if (isset($_POST['check'])) {
                            // code...
                             $postalCode = $_POST['postalCode'];
                            $data = file_get_contents('http://postalpincode.in/api/pincode/'.$postalCode);
                            $data = json_decode($data);
                            if (isset($data->PostOffice['0'])) {
                                // code...
                                $myModel = $this->model('DB_connection');
                            if($myModel->check_availability($postalCode)){
                                echo "matched";
                            }
                            else {
                                echo "not matched";
                            }
                            }
                            else{
                                echo "invalid PostalCode";
                            }
                            
                        }
                    }

?>