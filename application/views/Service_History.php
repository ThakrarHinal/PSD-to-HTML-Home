
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

<!-- <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>


    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/table.css">
    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/imp.css">
    <script src="http://localhost/Home_DB/assets/js/index1.js"></script>
    <script src="http://localhost/Home_DB/assets/js/index.js"></script>

    <script src="http://localhost/Home_DB/assets/js/imp2.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp3.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp4.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp5.js"></script>
    <!-- <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> -->
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
                    <div class="nav-link item1 home border-bottom active " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</div>
                    <div class="nav-link item1  border-bottom" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Service History</div>
                    <div class="nav-link item1 border-bottom" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Favourite Pros</div>
                    <!-- <div class="nav-link item1 border-bottom" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"> Settings</div> -->
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
                <th></th>
                <th>Actions</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <!-- <th>Salary</th> -->
            </tr>
        </thead>
        <tbody>
                                                     
        
        </tbody>

          <div class="modal fade" id="modalcontainer" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Service Details</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="" method="POST">
                                                            <div class="col-md-10">
                                                                   
                                                                    <small><b id="date"></b></small><br>
                                                                    <small>Duration:<span id="time"></span>&nbspHrs</small>

                                                                </div>
                                                                <hr class="line2"> 
                                                                <!-- <br> -->
                                                                 <div class="col-md-10">
                                                                    <small>Service Id: <span id="srid"></span></small><br>
                                                                    <small>Extras: <span id="ex"></span></small><br>
                                                                    <small class="txt2" >Net Amount: <span id="net"></span> €</small>
                                                                </div>
                                                                <hr class="line2">

                                                                 <div class="col-md-10">
                                                                    <small>Service AAddress:<span id="add"></span></small><br>
                                                                    <small>Phone: <span id="mob"></span></small><br>
                                                                    <small>Email: <span id="mail"></span> </small>
                                                                </div>
                                                                <hr class="line2">
                                                                <div>
                                                                   <button type="submit" name="login" id="login" class="btn btn1 border">Reschadule</button>
                                                                   <button type="submit" name="login" id="login" class="btn btn2 border">cancel</button>
                                                                 </div>
                                                             
                                                          </form>
                                                           </div> 
                                                         </div>
                                                        </div>
                                                        </div>


                                                         <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content new justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Reschedule Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="" id="reschedule1" method="POST">
                                                            <div class="col-md-10">
                                                               <input type="hidden" name="cancelid1" id="cancelid1" value="">
                                                               <input type="hidden" id="proid1" name="proid1" value="">
                                                               <p>Select New Date & Time</p>
                                                                    <input type="date" id="date1" value="" name="date1" placeholder="date">
                                                                    <!-- <input type="time" value="" id="time1" name="time1"> -->
                                                                    <select class="form-select-sm op" id="time1" name="time1"
                                                                        aria-label="Default select example">
                                                                        <option selected value="3">03:00:00</option>
                                                                        <option value="4">04:00:00</option>
                                                                        <option value="5">05:00:00</option>
                                                                        <option value="6">06:00:00</option>
                                                                    </select>
                                                                </div><br>
                                                                <div>
                                                                   <button type="submit" name="reschedule" id="login1" class="btn ohk btn1 border">Reschadule</button>
                                                                 </div>
                                                             
                                                          </form>
                                                           </div> 
                                                        </div>
                                                        </div>
                                                        </div>


                                                        <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Cancel Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="" id="Cancel" method="POST">
                                                            <div class="col-md-10">
                                                              <input type="" id="cancelid" name="cancelid" value="">
                                                              <input type="" id="cancelproid" name="cancelproid" value=""> 
                                                              <!-- <h2><?php echo $values->ServiceStartDate;?></h2> -->
                                                             <p>Why you want to cancel tha service request?</p>
                                                                    <textarea rows="5" cols="30"></textarea>

                                                                </div><br>
                                                                <div>
                                                                   <button type="submit" name="Cancel1" id="login" class="btn ohk btn1 border">Cancel now</button>
                                                                 </div>
                                                             
                                                          </form>
                                                           </div> 
                                                       </div>
                                                        </div>
                                                        </div>  


      
    </table>
</div>


<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


    <div class="sh">
                                                Service History
                                                <!-- <button class="btn float-end ex ex1 border">Export</button> -->
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

        </tbody>
             <!-- 
                                                     

                                                     
                                                    <div class="modal fade" id="modalcontainer22<?php echo $values->ServiceRequestId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Service Details</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form action="<?php echo BASEURL; ?>/functions/userlogin" method="POST">
                                                            <div class="col-md-10">
                                                                   
                                                                    <small><b><?php $dateArray = explode(" ", $values->ServiceStartDate); print_r($dateArray[0]);?>&nbsp<?php print_r($dateArray[1]);?>-<?php echo $values->endTime; ?></b></small><br>
                                                                    <small>Duration:<?php echo $values->ServiceHours;?>&nbspHrs</small>

                                                                </div>
                                                                <hr class="line2">
                                                                 <br> -->
                                                               <!-- <div class="col-md-10">
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
                                                                   <button type="submit" name="login" id="login" class="btn btn1 border">Reschadule</button>
                                                                   <button type="submit" name="login" id="login" class="btn btn2 border">cancel</button>
                                                                 </div>
                                                             
                                                          </form>
                                                           </div> -->
                                                       
                                                      <!--   </div>
                                                        </div>
                                                        </div> -->


                                                     <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="Modal3" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Rate your service provider</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <form id="ratesp11" action="" method="post">
                                                            <div class="col-md-10">
                                                              <input type="" id="serviceid1" name="serviceid1" value="">
                                                              <!-- <input type="number" id="ratingtosp" name="ratingtosp" value="<?php echo $values->Serviceproviderid;?>"> -->
                                                              <input type="" class="helook" name="helook" id="helook" value="">
                                                              <input type="" name="helook2" id="helook2" value="">
                                                              <input type="" id="ratingfrom" name="ratingfrom" value="">
                                                              <label>Comment</label>
                                                              <input type="text" id="comment" name="commentsp">
                                                              <input type="" name="value5" class="value5" value="" id="value5">
                                                             

                                                                </div>
                                                                  <div class="star-ratings">
                                                                    <div class="fill-ratings" style="width: 50% !important;">
                                                                      <span class="star5">★★★★★</span>
                                                                    </div>
                                                                    <div class="empty-ratings">
                                                                      <span class="star5">★★★★★</span>
                                                                    </div>
                                                                  </div>
                                                                <div>
                                                                  <span>On time arrival</span>
                                                                    <fieldset class="rating">
                                                                <input type="radio" class="st" id="star5" name="rating" value="5" />
                                                                <label class = "full st-lb" for="star5" title="Awesome - 5 stars"></label>
                                                                <input type="radio" class="st" id="star4half" name="rating" value="4.5" /><label class="half st-lb" for="" title="Pretty good - 4.5 stars"></label>
                                                                <input type="radio" class="st" id="star4" name="rating" value="4" /><label class = "full st-lb" for="star4" title="Pretty good - 4 stars"></label>
                                                                <input type="radio" class="st" id="star3half" name="rating" value="3.5" /><label class="half st-lb" for="star3half" title="Meh - 3.5 stars"></label>
                                                                <input type="radio" class="st" id="star3" name="rating" value="3" /><label class = "full st-lb" for="star3" title="Meh - 3 stars"></label>
                                                                <input type="radio" class="st" id="star2half" name="rating" value="2.5" /><label class="half st-lb" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                <input type="radio" class="st" id="star2" name="rating" value="2" /><label class = "full st-lb" for="star2" title="Kinda bad - 2 stars"></label>
                                                                <input type="radio" class="st" id="star1half" name="rating" value="1.5" /><label class="half st-lb" for="star1half" title="Meh - 1.5 stars"></label>
                                                                <input type="radio" class="st" id="star1" name="rating" value="1" /><label class = "full st-lb" for="star1" title="Sucks big time - 1 star"></label>
                                                                <input type="radio" class="st" id="starhalf" name="rating" value="0.5" /><label class="half st-lb" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                                  </div><br>

                                                                                            <div>
                                                                    <fieldset class="rating1">
                                                                <input type="radio" class="star" id="ratestar5" name="rating1" value="5" /><label class = "full star-lb" for="ratestar5" title="Awesome - 5 stars"></label>
                                                                <input type="radio" class="star" id="ratestar4half" name="rating1" value="4.5" /><label class="half star-lb" for="ratestar4half" title="Pretty good - 4.5 stars"></label>
                                                                <input type="radio" class="star" id="ratestar4" name="rating1" value="4" /><label class = "full star-lb" for="ratestar4" title="Pretty good - 4 stars"></label>
                                                                <input type="radio" class="star" id="ratestar3half" name="rating1" value="3.5" /><label class="half star-lb" for="ratestar3half" title="Meh - 3.5 stars"></label>
                                                                <input type="radio" class="star" id="ratestar3" name="rating1" value="3" /><label class = "full star-lb" for="ratestar3" title="Meh - 3 stars"></label>
                                                                <input type="radio" class="star" id="ratestar2half" name="rating1" value="2.5" /><label class="half star-lb" for="ratestar2half" title="Kinda bad - 2.5 stars"></label>
                                                                <input type="radio" class="star" id="ratestar2" name="rating1" value="2" /><label class = "full star-lb" for="ratestar2" title="Kinda bad - 2 stars"></label>
                                                                <input type="radio" class="star" id="ratestar1half" name="rating1" value="1.5" /><label class="half star-lb" for="ratestar1half" title="Meh - 1.5 stars"></label>
                                                                <input type="radio" class="star" id="ratestar1" name="rating1" value="1" /><label class = "full star-lb" for="ratestar1" title="Sucks big time - 1 star"></label>
                                                                <input type="radio" class="star" id="ratestarhalf" name="rating1" value="0.5" /><label class="half star-lb" for="ratestarhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                                Friendly
                                                                  </div><br>

                                                                  <div>
                                                                    <fieldset class="rating2">
                                                                <input type="radio" class="star1" id="rate1star5" name="rating2" value="5" /><label class = "full star1-lb" for="rate1star5" title="Awesome - 5 stars"></label>
                                                                <input type="radio" class="star1" id="rate1star4half" name="rating2" value="4.5" /><label class="half star1-lb" for="rate1star4half" title="Pretty good - 4.5 stars"></label>
                                                                <input type="radio" class="star1" id="rate1star4" name="rating2" value="4" /><label class = "full star1-lb" for="rate1star4" title="Pretty good - 4 stars"></label>
                                                                <input type="radio" class="star1" id="rate1star3half" name="rating2" value="3.5" /><label class="half star1-lb" for="rate1star3half" title="Meh - 3.5 stars"></label>
                                                                <input type="radio" class="star1" id="rate1star3" name="rating2" value="3" /><label class = "full star1-lb" for="rate1star3" title="Meh - 3 stars"></label>
                                                                <input type="radio" class="star1" id="rate1star2half" name="rating2" value="2.5" /><label class="half star1-lb" for="rate1star2half" title="Kinda bad - 2.5 stars"></label>
                                                                <input type="radio" class="star1" id="rate1star2" name="rating2" value="2" /><label class = "full star1-lb" for="rate1star2" title="Kinda bad - 2 stars"></label>
                                                                <input type="radio" class="star1" id="rate1star1half" name="rating2" value="1.5" /><label class="half star1-lb" for="rate1star1half" title="Meh - 1.5 stars"></label>
                                                                <input type="radio" class="star1" id="rate1star1" name="rating2" value="1" /><label class = "full star1-lb" for="rate1star1" title="Sucks big time - 1 star"></label>
                                                                <input type="radio" class="star1" id="rate1starhalf" name="rating2" value="0.5" /><label class="half star1-lb" for="rate1starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>Quality of Service
                                                                  </div>

                                                                <div>
                                                                   <button type="submit" name="save" class="btn btn1 border">Submit</button>
                                                                 </div>

                                                              </form>
                                                          
                                                           </div>
                                                          
                                                         </div>
                                                        </div>
                                                        </div> 
    </table>

    </div>


     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        
           <table id="example2" class="display float-end" style="width:100%"> 
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
        <tbody>
    
        </tbody>
      
    </table>
    </div>

    
                                           <div class="tab-pane fade" id="v-pills-helo" role="tabpanel" aria-labelledby="v-pills-helo-tab">
                                            
                                                  
                                                    <div class="container main">
                                                        <div>
                                                            <div class="col-sm-7 float-start">
                                                                <div class="container mt-3">
                                                                    <!-- Nav pills -->
                                                                    <ul class="nav nav-pills" role="tablist">
                                                                        <li class="nav-item li-1" id="tab1">
                                                                            <a class="nav-link tb-li border-bottom" data-bs-toggle="pill" href="#home1"><img
                                                                                    src="setup-service.png"
                                                                                    alt="">Set up Service</a>
                                                                        </li>
                                                                        <li class="nav-item li-1 " id="tab2">
                                                                            <a class="nav-link border-bottom tb-li " data-bs-toggle="pill" href="#menu11"><img
                                                                                    src="schedule.png"
                                                                                    alt="">Schedule & Plan</a>
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
                                                                                    
                                                                                   <form action="" id="updateprofile">
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
                                                                                        <div class="col-md-6">
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
                                                                                      </div>
                                                                                      <hr class="line2">
                                                                                      <div class="col-md-4">
                                                                                        <label for="city" class="form-control-label">city</label>
                                                                                      <!-- <input type="text" class="form-control" placeholder="State" aria-label="State"> -->
                                                                                      <div class="col-auto">
                                                                                        <span>
                                                        
                                                                                            <input type="" value="<?php echo $this->getSession('Userid');?>" id="uid" name="uid" placeholder="date">
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
                                                                <div id="menu11" class="container tab-pane fade"><br>
                                                    
                                                            <div class="row ">
                                                                <table class="table border table-responsive">
                                                                  <thead class="table-light">
                                                                    <tr>
                                                                      <td >Service Details <img src="data.png" alt=""> </td>
                                                                      <td>Service Provider<img src="data.png" alt=""> </td>
                                                                     
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                    <p><?php foreach($_SESSION['row'] as  $values): ?></p>
                                                                    <tr>
                                                                      <td>
                                                                         
                                                                        <div><b>Address</b>:&nbsp<span><?php echo $values->AddressLine1;?></span>&nbsp<span><?php echo $values->AddressLine2;?></span>&nbsp<span><?php echo $values->City;?></span>&nbsp<span><?php echo $values->PostalCode;?></span>  <br>
                                                <p><b>Phone number</b>:&nbsp<?php echo $values->Mobile;?> </p></div>
                                                                      </td>
                                                                      <td> 
                                                                        <span class="txt" ><button class="border pbtn" data-bs-toggle="modal" data-bs-target="#modal2<?php echo $values->AddressId;?>" type="submit" name="save" >edit</button></span>
                                                                        <span class="txt" ><button class="border pbtn" data-bs-toggle="modal" data-bs-target="#modal3<?php echo $values->AddressId;?>"type="submit" name="delet" >delet</button></span> 
                                                                      </td>


                                                                                          <div class="modal fade" id="modal2<?php echo $values->AddressId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Reschedule Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <div class="container border main1" id="address-form" >
                                                                  <form class="row g-3" action="<?php echo BASEURL; ?>/functions/addupdate"  method="post" id="Add-form2">
                                                                      <input  type="hidden" id="Userid2" value="<?php echo $this->getSession('Userid');?>" name="Userid2">
                                                                      <input type="" value="<?php echo $values->AddressId;?>" name="Addid2" id="Addid2">
                                                                      <div class="col-md-6">
                                                                        <label for="inputEmail4" class="form-label">Street name</label>
                                                                        <input type="text" name="street2" value="<?php echo $values->AddressLine1;?>" class="form-control" id="street2" placeholder="Street name">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                        <label for="inputPassword4" class="form-label">House number</label>
                                                                        <input type="number" name="HN2" value="<?php echo $values->AddressLine2;?>" class="form-control" id="HN2" placeholder="House number">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                          <label for="inputZip" class="form-label">Postal code</label>
                                                                          <input type="text" name="Pc2" class="form-control" value="<?php echo $values->PostalCode;?>" id="Pc2" placeholder="Postal code">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                          <label for="inputCity" class="form-label">City</label>
                                                                          <input type="text" value="<?php echo $values->City;?>" name="city2" class="form-control" id="city2">
                                                                        </div>
                                                                        <label for="inputCity" class="form-label">Phone number</label>
                                                                        <div class="input-group mn col-2">
                                                                          <span class="input-group-text" id="inputGroup-sizing-default">
                                                                            <button class="btn input-group-text  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">+46</button>
                                                                          <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="#">+91</a></li>
                                                                            <li><a class="dropdown-item" href="#">+1</a></li>
                                                                            <li><a class="dropdown-item" href="#">+35</a></li>
                                                                          </ul>
                                                                          </span>
                                                                          <input type="text" value="<?php echo $values->Mobile;?>" name="mobile2" class="form-control" placeholder="Mobile number" aria-label="Sizing example input" id="mobile2" aria-describedby="inputGroup-sizing-default">
                                                                        </div>
                                                                      
                                                                      <div class="col-12">
                                                                        <button type="submit" id="Edit" name="Edit" class="btn btn1">Edit</button>
                                                                        <!-- <button type="cancel" id="cancel" class="btn submit1">Cancel</button> -->
                                                                      </div>
                                                                    </form>
                                                              </div>
                                                           </div>
                                                       <!--  <div class="modal-footer">
                                                           
                                                             <div class="text-center">
                                                                  
                                                                </div>
                                                         </div> -->
                                                        </div>
                                                        </div>
                                                        </div>



                                                                                          <div class="modal fade" id="modal3<?php echo $values->AddressId;?>" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Reschedule Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <div class="container border main1" id="address-form" >
                                                                  <form class="row g-3" action="<?php echo BASEURL; ?>/functions/adddelete"  method="post" id="Add-form2">
                                                                      <!-- <input  type="hidden" id="Userid2" value="<?php echo $this->getSession('Userid');?>" name="Userid2"> -->
                                                                      <input type="" class="Addid3" value="<?php echo $values->AddressId;?>" name="Addid3" id="Addid3">
                                                                      <p>are you sure you want to delet this?</p>
                                                                      <div class="col-12">
                                                                        <button type="submit" id="Delete" name="Delete" class="btn btn1">Delete</button>
                                                                        <!-- <button type="cancel" id="cancel" class="btn submit1">Cancel</button> -->
                                                                      </div>
                                                                    </form>
                                                              </div>
                                                           </div>
                                                       <!--  <div class="modal-footer">
                                                           
                                                             <div class="text-center">
                                                                  
                                                                </div>
                                                         </div> -->
                                                        </div>
                                                        </div>
                                                        </div>
                                                                     
                                                                    </tr>
                                                                   
                                                                     <p><?php endforeach; ?></p>
                                                                     <div><button class="border pbtn" type="button" name="addaddress" data-bs-toggle="modal" data-bs-target="#modal2" >Add address</button></div>

                                                                         <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Reschedule Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                          <div class="container border main1" id="address-form" >
                                                                  <form class="row g-3"  method="post" id="Add-form">
                                                                      <input  type="hidden" id="Userid" value="<?php echo $this->getSession('Userid');?>" name="Userid">
                                                                      <div class="col-md-6">
                                                                        <label for="inputEmail4" class="form-label">Street name</label>
                                                                        <input type="text" name="street" class="form-control" value="" id="street" placeholder="Street name">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                        <label for="inputPassword4" class="form-label">House number</label>
                                                                        <input type="number" name="HN" class="form-control" id="HN" placeholder="House number">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                          <label for="inputZip" class="form-label">Postal code</label>
                                                                          <input type="text" name="Pc" class="form-control" value="" id="Pc" placeholder="Postal code">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                          <label for="inputCity" class="form-label">City</label>
                                                                          <input type="text" name="city" class="form-control" id="city">
                                                                        </div>
                                                                        <label for="inputCity" class="form-label">Phone number</label>
                                                                        <div class="input-group mn col-2">
                                                                          <span class="input-group-text" id="inputGroup-sizing-default">
                                                                            <button class="btn input-group-text  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">+46</button>
                                                                          <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="#">+91</a></li>
                                                                            <li><a class="dropdown-item" href="#">+1</a></li>
                                                                            <li><a class="dropdown-item" href="#">+35</a></li>
                                                                          </ul>
                                                                          </span>
                                                                          <input type="text" name="mobile" class="form-control" placeholder="Mobile number" aria-label="Sizing example input" id="mobile" aria-describedby="inputGroup-sizing-default">
                                                                        </div>
                                                                      
                                                                      <div class="col-12">
                                                                        <button type="submit" name="save" class="btn btn1">Save</button>
                                                                        <button type="cancel" id="cancel" class="btn submit1">Cancel</button>
                                                                      </div>
                                                                    </form>
                                                              </div>
                                                           </div>
                                                       <!--  <div class="modal-footer">
                                                           
                                                             <div class="text-center">
                                                                  
                                                                </div>
                                                         </div> -->
                                                        </div>
                                                        </div>
                                                        </div> 
                                                                  </tbody>
                                                                 
                                                                 
                                                          
                                                                </table>
                                                            </div>
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