
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/admin.css">    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

  <nav class="navbar navbar-expand-lg sticky-top Rectangle navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <h1 class="help"> helperland</h1></a>
          <button class="navbar-toggler" type="button" onclick="responsive_menu()" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><img src="http://localhost/Home_DB/public/assets/images/admin/Contact.png" alt="">&nbsp<?php echo $this->getSession('First_name');?>&nbspAdmin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><img src="http://localhost/Home_DB/public/assets/images/admin/logout.png" alt=""></a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>


<!-- <div class="container mt-3">
  <h3>Modal Example</h3>
  <p>Click on the button to open the modal.</p> -->
  
  <button type="button" class="btn hiddenbtn examplehidden btn-primary" data-bs-toggle="modal" data-bs-target="#examplemodal">
    Open modal
  </button>
 <!--  <input type="text" name="" id="name" placeholder="name">
  <button type="search" id="SearchButton">helo</button> -->
  <button type="button" class="btn hiddenbtn example2hidden btn-primary" data-bs-toggle="modal" data-bs-target="#example2modal">
    Open modal
  </button>
   <button type="button" class="btn hiddenbtn example3hidden btn-primary" data-bs-toggle="modal" data-bs-target="#example3modal">
    Open modal
  </button>
<!-- </div> -->

<!-- The Modal -->
<!-- <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content"> -->

      <!-- Modal Header -->
     <!--  <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div> -->

      <!-- Modal body -->
     <!--  <div class="modal-body">
        Modal body..
      </div> -->

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

 -->

      <div class="form-border float-end">
            <form class="row gy-2 gx-3 align-items-center">
                <div class="col-sm-2">
                    <div class="form-check">
                      <input class="form-control"  type="number" id="SizingCheck" placeholder="Service ID">
                    </div>
                    </div>
                <div class="col-sm-2">
                 <!--  <select name="customer" class="form-select form-control" placeholder="Customer"  id="autoSizingSelect">
                    <option >Customer</option>
                    <option value=" ">minal</option>
                    <option value=" ">Hinal</option>
                    <option value=" ">Three</option>
                  </select> -->
                  <input class="form-control"  type="text" id="autoSizingSelect" placeholder="Customer">
                </div>
                <div class="col-sm-2">
                  <!-- <select name="service-provider" class="form-select" id="autoSizing">
                    <option selected>Service Provider</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select> -->
                  <input class="form-control"  type="text" id="autoSizing" placeholder="Customer">
                </div>
               
                <div class="col-sm-2">
                    <select name="status" class="form-select" id="autoSelect">
                      <option selected>Status</option>
                      <option value="Cancelled">Cancelled</option>
                      <option value="Completed">Completed</option>
                      <option value="3">Three</option>
                    </select>
               </div>
               <div class="col-sm-2">
                <div class="form-group startdate">
                  <input type="text" id="startdate" class="form-control" placeholder="From Date" />
                 
                </div>
               </div>
               <div class="col-sm-2">
                <div class="form-group startdate">
                  <input type="text" id="endDate" class="form-control" placeholder="To Date" />
                 
                </div>
               </div>
                <div class="col-sm-1">
                  <button type="button" id="SearchButton" class="search btn">Search</button>
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn clear border">Clear</button>
                  </div>
              </form>
        </div>    
<!-- 
       <div class="container sh1">
        <div class="align-items-start hy">
            <div class="row float-start">
            <div class="container-fluid ver-nav navbar navbar-collapse navbar-nav">
                <div class="nav d-grid col-lg-12 nav-pills me-5 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="nav-link item1 home border-bottom active " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</div>
                    <div class="nav-link item1  border-bottom" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Service History</div>
                  </div>
            </div>
        </div>
    </div>
  </div> -->




      <div class="ver-nav container-fluid navbar-collapse navbar navbar-nav">
        <div class="nav d-grid col-lg-12 nav-pills me-5 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
           <ul class="list1" id="menu_small">
              <!-- <li class="nav-item"><a class="item nav-tabs" href="#home">Service Management</a></li> -->
              <div class="nav-link item1 home border-bottom active " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</div>
              <li class="nav-item"><a class="item nav-tabs" href="#news">Role Management</a></li>
              <li class="dropdown nav-item dp-3">
                <a href="#" class="item nav-tabs">
                  Coupon Code Management <span><i class="fa fa-angle-right"></i></span>
           </a>
    <ul class="dropdowns dp3">
      <li class="nav-item"><a href="#" class="nav-link">Coupon Codes</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Usage History</a></li>
    </ul>
              <li class="nav-item"><a class="item nav-tabs" href="#about">Escalation Management</a></li>
              <li class="nav-item"><a class="item nav-tabs" href="#about">Service Requests</a></li>
              <li class="nav-item"><a class="item nav-tabs" href="#about">Service Providers</a></li>
              <!-- <li class="nav-item"><a class="item nav-tabs" href="#about">User Management</a></li> -->
              <div class="nav-link item1  border-bottom" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">User Management</div>
              <li class="dropdown nav-item dp-1">
                <a href="#" class="item nav-tabs">
                  Finance Module<span><i class="fa fa-angle-down"></i></span>
           </a>
    <ul class="dropdowns dp1">
      <li class="nav-item"><a href="#" class="nav-link ">All Transactions</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Generate Payment</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Customer Invoices</a></li>
    </ul>
              <li class="nav-item"><a class="item nav-tabs" href="#about">Zip Code Management</a></li>
              <li class="nav-item"><a class="item nav-tabs" href="#about">Rating Management</a></li>
              <li class="nav-item"><a class="item nav-tabs" href="#about">Inquiry Management</a></li>
              <li class="nav-item"><a class="item nav-tabs" href="#about">Newsletter Management</a></li>
              <li class="dropdown nav-item dp-2">
                <a href="#" class="item nav-tabs">
                  Content Managenment<span><i class="fa fa-angle-right"></i></span>
           </a>
    <ul class="dropdowns dp2">
      <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
      <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
    </ul>

            </ul>

        </div>
           
          <!-- </table> -->
        </div>






  <div class="tab-content col-auto" id="v-pills-tabContent">

    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

        <div class="sh">
                                                Service Requests
                                                <button class="btn float-end ex ex1 border">Export</button>
                                              </div> 


        <!-- <div id="example_filter" class="dataTables_filter">
          <label>arew</label>
          <input type="search" name="">
        </div> -->
        <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#examplemodal">
  Launch demo modal
</button> -->

    <table id="reqests" class="display float-end" style="width:100%">
        <thead>
            <tr>
                <th>Service Id <img src="images/data.png" alt=""></th>
                <th>Service Date<img src="images/data.png" alt=""> </th>
                <th>Customer Details<img src="images/data.png" alt=""></th>
                <th>Service Provider<img src="images/data.png" alt=""> </th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Actions</th>
                <!-- <th>Salary</th> -->
            </tr>
        </thead>
        <tbody>
              
<!-- <tr data-bs-toggle="modal" data-bs-target="#examplemodal">kdjhfksjh</tr> -->


                                                     <div class="modal fade" id="examplemodal" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Edit Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                         <form class="row g-3" action=""  method="post" id="Add-form2">
                                                                      <input  type="hidden" id="srid" value="" name="srid">
                                                                      <input type="hidden" value="" name="Addid" id="Addid2">
                                                                      <!-- <div class="col-md-6"> -->
                                                                        <br>
                                                                        <label for="inputEmail4" class="form-label">Date</label>
                                                                        <input type="date" name="date" value="" class="form-control" id="date2" placeholder="Street name">
                                                                      <!-- </div> -->
                                                                      <br>
                                                                      <!-- <div class="col-md-6"> -->
                                                                        <label for="inputPassword4" class="form-label">Time</label>
                                                                        <input type="time" name="time" value="" class="form-control" id="time2" placeholder="House number">
                                                                      <!-- </div> -->
                                                                      <br>
                                                                      <p>Service Address</p>
                                                                      <!-- <div class="col-md-6"> -->
                                                                        <label for="inputEmail4" class="form-label">Street name</label>
                                                                        <input type="text" name="street" value="" class="form-control" id="street" placeholder="Street name">
                                                                      <!-- </div> -->
                                                                      <br>
                                                                      <!-- <div class="col-md-6"> -->
                                                                        <label for="inputPassword4" class="form-label">House number</label>
                                                                        <input type="number" name="house_number" value="" class="form-control" id="house_number" placeholder="House number">
                                                                      <!-- </div> -->
                                                                      <br>
                                                                      <!-- <div class="col-md-6"> -->
                                                                          <label for="inputZip" class="form-label">Postal code</label>
                                                                          <input type="text" name="Postalcode" class="form-control" value="" id="Postalcode" placeholder="Postal code">
                                                                        <!-- </div> -->
                                                                        <br>
                                                                        <!-- <div class="col-md-6"> -->
                                                                          <label for="inputCity" class="form-label">City</label>
                                                                          <input type="text" value="" name="city2" class="form-control" id="city2">
                                                                        <!-- </div> -->
                                                                        <br>
                                                                        <!-- <div class="col-md-6"> -->
                                                                          <label for="inputCity" class="form-label">Why you want to reschedule service request</label>
                                                                          <!-- <input type="textarea" value="" name="city2" class="form-control" id="city2"> -->
                                                                          <textarea cols="38" rows="6" placeholder="Why you want to reschedule service request"></textarea>
                                                                        <!-- </div> -->
                                                                        <!-- <label for="inputCity" class="form-label">Phone number</label>
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
                                                                        </div> -->
                                                                      <br>
                                                                      <!-- <div class="col-auto"> -->
                                                                        <button type="submit" id="Editsr" name="Editsr" class="btn btn1">Update</button>
                                                                        <!-- <button type="cancel" id="cancel" class="btn submit1">Cancel</button> -->
                                                                      <!-- </div> -->
                                                                    </form>
                                                           </div>
                                                       <!--  <div class="modal-footer">
                                                           
                                                             <div class="text-center">
                                                                  
                                                                </div>
                                                         </div> -->
                                                        </div>
                                                        </div>
                                                        </div>



                                                        <div class="modal fade" id="example2modal" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Edit Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                         <form class="row g-3" action=""  method="post" id="refundform">
                                                                      <input  type="hidden" id="userid" value="" name="userid">
                                                                      <input type="hidden" value="" name="Addid" id="Addid2">
                                                                      <!-- <div> -->
                                                                        <span>Paid Amount<p id="tc"></p></span>
                                                                         <span>Refunded Amount<p id="tc1"></p></span><br>
                                                                         <label>Amount</label><br>
                                                                         <input type="" value="" name="Addid" id="Addid2"><br><br>
                                                                         <label for="inputCity" class="form-label">Why you want to refund Amount</label>
                                                                          <!-- <input type="textarea" value="" name="city2" class="form-control" id="city2"> -->
                                                                          <textarea cols="38" rows="6" placeholder="Why you want to refund Amount"></textarea><br><br>
                                                                        
                                                                      <!-- </div> -->
                                                                      
                                                                      <!-- <div class="col-md-6">
                                                                        <label for="inputEmail4" class="form-label">Date</label>
                                                                        <input type="date" name="date" value="" class="form-control" id="date2" placeholder="Street name">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                        <label for="inputPassword4" class="form-label">Time</label>
                                                                        <input type="time" name="time" value="" class="form-control" id="time2" placeholder="House number">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                        <label for="inputEmail4" class="form-label">Street name</label>
                                                                        <input type="text" name="street" value="" class="form-control" id="street" placeholder="Street name">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                        <label for="inputPassword4" class="form-label">House number</label>
                                                                        <input type="number" name="house_number" value="" class="form-control" id="house_number" placeholder="House number">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                          <label for="inputZip" class="form-label">Postal code</label>
                                                                          <input type="text" name="Postalcode" class="form-control" value="" id="Postalcode" placeholder="Postal code">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                          <label for="inputCity" class="form-label">City</label>
                                                                          <input type="text" value="" name="city2" class="form-control" id="city2">
                                                                        </div> -->
                                                                        <!-- <label for="inputCity" class="form-label">Phone number</label>
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
                                                                        </div> -->
                                                                      
                                                                      <div class="col-12">
                                                                        <button type="submit" id="Editsr" name="Editsr" class="btn btn1">Edit</button>
                                                                        <!-- <button type="cancel" id="cancel" class="btn submit1">Cancel</button> -->
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




                                                        <div class="modal fade" id="example3modal" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content justify-content-center">
                                                         <div class="modal-header">
                                                           <p class="modal-title"><b>Cancel Service Request</b></p>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                         <form class="row g-3" action=""  method="post" id="cancelsrid">
                                                                      <!-- <input  type="hidden" id="userid" value="" name="userid"> -->
                                                                      <input type="hidden" value="" name="Addid" id="hinalid">
                                                                      <!-- <div> -->
                                                                        <!-- <span>Paid Amount<p>sdj</p></span> -->
                                                                         <!-- <span>Refunded Amount<p>sdj</p></span><br> -->
                                                                         <!-- <label>Amount</label><br> -->
                                                                         <!-- <input type="number" value="" name="Addid" id="cansrid2"><br><br> -->
                                                                         <label for="inputCity" class="form-label">Why you want to cancel Service Request</label>
                                                                          <!-- <input type="textarea" value="" name="city2" class="form-control" id="city2"> -->
                                                                          <textarea cols="38" rows="6" placeholder="Why you want to cancel service request"></textarea><br><br>
                                                                        
                                                                      <!-- </div> -->
                                                                      
                                                                      <!-- <div class="col-md-6">
                                                                        <label for="inputEmail4" class="form-label">Date</label>
                                                                        <input type="date" name="date" value="" class="form-control" id="date2" placeholder="Street name">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                        <label for="inputPassword4" class="form-label">Time</label>
                                                                        <input type="time" name="time" value="" class="form-control" id="time2" placeholder="House number">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                        <label for="inputEmail4" class="form-label">Street name</label>
                                                                        <input type="text" name="street" value="" class="form-control" id="street" placeholder="Street name">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                        <label for="inputPassword4" class="form-label">House number</label>
                                                                        <input type="number" name="house_number" value="" class="form-control" id="house_number" placeholder="House number">
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                          <label for="inputZip" class="form-label">Postal code</label>
                                                                          <input type="text" name="Postalcode" class="form-control" value="" id="Postalcode" placeholder="Postal code">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                          <label for="inputCity" class="form-label">City</label>
                                                                          <input type="text" value="" name="city2" class="form-control" id="city2">
                                                                        </div> -->
                                                                        <!-- <label for="inputCity" class="form-label">Phone number</label>
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
                                                                        </div> -->
                                                                      
                                                                      <div class="col-12">
                                                                        <button type="submit" id="Editsr" name="Editsr" class="btn btn1">Edit</button>
                                                                        <!-- <button type="cancel" id="cancel" class="btn submit1">Cancel</button> -->
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

                                                
        
        </tbody>
      
    </table>
</div>


<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


    <div class="sh">
                                                Service History
                                                <!-- <button class="btn float-end ex ex1 border">Export</button> -->
                                              </div>


                                               <table id="users" class="display float-end" style="width:100%">



                                                <thead>

                                                   <!-- <div id="search"></div> -->
                                                   <!-- <tr id="search"></tr> -->
            <tr>
                <th>User Name<img src="images/data.png" alt=""></th>
                <th>Role<img src="images/data.png" alt=""> </th>
                <th>Date of Registration<img src="images/data.png" alt=""> </th>
                <th>User Type<img src="images/data.png" alt=""></th>
                <th>Phone</th>
                <th>Postal code</th>
                 <th>Status</th>
                <!-- <th>Salary</th> -->
            </tr>
        </thead>
        <tbody>
          <!-- <p><?php foreach($_SESSION['userdetails'] as  $values): ?></p>
           <tr data-bs-toggle="modal" data-bs-target="#modalcontainer<?php echo $values->ServiceRequestId;?>">
                                                  <form action="<?php echo BASEURL; ?>/functions/changestatus" method="POST">
                                                      <td>
                                                        <div><?php echo $values->First_name;?>&nbsp<?php echo $values->Last_name;?></div>
                                                        <input type="" name="changeuser" value="<?php echo $values->Userid;?>">
                                                        <input type="" name="changes" value="<?php echo $values->status;?>">
                                                      </td>
                                                      <td>
                                                        <div> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt=""></div>
                                                        <div><img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png" alt=""></div>
                                                      </td>
                                                      <td>
                                                      
                                                        <span><?php $id = $values->typeId ?> <?php if($id == 0):?> <?php echo "User"; ?> <?php endif;?><?php $id = $values->typeId ?> <?php if($id == 1):?> <?php echo "Serviceprovider"; ?> <?php endif;?></span> 
                                                        <span class="txt" ></span> 
                                                        <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt=""> </div>
                                                      </td>
                                                        <td class="txt2">
                                                        <?php echo $values->PostalCode;?></div>
                                                      </td>
                                                      <td class="justify-content-center">
                                                        <button name="activein" type="submit" class="btn border btn3"><?php echo $values->status;?></button>
                                                      </td>
                                                      <td>
                                                        <div><?php echo $values->Mobile;?></div>
                                                      </td>
                                                      <td>
                                                        <div>1</div>
                                                      </td>
                                                    </form>
                                                    </tr>
                                                     <p><?php endforeach; ?></p>
 -->
        </tbody>

    </table>

    </div>


  

    
                         

    
</div>


    

      

      <script src="http://localhost/Home_DB/assets/js/demo.js"></script>
      
     <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>