<?php include('header.php');
 ?>

      
      <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/signin.css">

      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

      
        <h2 class="text-center con comman"><b>Create an account</b> </h2>
            
        <div class="d-flex">
          <hr class="line">
          <img class="star" src="http://localhost/Home_DB/assets/images/contact/star.png" alt="">
          <hr class="line-1">
        </div>

        <hr class="hr">
        
             
      <div class="toast align-items-center justify-content-center" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body" id="message"></div>
          <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
        <div class="container">
          <div class="row justify-content-center margin-top-50">
              <div class="col-md-6">
                
                <p id="ok2"></p>
                  <form method="post" action="" id="createuser" class="row g-3">
                   
                      <div class="col-md-6">
                          <input type="text" name="First_name1" class="form-control" id="First_name1" placeholder="First Name">
                          <p id="namecheck"></p>
                      </div>

                      <div class="col-md-6">
                          <input type="text" name="Last_name1" class="form-control" id="Last_name1" placeholder="Last Name">
                          <p id="namecheck1"></p>
                      </div>
                      <div class="col-6">
                          <input type="email" name="email1" id="email1" class="form-control" placeholder="Email">
                          <p id="namecheck2"></p>
                      </div>
                     
                      <div class="input-group col-sm btn1">
                          <span class="input-group-text" id="inputGroup-sizing-default">
                            <button class="btn input-group-text  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">+46</button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">+91</a></li>
                            <li><a class="dropdown-item" href="#">+1</a></li>
                            <li><a class="dropdown-item" href="#">+35</a></li>
                          </ul>
                          </span>
                          <input type="text" name="mobile1" class="form-control" id="mobile1" placeholder="Mobile number" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          <p id="namecheck3"></p>
                        </div>

                       <div class="col-md-6">
                          <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Password">
                          <p id="namecheck4"></p>
                      </div>
                      <div class="col-md-6">
                          <input type="password" name="Repeat_password" class="form-control" id="Repeat_password" placeholder="Reapeat Password">
                          <p id="namecheck5"></p>
                      </div>
                       <!-- <?php $this->flash('passNotMatch', 'alert alert-danger'); ?> -->
                      
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                          
                          Yes, I would like to subscribe to the newsletter of Helperland GmbH with vouchers, trends, promotions and individualized offers. I can unsubscribe from the newsletter at any time in the newsletter and in the customer account itself.
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                        <label class="form-check-label" for="flexCheckChecked">
                          I agree to the terms and conditions of Helperland GmbH.
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                        <label class="form-check-label" for="flexCheckChecked">
                          I have read the privacy policy.
                        </label>
                      </div>

                     


                      <div class="col-12 text-center">
                          <button type="submit" name="register" id="create" value="CREATE" class="btn submit1">Register</button>
                      </div>

                  </form>
              </div>
          </div>
      </div>
       


        <div class=" my-5">

          <footer class=" text-center text-white" style="background-color: #111111;">
          <!-- Grid container -->
          <div class="container p-3 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
              <a href="<?php echo BASEURL; ?>/functions/Home" class="foot-link"><span class="foot"> <img src="http://localhost/Home_DB/assets/images/About/footer.png" alt=""></span></a>
              <a href="<?php echo BASEURL; ?>/functions/Home" class="foot-link"><span class="foot1">HOME</span></a>
              <a href="<?php echo BASEURL; ?>/functions/About" class="foot-link"><span class="foot1">ABOUT</span></a>
              <a href="#" class="foot-link"><span class="foot1" >TESTIMONIALS</span></a>
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



        <script src="http://localhost/Home_DB/public/assets/js/validation.js"></script>
        
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      
  </body>
  </html>