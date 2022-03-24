
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/set-up.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/390f1f53bc.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
    <!-- <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> -->
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light Rectangle sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img
                    src="http://localhost/Home_DB/public/assets/images/book-service/logo-small.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link border br3 text-center" aria-current="page" href="#">Book now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#">Prices & services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link" href="#">Warranty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#">Contact</a>
                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link border br1  text-center" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border br2 text-center" href="#">Become a Helper</a>
              </li> -->
                    <li class="nav-item ">
                        <div class="vl"></div>
                    </li>
                    <li class="nav-item link">
                        <button type="button" class="btn position-relative nav-link">
                            <img src="http://localhost/Home_DB/public/assets/images/book-service/notification.png"
                                alt="">
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                2
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                    </li>

                    <li class="nav-item">
                        <div class="vl"></div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="http://localhost/Home_DB/public/assets/images/book-service/Contact.png" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>

    <div><img class="img-1 img-fluid"
            src="http://localhost/Home_DB/public/assets/images/book-service/book-service-banner.jpg" alt=""></div>

    <h2 class="text-center "><b>Set up your cleaning service</b></h2>

    <div class="d-flex">
        <hr class="line">
        <img class="star" src="http://localhost/Home_DB/public/assets/images/book-service/star.png" alt="">
        <hr class="line-1">
        </hr>
    </div><br><br>

    
    <div class="container main">
        <div>
            <div class="col-sm-7 float-start">
                <div class="container mt-3">
                    <!-- Nav pills -->
                    <ul class="nav nav-pills rectangle" role="tablist">
                        <li class="nav-item li-1" id="tab1">
                            <a class="nav-link border" data-bs-toggle="pill" href="#home"><img
                                    src="http://localhost/Home_DB/public/assets/images/book-service/setup-service.png"
                                    alt="">Set up Service</a>
                        </li>
                        <li class="nav-item li-1 " id="tab2">
                            <a class="nav-link border disabled" data-bs-toggle="pill" href="#menu1"><img
                                    src="http://localhost/Home_DB/public/assets/images/book-service/schedule.png"
                                    alt="">Schedule & Plan</a>
                        </li>
                        <li class="nav-item li-1 " id="tab3">
                            <a class="nav-link border" data-bs-toggle="pill" href="#menu2"><img
                                    src="http://localhost/Home_DB/public/assets/images/book-service/Details.png"
                                    alt="">Your Details</a>
                        </li>
                        <li class="nav-item li-1 " id="tab4">
                            <a class="nav-link border disabled" data-bs-toggle="pill" href="#menu3"><img
                                    src="http://localhost/Home_DB/public/assets/images/book-service/payment.png"
                                    alt="">Make Payment</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <table>
                        <tbody>
                            <tr class="row-lg tab-pane" id="set-up">
                                <td>
                                    
                                    <div class="first-row"><b> Enter your Postal code</b></div>
                                    <form class="row g-3" id="PC" action="" method="POST">
                                        <div class="col-auto">
                                            <input type="number" class="form-control" name="PostalCode"
                                                id="PostalCode" placeholder="Postal code">
                                                <p id="pcCheck"></p>
                                        </div>

                                        <div class="col-auto">
                                            <button type="submit" name="check" value="check" class="btn btn1 mb-3">Check
                                                Availability</button>
                                        </div>
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                    </table>

                    <hr class="line2">

                </div>
                <div id="menu1" class="container tab-pane fade"><br>
    <table>
        <tbody>
           <!--  <tr class="row-lg">
                <td>
                    <div class="first-row"><b> Select number of rooms and bath</b></div>
                    <div class="dropdown dp1">
                        <button class="btn dropdown-toggle border" type="button"
                            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            1 bed
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><button class="dropdown-item" type="button">2 bed</button></li>
                            <li><button class="dropdown-item" type="button">3 bed</button></li>
                            <li><button class="dropdown-item" type="button">4 bed</button></li>
                        </ul>
                        <button class="btn dropdown-toggle border" type="button"
                            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            1 bath
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><button class="dropdown-item" type="button">2 bath</button></li>
                            <li><button class="dropdown-item" type="button">3 bath</button></li>
                            <li><button class="dropdown-item" type="button">4 bath</button></li>
                        </ul>
                    </div>
                    <hr class="line2">
                </td>

            </tr> -->
            <form method="post" id="schedule">
                <tr>
                    <td>
                        <div class="row first-row dp1">
                            <div class="col-auto">
                                <span>

                                    <p><b> When do you need the cleaner?</b></p>
                                    <input type="date" id="date" name="date" placeholder="date">
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
                                    <p><b>How long do you need your cleaner to stay?</b> </p>
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
                        <hr class="line2">


                    </td>
                </tr>

                <tr>
                    <td>
                        <div><b> Extra Services</b></div>
                        <div class=" justify-content-center icons first-row dp1">
                            <div class="row justify-content-center">
                                <div class="col-sm-2">
                                    <li class="list1"><input name="extras[]" type="checkbox"
                                            value="Inside cabinets"
                                            class="Ellipse-667 cb-services" id="cb1" />
                                        <label for="cb1" class="lb1"><img id="img1" 
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/1.png" /></label>
                                        <div class="text-3">Inside cabinets</div>
                                    </li>
                                </div>
                                <div class="col-sm-2">
                                    <li class="list1"><input type="checkbox"
                                            value="Inside fridge" name="extras[]"
                                            class="Ellipse-667 cb-services" id="cb2" />
                                        <label for="cb2" class="lb1"><img id="img2"
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/2.png" /></label>
                                        <div name="extras[]" class="text-3">Inside fridge</div>
                                    </li>
                                </div>

                                <div class="col-sm-2">
                                    <li class="list1"><input type="checkbox" value="Inside oven"
                                            name="extras[]" class="Ellipse-667 cb-services"
                                            id="cb3" />
                                        <label for="cb3" class="lb1"><img id="img3"
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/3.png" /></label>
                                        <div class="text-3">Inside oven</div>
                                    </li>
                                </div>
                                <div class="col-sm-2">
                                    <li class="list1"><input type="checkbox"
                                            value="Laundry wash & dry" name="extras[]"
                                            class="Ellipse-667 cb-services" id="cb4" />
                                        <label for="cb4" class="lb1"><img id="img4"
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/4.png" /></label>
                                        <div class="text-3">Laundry wash & dry</div>
                                    </li>
                                </div>
                                <div class="col-sm-2">
                                    <li class="list1"><input type="checkbox" name="extras[]"
                                            class="Ellipse-667 cb-services" id="cb5"
                                            value="Interior windows" />
                                        <label for="cb5" class="lb1"><img id="img5"
                                                class="img-responsive imgs"
                                                src="http://localhost/Home_DB/public/assets/images/book-service/5.png" /></label>
                                        <div class="text-3">Interior windows</div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <hr class="line2">

                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="mb-3 first-row">
                            <label for="exampleFormControlTextarea1"
                                class="form-label">Comments</label>
                            <textarea class="form-control" name="cmt" id="cmt"
                                rows="3"></textarea>
                        </div>

                        <div class="form-check dp1">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have pets at home
                            </label>
                        </div>

                    </td>
                </tr>
                    </tbody>
                </table>
                    <hr class="line2">
                    <button type="submit" value="submit" name="continue" class="btn border br3 float-end">Continue</button>
                </div>
            </form  >

                <div id="menu2" class="container tab-pane fade"><br>
                    <table>
                        <tbody>
                            <!-- <form class="row g-3" method="post" id="continue"> -->
                            <tr class="row-lg">
                                <td>
                                   
                                    <!-- //     // code... -->
                                       
                                       
                                    
                                    <div class="first-row"><b> Enter your contact details, so we can serve you in better way!</b></div>
                                    <form class="row g-3" method="post" id="continue">
                                        <p><?php if (is_array($_SESSION['row']) || is_object($_SESSION['row'])): ?></p>
                                        <p><?php foreach($_SESSION['row'] as  $values): ?></p>
                                        <div class="col-auto form-check form-control border">
                                            <input class="form-check-input add" type="radio" 
                                            value="<?php echo $values->AddressId; ?>" 
                                                name="flexRadioDefault" >
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <small class="addid"><?php echo $values->AddressId;?></small>
                                                <b>Address</b>:&nbsp<span><?php echo $values->AddressLine1;?></span>&nbsp<span><?php echo $values->AddressLine2;?></span>&nbsp<span><?php echo $values->City;?></span>&nbsp<span><?php echo $values->PostalCode;?></span>  <br>
                                                <p><b>Phone number</b>:&nbsp<?php echo $values->Mobile;?> </p>
                                            </label>
                                        </div>
                                        <p><?php endforeach; ?></p>
                                        <p><?php endif; ?></p>
                                        <!-- <div id="h1"></div> -->
                                        <div class="col-auto form-control form-check border" id="add2">
                                            <input class="form-check-input add" type="radio" value="<?php echo $values->AddressId; ?>" 
                                                name="flexRadioDefault" >
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <b>Address</b>: <span id="Street"></span> <span id="Hn"></span>, <span id="City"></span> <span id="pc1"></span> <br>
                                               <p><b>Phone number</b> : <span id="Mobile"></span></p>
                                            </label>
                                        </div>
                                        <div class="col-auto" id="Add">
                                            <button type="button" class="btn btn-1 mb-3">Add New Address</button>
                                        </div>

                                </form>
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
                                    <div class="first-row"><b>Your Favourite Service Providers</b></div>
                                    <hr class="line2">
                                     <p><b>You can choose your favourite service provider from the below list</b></p>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                
                                

                                <div class=" icons first-row dp1">
                                    <div class="row spu">
                                        <p><?php foreach($_SESSION['typeid'] as  $values): ?></p>
                                         <span class="col-sm-2 float-start">
                                            <div class="col-auto">
                                                <span>
                                                    <div class="second border">
                                                    <img class="img1"
                                                        src="http://localhost/Home_DB/public/assets/images/book-service/forma-1-copy-19.png"
                                                        alt="">
                                                </div>
                                                </span>
                                                
                                            </div>
                                    
                                                <p class="div1">
                                            <?php echo $values->First_name;?>&nbsp<?php echo $values->Last_name;?>
                                        </p>
                                        <div>
                                            <button class="btn border selectsp" name="sid" type="checkbox" value="<?php echo $values->Userid;?>">select</button>
                                        </div>
                                </span>
                                <p><?php endforeach; ?></p>


                                    </div>
                                    

                                </div>


                              
                            </td>

                            </tr>
                            <tr><td><div>                              
                                 <hr class="line2">
                                    <button type="submit" id="ok" name="save" class="btn btn1 float-end">Continue</button>
                                </div></td></tr>
                          
                        </tbody>
                    </table>
                </div>
                <div id="menu3" class="container tab-pane fade"><br>
                    <table>
                        <tbody>
                            <form class="row g-3" action="" id="bookservice" method="post">
                            <tr class="row-lg">
                                <td>
                                    <div id="dialog">ok</div>
                                    <div class="first-row"><b> Pay securely with Helperland payment gateway!</b>
                                    </div>

                                    <div class="first-row">Promo code(optional)</div>
                                    

                                        <div class="col-md-6">
                                            <!-- <label for="inputPassword2" class="visually-hidden">Password</label> -->
                                            <input type="password" class="form-control" id="inputPassword2"
                                                placeholder="Promo code(optional)">
                                        </div>
                                        <div class="col-auto apply">
                                            <button type="submit" id="apply" class="btn btn-1 mb-3">Apply</button>
                                        </div>
                                        <hr class="line2">
                                
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="hidden" value="0" name="radio_val" id="r_Val">
                                    <div class="first-row dp1">
                                       <!--  <div class="col-auto">
                                                <input type="text" class="form-control"
                                                    placeholder="Card number">
                                        </div> -->
                                          <div class="d-flex align-items-center shadow-sm  bg-white rounded justify-content-between card-atm border rounded">
                        <div class="fab fa-cc-visa ps-3 "></div> <input type="text" id="card-number" class="form-control cd" name="card" placeholder="Card Details" required maxlength="19" >
                        <div class="d-flex w-50"> <input type="text" id="card-exp" class="form-control px-0 cd" maxlength="5" required placeholder="MM/YY"> <input type="password" maxlength=3 class="form-control px-0 cd" placeholder="CVV"> </div>
                    </div>
                                        </div>

                                         <div class="form-group" id="credit_cards">
                                            <small class="text-muted">Accepted cards</small><br>
                                            <img src="http://localhost/Home_DB/public/assets/images/book-service/visa.jpg" id="visa">
                                            <img src="http://localhost/Home_DB/public/assets/images/book-service/mastercard.jpg" id="mastercard">
                                            <img src="http://localhost/Home_DB/public/assets/images/book-service/amex.jpg" id="amex">
                                        </div>

            <hr class="line2">
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <div class="mb-3 form-check first-row">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label justify-content-between" for="flexCheckDefault">
                                            I accepted terms and conditions. the cancellation policy and the privacy policy. i confirm that Helperland  starts to execute the contract before the expiry of the withdrawal period and i lose my right of withdrawal as a consumer with full performance of the contract.
                                        </label>

                                    </div>
                                    <!-- <div></div> -->
                                     <!--  -->
                                    <hr class="line2">
                                     <button type="submit" name="booking" data-bs-toggle="modal" data-bs-target="#modal" class="btn btn1 border br-3 float-end">Compelete Booking</button>
                                </td>
                                <div class="modal done5 fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content complete-book justify-content-center">
                                                         <div>
                                                           <!-- <p class="modal-title"><b>Service Details</b></p> -->
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                            <div class="correct1"><img id="correct" src="http://localhost/Home_DB/public/assets/images/book-service/correct.png"></div>
                                                         <h5 class="text-center">Booking has been successfully submitted</h5>
                                                         <button type="button" id="done" name="" class="btn btn1 border br-3">OK</button>
                                                           </div>
                                                       
                                                        </div>
                                                        </div>
                                                        </div> 

                            </tr>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



</div>

<div class="col-sm-4 float-end">
<div class="card">
    <div class="card-header">
        Payment summary
    </div>
    <div class="card-body">
        <!-- <h5 class="card-title">Special title treatment</h5> -->
        <p>
            <span class="card-text" id="Date"></span>&nbsp<span
                id="Time"></span>
        </p>
        <!-- <p class="card-text">1 bed, 1 bath</p> -->
        <b>Duration</b>
        <div id="extra-services">
            <div id="basic">
                <span> Basic</span>

                <span class="float-end">&nbsp Hrs</span>
                <span class="float-end" id="Hr">0 </span>
            </div>
        </div>
        <hr>
        <!-- <tfoot> -->
        <tr>
            <div>
                <span><b> Total Service Time</b></span>
                <span class="float-end" ><b id="thr">3 Hrs</b> </span>
            </div>
        </tr>
        <!-- </tfoot> -->
        <hr>
        <!-- </table> -->
        <table>
            <tr>
                <div>
                    <span>Per cleaning</span>
                    <span class="float-end">0,00 €</span>
                </div>
            </tr>
            <!-- <tr>
                    <div>
                        <span>Discount</span>
                        <span class="float-end">-$27</span>
                    </div>
                </tr> -->
            <hr>
            <tr>
                <div>
                    <span class="tp"><b> Total Payment</b></span>
                    <span class="float-end tp">
                        <h3><b id="thr1"> 0,00 €</b></h3>
                    </span>
                </div>
            </tr>
            <!-- <tr><br>
                    <div>
                        <span>Effective Price</span>
                        <span class="float-end ">$50.4</span>
                    </div>
                </tr> -->
        </table><br>
        <!-- <small class="card-text">You will save 20% according to 35a ESIG.</small> -->
    </div>
    <div class="card-footer text-muted">
        <span><img src="http://localhost/Home_DB/public/assets/images/book-service/smiley.png" alt=""></span>
        see what is always included.
    </div>
</div>
<table>
    <thead>
        <p class="txt"><b>Questions?</b></p>
    </thead>
    <tbody>
        <tr>
            <td>
                <li class="list-unstyled">
                    <img src="http://localhost/Home_DB/public/assets/images/book-service/rigth-arrow.png"
                        class="normal" id="image" alt="">
                    <button class="btn d-inline-flex align-items-center rounded collapsed" onclick="rotateImg()"
                        data-bs-toggle="collapse" data-bs-target="#first" aria-expanded="false">
                        <small> What's included in a cleaning?</small>
                    </button>

                    <div class="collapse" id="first">
                        <ul class="list-unstyled small">
                            <li><a href="#" class="d-inline-flex align-items-center rounded">Introduction</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr>
            </td>
        </tr>
        <tr>
            <td>
                <li class=" list-unstyled">
                    <img src="http://localhost/Home_DB/public/assets/images/book-service/rigth-arrow.png"
                        class="normal" id="image" alt="">
                    <button class="btn d-inline-flex align-items-center rounded collapsed" onclick="rotateImg()"
                        data-bs-toggle="collapse" data-bs-target="#second" aria-expanded="false">
                        <small>Which Helperland professional will come to my place?</small>
                    </button>

                    <div class="collapse" id="second">
                        <ul class="list-unstyled small">
                            <li><a href="#" class="d-inline-flex align-items-center rounded">Introduction</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr>
            </td>
        </tr>
        <tr>
            <td>
                <li class="list-unstyled">
                    <img src="http://localhost/Home_DB/public/assets/images/book-service/rigth-arrow.png"
                        class="normal" id="image" alt="">
                    <button class="btn d-inline-flex align-items-center rounded collapsed" onclick="rotateImg()"
                        data-bs-toggle="collapse" data-bs-target="#third" aria-expanded="false">
                        <small>Can i skip or reschedule booking?</small>
                    </button>

                    <div class="collapse" id="third">
                        <ul class="list-unstyled small">
                            <li><a href="#" class="d-inline-flex align-items-center rounded">Introduction</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr>
            </td>
        </tr>
        <!-- <tr>
                    <td>
                        <li class="mb-1 list-unstyled">
                            <img src="images/rigth-arrow.png" class="normal"  id="image"  alt="">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" onclick="rotateImg()" data-bs-toggle="collapse" data-bs-target="#fourth" aria-expanded="false">
                              <small> Which Helperland professional will come to my place?</small>
                            </button>
                    
                            <div class="collapse" id="fourth">
                              <ul class="list-unstyled pb-1 small">
                                  <li><a href="#" class="d-inline-flex align-items-center rounded">Introduction</a></li>
                              </ul>
                            </div>
                          </li>
                          <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="mb-1 list-unstyled">
                            <img src="images/rigth-arrow.png" class="normal image1"  id="image"  alt="">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" onclick="rotateImg1()" data-bs-toggle="collapse" data-bs-target="#fifth" aria-expanded="false">
                              <small>Which Helperland professional will come to my place?</small> 
                            </button>
                    
                            <div class="collapse" id="fifth">
                              <ul class="list-unstyled pb-1 small">
                                  <li><a href="#" class="d-inline-flex align-items-center rounded">Introduction</a></li>
                              </ul>
                            </div>
                          </li>
                          <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="mb-1 list-unstyled">
                            <img src="images/rigth-arrow.png" class="normal image1"  id="image"  alt="">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" onclick="rotateImg1()" data-bs-toggle="collapse" data-bs-target="#sixth" aria-expanded="false">
                              <small class="image1">Which Helperland professional will come to my place?</small> 
                            </button>
                    
                            <div class="collapse" id="sixth">
                              <ul class="list-unstyled pb-1 small">
                                  <li><a href="#" class="d-inline-flex align-items-center rounded">Introduction</a></li>
                              </ul>
                            </div>
                          </li>
                          <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li class="mb-1 list-unstyled">
                           
                          <img src="images/rigth-arrow.png" class="normal"  id="image1"  alt="">  
                            <button class="btn d-inline-flex align-items-center rounded collapsed" onclick="rotateImg1()" data-bs-toggle="collapse" data-bs-target="#seventh" aria-expanded="false">
                               
                                <small>Which Helperland professional will come to my place?</small> 
                            </button>
                    
                            <div class="collapse" id="seventh">
                              <ul class="list-unstyled pb-1 small">
                                  <li><a href="#" class="d-inline-flex align-items-center rounded">Introduction</a></li>
                              </ul>
                            </div>
                          </li>-->
        <hr>
        <tr>
            <td>
                <a class="help" href="#"><b>For More Help</b> </a>
            </td>
        </tr>

    </tbody>

</table>

</div>



</div>

</div>

</div>

<div class=" my-5">

<footer class=" text-center text-white" style="background-color: #111111;">
    <!-- Grid container -->
    <div class="container p-5 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <a href="<?php echo BASEURL; ?>/functions/Home"><span class="foot"> <img
                        src="http://localhost/Home_DB/assets/images/About/footer.png" alt=""></span></a>
            <a href="<?php echo BASEURL; ?>/functions/Home" class="foot-link"><span
                    class="foot1">HOME</span></a>
            <a href="<?php echo BASEURL; ?>/functions/About" class="foot-link"><span
                    class="foot1">ABOUT</span></a>
            <a href="#" class="foot-link"><span class="foot1">TESTIMONIALS</span></a>
            <a href="<?php echo BASEURL; ?>/functions/FAQ" class="foot-link"><span class="foot1">FAQS</span></a>
            <a href="#" class="foot-link"><span class="foot1">INSURANCE POLICY</span></a>
            <a href="#" class="foot-link"><span class="foot1">IMPRESSUM</span></a>
            <span class="fb"> <img src="http://localhost/Home_DB/assets/images/About/FB.png" alt=""></span>
            <span> <img src="http://localhost/Home_DB/assets/images/About/insta (1).png" alt=""></span>




        </section>
        <!-- Section: Social media -->
    </div>

    <hr class="hr1">
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 l-txt" style="background-color: #111111;">
        © 2020 Copyright:
        <a class="text-white l-txt">All rights reserved. Terms and Conditions | Privacy Policy</a>
    </div>
    <!-- Copyright -->
</footer>

</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<script src="http://localhost/Home_DB/assets/js/demo.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>