<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="stylesheet" href="http://localhost/Home_DB/assets/css/admin.css">

<link rel="stylesheet" href="http://localhost/Home_DB/assets/css/table.css">
    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/imp.css">
    <script src="http://localhost/Home_DB/assets/js/index1.js"></script>
    <script src="http://localhost/Home_DB/assets/js/index.js"></script>

    <script src="http://localhost/Home_DB/assets/js/imp2.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp3.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp4.js"></script>
    <script src="http://localhost/Home_DB/assets/js/imp5.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/390f1f53bc.js" crossorigin="anonymous"></script>

    <title>Admin -> Service requests</title>
  </head>
  <body>

    <!-- Nav-bar -->

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

      <!-- /nav-bar -->

      <!-- Vertical Nav-bar -->

      <div >
        <div class="ver-nav container-fluid navbar-collapse navbar navbar-nav">
            <ul class="list1" id="menu_small">
              <li class="nav-item"><a class="item nav-tabs" href="#home">Service Management</a></li>
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
              <li class="nav-item"><a class="item nav-tabs" href="#about">User Management</a></li>
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
          <!-- </table> -->
        </div>

        <!-- /vertical navbar -->

        <!-- form -->

        <div class="UM"> <b>Service Requests</b></div>

        <div class="form-border">
            <form class="row gy-2 gx-3 align-items-center">
                <div class="col-sm-2">
                    <div class="form-check">
                      <input class="form-control"  type="number" id="SizingCheck" placeholder="Service ID">
                    </div>
                    </div>
                <div class="col-sm-2">
                  <select name="customer" class="form-select form-control" placeholder="Customer"  id="autoSizingSelect">
                    <option >Customer</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-sm-2">
                  <select name="service-provider" class="form-select" id="autoSizing">
                    <option selected>Service Provider</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
               
                <div class="col-sm-2">
                    <select name="status" class="form-select" id="autoSelect">
                      <option selected>Status</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
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
                  <button type="submit" class="search btn">Search</button>
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn clear border">Clear</button>
                  </div>
              </form>
        </div>
        
        <!-- /form -->

        <!-- table -->

          <table id="example" class="display float-end" style="width:100%">
            <thead>
              <tr>
                <td>Service ID<img src="images/data.png" alt=""> </td>
                <td>Service date<img src="images/data.png" alt=""></td>
                <td>Customer details<img src="images/data.png" alt=""></td>
                <td>Service provider<img src="images/data.png" alt=""> </td>
                <td>Status<img src="images/data.png" alt=""></td>
                <td>Actions </td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div>323436</div>
                </td>
                <td>
                    <img src="images/cal.png" alt=""> 09/04/2018</div>
                    <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                </td>
                <td> 
                    <div>David Bough</div>
                  <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                  </td>
                  <td>
                    </td>
                  <td class="txt2">
                    <button class="btn new-btn border">New</button>
                </td>
                <td> 
                  <div class="dropdown btn2">
                  <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Deactivate</a></li>
                  </ul>
                </div>
              </td>
              </tr>
            
                <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          </td>
                        <td class="txt2">
                          <button class="btn new-btn border">New</button>
                      </td>
                    <td>
                      <div class="dropdown btn2">
                      <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          <span><img class="img1" src="images/hat.png" alt=""></span> 
                          <span class="txt" >  Lyum Watson</span> 
                          <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt="">  4 </div>
                          </td>
                        <td class="txt2">
                          <button class="btn btn1 border">Pending</button>
                      </td>
                    <td>
                      <div class="dropdown btn2">
                        <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Edit & Reschedule</a></li>
                          <li><a class="dropdown-item" href="#">Refund</a></li>
                          <li><a class="dropdown-item" href="#">Cancel</a></li>
                          <li><a class="dropdown-item" href="#">Change SP</a></li>
                          <li><a class="dropdown-item" href="#">Escalate</a></li>
                          <li><a class="dropdown-item" href="#">History Log</a></li>
                          <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          <span><img class="img1" src="images/hat.png" alt=""></span> 
                          <span class="txt" >  Lyum Watson</span> 
                          <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt="">  4 </div>
                          </td>
                        <td class="txt2">
                          <button class="btn btn1 border">Pending</button>
                      </td>
                    <td> <div class="dropdown btn2">
                      <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Edit & Reschedule</a></li>
                        <li><a class="dropdown-item" href="#">Refund</a></li>
                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                        <li><a class="dropdown-item" href="#">Change SP</a></li>
                        <li><a class="dropdown-item" href="#">Escalate</a></li>
                        <li><a class="dropdown-item" href="#">History Log</a></li>
                        <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                      </ul>
                    </div></td>
                  </tr>
                  <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          <span><img class="img1" src="images/hat.png" alt=""></span> 
                          <span class="txt" >  Lyum Watson</span> 
                          <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt="">  4 </div>
                          </td>
                        <td class="txt2">
                          <button class="btn gbtn border">Completed</button>
                      </td>
                    <td>
                      <div class="dropdown btn2">
                        <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Refund</a></li>
                          <li><a class="dropdown-item" href="#">Escalate</a></li>
                          <li><a class="dropdown-item" href="#">History Log</a></li>
                          <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          <span><img class="img1" src="images/hat.png" alt=""></span> 
                          <span class="txt" >  Lyum Watson</span> 
                          <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt="">  4 </div>
                          </td>
                        <td class="txt2">
                          <button class="btn gbtn border">Completed</button>
                      </td>
                    <td>
                      <div class="dropdown">
                        <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Refund</a></li>
                          <li><a class="dropdown-item" href="#">Escalate</a></li>
                          <li><a class="dropdown-item" href="#">History Log</a></li>
                          <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          <span><img class="img1" src="images/hat.png" alt=""></span> 
                          <span class="txt" >  Lyum Watson</span> 
                          <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt="">  4 </div>
                          </td>
                        <td class="txt2">
                          <button class="btn pbtn border">Cancelled</button>
                      </td>
                    <td>
                      <div class="dropdown btn2">
                        <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Deactivate</a></li>
                          <li><a class="dropdown-item" href="#">Service History</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          <span><img class="img1" src="images/hat.png" alt=""></span> 
                          <span class="txt" >  Lyum Watson</span> 
                          <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt="">  4 </div>
                          </td>
                        <td class="txt2">
                          <button class="btn gbtn border">Completed</button>
                      </td>
                    <td>
                      <div class="dropdown btn2">
                        <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Refund</a></li>
                          <li><a class="dropdown-item" href="#">Escalate</a></li>
                          <li><a class="dropdown-item" href="#">History Log</a></li>
                          <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          <span><img class="img1" src="images/hat.png" alt=""></span> 
                          <span class="txt" >  Lyum Watson</span> 
                          <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt="">  4 </div>
                          </td>
                        <td class="txt2">
                          <button class="btn pbtn border">Cancelled</button>
                      </td>
                    <td>
                      <div class="dropdown btn2">
                        <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div>323436</div>
                      </td>
                      <td>
                          <img src="images/cal.png" alt=""> 09/04/2018</div>
                          <div> <img src="images/time.png" alt=""> 12:00 - 18:00</div>
                      </td>
                      <td> 
                          <div>David Bough</div>
                        <div> <img src="images/home.png" alt=""> Musterstrabe 5,12345 Bonn</div>
                        </td>
                        <td>
                          <span><img class="img1" src="images/hat.png" alt=""></span> 
                          <span class="txt" >  Lyum Watson</span> 
                          <div class="txt1"><img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/y-star.png" alt=""> <img src="images/star2.png" alt="">  4 </div>
                          </td>
                        <td class="txt2">
                          <button class="btn border gbtn">Completed</button>
                      </td>
                    <td>
                      <div class="dropdown btn2">
                        <div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Refund</a></li>
                          <li><a class="dropdown-item" href="#">Escalate</a></li>
                          <li><a class="dropdown-item" href="#">History Log</a></li>
                          <li><a class="dropdown-item" href="#">Download Invoice</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                 
            </tbody>
           </table>

           <!-- /table -->

           <!-- page -->

        <div class="form-border1">
            <form class="form1" action="">
                <span>show </span>
                <select name="show" id="show1">
                <option value="10">10</option>
              </select>
              <span> Entries</span>
            </form>
  
            <nav aria-label="Page navigation example ">
                <ul class="pagination page1 float-end">
                  <li class="page-item"><a class="page-link pn" href="#">&lt;</a></li>
                  <li class="page-item "><a class="page-link pn link1" href="#">1</a></li>
                  <li class="page-item"><a class="page-link pn" href="#">2</a></li>
                  <li class="page-item"><a class="page-link pn" href="#">3</a></li>
                  <li class="page-item"><a class="page-link pn" href="#">4</a></li>
                  <li class="page-item"><a class="page-link pn" href="#">5</a></li>
                  <li class="page-item"><a class="page-link pn " href="#">&gt;</a></li>
                </ul>
              </nav>
      
        </div>
       
        <!-- /page -->

        <!-- footer -->


        <script>
        $(document).ready(function() {

    $('#example').DataTable( {
        "order": [[ 3, "desc" ]],
          
        
    } );
     

} );
    </script>
      

           <footer>©2018 Helperland. All rights reserved.</footer>
           
       
           <!-- /footer -->
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="index.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>