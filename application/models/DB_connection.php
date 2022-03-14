<?php

class DB_connection extends database{

    function contact($name, $Mobile_number, $Email, $Subject, $Message, $file){


            if($this->Query("INSERT INTO ContactUs(Name, Mobile_number, Email, Subject, Message, file, time) VALUES ('$name', '$Mobile_number', '$Email', '$Subject', '$Message', '$file', CURTIME())")){
            return true;
            
        }
        else{
     
            return false;
            
        }

        
        }

        function insertUser($user1data, $email2){
            if ($this->Query("SELECT * FROM User WHERE Email = '$email2'")) {
                // code...
                if ($this->rowCount() > 0) {
                    // code...
                    return false;
                }
                else{
                    if($this->Query("INSERT INTO User(First_name, Last_name, Mobile, Email, Password, token, status, typeId) VALUES 
                    (?,?,?,?,?,?,?,?)", $user1data)){

                        return true;
                    }
                }
            }

        }




        function userLogin($email, $password){
            if ($this->Query("SELECT * FROM User WHERE email = ?", [$email])) {
                // code...
                if ($this->rowCount() > 0) {
                    // code...
                    $row = $this->fetch();
                    $dbPassword = $row->Password;
                    $userId = $row->Userid;
                    $First_name = $row->First_name;
                    $Last_name = $row->Last_name;
                    $dbemail = $row->Email;
                    $mobile = $row->Mobile;
                    $_SESSION['typeId'] = $row->typeId;
                    if (password_verify($password, $dbPassword)) {
                        // code...
                        if ($this->Query("SELECT * FROM useraddress WHERE Userid = '$userId'")) {
                   
                                $_SESSION['row']  = $this->fetchall();
                                 
                                // return $data;
                               
                                }
                                 // return($_SESSION['row']);
                               if ($this->Query("SELECT Userid, First_name, Last_name FROM User WHERE typeId = 1")) {
                                    // code...
                                    $_SESSION['typeid'] = $this->fetchall();
                                }           

                                 if ($this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.Serviceproviderid left outer join useraddress on useraddress.Userid = servicerequest.Serviceproviderid WHERE servicerequest.Status = 'Booked' and servicerequest.UserId = $userId")) {
                                        // code...
                                        $_SESSION['serviceid'] = $this->fetchall();
                                        
                                        
                                    }

                                    if ($this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.Serviceproviderid left outer join useraddress on useraddress.Userid = servicerequest.Serviceproviderid WHERE servicerequest.Status = 'Booked' and servicerequest.Serviceproviderid = $userId")) {
                                        // code...
                                        $_SESSION['serviceid2'] = $this->fetchall();
                                        
                                        
                                    }

                                    if ($this->Query("SELECT user.Userid, user.First_name, user.Last_name, 
                                        sum(Serviceid) as total, favouriteandblocked.isfavourite, favouriteandblocked.isblockd, servicerequest.UserId from user left outer JOIN servicerequest on servicerequest.Serviceproviderid = user.Userid  left outer join favouriteandblocked on favouriteandblocked.Targetuserid = user.Userid WHERE servicerequest.UserId = $userId group by user.Userid")) {
                                        // code...;

                                        $_SESSION['favid'] = $this->fetchall();
                                        
                                        
                                    }

                                    if ($this->Query("SELECT * FROM rating JOIN User on rating.Ratingfrom = User.Userid 
                                                    join servicerequest on servicerequest.ServiceRequestId = rating.Servicerequestid
                                                    join useraddress on useraddress.Userid = rating.Ratingfrom 
                                                    WHERE servicerequest.Status = 'completed' and rating.Ratingto = $userId;")) {
                                        // code...;

                                        $_SESSION['favid2'] = $this->fetchall();
                                        
                                        
                                    }


                                    if ($this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.Serviceproviderid WHERE (servicerequest.Status = 'completed' OR servicerequest.Status = 'Cancelled') and servicerequest.UserId = $userId")) {
                                        // code...
                                        
                                        $_SESSION['servicehistory'] = $this->fetchall();
                                        
                                        
                                    }

                                     

                                    if ($this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.Serviceproviderid left outer join useraddress on useraddress.Userid = servicerequest.Serviceproviderid WHERE servicerequest.Status = 'completed' and servicerequest.Serviceproviderid = $userId")) {
                                        // code...
                                        
                                        $_SESSION['servicehistory2'] = $this->fetchall();
                                        
                                        
                                    }

                                     if ($this->Query("SELECT servicerequest.UserId, servicerequest.Serviceproviderid, favouriteandblocked.isfavourite, favouriteandblocked.isblockd, user.First_name, user.Last_name from servicerequest left outer join User on User.Userid = servicerequest.UserId left outer join favouriteandblocked on favouriteandblocked.Userid = servicerequest.Serviceproviderid where Serviceproviderid = $userId")) {
                                        // code...;

                                        $_SESSION['userlist'] = $this->fetchall();
                                        
                                        
                                    }




                        return ['status' => 'ok', 'data' => $userId, 'pass' => $dbPassword, 'name' => $First_name, 'lname' => $Last_name, 'mobile' => $mobile,  $_SESSION['typeId'], $_SESSION['row'], 'email' => $dbemail, $_SESSION['typeid'], $_SESSION['servicehistory'], $_SESSION['serviceid'], $_SESSION['serviceid2'], $_SESSION['favid'],  $_SESSION['servicehistory2'], $_SESSION['favid2'], $_SESSION['ratings2'], $_SESSION['userlist']];

                         
                    }
                    else{
                        return ['status' => 'passwordNotMatch'];
                    }
                }
                else{
                    return ['status' => 'emailNotFound'];
                }
            }
        }


        function Reset($new_pass ,$token){
            if ($this->Query("UPDATE User SET Password=$new_pass WHERE token = ?", [$token])) {
                // code...
                return true;
            }
            else{
                return false;
            }
        }






        function check_Email($Email){
            if ($this->Query("SELECT Email,First_name,token FROM User WHERE email = ?", [$Email])) {
                // code...
                if ($this->rowCount() > 0) {
                    // code...
                    $row = $this->fetch();
                    $First_name = $row->First_name;
                    $_SESSION['token'] = $row->token;
                    return [ 'First_name' => $First_name,  $_SESSION['token']];
                    return true;
                    // 
                    
                }
                else{
                    return false;
                    
                }
            }
        }


        public function check_availability($postalCode){
            if ($this->Query("SELECT * FROM user
                              JOIN useraddress on user.Userid = useraddress.Userid
                              JOIN city on useraddress.City = city.CityName
                              JOIN zipcode on zipcode.Cityid = city.CityId
                              WHERE user.Zipcode = ? 
                              AND User.typeId = 1", [$postalCode])) {
                                // code...
                if ($this->rowCount() > 0) {
                    // code...
                    if ($this->Query("SELECT Zipcode FROM user WHERE Zipcode = ?", [$postalCode])) {
                        // code...
                         $row = $this->fetch();
                        $postalCode = $row->Zipcode;
                        return ['postalCode' => $postalCode];
                    }
                   
                    return true;
                }
                else {
                    return false;
                }
            }
        }



        public function Addaddress($Userid, $street, $HN, $city, $state, $Pc,  $mobile, $email){
            // echo "hy";
            if ($this->Query("INSERT INTO useraddress(Userid, AddressLine1, AddressLine2, City, State, PostalCode, Mobile, Email) VALUES($Userid, '$street', $HN, '$city', '$state', $Pc, $mobile, '$email')")) {
              
                       return true;
                        // return ['street' => $street];
                    // return ['row' => $row];
                }
                
                else{
                return false;
            }
                // echo $street;
            }


            public function complete($result, $id){
                if ($this->Query("INSERT INTO servicerequest(UserId, ExtraServices, ServiceStartDate, Zipcode, ServiceHourlyRate, ServiceHours, Cooments, PaymentRefNo, HasPets, Addid, Serviceproviderid) VALUES(?,?,?,?,?,?,?,?,?,?,?)", $result)) {

                    if ($id == 0) {
                        // code...
                        echo "null";
                        if ($this->Query("SELECT Email FROM User WHERE typeId = 1")) {
                        // code...
                        $_SESSION['email'] = $this->fetchall();
                        // $id = $row->Userid;
                        // $_SESSION['email'] = $row->Email;
                        return [$_SESSION['email']];
                    }
                }

                    else{
                        if ($this->Query("SELECT * FROM User WHERE Userid = $id")) {
                        // code...
                        $row = $this->fetch();
                        $id = $row->Userid;
                        $_SESSION['email1'] = $row->Email;
                        return ["id" => $id, $_SESSION['email1']];

                    }
                }

               

                    return true;
                        
                    }
                  
                   else{

                    return false;
                }
                    
                }



                public function cancelservice($cancelid, $cancelproid){
                    if ($this->Query("UPDATE servicerequest SET Status = 'Cancelled' WHERE ServiceRequestId = $cancelid;")) {
                        // code...
                        if ($this->Query("SELECT Email FROM User WHERE Userid = $cancelproid")) {
                            // code...
                            $row = $this->fetch();
                            $_SESSION['mail'] = $row->Email;
                            return [$_SESSION['mail']];
                        }
                        return true;
                    }

                    else{
                        return false;
                    }
                }



                public function rescheduleservice($cancelid1, $Startdatetime, $date1, $time1, $proid1){
                    if ($this->Query("SELECT ServiceStartDate FROM servicerequest WHERE StartDate = '$date1' and  Serviceproviderid = $proid1 and StartTime between '$time1' and addtime('$time1', 023000) ")) {
                        // code...
                        if (!$this->rowCount() > 0) {
                            // code...
                            echo "not gr";
                       
                            if ($this->Query("UPDATE servicerequest SET ServiceStartDate = '$Startdatetime' WHERE ServiceRequestId = $cancelid1;")) {
                        // code...
                                if ($this->Query("SELECT Email FROM User WHERE Userid = $proid1")) {
                                    // code...
                                    $row = $this->fetch();
                                    $_SESSION['Email2'] = $row->Email;
                                    return $_SESSION['Email2'];
                                }
                                    return true;
                                }
                       
                        }

                         // return true
                        ;
                       
                    }

                    else{
                        return false;
                    }
                }



                public function rating45($serviceid1, $ratingfrom, $ratingto, $ratings, $comment, $ontime, $friendly, $quality){
                    // echo "fine";
                    if ($this->Query("INSERT INTO Rating(Servicerequestid, Ratingfrom, Ratingto, Ratings, Comments, Ratingdate, Ontimearraival, Friendly, Qualityofservice) VALUES($serviceid1, $ratingfrom, $ratingto, $ratings, '$comment', NOW(), $ontime, $friendly, $quality)")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }



                public function fav($user, $target){
                    if ($this->Query("SELECT * FROM favouriteandblocked WHERE Targetuserid = $target")) {
                        // code...
                        if ($this->rowCount() > 0) {
                            // code...
                            if ($this->Query("UPDATE favouriteandblocked set isfavourite = 1 WHERE Targetuserid = $target")) {
                                // code...
                                return true;
                            }
                            
                        }
                        else{
                            if($this->Query("INSERT INTO favouriteandblocked(Userid, Targetuserid, isfavourite, isblockd) VALUES($user, $target, 1, 0)")){
                                return true;
                            }
                            
                        }
                        
                    }
                    else{
                        // echo "ok";
                        return false;
                    }
                }



                public function unfav($user, $target){
                    if ($this->Query("UPDATE favouriteandblocked set isfavourite = 0 WHERE Targetuserid = $target")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }



                 public function block($user, $target){
                    echo "h";
                    if ($this->Query("SELECT * FROM favouriteandblocked WHERE Targetuserid = $target")) {
                        // code...
                        if ($this->rowCount() > 0) {
                            // code...
                            if ($this->Query("UPDATE favouriteandblocked set isblockd = 1 WHERE Targetuserid = $target")) {
                                // code...
                                return true;
                            }
                            
                        }
                        else{
                            if($this->Query("INSERT INTO favouriteandblocked(Userid, Targetuserid, isfavourite, isblockd) VALUES($user, $target, 0, 1)")){
                                return true;
                            }
                            
                        }
                        
                    }
                    else{
                        // echo "ok";
                        return false;
                    }
                }

                public function unblock($user, $target){
                    if ($this->Query("UPDATE favouriteandblocked set isblockd = 0 WHERE Targetuserid = $target")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }


                public function updateprofile($fname, $lname, $e_mail, $mobilenum, $uid){
                    if ($this->Query("UPDATE User set First_name = '$fname', Last_name = '$lname', Email = '$e_mail', Mobile = $mobilenum WHERE Userid = $uid")) {
                        // code...
                        return true;
                    }

                    else{
                        return false;
                    }
                }


                public function updateadd($street2, $Pc2, $HN2, $city2, $mobile2, $Userid2, $Addid2){
                    if ($this->Query("UPDATE useraddress set AddressLine1 = '$street2', AddressLine2 = $HN2, City = '$city2', PostalCode = $Pc2, Mobile = $mobile2 WHERE AddressId = $Addid2 ")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }



                 public function deleteadd($Addid3){
                    // echo $Addid3;
                    if ($this->Query("DELETE FROM useraddress WHERE AddressId = $Addid3 ")) {
                        // code...
                        echo "hidifsd";
                        return true;
                    }
                    else{
                        return false;
                    }
                }


                public function passchange($oldpass, $newpass, $confirmpass, $dbpass, $changeid){
                    if ($this->Query("SELECT Password FROM User WHERE Userid = $changeid and Password = '$oldpass'")) {
                        // code...
                        // $row = $this->fetch();
                        // $pass3 = $row->Password; 
                        // password_verify($oldpass, $Pass3);
                        if ($this->rowCount() > 0) {
                            // code...
                            return true;
                        }
                        
                    }
                    else{
                        return false;
                    }
                }



                public function loadData($offset, $limit){
                //     if ($this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.Serviceproviderid WHERE servicerequest.Status = 'Booked' and servicerequest.UserId = $id5")) {
                //                  //        // code...
                //                         $_SESSION['serviceid'] = $this->fetchall();
                //                         return [$_SESSION['serviceid']];
                //                      return true;   
                               
                               if ($this->Query("SELECT *  FROM user")) {
                                            // code...
                                $_SESSION['helo'] = $this->rowCount();
                                $row = $this->fetch();
                                $_SESSION['result'] = $row->First_name;
                                if ($this->Query("SELECT * FROM user ORDER BY Userid DESC LIMIT $offset,$limit")) {
                                    // code...  
                                    $_SESSION['isit'] = $this->fetchall();
                                }
                                return [true, $_SESSION['result'], $_SESSION['helo'], $_SESSION['isit']];

                                // return true;
                                        }


                                        
                //                     }

                //                      if ($this->Query("SELECT user.Userid, user.First_name, user.Last_name, 
                //                         sum(Serviceid) as total, favouriteandblocked.isfavourite, favouriteandblocked.isblockd, servicerequest.UserId from user left outer JOIN servicerequest on servicerequest.Serviceproviderid = user.Userid  left outer join favouriteandblocked on favouriteandblocked.Targetuserid = user.Userid WHERE servicerequest.UserId = $id5 group by user.Userid")) {
                //                         // code...;

                //                         $_SESSION['favid'] = $this->fetchall();
                //                     return [$_SESSION['favid']];
                //                          return true;
                                    
                                        
                //                     }


                //                       if ($this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.Serviceproviderid WHERE (servicerequest.Status = 'completed' OR servicerequest.Status = 'Cancelled') and servicerequest.UserId = $id5")) {
                //                         // code...
                                        
                //                         $_SESSION['servicehistory'] = $this->fetchall();
                //                          return [$_SESSION['servicehistory']];
                //                          return true;
                                        
                //                     }

                //                     // return [true, $_SESSION['serviceid'], $_SESSION['favid'], $_SESSION['servicehistory']];

                //                     else{
                //                         return false;
                //                     }

                }


                // public function oki($offset, $limit){
                //     if ($this->Query("SELECT * FROM user ORDER BY id DESC LIMIT $offset,$limit")) {
                //                                      // code...
                //                             return true;
                //                                  } 
                // }
               





                public function cancelsrid($srid){
                    if ($this->Query("UPDATE servicerequest SET Status = 'Cancelled' WHERE ServiceRequestId = $srid")) {
                        // code...
                        // $row = $this->fetch();
                        // $pass3 = $row->Password; 
                        // password_verify($oldpass, $Pass3);
                        // if ($this->rowCount() > 0) {
                            // code...
                            return true;
                        // }
                        
                    }
                    else{
                        return false;
                    }
                }



                public function blockonly2($useridblc, $spidblc){
                    if ($this->Query("SELECT * FROM favouriteandblocked WHERE Targetuserid = $useridblc")) {
                        // code...
                        if ($this->rowCount() > 0) {
                            // code...
                            if ($this->Query("UPDATE favouriteandblocked set isblockd = 1 WHERE Targetuserid = $useridblc")) {
                                // code...
                                return true;
                            }
                            
                        }
                        else{
                            if($this->Query("INSERT INTO favouriteandblocked(Userid, Targetuserid, isfavourite, isblockd) VALUES($spidblc, $useridblc, 0, 1)")){
                                return true;
                            }
                            
                        }
                        
                    }
                    else{
                        // echo "ok";
                        return false;
                    }
                }



                public function proUpdate($fname,  $lname,  $e_mail,  $mobilenum, $streetname,  $Housenum, $postalcode, $city, $uid22){
                    if ($this->Query("UPDATE user, useraddress set user.First_name = '$fname', user.Last_name = '$lname', user.Email = '$e_mail', user.Mobile = $mobilenum, useraddress.AddressLine1 = '$streetname', useraddress.AddressLine2 = $Housenum, useraddress.PostalCode = $postalcode, useraddress.City = '$city' where user.Userid = useraddress.Userid AND user.Userid = $uid22 ")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }
            
            
        }





// }
// }
// }



?>

