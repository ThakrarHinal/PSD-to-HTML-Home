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
                    $simp = $row->status;
                    $mobile = $row->Mobile;
                    $minid = $row->typeId;
                    $_SESSION['typeId'] = $row->typeId;
                    if (($minid == 0 || $minid == 2) && password_verify($password, $dbPassword)) {
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

                                 

                                    if ($this->Query("SELECT * FROM rating JOIN User on rating.Ratingfrom = User.Userid 
                                                    join servicerequest on servicerequest.ServiceRequestId = rating.Servicerequestid
                                                    join useraddress on useraddress.Userid = rating.Ratingfrom 
                                                    WHERE servicerequest.Status = 'completed' and rating.Ratingto = $userId;")) {
                                        // code...;

                                        $_SESSION['favid2'] = $this->fetchall();
                                        
                                        
                                    }


                                   


                                    


                        return ['status' => 'ok', 'data' => $userId, 'pass' => $dbPassword, 'name' => $First_name, 'lname' => $Last_name, 'mobile' => $mobile,  $_SESSION['typeId'], $_SESSION['row'], 'email' => $dbemail, $_SESSION['typeid'], $_SESSION['favid2']];

                         
                    }

                    if ($minid == 1 && $simp == 'Active' && password_verify($password, $dbPassword)) {
                        // code...

                        if ($this->Query("SELECT * FROM useraddress WHERE Userid = '$userId'")) {
                   
                                $_SESSION['row']  = $this->fetchall();
                                 
                                // return $data;
                               
                                }


                        return ['status' => 'ok', 'data' => $userId, 'pass' => $dbPassword, 'name' => $First_name, 'lname' => $Last_name, 'mobile' => $mobile, $_SESSION['row'], 'email' => $dbemail];
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


        function Reset($new_pass1 ,$token){
            if ($this->Query("UPDATE User SET Password='$new_pass1' WHERE token = ?", [$token])) {
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


            public function complete($result, $id, $userid){
                if ($this->Query("INSERT INTO servicerequest(UserId, ExtraServices, ServiceStartDate, Zipcode, ServiceHourlyRate, ServiceHours, Cooments, PaymentRefNo, HasPets, Addid, Serviceproviderid, Status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)", $result)) {

                    if ($id == 0) {
                        // code...
                        // echo "null";
                        if ($this->Query("SELECT Email FROM User join favouriteandblocked on User.Userid = favouriteandblocked.Targetuserid WHERE User.typeId = 1 and favouriteandblocked.isblockd = 1 and favouriteandblocked.Userid = $userid")) {
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
                            $_SESSION['cancelid'] = $cancelid;
                            return [$_SESSION['mail'], $_SESSION['cancelid']];
                        }
                        return true;
                    }

                    else{
                        return false;
                    }
                }



                public function rescheduleservice($cancelid1, $Startdatetime, $date1, $time1, $proid1){
                    if ($this->Query("SELECT ServiceStartDate FROM servicerequest WHERE substring_index(ServiceStartDate, ' ', 1) = '$date1' and  Serviceproviderid = $proid1 and substring_index(ServiceStartDate, ' ', -1) between '$time1' and addtime('$time1', 023000) ")) {
                        // code...
                        if (!$this->rowCount() > 0) {
                            // code...
                            // echo "not gr";
                       
                            if ($this->Query("UPDATE servicerequest SET ServiceStartDate = '$Startdatetime' WHERE ServiceRequestId = $cancelid1;")) {
                        // code...
                                if ($this->Query("SELECT Email FROM User WHERE Userid = $proid1")) {
                                    // code...
                                    $row = $this->fetch();
                                    
                                    $_SESSION['Email2'] = $row->Email;
                                    $_SESSION['date'] = $Startdatetime;
                                    echo $_SESSION['date'];
                                    $_SESSION['id'] = $cancelid1;
                                    return [$_SESSION['Email2'], $_SESSION['date'], $_SESSION['id']];
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



                public function rating45($serviceid1, $ratingfrom, $helook, $ratings, $comment, $ontime, $friendly, $quality){
                    // echo "fine";
                    if ($this->Query("INSERT INTO Rating(Servicerequestid, Ratingfrom, Ratingto, Ratings, Comments, Ratingdate, Ontimearraival, Friendly, Qualityofservice) VALUES($serviceid1, $ratingfrom, $helook, $ratings, '$comment', NOW(), $ontime, $friendly, $quality)")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }



                public function fav($custid, $targetid){
                    if ($this->Query("SELECT * FROM favouriteandblocked WHERE Targetuserid = $targetid")) {
                        // code...
                        if ($this->rowCount() > 0) {
                            // code...
                            if ($this->Query("UPDATE favouriteandblocked set isfavourite = 1 WHERE Targetuserid = $targetid")) {
                                // code...
                                return true;
                            }
                            
                        }
                        else{
                            if($this->Query("INSERT INTO favouriteandblocked(Userid, Targetuserid, isfavourite, isblockd) VALUES($custid, $targetid, 1, 0)")){
                                return true;
                            }
                            
                        }
                        
                    }
                    else{
                        // echo "ok";
                        return false;
                    }
                }



                public function unfav($custid, $targetid){
                    if ($this->Query("UPDATE favouriteandblocked set isfavourite = 0 WHERE Targetuserid = $targetid")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }



                 public function block($custid, $targetid){
                    // echo "h";
                    if ($this->Query("SELECT * FROM favouriteandblocked WHERE Targetuserid = $targetid")) {
                        // code...
                        if ($this->rowCount() > 0) {
                            // code...
                            if ($this->Query("UPDATE favouriteandblocked set isblockd = 1 WHERE Targetuserid = $targetid")) {
                                // code...
                                return true;
                            }
                            
                        }
                        else{
                            if($this->Query("INSERT INTO favouriteandblocked(Userid, Targetuserid, isfavourite, isblockd) VALUES($custid, $targetid, 0, 1)")){
                                return true;
                            }
                            
                        }
                        
                    }
                    else{
                        // echo "ok";
                        return false;
                    }
                }


                public function blockuser($Srid, $targetid){
                    // echo "h";
                    if ($this->Query("SELECT * FROM favouriteandblocked WHERE Targetuserid = $targetid")) {
                        // code...
                        if ($this->rowCount() > 0) {
                            // code...
                            if ($this->Query("UPDATE favouriteandblocked set isblockd = 1 WHERE Targetuserid = $targetid")) {
                                // code...
                                return true;
                            }
                            
                        }
                        else{
                            if($this->Query("INSERT INTO favouriteandblocked(Userid, Targetuserid, isfavourite, isblockd) VALUES($Srid, $targetid, 0, 1)")){
                                return true;
                            }
                            
                        }
                        
                    }
                    else{
                        // echo "ok";
                        return false;
                    }
                }


                public function unblock($custid, $targetid){
                    if ($this->Query("UPDATE favouriteandblocked set isblockd = 0 WHERE Targetuserid = $targetid")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }


                public function unblockby($Srid, $targetid){
                    if ($this->Query("UPDATE favouriteandblocked set isblockd = 0 WHERE Targetuserid = $targetid")) {
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
                    echo $Addid3;
                    if ($this->Query("DELETE FROM useraddress WHERE AddressId = $Addid3 ")) {
                        // code...
                        echo "hidifsd";
                        return true;
                    }
                    else{
                        echo "skdjhfkdjdfdsfd";
                        return false;
                    }
                }


                public function passchange($oldpass, $newpass, $confirmpass, $dbpass, $changeid){
                    if ($this->Query("UPDATE user set Password = '$newpass' where Userid = $changeid ")) {
                        // code...
                        // $row = $this->fetch();
                        // $pass3 = $row->Password; 
                        // if(password_verify($oldpass, $Pass3)){
                        // if ($this->rowCount() > 0) {
                            // code...
                            return true;
                        // }
                        
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


                                        
              
                }


               





                public function cancelsrid($srid){
                    if ($this->Query("UPDATE servicerequest SET Status = 'Cancelled' WHERE ServiceRequestId = $srid")) {
                        // code...
                      
                            // code...
                            return true;
                        // }
                        
                    }
                    else{
                        return false;
                    }
                }

                public function completesrid($srid2){
                    if ($this->Query("UPDATE servicerequest SET Status = 'completed' WHERE ServiceRequestId = $srid2")) {
                      
                            return true;
                        // }
                        
                    }
                    else{
                        return false;
                    }
                }



                public function blockonly2($user, $target){
                    if ($this->Query("SELECT * FROM favouriteandblocked WHERE Targetuserid = $target")) {
                        // code...
                        if ($this->rowCount() > 0) {
                            // code...
                            if ($this->Query("UPDATE favouriteandblocked set isblockd = 1 WHERE Targetuserid = $user")) {
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




                public function unblockonly($user, $target){
                    if ($this->Query("UPDATE favouriteandblocked set isblockd = 0 WHERE Targetuserid = $target")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }



                public function proUpdate($fname,  $lname,  $e_mail,  $mobilenum, $avtar, $streetname,  $Housenum, $postalcode, $city, $uid22){
                    if ($this->Query("UPDATE user, useraddress set user.First_name = '$fname', user.Last_name = '$lname', user.Email = '$e_mail', user.Mobile = $mobilenum, user.avtar = '$avtar', useraddress.AddressLine1 = '$streetname', useraddress.AddressLine2 = $Housenum, useraddress.PostalCode = $postalcode, useraddress.City = '$city' where user.Userid = useraddress.Userid AND user.Userid = $uid22 ")) {
                        // code...
                        return true;
                    }
                    else{
                        return false;
                    }
                }



                public function acceptsr($userid, $serviceid, $stime){
                    if ($this->Query("SELECT Status FROM servicerequest WHERE ServiceRequestId = $serviceid")) {
                        // code...
                        $row = $this->fetch();
                        $accept1 = $row->Status;
                       
                        
                        if ($accept1 == 'Booked') {
                        //     // code...

                             if ($this->Query("SELECT timediff(max(endTime), '$stime') as helo from servicerequest WHERE Status = 'Booked' and Serviceproviderid = $userid")) {
                            // code...
                            
                            $row55 = $this->fetch();
                            $imp = $row55->helo;
                        
                            if ($imp >= 1) {
                                // code...
                                echo $imp;
                                if ($this->Query("UPDATE servicerequest SET Status = 'Accepted', Serviceproviderid = $userid WHERE ServiceRequestId = $serviceid")) {
                        //         // code...
                                return true;
                            }


                        // }
                            }

                            else{
                                return false;
                            }

                        }     

                        
                    }


                    elseif ($accept1 == 'Accepted') {
                        //     // code...
                            // echo "already accepted";
                            return false;
                        }
                        
                }
            
            
        }


        public function editsr($Addid, $srid, $dateTime, $street, $house_number, $Postalcode, $city){
            if ($this->Query("UPDATE servicerequest, useraddress set servicerequest.ServiceStartDate = '$dateTime', useraddress.AddressLine1 = '$street', useraddress.AddressLine2 = $house_number, useraddress.City = '$city', useraddress.PostalCode = $Postalcode where servicerequest.ServiceRequestId = $srid and useraddress.AddressId = $Addid")) {
                // code...
                return true;
            }
            else{
                return false;
            }
        }




        public function editstatus($changeid, $changes){
            if ($changes == 'inactive') {
                // code...
            
                if ($this->Query("UPDATE user set status = 'Active' WHERE Userid = $changeid")) {
                    // code...
                    return true;
                }
                // return true;

            }
            if ($changes == 'Active') {
                // code...
                if ($this->Query("UPDATE user set status = 'inactive' WHERE Userid = $changeid")) {
                    // code...
                    return true;
                }
               
            }
            else{
                return false;
            }
           
        }


        public function ShowData($important){
            $str = $this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.Serviceproviderid left outer join useraddress on useraddress.Userid = servicerequest.Serviceproviderid WHERE servicerequest.Status = 'Booked' and servicerequest.UserId = $important");

                    $_SESSION['res'];
                if($str) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['res'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['res']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }


                public function ShowData2($important1){
            $str2 = $this->Query("SELECT * from servicerequest left outer join user on user.Userid = servicerequest.Serviceproviderid left outer join rating on rating.Ratingto = servicerequest.Serviceproviderid where (servicerequest.Status = 'completed' OR servicerequest.Status = 'Cancelled') and servicerequest.UserId = $important1 group by servicerequest.ServiceRequestId;");

                    $_SESSION['res2'];
                if($str2) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['res2'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['res2']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }

         public function dataimp($useridimp){
            $str3 = $this->Query("SELECT * from servicerequest join user on user.Userid = servicerequest.UserId join useraddress on useraddress.AddressId = servicerequest.Addid where servicerequest.Status = 'Booked';");

                    $_SESSION['res3'];
                if($str3) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['res3'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['res3']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }

        public function dataimpinit($useridimp1){
            $str4 = $this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.UserId left outer join useraddress on useraddress.AddressId = servicerequest.Addid WHERE (servicerequest.Status = 'Booked' or servicerequest.Status = 'Accepted') and servicerequest.Serviceproviderid = $useridimp1");

                    // $_SESSION['res4'];
                if($str4) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['res4'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['res4']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }


        public function initialcon($initialid){
            $que = $this->Query("SELECT * FROM servicerequest left outer JOIN User on User.Userid = servicerequest.Serviceproviderid left outer join useraddress on useraddress.Userid = servicerequest.Serviceproviderid WHERE servicerequest.Status = 'completed' and servicerequest.Serviceproviderid = $initialid");

                    // $_SESSION['res4'];
                if($que) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['out'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['out']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }



        public function favinb($favunid){
            $unbl = $this->Query("SELECT user.Userid, rating.ratings, user.First_name, user.Last_name, sum(Serviceid) as total, favouriteandblocked.isfavourite, favouriteandblocked.isblockd, servicerequest.UserId from user left outer join rating on rating.ratingto = user.Userid left outer JOIN servicerequest on servicerequest.Serviceproviderid = user.Userid  left outer join favouriteandblocked on favouriteandblocked.Targetuserid = user.Userid WHERE servicerequest.UserId = $favunid group by user.Userid");

                    // $_SESSION['res4'];
                if($unbl) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['blc'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['blc']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }


        public function UserData($userdataid){
            $showid =  $this->Query("SELECT servicerequest.UserId, servicerequest.Serviceproviderid, favouriteandblocked.isfavourite, favouriteandblocked.isblockd, user.First_name, user.Last_name from servicerequest left outer join User on User.Userid = servicerequest.UserId left outer join favouriteandblocked on favouriteandblocked.Userid = servicerequest.Serviceproviderid where Serviceproviderid = $userdataid group by user.Userid");

                    // $_SESSION['res4'];
                if($showid) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['dataid'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['dataid']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }



         public function RateData($rateid){
            $rateing =  $this->Query("SELECT user.First_name, user.Last_name, rating.Ratingfrom, rating.Ratingto, rating.ratings, servicerequest.ServiceStartDate from user join rating on user.Userid = rating.Ratingfrom join servicerequest on servicerequest.UserId = user.UserId  where rating.Ratingto = $rateid group by user.Userid;");

                    // $_SESSION['res4'];
                if($rateing) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['rates'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['rates']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }


        public function adminsdatas($adminid){
            $datas =  $this->Query("SELECT u2.First_name as srname, u2.Last_name as srlname, servicerequest.TotalCost, user.Userid, useraddress.AddressLine1, useraddress.AddressLine2, rating.ratings, user.First_name, user.Paymentgatewayrefno, user.Last_name, servicerequest.ServiceStartDate, servicerequest.Status, useraddress.PostalCode, useraddress.City, useraddress.AddressId, servicerequest.ServiceRequestId from servicerequest left outer join user u2 on u2.Userid = servicerequest.Serviceproviderid join user on user.Userid = servicerequest.UserId join useraddress on useraddress.Userid = user.Userid left outer join rating on rating.Ratingto = servicerequest.Serviceproviderid group by servicerequest.ServiceRequestId");

                    // $_SESSION['res4'];
                if($datas) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['admindata'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['admindata']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }



        public function adminsusedatas($adminuseid){
            $usedatas =  $this->Query("SELECT user.First_name, user.Last_name, user.typeId, user.status, user.Userid, useraddress.PostalCode, useraddress.Mobile FROM user left outer join useraddress on useraddress.Userid = user.Userid group by user.Userid");

                    // $_SESSION['res4'];
                if($usedatas) {
                                        // code...
                                        // $_SESSION['serviceid'] = $this->fetchall();
                                    $_SESSION['adminusedata'] = $this->fetchall();
                                        
                                        return [true, $_SESSION['adminusedata']];
                                        
                                    }

                                    else{
                                        return false;
                                    }
                                    
        }


        public function impdata($hidid){
            $adddata = $this->Query("SELECT useraddress.AddressLine1, useraddress.AddressLine2, servicerequest.ServiceStartDate, useraddress.PostalCode,useraddress.City, useraddress.AddressId, servicerequest.ServiceRequestId from servicerequest left outer 
 join user on user.Userid = servicerequest.UserId join useraddress on useraddress.Userid = user.Userid where servicerequest.ServiceRequestId = $hidid group by servicerequest.ServiceRequestId ");

            if ($adddata) {
                // code...
                $_SESSION['dataexample'] = $this->fetchall();

                return [true, $_SESSION['dataexample']];
            }

            else{
                return false;
            }

        }


        public function refundimpdata($reuserid){
            $refundadddata = $this->Query("SELECT * from user join servicerequest on servicerequest.UserId = user.Userid WHERE user.Userid = $reuserid group by user.Userid");

            if ($refundadddata) {
                // code...
                $_SESSION['refunddata'] = $this->fetchall();

                return [true, $_SESSION['refunddata']];
            }

            else{
                return false;
            }

        }



        public function refundtotal($uid){
            if ($this->Query("UPDATE user set Paymentgatewayrefno = 'refunded' WHERE Userid = $uid")) {
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



?>

