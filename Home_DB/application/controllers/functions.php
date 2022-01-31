<?php
class functions extends framework
{

    public function Home(){

           
            $this->view('Home');
    }

    public function Prices(){

               $this->view('Prices');
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

    public function insert(){
        $this->view("Contact");
         
        if (isset($_POST['submit'])) {
            // code...

              $First_name = $this->input('First_name');
               $Last_name = $this->input('Last_name');
               $Mobile_number = $this->input('Mobile_number');
               $Email = $this->input('Email');
               $Subject = $this->input('Subject');
               $Message = $this->input('Message');
               $file = $this->input('file');
               $options = $this->input('options');

               $name = $First_name.$Last_name;
               $mobile_number = $options.$Mobile_number;

             $myModel = $this->model('DB_connection');
             $myModel->contact($name, $mobile_number, $Email, $Subject, $Message, $file);
            
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

            // if(!$mail->send()) {
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            // } else {
            // echo 'Message has been sent';
            // }

                }
                
                 

            }
            }


?>




 <!-- // $this->helper("link"); -->