<?php
class functions extends framework
{
     public function Home(){

           
            $this->view('Home');
    }

    public function Prices(){

               $this->view('Prices');
    }


    public function load(){

               $this->view('load');
    }

   
    public function admin(){

               $this->view('admin');
    }

     public function index(){

               $this->view('index');
    }

   

    public function Contact(){

               $this->view('Contact');
    }

    public function FAQ(){

               $this->view('FAQ');
    }

    public function About(){

               $this->view('About');
    }

    public function signin(){

               $this->view('signin');
    }

    public function login(){

               $this->view('login');
    }

    public function Service_History(){

               $this->view('Service_History');
    }

    public function reset(){

               $this->view('reset');
    }

    public function Service_provider(){

               $this->view('Service_provider');
    }

    public function Upcoming_Service(){

               $this->view('Upcoming_Service');
    }

    public function demo(){

               $this->view('demo');
    }

    public function insert(){
        // $this->view("Contact");
        // echo "hel";
        header('Content-Type: application/json; charset=utf-8');
        $data = ["status" => "Error", "Message" => "Please enter postal code"];

                       

      // echo $response;
         
        if ($_POST['Last_name']) {
            // code...
                
              $First_name = $_POST['First_name'];
               $Last_name = $_POST['Last_name'];
               $Mobile_number = $_POST['Mobile_number'];
               $Email = $_POST['Email'];
               $Subject = $_POST['Subject'];
               $Message = $_POST['Message'];

               $file = $_POST['files'] ;

               // $file = $files;
               $name = $First_name.$Last_name;
               // $mobile_number = $options.$Mobile_number;

             $myModel = $this->model('DB_connection');
             if($myModel->contact($name, $Mobile_number, $Email, $Subject, $Message, $file)){
                // echo "added";
                $data = ["status" => "Success", "Message1" => "matched"];
             }else{
                // echo "not added";
                $data = ["status" => "Error", "Message" => "not matched"];
             }
            
             require 'PHPMailerAutoload.php';
             require 'credentials.php';

            $mail = new PHPMailer;

            // $mail->SMTPDebug = 4;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'hinalthakrar22@gmail.com';                 // SMTP username
            $mail->Password = 'ocdorpyqhctrnykd';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to 

            $mail->setFrom(EMAIL, 'Mailer');
            $mail->addAddress(EMAIL);     // Add a recipient
           
            $mail->addReplyTo(EMAIL);
            
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
            // echo 'Message could not be sent.';
                $data = ["Error" => "Success", "Message" => "Message could not be sent."];
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
            // echo 'Message has been sent'
                 $data = ["status" => "Success", "Message" => "Message has been sent."];
            }

                }


                echo json_encode($data);
                
                 

            }



            public function UserInsert(){
               header('Content-Type: application/json; charset=utf-8');
                $data = ["status" => "Error", "Message" => "Please enter postal code"];

                if (isset($_POST['First_name1'])) {
                    // code...

                    $userData = [
                    'First_name' => $this->input('First_name1'),
                    'Last_name'  => $this->input('Last_name1'),
                    'mobile'     => $this->input('mobile1'),
                    'email'      => $this->input('email1'),
                    'pass'       => $this->input('pass1'),
                    'Repeat_password' => $this->input('Repeat_password'),
                    'emailError' => '',
                    'token'      => '',
                    'status'     => '',
                    'tupeId'     => '',
                  ];

                            $email2 = $_POST['email1'];
                            $typeId = 1;
                            $status = "inactive";
                            $token = bin2hex(random_bytes(15));
                             $password = password_hash($userData['pass'], PASSWORD_DEFAULT) ;  

                  

                    $myModel = $this->model('DB_connection');
                        // if($myModel->checkEmail($userData['email'])){
                    $user1data = [$userData['First_name'], $userData['Last_name'], $userData['mobile'], $userData['email'], $password, $token, $status, $typeId];
                            

                    if ($userData['pass'] == $userData['Repeat_password']) {
                        // code...
                        if ($myModel->insertUser($user1data, $email2)) {
                                // code...
                                 $data = ["status" => "Success", "Message" => "Message has been sent."];
                            }
                            else{
                                 $data = ["status" => "Error", "Message" => "email is already in use.", "mail" => $email2];
                            }
                    }

                    else{
                        $data = ["status" => "Error", "Message" => "Both password should be same."];
                    }


                            
                }

                 echo json_encode($data);

            }




            public function userlogin(){
                header('Content-Type: application/json; charset=utf-8');
                $data = ["status" => "Error", "Message" => "Please enter postal code"];

                // $this->view('signin');
                setcookie('emailCookie', 'cookie set')? "pass": "fail";
                setcookie('passCookie', 'cookie set')? "pass": "fail";
                // echo "hello";
                // print_r($_SESSION['row']);

                 if (isset($_POST['email'])) {
                    // code...
                    // echo "hey there";
                    // $providerid = $_POST["proid"];
                    $userData = [
                    'email'      => $this->input('email'),
                    'password'   => $this->input('password'), 
                    // 'remember-me' => $this->input('remember-me'),
                    'emailError' => '',
                 ];


                    $myModel = $this->model('DB_connection');
                 $result = $myModel->userLogin($userData['email'], $userData['password']);
                 if ($result['status'] === 'emailNotFound') {
                     // code...
                    // echo "invalid Email";
                    $data = ["status" => "Error", "Message" => "Email is incorrect."];
                 }
                 elseif ($result['status'] === 'passwordNotMatch') {
                     // code...
                    // echo "invalid password";
                    $data = ["status" => "Error", "Message" => "Password is incorrect.", $userData['password']];
                 }
                 elseif ($result['status'] === 'ok'){
                    $this->setSession('Userid', $result['data']);
                    $this->setSession('First_name', $result['name']);
                    $this->setSession('Last_name', $result['lname']);
                    // $this->setSession('typeId', $result['typeId']);
                    $this->setSession('Email', $result['email']);
                    $this->setSession('lname', $result['lname']);
                    $this->setSession('mobile', $result['mobile']);
                    $this->setSession('dbpass', $result['pass']);
                   
                        
                        $data = ["status" => "Success", "typeid" => $_SESSION['typeId']];
                       
                    
                 }

            }

            echo json_encode($data);

}

                public function logout(){
                    $this->destroy();
                    // echo "hey";
                    header("location:" . BASEURL . "/functions/Home");
                }


                public function pass(){
                    // $this->view('Home');
                header('Content-Type: application/json; charset=utf-8');
                $data = ["status" => "Error", "Message" => "Please enter postal code"];

                    if (isset($_POST['Email'])) {
                        // code...
                        $Email = $this->input('Email');
                         $myModel = $this->model('DB_connection');
                        $result = $myModel->check_Email($Email);
                         
                         if($result){

                             // $this->setSession('');
                             $this->setSession('First_name', $result['First_name']);
                             // $this->setSession('token', $result['token']);
                            $res = $this->getSession('First_name');
                            // $Token = $this->getSession('token');

                                require 'PHPMailerAutoload.php';
                                 require 'credentials.php';

                                $mail = new PHPMailer;

                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = 'hinalthakrar22@gmail.com';                 // SMTP username
                                $mail->Password = 'ocdorpyqhctrnykd';                           // SMTP password
                                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 587;                                    // TCP port to connect to 

                                $mail->setFrom(EMAIL, 'Mailer');
                                $mail->addAddress($Email);     // Add a recipient
                               
                                $mail->addReplyTo($Email);
                                
                                $mail->isHTML(true);                                  // Set email format to HTML

                                $mail->Subject = 'Forget password?';
                                $mail->Body    = 'This is '.$res.'  the HTML message body <b>in bold!</b> Message send! http://localhost/Home_DB/functions/reset?token='.$_SESSION['token'].'';
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                if(!$mail->send()) {
                                    // $this->setSession("email_sent", "email sent successfully");
                                     $data = ["status" => "Error", "Message" => "email not sent successfully"];
                                   // echo $this->getSession('email_sent');
                                } else {
                                     // $this->setFlash("email_sent", "email sent successfully");
                                    $data = ["status" => "Success", "Message" => "email sent successfully"];
                                 }

                            }

                                 else{
                                    $data = ["status" => "Success", "Message" => "email not exist"];
                                 }
                       
                        

                    }

                    echo json_encode($data);
                }



                public function forgetPass(){

                     header('Content-Type: application/json; charset=utf-8');
                        $data = ["status" => "Error", "Message" => "Please enter postal code"];

                    if (isset($_POST['new_pass'])) {
                        // $this->view('reset');
                        // $Email = $_POST['email'];
                        $token = $_POST['token'];
                            // if (isset($Token)) {
                        // $Token = $this->getSession('token');
                                $new_pass = $this->input('new_pass');
                                $con_pass = $this->input('con_pass');
                                  $myModel = $this->model('DB_connection');
                                if ($new_pass == $con_pass) {
                                    // code...
                                    $new_pass1 = password_hash($new_pass, PASSWORD_DEFAULT);
                                    if($myModel->Reset($new_pass1, $token)){
                                    // $this->setSession("passUpdate", "password updated");
                                        $data = ["status" => "Success", "Message" => "password updated"];
                                  }
                                  else{
                                    // $this->setSession("passUpdateNot", "password not updated there is some error");
                                    $data = ["status" => "Error", "Message" => "password not updated there is some error"];
                                  }
                                }
                                  
                            }

                            echo json_encode($data);
                      
                    }

                    public function checkAvailability(){

                        header('Content-Type: application/json; charset=utf-8');
                        $data = ["status" => "Error", "Message" => "Please enter postal code"];
                        
                        // session_start();
                        if(isset($_POST["PostalCode"])) {
                            $postalCode = $_POST['PostalCode'];
                            // $data = file_get_contents('http://postalpincode.in/api/pincode/'.$postalCode);
                            // $data = json_decode($data);
                            // $_SES    SION['postalCode'];

                            // if (isset($data->PostOffice[0])) {
                                $myModel = $this->model('DB_connection');
                                if($myModel->check_availability($postalCode)){
                                     $this->setSession("postalCode", "$postalCode");
                                   // $pc = $_SESSION['postalCode'];
                                     $pc = $this->getSession("postalCode");
                                    $data = ["status" => "Success", "Message" => "matched", "pc" => $pc];
                                } else {
                                    $data = ["status" => "Error", "Message" => "not matched"];
                                }
                                // session_destroy();

                                // TODO: REMOVE THIS
                            //     if(true){
                            //         $data = ["status" => "Success", "Message" => "matched"];
                            //     } else {
                            //         $data = ["status" => "Error", "Message" => "not matched"];
                            //     }
                             // }
                        }

                        echo json_encode($data);
                        
                    }

                    public function schedule(){
                        header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                        

                            $es = 0.00;
                            $_SESSION['date'] = $_POST['date'];
                            $_SESSION['time'] = $_POST['time'];
                            $_SESSION['hrs'] = $_POST['hrs'];
                            // $extras = $_POST['extras'];
                            $_SESSION['cmt'] = $_POST['cmt'];
                            
                             $_SESSION['extras'] = $_POST['insert'];

                           

                            if ($_POST['date']) {
                                // code...
                                $data = ["status" => "Success", "Message" => "matched", "date" => $_SESSION['date'], "ex" => $_SESSION['extras'], "data" => $_SESSION['row']];
                            }
                            else{
                                $data = ["status" => "Error", "Message" => "not matched"];
                            }

                             echo json_encode($data);
                        }


                        public function address(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                             // $this->view('demo');
                            if (isset($_POST["street"])) {
                                // code...
                                // $addData = [
                                    $street = $_POST['street'];
                                    $HN     = $_POST['HN'];
                                    $Pc     = $_POST['Pc'];
                                    $city   = $_POST['city'];
                                    $mobile = $_POST['mobile'];
                                    $Userid = $_POST['Userid'];
                                    $email = $this->getSession('Email');
                                    $state = 'gujarat';
                                    // $Addid  = 14;
                        
                                $myModel = $this->model('DB_connection');

                                if($myModel->Addaddress($Userid, $street, $HN, $city, $state, $Pc, $mobile, $email)){
                                  

                                    $data = ["status" => "Success", "Message" => "matched",'email' => $email];
                                 // echo "true";
                                
                                }
                                else{
                                    // echo "false";
                                    $data = ["status" => "failer", "Message" => "not matched"];
                                }

                                echo json_encode($data);
                                
                            }
                        }

                        public function book(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                            if (isset($_POST['card'])) {
                                // code...
                                // $bookData = [
                                //     'card' => $this->input('card'),
                                //     'PostalCode' => $this->input('PostalCode'),
                                // ];
                                $userid = $this->getSession('Userid');
                                $card = $_POST['card'];
                                $postalCode = $this->getSession('postalCode');
                                $date = $_SESSION['date'];
                                $time = $_SESSION['time'];
                                $serviceStart = $date.' '.$time;
                                $hrs = $_SESSION['hrs'];
                                $cmt = $_SESSION['cmt'];
                                $helo = $_SESSION['Helo'];
                                $extra = $_SESSION['extras'];
                                $has = 1;
                                $demo = 100;
                                $id = $_POST['radio_val'];
                                $status = 'Booked';



                                $myModel = $this->model('DB_connection');
                                $result = [$userid, $extra, $serviceStart, $postalCode, $demo, $hrs, $cmt, $card, $has, $helo, $id, $status];
                                if($myModel->complete($result, $id, $userid)){
                                    // echo $id;
                                    // echo "hello its done";
                                    // if ($id == 0) {
                                    //     // code...
                                    //     print_r($_SESSION['email']);
                                    // }
                                    // else{
                                    //      echo $_SESSION['email1'];
                                    // }
                                   
                                   

                                    $data = ["status" => "Success", "Message" => "matched", "helo" => $helo,];

                                 require 'PHPMailerAutoload.php';
                                 require 'credentials.php';

                                $mail = new PHPMailer;

                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = 'hinalthakrar22@gmail.com';                 // SMTP username
                                $mail->Password = 'ocdorpyqhctrnykd';                           // SMTP password
                                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 587;                                    // TCP port to connect to 

                                $mail->setFrom(EMAIL, 'Mailer');

                                if ($id == 0) {
                                    // code...
                                    foreach($_SESSION['email'] as  $values){
                                        $pc = $values->Email;
                                        // echo $pc;
                                        $mail->addAddress($pc);     // Add a recipient
                               }
                            }
                            else {
                                // code...
                                $mail->addAddress($_SESSION['email1']);
                            }
                                
                                
                                $mail->addReplyTo(EMAIL);
                                
                                // $mail->AddCC($pc);
                                $mail->isHTML(true);                                  // Set email format to HTML

                                $mail->Subject = 'Forget password?';
                                $mail->Body    = 'This is the HTML message body <b>in bold!</b> Message send!'.$pc.'';
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                if(!$mail->send()) {
                                    // $this->setSession("email_sent", "email sent successfully");
                                   // echo $this->getSession('email_sent');
                                    // echo "noo";
                                      $data = ["status" => "Error", "Message" => "matched"];
                                } else {
                                     // $this->setFlash("email_sent", "email sent successfully");
                                    // echo "yhhh";
                                      $data = ["status" => "Success", "Message" => "matched"];
                                 }


                                    }
                                
                                else{
                                    // echo "not done";
                                    // echo $date;
                                    $this->setSession("Id", "$id");
                                    $pc = $this->getSession("Id");
                                    // $this->setSession("Email", "$email");
                                    // $pc1 = $this->getSession("Email");
                                    $data = ["status" => "Error", "Message" => "something went wrong"];
                                    // echo $pc;
                                    // echo $pc1;
                                }

                                echo json_encode($data);


                            }
                        }

                        public function radio(){
                        header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                            if (isset($_POST['helo'])) {
                                // code...
                                $_SESSION['Helo'] = $_POST['helo'];

                                $data = ["status" => "Success", "Message" => "matched", "helo" => $_SESSION['Helo']];
                            }
                            else{
                                 $data = ["status" => "failer", "Message" => "not matched"];
                            }

                            echo json_encode($data);
                        }



                        public function spid(){
                        header('Content-Type: application/json; charset=utf-8');
                         // $data = ["status" => "Error", "Message" => "Please enter code"];
                            if (isset($_POST["id"])) {
                                // code...
                                $Spid = $_POST["id"];

                                $data = ["status" => "Success", "Message" => "matched", "helo" => $_SESSION['Helo'], "sid" => $Spid];
                            }
                            else{
                                 $data = ["status" => "failer", "Message" => "not matched"];
                            }

                            echo json_encode($data);
                        }


                         public function Cancel1(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                            if (isset($_POST['cancelid'])) {
                                // code...
                                $cancelid = $_POST['cancelid'];
                                $cancelproid = $_POST['cancelproid'];
                                // echo $cancelid;
                                $myModel = $this->model('DB_connection');
                                if($myModel->cancelservice($cancelid, $cancelproid)){
                                    // echo "done";
                                    // echo $_SESSION['mail'];

                                    require 'PHPMailerAutoload.php';
                                 require 'credentials.php';

                                $mail = new PHPMailer;

                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = 'hinalthakrar22@gmail.com';                 // SMTP username
                                $mail->Password = 'ocdorpyqhctrnykd';                           // SMTP password
                                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 587;                                    // TCP port to connect to 

                                $mail->setFrom(EMAIL, 'Mailer');

                                
                        
                                // code...
                                $mail->addAddress($_SESSION['mail']);
                        
                                
                                
                                $mail->addReplyTo(EMAIL);
                                
                                // $mail->AddCC($pc);
                                $mail->isHTML(true);                                  // Set email format to HTML

                                $mail->Subject = 'successfully Cacelled ServiceRequest ';
                                $mail->Body    = 'Service Request '. $_SESSION['cancelid'] .' has been cancelled by customer';
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                if(!$mail->send()) {
                                    // $this->setSession("email_sent", "email sent successfully");
                                   // echo $this->getSession('email_sent');
                                    $data = ["status" => "Error", "Message" => "Please enter code"];
                                    // echo "noo";
                                } else {
                                     // $this->setFlash("email_sent", "email sent successfully");
                                    // echo "yhhh";
                                    $data = ["status" => "Success", "Message" => " enter code"];
                                 }

                                }
                                else{
                                    // echo "not done";
                                    $data = ["status" => "Error", "Message" => "Please enter code"];
                                }
                            }

                            echo json_encode($data);
                        }
                // }



                        public function reschedule(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                            if (isset($_POST['cancelid1'])) {
                                // code...
                                $cancelid1 = $_POST['cancelid1'];
                                $proid1 = $_POST['proid1'];
                                $date1 = $_POST['date1'];
                                $time1 = $_POST['time1'];
                                $Startdatetime = $date1.' '.$time1;
                                // echo $Startdatetime;
                                // echo $time1;

                                $myModel = $this->model('DB_connection');
                                if ($myModel->rescheduleservice($cancelid1, $Startdatetime, $date1, $time1, $proid1)) {
                    
                                    $data = ["status" => "Success", "Message" => "matched"];
                                    // $email2 = $_SESSION['Email2'];
                                       require 'PHPMailerAutoload.php';
                                 require 'credentials.php';

                                $mail = new PHPMailer;

                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = 'hinalthakrar22@gmail.com';                 // SMTP username
                                $mail->Password = 'ocdorpyqhctrnykd';                           // SMTP password
                                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 587;                                    // TCP port to connect to 

                                $mail->setFrom(EMAIL, 'Mailer');

                                
                        
                                // code...
                                $mail->addAddress($_SESSION['Email2']);
                        
                                
                                
                                $mail->addReplyTo(EMAIL);
                                
                                // $mail->AddCC($pc);
                                $mail->isHTML(true);                                  // Set email format to HTML

                                $mail->Subject = 'successfully rescheduled ServiceRequest';
                                $mail->Body    = 'Service Request <b>'.$_SESSION['id']. '</b> has been rescheduled by customer. New date and time are { <b>'.$_SESSION['date'].'</b> }';
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                if(!$mail->send()) {
                                    // $this->setSession("email_sent", "email sent successfully");
                                   // echo $this->getSession('email_sent');
                                    // echo "noo";
                                    $data = ["status" => "Error", "Message" => "not matched"];
                                } else {
                                     // $this->setFlash("email_sent", "email sent successfully");
                                    // echo "yhhh";
                                    $data = ["status" => "Success", "Message" => "matched"];
                                 }
                                }
                                else{
                                    // echo "not updated";
                                    $data = ["status" => "Error", "Message" => "not matched"];
                                }
                            }

                            echo json_encode($data);
                        }






                         public function Rate(){
                        header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                        
                         // echo "oku";
                            $serviceid1 = $_POST['serviceid1'];
                            $helook = $_POST['helook'];
                            $ratingfrom = $_POST['ratingfrom'];
                            $comment = $_POST['comment'];
                            $ontime = $_POST['ontime'];
                            $friendly = $_POST['friendly'];
                            $quality = $_POST['quality'];
                            $ratings = round(((($ontime + $friendly + $quality)/3)*100)/10, 2);

                           // echo $ratings;

                            if ($_POST['serviceid1']) {
                                // code...
                                // echo "jijioijoij";
                                $myModel = $this->model('DB_connection');
                                if($myModel->rating45($serviceid1, $ratingfrom, $helook, $ratings, $comment, $ontime, $friendly, $quality)){
                                    // echo $ratingfrom;
                                    // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-profile');
                                    $data = ["status" => "Success", "Message" => "matched", "date2" => $serviceid1, "ex5" => $helook, "data7" => $ratingfrom, "var1" => $comment, "var2" => $ontime, "var3" => $friendly, "var4" => $quality, "var5" => $ratings];
                                }

                                
                            }
                            else{
                                // echo "ndjfn";
                                $data = ["status" => "Error", "Message" => "not matched"];
                            }

                             echo json_encode($data);
                        }






                       

                        public function Block(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];

                         if ($_POST['custid']) {
                             // code...
                            $targetid = $_POST['targetid'];
                            $custid = $_POST['custid'];
                            $myModel = $this->model('DB_connection');
                                if ($myModel->block($custid, $targetid)) {
                                    // code...
                                    // echo "block";

                                      $data = ["status" => "Success", "Message" => "matched"];
                                     // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-messages');
                                } 
                                else{
                                    // echo "notblock";

                                      $data = ["status" => "Error", "Message" => "not matched"];
                                }
                         }

                          echo json_encode($data);
                        }

                        public function blockby(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];

                         if ($_POST['Srid']) {
                             // code...
                            $targetid = $_POST['targetid'];
                            $Srid = $_POST['Srid'];
                            $myModel = $this->model('DB_connection');
                                if ($myModel->blockuser($Srid, $targetid)) {
                                    // code...
                                    // echo "block";

                                      $data = ["status" => "Success", "Message" => "matched"];
                                     // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-messages');
                                } 
                                else{
                                    // echo "notblock";

                                      $data = ["status" => "Error", "Message" => "not matched"];
                                }
                         }

                          echo json_encode($data);
                        }


                        public function unblockuser(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];

                         if ($_POST['Srid']) {
                             // code...
                            $targetid = $_POST['targetid'];
                            $Srid = $_POST['Srid'];
                            $myModel = $this->model('DB_connection');
                                if ($myModel->unblockby($Srid, $targetid)) {
                                    // code...
                                    // echo "block";

                                      $data = ["status" => "Success", "Message" => "matched"];
                                     // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-messages');
                                } 
                                else{
                                    // echo "notblock";

                                      $data = ["status" => "Error", "Message" => "not matched"];
                                }
                         }

                          echo json_encode($data);
                        }


                        public function unBlock(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];

                         if ($_POST['custid']) {
                             // code...
                            $targetid = $_POST['targetid'];
                            $custid = $_POST['custid'];
                            $myModel = $this->model('DB_connection');
                                if ($myModel->unblock($custid, $targetid)) {
                                    // code...
                                    // echo "block";

                                      $data = ["status" => "Success", "Message" => "matched"];
                                     // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-messages');
                                } 
                                else{
                                    // echo "notblock";

                                      $data = ["status" => "Error", "Message" => "not matched"];
                                }
                         }

                          echo json_encode($data);
                        }

                        public function favorite(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];

                         if ($_POST['custid']) {
                             // code...
                            $targetid = $_POST['targetid'];
                            $custid = $_POST['custid'];
                            $myModel = $this->model('DB_connection');
                                if ($myModel->fav($custid, $targetid)) {
                                    // code...
                                    // echo "block";

                                      $data = ["status" => "Success", "Message" => "matched"];
                                     // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-messages');
                                } 
                                else{
                                    // echo "notblock";

                                      $data = ["status" => "Error", "Message" => "not matched"];
                                }
                         }

                          echo json_encode($data);
                        }

                        public function unfavorite(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];

                         if ($_POST['custid']) {
                             // code...
                            $targetid = $_POST['targetid'];
                            $custid = $_POST['custid'];
                            $myModel = $this->model('DB_connection');
                                if ($myModel->unfav($custid, $targetid)) {
                                    // code...
                                    // echo "block";

                                      $data = ["status" => "Success", "Message" => "matched"];
                                     // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-messages');
                                } 
                                else{
                                    // echo "notblock";

                                      $data = ["status" => "Error", "Message" => "not matched"];
                                }
                         }

                          echo json_encode($data);
                        }



                         public function updatepro(){
                        header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                        
                           

                            if ($_POST['mobilenum']) {
                                // code...

                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $e_mail = $_POST['e_mail'];
                                $mobilenum = $_POST['mobilenum'];
                                $uid = $_POST['uid'];

                                $myModel = $this->model('DB_connection');
                                if($myModel->updateprofile($fname, $lname, $e_mail, $mobilenum, $uid)){

                                      $data = ["status" => "Success", "Message" => "matched"];
                                }
                            
                                  
                                

                                
                            }
                            else{
                                $data = ["status" => "Error", "Message" => "not matched"];
                            }

                             echo json_encode($data);
                        }


                         public function refundamount(){
                        header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                        
                           

                            if ($_POST['userid']) {
                                // code...

                                // $fname = $_POST['fname'];
                                // $lname = $_POST['lname'];
                                // $e_mail = $_POST['e_mail'];
                                // $mobilenum = $_POST['mobilenum'];
                                $uid = $_POST['userid'];

                                $myModel = $this->model('DB_connection');
                                if($myModel->refundtotal($uid)){

                                      $data = ["status" => "Success", "Message" => "matched"];
                                }
                            
                                  
                                

                                
                            }
                            else{
                                $data = ["status" => "Error", "Message" => "not matched"];
                            }

                             echo json_encode($data);
                        }




                         public function addupdate(){
                        // header('Content-Type: application/json; charset=utf-8');
                        //  $data = ["status" => "Error", "Message" => "Please enter code"];
                        
                           

                            if ($_POST['street2']) {
                                // code...

                                 $street2 = $_POST['street2'];
                                    $HN2     = $_POST['HN2'];
                                    $Pc2     = $_POST['Pc2'];
                                    $city2   = $_POST['city2'];
                                    $mobile2 = $_POST['mobile2'];
                                    $Userid2 = $_POST['Userid2'];
                                    $Addid2 = $_POST['Addid2'];
                                    // $email = $this->getSession('Email');
                                    // $state = 'gujarat';

                                $myModel = $this->model('DB_connection');
                                if($myModel->updateadd($street2, $Pc2, $HN2, $city2, $mobile2, $Userid2, $Addid2)){

                                      // $data = ["status" => "Success", "Message" => "matched"];
                                    // echo "ok";
                                     header('location: http://localhost/Home_DB/functions/Service_History#v-pills-helo');
                                }
                            
                                  
                                

                                
                            }
                            else{
                                // $data = ["status" => "Error", "Message" => "not matched"];
                                echo "no";
                            }

                             // echo json_encode($data);
                        }



                        public function adddelete(){
                        // header('Content-Type: application/json; charset=utf-8');
                        //  $data = ["status" => "Error", "Message" => "Please enter code"];
                        
                           

                            // if ($_POST['Addid3']) {
                                // code...
                            echo "sdjhfhjgd";
                                 
                                    $Addid3 = $_POST['Addid3'];
                                    // $email = $this->getSession('Email');
                                    // $state = 'gujarat';

                                $myModel = $this->model('DB_connection');
                                if($myModel->deleteadd($Addid3)){

                                      // $data = ["status" => "Success", "Message" => "matched"];
                                    echo "done2";
                                }
                            
                                  
                                

                                
                            // }
                            else{
                                // $data = ["status" => "Error", "Message" => "not matched"];
                                echo "dond ondf";
                            }

                             // echo json_encode($data);
                        }


                        public function changepass(){
                            // echo "hii";
                        header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                        
                           

                            // if ($_POST['confirmpass']) {
                                // code...
                                // echo "hello";
                                 
                                 
                                    $oldpass = $_POST['oldpass'];
                                    $newpass = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
                                    $confirmpass = $_POST['confirmpass'];
                                    $dbpass = $_POST['dbpass'];
                                    $changeid = $_POST['changeid'];


                                    // echo $oldpass;
                                    $myModel = $this->model('DB_connection');
                                    if(password_verify($oldpass, $dbpass)){
                                        if($myModel->passchange($oldpass, $newpass, $confirmpass, $dbpass, $changeid)){

                                      $data = ["status" => "Success", "Message" => "matched"];
                                }

                                       // $data = ["status" => "Success", "Message" => "matched"]; 
                                    }
                                // 
                                // 
                            
                                  
                                

                                
                            // }
                            else{
                                $data = ["status" => "Error", "Message" => "not matched", "idf" => $oldpass];
                            }

                             echo json_encode($data);
                        }





                        
                             public function chancelsr(){
                            // echo "hii";
                        header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                        
                           

                            // if ($_POST['confirmpass']) {
                                // code...
                                // echo "hello";
                                 
                                 
                                    $srid1 = $_POST['srid'];

                                    // echo $srid1;
                                $myModel = $this->model('DB_connection');
                                if($myModel->cancelsrid($srid1)){

                                      $data = ["status" => "Success", "Message" => "matched"];
                                }
                            
                                  
                                

                                
                            // }
                            else{
                                $data = ["status" => "Error", "Message" => "not matched", "idf" => $oldpass];
                            }

                             echo json_encode($data);
                        }


                         public function complerelsr(){
                            // echo "hii";
                        header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                        
                           

                            // if ($_POST['confirmpass']) {
                                // code...
                                // echo "hello";
                                 
                                 
                                    $srid2 = $_POST['srid1'];

                                    // echo $srid1;
                                $myModel = $this->model('DB_connection');
                                if($myModel->completesrid($srid2)){

                                      $data = ["status" => "Success", "Message" => "matched"];
                                }
                            
                                  
                                

                                
                            // }
                            else{
                                $data = ["status" => "Error", "Message" => "not matched", "idf" => $oldpass];
                            }

                             echo json_encode($data);
                        }


                        public function blockonly(){
                            echo "hi";
                           



                                 if (isset($_POST['block'])) {
                                // code...
                                echo "gi";
                                $target = $_POST['useridblc'];
                                $user = $_POST['spidblc'];
                               $myModel = $this->model('DB_connection');
                                if ($myModel->blockonly2($user, $target)) {
                                    // code...
                                    echo "block";
                                     // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-messages2');
                                } 
                                else{
                                    echo "notblock";
                                }
                            }





                            if (isset($_POST['unblock'])) {
                                // code...
                                $target = $_POST['useridblc'];
                                $user = $_POST['spidblc'];
                               $myModel = $this->model('DB_connection');
                                if ($myModel->unblockonly($user, $target)) {
                                    // code...
                                    echo "block1";
                                     // header('location: http://localhost/Home_DB/functions/Service_History#v-pills-messages');
                                } 
                                else{
                                    echo "unblock1";
                                }
                            }
                        }



                        public function profileUpdate(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];

                         $myModel = $this->model('DB_connection');
                         
                             // code...
                             $fname = $_POST['fname'];
                         $lname = $_POST['lname'];
                         $e_mail = $_POST['e_mail'];
                         $mobilenum = $_POST['mobilenum'];
                         $streetname = $_POST['streetname'];
                         $Housenum = $_POST['Housenum'];
                         $postalcode = $_POST['postalcode'];
                         $city = $_POST['city'];
                         $uid22 = $_POST['uid22'];
                         $avtar = $_POST['avtarfam'];


                         if ($myModel->proUpdate($fname,  $lname,  $e_mail,  $mobilenum, $uid22, $avtar, $streetname, $Housenum, $postalcode, $city, )) {
                          $data = ["status" => "Success", "Message" => "matched", "1" => $fname, "2" => $lname, "3" => $e_mail, "4" => $mobilenum, "9" => $uid22, "dkg" => $avtar, "dfg" => $streetname, "sd" => $postalcode, "df" => $city];

                         }

                         else{
                          $data = ["status" => "Error", "Message" => "Please enter code2"];
  
                         }

                         echo json_encode($data);

                        
                        }



                        public function accept(){
                            // $this->view('Upcoming_Service');
                             header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                            if (isset($_POST['userid'])) {
                                // code...
                                $userid = $_POST['userid'];
                                $serviceid = $_POST['serviceid'];
                                $stime = $_POST['stime'];

                                $myModel = $this->model('DB_connection');
                                if ($myModel->acceptsr($userid, $serviceid, $stime)) {
                                    // code...
                                    // echo s
                                    // print_r($_SESSION['row']);
                                    // echo "ok";
                                     $data = ["status" => "Success", "Message" => "Please enter"];
                                    // header('location: http://localhost/Home_DB/functions/Upcoming_Service');
                                }
                                else{
                                    // echo "nok";
                                     $data = ["status" => "Error", "Message" => "Please enter code"];
                                    
                                }
                            }

                            echo json_encode($data);
                        }


                        public function duplicate(){
                             header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $hidid = $_POST['id'];
                         $myModel = $this->model('DB_connection');
                                if ($myModel->impdata($hidid)) {
                                    // code...
                                    // echo "done";
                                    $result = json_encode($_SESSION['dataexample']);
                                     // $data = ["status" => "Success", "Message" => "Please enter", $result];
                                }

                                else{
                                    echo "ndone";
                                    // $data = ["status" => "Error", "Message" => "Please enter code"];
                                    // $result['data'] = ["status" => "Error", $_SESSION['dataexample']];
                                }

                                 echo $result;
                        }



                        public function editall(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                            if (isset($_POST['Addid'])) {
                                // code...
                                $Addid = $_POST['Addid'];
                                $srid = $_POST['srid'];
                                $date = $_POST['date'];
                                $time = $_POST['time'];
                                $dateTime = $date.' '.$time;
                                $street = $_POST['street'];
                                $house_number = $_POST['house_number'];
                                $Postalcode = $_POST['Postalcode'];
                                $city = $_POST['city2'];

                                $myModel = $this->model('DB_connection');
                                if ($myModel->editsr($Addid, $srid, $dateTime, $street, $house_number, $Postalcode, $city)) {
                                    // code...
                                    // echo "done";
                                    $data = ["status" => "Success", "Message" => "Please enter"];
                                }

                                else{
                                    // echo "ndone";
                                    $data = ["status" => "Error", "Message" => "Please enter code2"];
                                }
                            }

                            echo json_encode($data);
                        }



                        public function changestatus(){
                            // echo "dkfjnkjgh";
                             header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                            if ($_POST['changes']) {
                                // code...
                                $changeid = $_POST['changeuser'];
                                $changes = $_POST['changes'];

                                $myModel = $this->model('DB_connection');
                                if ($myModel->editstatus($changeid, $changes)) {
                                    // code...
                                    // echo "done";
                                    $data = ["status" => "Success", "Message" => "Please enter code"];
                                }
                                else{
                                    // echo "not done";
                                    $data = ["status" => "Error", "Message" => "Please enter code"];
                                }
                                // echo $changeid;
                                // echo $changes;
                            }

                            echo json_encode($data);
                        }


                        public function showData1(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $important =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->ShowData($important)) {
                                    $result['data'] = $_SESSION['res'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }

                         public function showData2(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $important1 =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->ShowData2($important1)) {
                                    $result['data'] = $_SESSION['res2'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }



                        public function Showdata(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $useridimp =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->dataimp($useridimp)) {
                                    $result['data'] = $_SESSION['res3'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }


                        public function Showdatainit(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $useridimp1 =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->dataimpinit($useridimp1)) {
                                    $result['data'] = $_SESSION['res4'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }

                         public function initialfun(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $initialid =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->initialcon($initialid)) {
                                    $result['data'] = $_SESSION['out'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }


                        public function fav(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $favunid =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->favinb($favunid)) {
                                    $result['data'] = $_SESSION['blc'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }

                        public function userdata(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $userdataid =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->UserData($userdataid)) {
                                    $result['data'] = $_SESSION['dataid'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }



                         public function ratedata(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $rateid =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->RateData($rateid)) {
                                    $result['data'] = $_SESSION['rates'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }


                         public function adminpage(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $adminid =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->adminsdatas($adminid)) {
                                    $result['data'] = $_SESSION['admindata'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }


                        public function adminpageuser(){
                            header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];
                         $adminuseid =  $this->getSession('Userid');
                             $myModel = $this->model('DB_connection');
                                if ($myModel->adminsusedatas($adminuseid)) {
                                    $result['data'] = $_SESSION['adminusedata'];
                                   
                                }
                                else{
                                    echo "not done";
                                }


                                echo json_encode($result);
                        }


                        public function reamount(){
                             header('Content-Type: application/json; charset=utf-8');
                         $data = ["status" => "Error", "Message" => "Please enter code"];

                         $reuserid = $_POST['id'];
                         $myModel = $this->model('DB_connection');
                                if ($myModel->refundimpdata($reuserid)) {
                                    // code...
                                    // echo "done";
                                    $result = json_encode($_SESSION['refunddata']);
                                     // $data = ["status" => "Success", "Message" => "Please enter", $result];
                                }

                                else{
                                    echo "ndone";
                                    // $data = ["status" => "Error", "Message" => "Please enter code"];
                                    // $result['data'] = ["status" => "Error", $_SESSION['dataexample']];
                                }

                                 echo $result;
                        }


                        // public function cancelreq(){
                        //      header('Content-Type: application/json; charset=utf-8');
                        //  $data = ["status" => "Error", "Message" => "Please enter code"];

                        //  $canid = $_POST['id'];
                        //  $myModel = $this->model('DB_connection');
                        //         if ($myModel->showcancel($canid)) {
                        //             // code...
                        //             // echo "done";
                        //             $result = json_encode($_SESSION['refunddata']);
                        //              // $data = ["status" => "Success", "Message" => "Please enter", $result];
                        //         }

                        //         else{
                        //             echo "ndone";
                        //             // $data = ["status" => "Error", "Message" => "Please enter code"];
                        //             // $result['data'] = ["status" => "Error", $_SESSION['dataexample']];
                        //         }

                        //          echo $result;
                        // }


}

   

?>