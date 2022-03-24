



 
  <div class="tab-content row tb-content" id="v-pills-tabContent">




    

<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

    <h2>hinal</h2>
    <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div>


                                               <table id="example2" class="display float-end" style="width:100%">

                                                <thead>
           <tr>
                                                      <th  >Service Details <img src="images/data.png" alt=""> </th>
                                                      <th>Service Provider<img src="images/data.png" alt=""> </th>
                                                      <th>Payment  <img src="images/data.png" alt="">  </th>
                                                      <th>Status <img src="images/data.png" alt=""> </th>
                                                      <th>Rate SP</td>
                                                    </tr>
        </thead>
        <tbody>
             <p><?php foreach($_SESSION['serviceid2'] as  $values): ?></p>
                                                     
                                                     <tr >
                                                    
                                                    

                                                <td>323444</td>
                                               
                                                <td><img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/cal.png" alt=""><?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?></div>
                                                <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/time.png" alt=""><?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?></div></td>
                                                <td>
                                                  <div><?php echo $values->First_name;?>&nbsp<?php echo $values->Last_name;?></div>
                                                  <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/home.png" alt=""><?php echo $values->AddressLine1;?>&nbsp<?php echo $values->AddressLine2;?><?php echo $values->City;?>&nbsp<?php echo $values->State;?><?php echo $values->PostalCode;?></div>
                                                </td>
                                                <td><?php echo $values->TotalCost;?>&nbsp€</td>
                                                <p><?php date_default_timezone_set('Asia/Kolkata'); $date =  date('Y-m-d'); $time = date('h:i:s'); $dateArray = explode(" ", $values->ServiceStartDate); $dateArray2 = $dateArray[0]; ?></p>
                                                <?php if ($values->endTime < $time AND $dateArray2 < $date): ?>
                                                <td><button id="completesr"  class="btn btn1 border">Complete</button></td>
                                                 <?php endif; ?>
                                                 <td><button id="" data-bs-toggle="modal" data-bs-target="#modal12<?php echo $values->ServiceRequestId;?>" type="button" class="btn btn1 border">Cancel</button></td>
                                              </tr>

                                                      <div class="modal fade" id="modal12<?php echo $values->ServiceRequestId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Cancel Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="" id="important" method="POST">
                                                            <div class="col-md-10">
                                                              <input type="" name="srid" id="srid" value="<?php echo $values->ServiceRequestId;?>">
                                                              
                                                              <!-- <h2><?php echo $values->ServiceStartDate;?></h2> -->
                                                              
                                                                <div>
                                                                  <button id="cancelsr555"  type="button" onclick="cancelsr1()" class="btn btn1 border">Cancel</button>
                                                                 </div>
                                                             
                                                          </form>
                                                           </div>
                                                       <!--  <div class="modal-footer">
                                                           
                                                             <div class="text-center">
                                                                  
                                                                </div>
                                                         </div> -->
                                                        </div>
                                                        </div>
                                                        </div> 


                                             




                                                     <p><?php endforeach; ?></p>

    </table>

    </div>



    <div class="tab-pane fade" id="v-pills-messages2" role="tabpanel" aria-labelledby="v-pills-messages2-tab">

    <h2>hinal4</h2>
    <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div>


                                               <table id="example3" class="display float-end" style="width:100%">

                                                <thead>
           <tr>
                                                      <th  >Service Details <img src="images/data.png" alt=""> </th>
                                                      <th>Service Provider<img src="images/data.png" alt=""> </th>
                                                      <th>Payment  <img src="images/data.png" alt="">  </th>
                                                      <!-- <th>Status <img src="images/data.png" alt=""> </th> -->
                                                      <!-- <th>Rate SP</td> -->
                                                    </tr>
        </thead>
        <tbody>
             <p><?php foreach($_SESSION['serviceid2'] as  $values): ?></p>
                                                     
                                             <tr>
                <td>323443</td>
                <td>
                  <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/cal.png" alt=""><?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?></div>
                <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/time.png" alt=""><?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?></div>
              </td>
                <td>
                  <div><?php echo $values->First_name;?>&nbsp<?php echo $values->Last_name;?></div>
                  <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/home.png" alt=""> <?php echo $values->AddressLine1;?>&nbsp<?php echo $values->AddressLine2;?><?php echo $values->City;?>&nbsp<?php echo $values->State;?><?php echo $values->PostalCode;?></div>
                </td>
                
              </tr>


                                             




                                                     <p><?php endforeach; ?></p>

    </table>

    </div>


     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        <h2>kdjfgh1</h2>
           <table id="example4" class="display float-end" style="width:100%"> 
        <tbody>
                                               
                      <div class=" icons spu first-row dp1">
                                    <div >
                                                   <p><?php foreach($_SESSION['userlist'] as  $values): ?></p> 
                                                     
                                                    <form action="<?php echo BASEURL; ?>/functions/blockonly" id="okdok" method="POST">

                                                       <span class="col-sm-2 float-start card text-center">
                                            <div class="col-auto card-body">
                                               <input type="" value="<?php echo $values->UserId;?>" name="useridblc">
                                                <span>
                                                    <div >
                                                    <img class="img1"
                                                        src="http://localhost/Home_DB/public/assets/images/book-service/forma-1-copy-19.png"
                                                        alt="">
                                                </div>
                                                </span>
                                                </div>


                                                
                                                <div class="div1">
                                            <?php echo $values->First_name;?>&nbsp<?php echo $values->Last_name;?>
                                        </div>

                                        
                                                                  
                                                  
                                                        <input type="" name="spidblc" value="<?php echo $values->Serviceproviderid;?>">
                                                        <div class="call1">
                                                      <?php if (!$values->isblockd == 1): ?>
                                                        <span>
                                                      <button class="border gbtn ohk5 selectsp1" type="submit" name="block" >Block</button>
                                                    </span>
                                                      <?php endif; ?>
                                                      <?php if ($values->isblockd == 1): ?>
                                                        <span>
                                                      <button class="border gbtn ohk5 selectsp1 " type="submit" name="unblock" >unBlock</button>
                                                    </span>
                                                      <?php endif; ?>
                                                      
                                                  </div>
                                                    
                                       
                                </span>

                                                      <tr>
                                                     
                                                    </tr>
                                                    
                                                    </form>
                                                    <p><?php endforeach; ?></p>
                                                    
                                                     </div>
                                          
                                          </div>





                                                         


                                                    
        
        </tbody>
      
    </table>
    </div>

    
                                           <div class="tab-pane fade" id="v-pills-helo" role="tabpanel" aria-labelledby="v-pills-helo-tab">
                                            
                                                  <div class="container main">
                                                        <div>
                                                            <div class="col-auto">
                                                                <div class="container mt-3">
                                                                    <!-- Nav pills -->
                                                                    <ul class="nav nav-pills" role="tablist">
                                                                        <li class="nav-item li-1" id="tab1">
                                                                            <a class="nav-link tb-li border-bottom" data-bs-toggle="pill" href="#home1"><img
                                                                                    src="setup-service.png"
                                                                                    alt="">Set up Service</a>
                                                                        </li>
                                                                       
                                                                        <li class="nav-item li-1  " id="tab3">
                                                                            <a class="nav-link border-bottom tb-li" data-bs-toggle="pill" href="#menu21"><img
                                                                                    src="Details.png"
                                                                                    alt="">Your Details</a>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    <!-- Tab panes -->
                                                            <div class="tab-content">
                                                                <div id="home1" class="container tab-pane active"><br>
                                                                    <table>
                                                                        <tbody>
                                                                            <tr class="row-lg tab-pane" id="set-up">
                                                                                <td>
                                                                                  <p>Acount Status: Active</p>
                                                                                  <div class="col-sm-2 float-end">hello</div>
                                                                                  <div class="col-md-8">
                                                                                    Basic Details
                                                                                    <hr class="line2">
                                                                                  </div>

                                                                                  <!-- <span class="float-end">helo</span>   -->
                                                                                   <form action="" id="updateprofile22">
                                                                                    <div class="row g-3">
                                                                                        <div class="col-md-4">
                                                                                            <label for="city" class="form-control-label">First name</label>
                                                                                          <input type="text" id="fname" class="form-control" placeholder="City" name="fname" value="<?php echo $this->getSession('First_name');?>" aria-label="City">
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="" class="form-control-label">Last name</label>
                                                                                          <input type="text" name="lname" id="lname" value="<?php echo $this->getSession('lname');?>" class="form-control" placeholder="State" aria-label="State">
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="" class="form-control-label">E-mail address</label>
                                                                                          <input type="email" name="e-mail" id="e-mail" value="<?php echo $this->getSession('Email');?>" class="form-control" placeholder="Zip" aria-label="Zip">
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="" class="form-control-label">Mobile number</label>
                                                                                          <input type="text" name="mobilenum" value="<?php echo $this->getSession('mobile');?>" id="mobilenum" class="form-control" placeholder="City" aria-label="City">
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <label for="" class="form-control-label">Date of Birth</label>
                                                                                          <!-- <input type="text" class="form-control" placeholder="State" aria-label="State"> -->
                                                                                          <div class="row first-row dp1">
                                                                                            <div class="col-auto">
                                                                                                <span>
                                                                
                                                                                                    <!-- <input type="date" id="date" name="date" placeholder="date"> -->
                                                                                                    <select class="form-select-sm op" id="time" name="time"
                                                                                                        aria-label="Default select example">
                                                                                                        <option selected value="3">3:00</option>
                                                                                                        <option value="4">4:00</option>
                                                                                                        <option value="5">5:00</option>
                                                                                                        <option value="6">6:00</option>
                                                                                                    </select>
                                                                                                    <p id="dateCheck"></p>
                                                                                                </span>
                                                                                            </div>
                                                                
                                                                                            <div class="col-auto">
                                                                                                <span>
                                                                                                    <select name="hrs" id="hrs" class="form-select-sm op"
                                                                                                        aria-label="Default select example">
                                                                                                        <option selected value="3 ">3</option>
                                                                                                        <option value="4 ">4 </option>
                                                                                                        <option value="5 ">5</option>
                                                                                                        <option value="6 ">6 </option>
                                                                                                    </select>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="col-auto">
                                                                                                <span>
                                                                                                    <select name="hrs" id="hrs" class="form-select-sm op"
                                                                                                        aria-label="Default select example">
                                                                                                        <option selected value="3 ">3</option>
                                                                                                        <option value="4 ">4 </option>
                                                                                                        <option value="5 ">5</option>
                                                                                                        <option value="6 ">6 </option>
                                                                                                    </select>
                                                                                                </span>
                                                                                            </div>
                                                                
                                                                                        </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="" class="form-control-label">Nationality</label>
                                                                                             <select name="hrs" id="hrs" class="form-select op"
                                                                                                        aria-label="Default select example">
                                                                                                        <option selected value="3 ">3</option>
                                                                                                        <option value="4 ">4 </option>
                                                                                                        <option value="5 ">5</option>
                                                                                                        <option value="6 ">6 </option>
                                                                                                    </select>
                                                                                        </div>
                                                                                     
                                                                                        <div class="col-lg-10">
                                                                                            <label for="" class="form-control-label">Gender</label>
                                                                                            <div class="form-check">
          <label class="form-check-label" id="imp12">
            <input class="form-check-input radio-inline" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            Option one</label>
            <label class="form-check-label imp12">
            <input class="form-check-input radio-inline" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            Option two</label>
            <label class="form-check-label disabled imp12">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            Option three</label>
        </div>
                                                                                        </div>

                                                                                        <div class="col-lg-10">
                                                                                            <label for="" class="form-control-label">Gender</label>
                                                                                            <div class="form-check">
          <label class="form-check-label" id="imp12">
            <input class="form-check-input radio-inline" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            Option one</label>
            <label class="form-check-label imp12">
            <input class="form-check-input radio-inline" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            Option two</label>
            <label class="form-check-label disabled imp12">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            Option three</label>
        </div>
                                                                                        </div>


                                                                                      <hr class="line2">

                                                                                      <p><?php foreach($_SESSION['row'] as  $values): ?></p>
                                                                                      <div class="col-md-4">
                                                                                            <label for="city" class="form-control-label">Street name</label>
                                                                                          <input type="text" id="streetname" class="form-control" placeholder="City" name="streetname" value="<?php echo $values->AddressLine1;?>" aria-label="City">
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="" class="form-control-label">House number</label>
                                                                                          <input type="text" name="Housenum" id="Housenum" value="<?php echo $values->AddressLine2;?>" class="form-control" placeholder="State" aria-label="State">
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="" class="form-control-label">Postal code</label>
                                                                                          <input type="" name="postalcode" id="postalcode" value="<?php echo $values->PostalCode;?>" class="form-control" placeholder="Zip" aria-label="Zip">
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="city" class="form-control-label">City</label>
                                                                                          <input type="text" id="city" class="form-control" placeholder="City" name="city" value="<?php echo $values->City;?>" aria-label="City">
                                                                                        </div>
                                                                                        <p><?php endforeach; ?></p>
                                                                                        <hr class="line2">
                                                                                         </div>

                                                                                      <div class="col-md-4">
                                                                                        <label for="city" class="form-control-label">city</label>
                                                                                      <!-- <input type="text" class="form-control" placeholder="State" aria-label="State"> -->
                                                                                      <div class="col-auto">
                                                                                        <span>
                                                        
                                                                                            <input type="" value="<?php echo $this->getSession('Userid');?>" id="uid22" name="uid22" placeholder="date">
                                                                                            <select class="form-select-sm op" id="time" name="time"
                                                                                                aria-label="Default select example">
                                                                                                <option selected value="3">3:00</option>
                                                                                                <option value="4">4:00</option>
                                                                                                <option value="5">5:00</option>
                                                                                                <option value="6">6:00</option>
                                                                                            </select>
                                                                                            <p id="dateCheck"></p>
                                                                                        </span>

                                                                                    </div>
                                                                                      
                                                                                    </div>
                                                                                    <div><button class="border pbtn" type="submit" name="saved" >save</button></div> 
                                                                                   </form>
                                                                                </td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    

                                                                </div>
                                       

                                                                <div id="menu21" class="container tab-pane fade"><br>
                                                                    <table>
                                                                        <tbody>
                                                                           
                                                                            <tr class="row-lg">
                                                                                <td>
                                                                                   
                                                                                    <!-- //     // code... -->
                                                                                       
                                                                                       
                                                                                    
                                                                                        <form class="row g-3" method="post" id="continue">
                                                                                
                                                                                       <div>
                                                                                        <input type="" id="dbpass" value="<?php echo $this->getSession('dbpass');?>" name="dbpass">
                                                                                        <input type="" id="changeid" name="changeid" value="<?php echo $this->getSession('Userid');?>">
                                                                                           <div>
                                                                                            <label for="">Old password</label>
                                                                                          </div>
                                                                                              <input name="oldpass" id="oldpass" type="text">
                                                                                        </div>
                                                                                              <div>
                                                                                                  <div>
                                                                                                    <label for="">new password</label>
                                                                                                  </div>
                                                                                               <input name="newpass" id="newpass" type="text">
                                                                                           </div> 
                                                                                           <div>
                                                                                              <div>
                                                                                                <label for="">confirm password</label>
                                                                                              </div>
                                                                                       <input name="confirmpass" id="confirmpass" type="text">
                                                                                   </div>
                                                                                   <button type="submit" name="changepass" id="changepass" class="btn btn1">Save</button>  
                                                                                </form>

                                                                                  
                                                                                </td>

                                                                            </tr>

                                                                           
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                


                                                    </div>


                                          </div>
                                        </div>
                                      </div>
                                    </div>           
                                           
                                  </div>

    
</div>

    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
     $('#example1').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
     $('#example2').DataTable( {
        "order": [[ 3, "desc" ]]
    } );

      $('#example3').DataTable( {
        "order": [[ 3, "desc" ]]
    } );

        $('#example4').DataTable( {
        "order": [[ 3, "desc" ]]
    } );

} );
    </script>


     <section class="f1">
          <div class=" my-5">

            <footer class=" text-center text-white" style="background-color: #111111;">
            <!-- Grid container -->
            <div class="container p-3 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <span class="foot"> <img src="http://localhost/Home_DB/public/assets/images/serviceHistory/footer.png" alt=""></span>
                <span class="foot1">HOME</span>
                <span class="foot1">ABOUT</span>
                <span class="foot1">TESTIMONIALS</span>
                <span class="foot1">FAQS</span>
                <span class="foot1">INSURANCE POLICY</span>
                <span class="foot1">IMPRESSUM</span>
                <span class="fb"> <img src="http://localhost/Home_DB/public/assets/images/serviceHistory/FB.png" alt=""></span>
                <span> <img src="http://localhost/Home_DB/assets/images/serviceHistory/insta (1).png" alt=""></span>
                
                
          
              
              </section>
              <!-- Section: Social media -->
            </div>
  
            <hr class="hr1">
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3 l-txt" style="background-color: #111111;">
              ©2018 Helperland. 
              <a class="text-white l-txt">All rights reserved. Terms and Conditions | Privacy Policy</a>
            </div>
            <!-- Copyright -->
          </footer>
            
          </div>
  
        </section>

      

      <script src="http://localhost/Home_DB/assets/js/demo.js"></script>
      
     <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>