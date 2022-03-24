
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/Service_History.css">    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/table.css">
      <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/imp.css">
    <script src="http://localhost/Home_DB/assets/js/index1.js"></script>
    <script src="http://localhost/Home_DB/assets/js/index.js"></script>
    <!-- <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> -->
    <script src="http://localhost/Home_DB/assets/js/imp2.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp3.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp4.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp5.js"></script>
</head>
<body>


 <nav class="navbar navbar-expand-lg navbar-light Rectangle sticky-top ">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo BASEURL; ?>/functions/Home"><img class="img" src="http://localhost/Home_DB/public/assets/images/serviceHistory/logo-small.png" alt=""></a>
          <button class="navbar-toggler" type="button" onclick="responsive_menu()" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link border br3 text-center" aria-current="page" href="<?php echo BASEURL; ?>/functions/demo">Book now</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo BASEURL; ?>/functions/Prices">Prices & services</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Warranty</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo BASEURL; ?>/functions/Home#blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo BASEURL; ?>/functions/Contact">Contact</a>
              </li>
              <li class="nav-item">
                  <div class="vl"></div>
              </li>
              <li class="nav-item">
                <button type="button" class="btn position-relative nav-link">
                        <img src="http://localhost/Home_DB/public/assets/images/serviceHistory/notification.png" alt="">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      2
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </button>
              </li>
             
              <li class="nav-item">
                <div class="vl"></div>
            </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="http://localhost/Home_DB/public/assets/images/serviceHistory/Contact.png" alt="">
                </a>         
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">welcome&nbsp<b><?php echo $this->getSession('First_name');?></b></a></li>
                  <!-- <li><a class="dropdown-item" href="#">my settings</a></li> -->
                   <div class="nav nav-pills " id="v-pills-tab" role="tablist">
                     <div class="nav-link" id="v-pills-helo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-helo" type="button" role="tab" aria-controls="v-pills-helo" aria-selected="false">&nbsp&nbspmy settings</div>
                   </div>
                  <li><a class="dropdown-item" href="<?php echo BASEURL; ?>/functions/logout">log out</a></li>
                </ul>
              </li>
            </ul>
           
            

            
          </div>
        </div>
      </nav>


       <div class="wlc box">
          <h2 class="text-center wlc-wrd">Welcome,<b><?php echo $this->getSession('First_name');?><input type="hidden" id="useid" name="useid" value="<?php echo $this->getSession('Userid');?>"></b> </h2>
      </div>



       <div class="container sh1">
        <div class="align-items-start hy">
            <div class="row float-start">
            <div class="container-fluid ver-nav navbar navbar-collapse navbar-nav">
                <div class="nav d-grid col-lg-12 nav-pills me-5 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="nav-link item1 home border-bottom active " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">New Service Requests</div>
                    <div class="nav-link item1  border-bottom" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Upcoming services</div>
                    <div class="nav-link item1 border-bottom" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Service History</div>
                    <div class="nav-link item1 border-bottom" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">My Ratings</div>
                    <div class="nav-link item1 border-bottom" id="v-pills-messages2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages2" type="button" role="tab" aria-controls="v-pills-messages2" aria-selected="false">Block Customer</div>
                  </div>
                  </div>

            </div>
        </div>
    </div>


  <div class="tab-content row tb-content" id="v-pills-tabContent">

    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

        <div class="sh">
                                                Current Service Requests
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div> 

    <table id="example" class="display float-end" style="width:100%">
        <thead>
            <tr>
                <th>Service Id <img src="images/data.png" alt=""></th>
                <th>Service Date<img src="images/data.png" alt=""> </th>
                <th>Service Provider<img src="images/data.png" alt=""> </th>
                <th>Payment<img src="images/data.png" alt=""></th>
                <th>Actions</th>
                <!-- <th>Salary</th> -->
            </tr>
        </thead>
        <tbody>
         <!-- <h2><?php echo $_SESSION['helo66']; ?></h2> -->
         <!-- <h2 id="imp77">ok</h2> -->
         <h2 id="ok2"></h2>
             <p><?php foreach($_SESSION['services'] as  $values): ?></p>
                                                    <tr>
                                                      <form action="<?php echo BASEURL; ?>/functions/accept" method="post">
                                                      <td>
                                                        <div>1</div>
                                                        <input type="" value="<?php echo $values->ServiceRequestId;?>" name="serviceid">
                                                        <input type="" value="<?php echo $values->Status;?>" id="statusid" name="status">
                                                        <input type="" value="<?php echo $this->getSession('Userid');?>" name="username">
                                                        <input type="" value="<?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?>" name="stime">
                                                      </td>
                                                      <td>
                                                        <div> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt="">&nbsp<?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?></div>
                                                        <div><img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png" alt="">&nbsp<?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?></div>
                                                      </td>
                                                      <td>
                                                      
                                                        <span><img class="img1" src="http://localhost/Home_DB/public/assets/images/serviceHistory/hat.png" alt=""></span> 
                                                        <span class="txt" >  Lyum Watson</span> 
                                                        <div class="txt1"><?php echo $values->First_name;?>&nbsp<?php echo $values->Last_name;?><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt=""> </div>
                                                      </td>
                                                        <td class="txt2">
                                                        <?php echo $values->TotalCost;?>&nbsp€
                                                      </td>
                                                      <td class="justify-content-center">
                                                        <button class="btn btn1 border" id="acceptbtn" name="acceptbtn">Accept</button>
                                                        <!-- <button type="submit" name="login" data-bs-toggle="modal" data-bs-target="#modal1<?php echo $values->ServiceRequestId;?>" id="login" class="btn btn2 border">cancel</button> -->
                                                      </td>
                                                      </form>
                                                    </tr>


                                                     <div class="modal fade" id="modalcontainer<?php echo $values->ServiceRequestId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Service Details</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="<?php echo BASEURL; ?>/functions/accept54654" method="POST">
                                                            <div class="col-md-10">
                                                                   
                                                                    <small><b><?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?>&nbsp<?php print_r($dateArray[1]);?>-<?php echo $values->endTime; ?></b></small><br>
                                                                    <small>Duration:<?php echo $values->ServiceHours;?>&nbspHrs</small>

                                                                </div>
                                                                <hr class="line2">
                                                                <!-- <br> -->
                                                                <div class="col-md-10">
                                                                    <small>Service Id: <?php echo $values->ServiceRequestId;?></small><br>
                                                                    <small>Extras: <?php echo $values->ExtraServices;?></small><br>
                                                                    <small class="txt2" >Net Amount: <?php echo $values->TotalCost;?> €</small>
                                                                </div>
                                                                <hr class="line2">

                                                                 <div class="col-md-10">
                                                                    <small>Service AAddress: <?php echo $values->ServiceRequestId;?></small><br>
                                                                    <small>Phone: <?php echo $values->Mobile;?></small><br>
                                                                    <small>Email: <?php echo $values->Email;?></small>
                                                                </div>
                                                                <hr class="line2">
                                                                <div>
                                                                   <button type="submit" name="login" id="login" class="btn btn1 border">Accept</button>
                                                                   <!-- <button type="submit" name="login" id="login" class="btn btn2 border">cancel</button> -->
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


                                                            <div class="modal fade" id="modal<?php echo $values->ServiceRequestId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content new justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Reschedule Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="<?php echo BASEURL; ?>/functions/reschedule" method="POST">
                                                            <div class="col-md-10">
                                                               <input type="hidden" name="cancelid1" value="<?php echo $values->ServiceRequestId;?>">
                                                               <input type="hidden" name="proid1" value="<?php echo $values->Serviceproviderid;?>">
                                                               <p>Select New Date & Time</p>
                                                                    <input type="date" id="date1" value="<?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?>" name="date1" placeholder="date">
                                                                    <select class="form-select-sm op" id="time" name="time1"
                                                                        aria-label="Default select example">
                                                                        <option selected value="<?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?>"></option>
                                                                        <option value="4">04:00:00</option>
                                                                        <option value="5">05:00:00</option>
                                                                        <option value="6">06:00:00</option>
                                                                    </select>
                                                                </div><br>
                                                                <div>
                                                                   <button type="submit" name="reschedule" id="login" class="btn ohk btn1 border">Reschadule</button>
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


                                                            <div class="modal fade" id="modal1<?php echo $values->ServiceRequestId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Cancel Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="<?php echo BASEURL; ?>/functions/Cancel1" method="POST">
                                                            <div class="col-md-10">
                                                              <input type="hidden" name="cancelid" value="<?php echo $values->ServiceRequestId;?>">
                                                              <input type="hidden" name="cancelproid" value="<?php echo $values->Serviceproviderid;?>">
                                                              <!-- <h2><?php echo $values->ServiceStartDate;?></h2> -->
                                                              <p>Why you want to cancel tha service request?</p>
                                                                    <textarea rows="5" cols="30"></textarea>

                                                                </div><br>
                                                                <div>
                                                                   <button type="submit" name="Cancel1" id="login" class="btn ohk btn1 border">Cancel now</button>
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
        
        </tbody>
      
    </table>
</div>


<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

   
    <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div>


                                               <table id="example1" class="display float-end" style="width:100%">

                                                <thead>
            <tr>
                <th>Service Details<img src="images/data.png" alt=""></th>
                <th>Service Date<img src="images/data.png" alt=""> </th>
                <th>Service Provider<img src="images/data.png" alt=""> </th>
                <th>Payment<img src="images/data.png" alt=""></th>
                <th>Rate SP</th>
                <!-- <th>Salary</th> -->
            </tr>
        </thead>
        <tbody>
             <p><?php foreach($_SESSION['serviceid2'] as  $values): ?></p>
                                                     <!-- <p><?php $hi =  $values->ServiceRequestId; ?></p> -->
                                                         <tr data-bs-toggle="modal" data-bs-target="#modalcontainer22<?php echo $values->ServiceRequestId;?>">
                                                          <td>323443</td>
                                                      <td>
                                                        <div> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt=""> <?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?></div>
                                                        <div><img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png"> <?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?></div>
                                                      </td>
                                                      <td>
                                                        <span class="txt" ><?php echo $values->First_name;?><?php echo $values->Last_name;?></span> 
                                                       <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/home.png" alt=""> <?php echo $values->AddressLine1;?>&nbsp<?php echo $values->AddressLine2;?><?php echo $values->City;?>&nbsp<?php echo $values->State;?><?php echo $values->PostalCode;?></div>
                                                    </td>
                                                        <td class="txt2">
                                                        €<?php echo $values->TotalCost;?>
                                                      </td>
                                                     <!--  <td><button class="border gbtn comp<?php echo $values->Status;?> status1"  ><?php echo $values->Status;?></button></td> -->
                                                      <!-- <p id="color1"></p> -->
                                                      <p><?php date_default_timezone_set('Asia/Kolkata'); $date =  date('Y-m-d'); $time = date('h:i:s'); $dateArray = explode(" ", $values->ServiceStartDate); $dateArray2 = $dateArray[0]; ?></p>
                                                      <td>
                                                        <?php if ($values->endTime < $time AND $dateArray2 < $date): ?>
                                                         <span><button id="completesr" data-bs-toggle="modal" data-bs-target="#compelete<?php echo $values->ServiceRequestId;?>" class="btn btn1 border">Complete</button></span> 
                                                          <?php endif; ?>
                                                        <span><button id="" data-bs-toggle="modal" data-bs-target="#modal12<?php echo $values->ServiceRequestId;?>" type="button" class="btn btn1 border">Cancel</button></span>
                                                      </td>
                                                    </tr>

                                                 
                                                     <div class="modal fade"  id="modal12<?php echo $values->ServiceRequestId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Cancel Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="<?php echo BASEURL; ?>/functions/chancelsr" id="important" method="POST">
                                                            <div class="col-md-10">
                                                              <input type="" name="srid" id="srid" value="<?php echo $values->ServiceRequestId;?>">
                                                              
                                                              <!-- <h2><?php echo $values->ServiceStartDate;?></h2> -->
                                                              
                                                                <div>
                                                                  <button id="cancelsr555"  type="submit" class="btn btn1 border">Cancel</button>
                                                                 </div>
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


                                                         <div class="modal fade" data-backdrop="false" id="compelete<?php echo $values->ServiceRequestId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Cancel Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="<?php echo BASEURL; ?>/functions/Cancel1" method="POST">
                                                            <div class="col-md-10">
                                                              <input type="hidden" name="cancelid" value="<?php echo $values->ServiceRequestId;?>">
                                                              <input type="hidden" name="cancelproid" value="<?php echo $values->Serviceproviderid;?>">
                                                              <!-- <h2><?php echo $values->ServiceStartDate;?></h2> -->
                                                              <p>Why you want to cancel tha service request?</p>
                                                                    <textarea rows="5" cols="30"></textarea>

                                                                </div><br>
                                                                <div>
                                                                   <button type="submit" name="Cancel1" id="login" class="btn ohk btn1 border">Cancel now</button>
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


                          </tbody>
    </table>

    </div>

    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

   
    <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div>


                                               <table id="example2" class="display float-end" style="width:100%">

                                                <thead>
            <tr>
                <th>Service Details<img src="images/data.png" alt=""></th>
                <th>Service Date<img src="images/data.png" alt=""> </th>
                <th>Service Provider<img src="images/data.png" alt=""> </th>
               
            </tr>
        </thead>
        <tbody>
             <p><?php foreach($_SESSION['servicehistory2'] as  $values): ?></p>
                                                     <!-- <p><?php $hi =  $values->ServiceRequestId; ?></p> -->
                                                         <tr data-bs-toggle="modal" data-bs-target="#modalcontainer22<?php echo $values->ServiceRequestId;?>">
                                                            <td>323443</td>
                                                      <td>
                                                        <div> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt=""> <?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?></div>
                                                        <div><img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png"> <?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?></div>
                                                      </td>
                                                      <td> 
                                                        <span class="txt" >   &nbsp&nbsp&nbsp<?php echo $values->First_name;?><?php echo $values->Last_name;?></span> 
                                                        <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/home.png" alt=""> <?php echo $values->AddressLine1;?>&nbsp<?php echo $values->AddressLine2;?><?php echo $values->City;?>&nbsp<?php echo $values->State;?><?php echo $values->PostalCode;?></div>
                                                    </td>
                                                     <!--    <td class="txt2">
                                                        €<?php echo $values->TotalCost;?>
                                                      </td> -->
                                                      <!-- <td><button class="border gbtn comp<?php echo $values->Status;?> status1"  ><?php echo $values->Status;?></button></td> -->
                                                      <p id="color1"></p>
                                                      <!-- <td><button data-bs-toggle="modal"  data-bs-target="#shistory<?php echo $hi;?>" class="btn btn1 border">Rate SP</button></td> -->
                                                    </tr>

                                                 





                                                     <p><?php endforeach; ?></p>


                          </tbody>
    </table>

    </div>


      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

    <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div>


                                               <table id="example3" class="display float-end" style="width:100%">

                                                <thead>
            <tr>
                <th>Service Details<img src="images/data.png" alt=""></th>
                <th>Service Date<img src="images/data.png" alt=""> </th>
                <th>Service Provider<img src="images/data.png" alt=""> </th>
                <!-- <th>Payment<img src="images/data.png" alt=""></th> -->
                <!-- <th>Rate SP</th> -->
                <!-- <th>Salary</th> -->
            </tr>
        </thead>
        <tbody>
             <p><?php foreach($_SESSION['userRating'] as  $values): ?></p>
                                                     <!-- <p><?php $hi =  $values->ServiceRequestId; ?></p> -->
                                                         <tr data-bs-toggle="modal" data-bs-target="#modalcontainer22<?php echo $values->ServiceRequestId;?>">
                                                      <td>
                                                        <div> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt=""> <?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?></div>
                                                        <div><img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png"> <?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?></div>
                                                      </td>
                                                      <td> <span><img class="img1" src="http://localhost/Home_DB/public/assets/images/serviceHistory/hat.png" alt=""></span> 
                                                        <span class="txt" ><?php echo $values->First_name;?><?php echo $values->Last_name;?></span> 
                                                        <div class="txt1">
                                                         
                                                          <div class="star-ratings">
                                                                    <div class="fill-ratings" style="width: <?php echo $values->ratings; ?>% !important;">
                                                                      <span class="star5">★★★★★</span>
                                                                    </div>
                                                                    <div class="empty-ratings">
                                                                      <span class="star5">★★★★★</span>
                                                                    </div>
                                                                  </div>
                                                                <span><?php echo $values->ratings/10; ?></span>  
                                                      </div>
                                                    </td>
                                                    <td>55</td>
                                                     <!--    <td class="txt2">
                                                        €<?php echo $values->TotalCost;?>
                                                      </td> -->
                                                      <!-- <td><button class="border gbtn comp<?php echo $values->Status;?> status1"  ><?php echo $values->Status;?></button></td>
                                                      <p id="color1"></p>
                                                      <td><button data-bs-toggle="modal"  data-bs-target="#shistory<?php echo $hi;?>" class="btn btn1 border">Rate SP</button></td> -->
                                                    </tr>

                                                 





                                                     <p><?php endforeach; ?></p>


                          </tbody>
    </table>

    </div>


     <div class="tab-pane fade" id="v-pills-messages2" role="tabpanel" aria-labelledby="v-pills-messages2-tab">
    
           <table id="" class="display float-end" style="width:100%"> 
        <tbody>
                                               
                      <div class=" icons spu first-row dp1">
                                    <div >
                                                    <p><?php foreach($_SESSION['userlist'] as  $values): ?></p>
                                                     
                                                    <form action="<?php echo BASEURL; ?>/functions/blockonly" id="okdok" method="POST">

                                                       <span class="col-sm-2 float-start card text-center">

                                            <div class="col-auto card-body">
                                               <input type="hidden" value="<?php echo $values->UserId;?>" name="useridblc">
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

                                        
                                                                 <input type="hidden" name="spidblc" value="<?php echo $values->Serviceproviderid;?>">
<!--  -->
                                        <!-- <input type="hidden" name="targetid" id="targetid" value="<?php echo $values->Userid;?>"> -->
                                                        <!-- <input type="hidden" name="userid" id="userid" value="<?php echo $values->UserId;?>"> -->
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
            Male</label>
            <label class="form-check-label imp12 imp100">
            <input class="form-check-input radio-inline" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            Female</label>
            <label class="form-check-label disabled imp12 imp100">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            Rather not to say</label>
        </div>
                                                                                        </div>

                                                                                        <div class="col-lg-10">
                                                                                            <label for="" class="form-control-label">Gender</label>
                                                                                           <!--  <div class="form-check">
          <label class="form-check-label" id="imp12">
            <input class="form-check-input radio-inline" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            Option one</label>
            <label class="form-check-label imp12 imp100">
            <input class="form-check-input radio-inline" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            Option two</label>
            <label class="form-check-label disabled imp12 imp100">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            Option three</label>
        </div> -->
          <div class=" justify-content-center icons first-row dp1">
                            <div class="row justify-content-center">
                                <div class="col-sm-2">
                                    <li class="list1"><input name="extras[]" type="radio"
                                            value="http://localhost/Home_DB/public/assets/images/book-service/1.png"
                                            class="Ellipse-667 avtar" id="cb1" />
                                        <label for="cb1" class="lb1"><img id="img1" 
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/1.png" /></label>
                                        <div class="text-3">Inside cabinets</div>
                                    </li>
                                </div>
                                <div class="col-sm-2">
                                    <li class="list1"><input type="radio"
                                            value="Inside fridge" name="extras[]"
                                            class="Ellipse-667 avtar" id="cb2" />
                                        <label for="cb2" class="lb1"><img id="img2"
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/2.png" /></label>
                                        <div name="extras[]" class="text-3">Inside fridge</div>
                                    </li>
                                </div>

                                <div class="col-sm-2">
                                    <li class="list1"><input type="radio" value="Inside oven"
                                            name="extras[]" class="Ellipse-667 avtar"
                                            id="cb3" />
                                        <label for="cb3" class="lb1"><img id="img3"
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/3.png" /></label>
                                        <div class="text-3">Inside oven</div>
                                    </li>
                                </div>
                                <div class="col-sm-2">
                                    <li class="list1"><input type="radio"
                                            value="Laundry wash & dry" name="extras[]"
                                            class="Ellipse-667 avtar" id="cb4" />
                                        <label for="cb4" class="lb1"><img id="img4"
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/4.png" /></label>
                                        <div class="text-3">Laundry wash & dry</div>
                                    </li>
                                </div>
                                <div class="col-sm-2">
                                    <li class="list1"><input type="radio" name="extras[]"
                                            class="Ellipse-667 avtar" id="cb5"
                                            value="Interior windows" />
                                        <label for="cb5" class="lb1"><img id="img5"
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/5.png" /></label>
                                        <div class="text-3">Interior windows</div>
                                    </li>
                                </div>
                            </div>
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
                                                                                        <input type="hidden" id="dbpass" value="<?php echo $this->getSession('dbpass');?>" name="dbpass">
                                                                                        <input type="hidden" id="changeid" name="changeid" value="<?php echo $this->getSession('Userid');?>">
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
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
    } );
     $('#example1').DataTable( {
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
    } );
     $('#example2').DataTable( {
        "order": [[ 2, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
    } );

      $('#example3').DataTable( {
        "order": [[ 2, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],  
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
        <script src="http://localhost/Home_DB/assets/js/Upcomingservice.js"></script>
      
     <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>