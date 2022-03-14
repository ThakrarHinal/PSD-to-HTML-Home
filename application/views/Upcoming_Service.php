

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/Upcoming_Serive.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

     <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js"></script>
     <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">

    <title>Service Provider -> Upcoming Service</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light Rectangle sticky-top ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="img" src="http://localhost/Home_DB/public/assets/images/UpcomingServices/logo-small.png" alt=""></a>
          <button class="navbar-toggler" onclick="responsive_menu()" id="iconbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Prices & services</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Warranty</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                  <div class="vl"></div>
              </li>
              <li class="nav-item">
                <button type="button" class="btn position-relative nav-link">
                        <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/notification.png" alt="">
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
                  <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/Contact.png" alt="">
                </a>         
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <div class="nav nav-pills " id="v-pills-tab" role="tablist">
                     <div class="nav-link" id="v-pills-helo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-helo" type="button" role="tab" aria-controls="v-pills-helo" aria-selected="false">My Settings</div>
                   </div>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
           
            

            
          </div>
        </div>
      </nav>

      <div class="wlc box">
          <h2 class="text-center wlc-wrd">Welcome, <b><?php echo $this->getSession('First_name');?></b> </h2>
      </div>


        
      

        
         
          
    
  
          
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
  </div>
       
           
        
            
    <!-- <p><?php print_r($_SESSION['serviceid']); ?></p>   -->
      

    <!-- <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade" id="pills-helo" role="tabpanel" aria-labelledby="pills-helo-tab"><h2>heloooo</h2></div>
    </div> -->


<div class="tab-content row tb-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div> 
                                              <div class="table-2 row float-end">
                                                <table id="imp" class="table table-responsive">
                                                  <thead class="table-light">
                                                    <tr>
                                                      <td  >Service Id <img src="images/data.png" alt=""> </td>
                                                      <td>Service Date<img src="images/data.png" alt=""> </td>
                                                      <td>Service Provider<img src="images/data.png" alt="">  </td>
                                                      <td>Payment<img src="images/data.png" alt=""> </td>
                                                      <td>Actions</td>
                                                    </tr>
                                                  </thead>
                                               <tbody>
                                                 
                                               </tbody>
                                                  <tr>
                <td>323443</td>
                <td><img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/cal.png" alt="">09/04/2018</div>
                <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/time.png" alt=""> 12:00 - 18:00</div></td>
                <td>
                  <div>David Bough</div>
                  <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                </td>
                <td>05 km</td>
                <td><button class="btn btn1 border">Cancel</button></td>
              </tr>
              <tr>
                <td>323444</td>
                <td><img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/cal.png" alt="">09/04/2018</div>
                <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/time.png" alt=""> 12:00 - 18:00</div></td>
                <td>
                  <div>David Bough</div>
                  <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                </td>
                <td>15 km</td>
                <td><button class="btn btn1 border">Cancel</button></td>
              </tr>
                                                 
                                          
                                                </table>
                                        
                                                <form class="form1" action="">
                                                  <span>show</span>
                                                  <select name="show" id="">
                                                  <option value="10">10</option>
                                                </select>
                                                <span>entries</span>
                                                <span>total records:55</span>
                                              </form>
                                        

                                              <nav aria-label="Page navigation example">
                                        <ul class="pagination page1">
                                          <li class="page-item"><a class="page-link pn1 pn" href="#">&lt;</a></li>
                                          <li class="page-item "><a class="page-link pn" href="#">&laquo;</a></li>
                                          <li class="page-item "><a class="page-link pn link1" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">4</a></li>
                                          <li class="page-item">
                                            <a class="page-link pn" href="#">&raquo;</a>
                                          </li>
                                          <li class="page-item"><a class="page-link pn pn2" href="#">&gt;</a></li>
                                        </ul>
                                        </nav>
                                        
                                              </div>
                                          </div>


                                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div> 
                                              <div class="row float-end sh2 table-2">
                                                <table class="table table-responsive">
                                                  <thead class="table-light">
                                                    <tr>
                                                      <td  >Service Details <img src="images/data.png" alt=""> </td>
                                                      <td>Service Provider<img src="images/data.png" alt=""> </td>
                                                      <td>Payment  <img src="images/data.png" alt="">  </td>
                                                      <td>Status <img src="images/data.png" alt=""> </td>
                                                      <td>Rate SP</td>
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
             
                                                  </tbody>
                                                 
                                                 
                                          
                                                </table>
                                                </div>
                                        
                                                <form class="form1" action="">
                                                  <span>show</span>
                                                  <select name="show" id="">
                                                  <option value="10">10</option>
                                                </select>
                                                <span>entries</span>
                                                <span>total records:55</span>
                                              </form>
                                              <nav aria-label="Page navigation example">
                                        <ul class="pagination page1">
                                          <li class="page-item"><a class="page-link pn1 pn" href="#">&lt;</a></li>
                                          <li class="page-item "><a class="page-link pn" href="#">&laquo;</a></li>
                                          <li class="page-item "><a class="page-link pn link1" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">4</a></li>
                                          <li class="page-item">
                                            <a class="page-link pn" href="#">&raquo;</a>
                                          </li>
                                          <li class="page-item"><a class="page-link pn pn2" href="#">&gt;</a></li>
                                        </ul>
                                        </nav>
                                        
                                              </div>
                                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div> 
                                              <div class="row float-end sh2">
                                                <table class="table table-responsive">
                                                  <thead class="table-light">
                                                    <tr>
                                                      <td  >Service Details <img src="images/data.png" alt=""> </td>
                                                      <td>Service Provider<img src="images/data.png" alt=""> </td>
                                                      <td>Payment  <img src="images/data.png" alt="">  </td>
                                                      <!-- td>Status <img src="images/data.png" alt=""> </td>
                                                      <td>Rate SP</td> -->
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                     <p><?php foreach($_SESSION['servicehistory2'] as  $values): ?></p>
                                                    <tr>
                <td>323443</td>
                <td><img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/cal.png" alt=""><?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?></div>
                <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/time.png" alt=""><?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[1]);?></div></td>
                <td>
                  <div><?php echo $values->First_name;?>&nbsp<?php echo $values->Last_name;?></div>
                  <div> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/home.png" alt=""> <?php echo $values->AddressLine1;?>&nbsp<?php echo $values->AddressLine2;?><?php echo $values->City;?>&nbsp<?php echo $values->State;?><?php echo $values->PostalCode;?></div>
                </td>
                
              </tr>
              
               <p><?php endforeach; ?></p>
                                                    

                                                  </tbody>
                                                 
                                                 
                                          
                                                </table>
                                        
                                                <form class="form1" action="">
                                                  <span>show</span>
                                                  <select name="show" id="">
                                                  <option value="10">10</option>
                                                </select>
                                                <span>entries</span>
                                                <span>total records:55</span>
                                              </form>
                                              <nav aria-label="Page navigation example">
                                        <ul class="pagination page1">
                                          <li class="page-item"><a class="page-link pn1 pn" href="#">&lt;</a></li>
                                          <li class="page-item "><a class="page-link pn" href="#">&laquo;</a></li>
                                          <li class="page-item "><a class="page-link pn link1" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">4</a></li>
                                          <li class="page-item">
                                            <a class="page-link pn" href="#">&raquo;</a>
                                          </li>
                                          <li class="page-item"><a class="page-link pn pn2" href="#">&gt;</a></li>
                                        </ul>
                                        </nav>
                                        
                                              </div>
                                          <!-- </div> -->
                                          </div>
                                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div> 
                                              <div class="row float-end sh2">
                                                <table class="table table-responsive">
                                                  <thead class="table-light">
                                                    <tr>
                                                      <td  >Service Details <img src="images/data.png" alt=""> </td>
                                                      <td>Service Provider<img src="images/data.png" alt=""> </td>
                                                      <td>Payment  <img src="images/data.png" alt="">  </td>
                                                      <td>Status <img src="images/data.png" alt=""> </td>
                                                      <td>Rate SP</td>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                            
                                                     <p><?php foreach($_SESSION['userlist'] as  $values): ?></p> 
                                                     <form method="post" action="<?php echo BASEURL; ?>/functions/blockonly">
                                                    <tr>
                                                      <td>
                                                        <!-- <div> <img src="images/calendar.png" alt=""> <?php echo $values->UserId;?> </div> -->
                                                        <input type="" value="<?php echo $values->UserId;?>" name="useridblc">
                                                        <div><?php echo $values->First_name;?>&nbsp<?php echo $values->Last_name;?></div>
                                                      </td>
                                                    
                                                      <!-- <td><div><?php echo $values->Serviceproviderid;?></div></td> -->
                                                      <td><input type="" name="spidblc" value="<?php echo $values->Serviceproviderid;?>"></td>
                                                      <?php if (!$values->isblockd == 1): ?>
                                                      <td><button class="border gbtn" type="submit" name="block" >Block</button></td>
                                                      <?php endif; ?>
                                                      <?php if ($values->isblockd == 1): ?>
                                                      <td><button class="border gbtn" type="submit" name="unblock" >unBlock</button></td>
                                                      <?php endif; ?>
                                                      
                                                    </tr>
                                                    </form>
                                                   <p><?php endforeach; ?></p>   
                                                  </tbody>
                                                 
                                                 
                                          
                                                </table>
                                        
                                                <form class="form1" action="">
                                                  <span>show</span>
                                                  <select name="show" id="">
                                                  <option value="10">10</option>
                                                </select>
                                                <span>entries</span>
                                                <span>total records:55</span>
                                              </form>
                                              <nav aria-label="Page navigation example">
                                        <ul class="pagination page1">
                                          <li class="page-item"><a class="page-link pn1 pn" href="#">&lt;</a></li>
                                          <li class="page-item "><a class="page-link pn" href="#">&laquo;</a></li>
                                          <li class="page-item "><a class="page-link pn link1" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">4</a></li>
                                          <li class="page-item">
                                            <a class="page-link pn" href="#">&raquo;</a>
                                          </li>
                                          <li class="page-item"><a class="page-link pn pn2" href="#">&gt;</a></li>
                                        </ul>
                                        </nav>
                                        
                                              </div>
                                          </div>



                                          
                                                 <div class="tab-pane fade" id="v-pills-messages2" role="tabpanel" aria-labelledby="v-pills-messages2-tab">
                                            <div class="sh">
                                                Service History
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div> 
                                              <div class="row float-end sh2">
                                                <table class="table table-responsive">
                                                  <thead class="table-light">
                                                    <!-- <h2>Hinal</h2> -->
                                                    <tr>
                                                      <td  >Service Details <img src="images/data.png" alt=""> </td>
                                                      <td>Service Provider<img src="images/data.png" alt=""> </td>
                                                      <td>Payment  <img src="images/data.png" alt="">  </td>
                                                      <!-- td>Status <img src="images/data.png" alt=""> </td>
                                                      <td>Rate SP</td> -->
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <p><?php foreach($_SESSION['favid'] as  $values): ?></p>
                                                    <form action="" id="blockunblock" method="POST">
                                                      <tr>
                                                      <td>
                                                        <div><?php echo $values->total . ' total cleaning';?></div>
                                                        <div><?php echo $values->First_name;?></div>
                                                        <!-- <div><?php echo $values->isfavourite;?></div> -->
                                                        <!-- <div></div> -->
                                                        <input type="hidden" name="targetid" id="targetid" value="<?php echo $values->Userid;?>">
                                                        <input type="hidden" name="userid" id="userid" value="<?php echo $values->UserId;?>">
                                                      </td>
                                                      <?php if (!$values->isblockd == 1): ?>
                                                      <td><button class="border gbtn" type="submit" name="block" >Block</button></td>
                                                      <?php endif; ?>
                                                      <?php if ($values->isblockd == 1): ?>
                                                      <td><button class="border gbtn" type="submit" name="unblock" >unBlock</button></td>
                                                      <?php endif; ?>
                                                      <?php if (!$values->isfavourite == 1): ?>
                                                      <td><button type="submit" name="fav" class="btn btn1 border">Favourite</button></td>
                                                       <?php endif; ?>
                                                       <?php if ($values->isfavourite == 1): ?>
                                                      <td><button type="submit" name="unfav" class="btn btn1 border">UnFavourite</button></td>
                                                      <?php endif; ?>
                                                    </tr>
                                                    
                                                    </form>
                                                    <p><?php endforeach; ?></p>
                                                    

                                                  </tbody>
                                                 
                                                 
                                          
                                                </table>
                                        
                                                <form class="form1" action="">
                                                  <span>show</span>
                                                  <select name="show" id="">
                                                  <option value="10">10</option>
                                                </select>
                                                <span>entries</span>
                                                <span>total records:55</span>
                                              </form>
                                              <nav aria-label="Page navigation example">
                                        <ul class="pagination page1">
                                          <li class="page-item"><a class="page-link pn1 pn" href="#">&lt;</a></li>
                                          <li class="page-item "><a class="page-link pn" href="#">&laquo;</a></li>
                                          <li class="page-item "><a class="page-link pn link1" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link pn" href="#">4</a></li>
                                          <li class="page-item">
                                            <a class="page-link pn" href="#">&raquo;</a>
                                          </li>
                                          <li class="page-item"><a class="page-link pn pn2" href="#">&gt;</a></li>
                                        </ul>
                                        </nav>
                                        
                                              </div>
                                          <!-- </div> -->
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

        
        <section class="f1">
          <div class=" my-5">

            <footer class=" text-center text-white" style="background-color: #111111;">
            <!-- Grid container -->
            <div class="container p-3 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <span class="foot"> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/footer.png" alt=""></span>
                <span class="foot1">HOME</span>
                <span class="foot1">ABOUT</span>
                <span class="foot1">TESTIMONIALS</span>
                <span class="foot1">FAQS</span>
                <span class="foot1">INSURANCE POLICY</span>
                <span class="foot1">IMPRESSUM</span>
                <span class="fb"> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/FB.png" alt=""></span>
                <span> <img src="http://localhost/Home_DB/public/assets/images/UpcomingServices/insta (1).png" alt=""></span>
                
                
          
              
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

      


     
           
      <script src="http://localhost/Home_DB/assets/js/Upcomingservice.js"></script>


     <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>