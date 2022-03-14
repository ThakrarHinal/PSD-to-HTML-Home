
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Home_DB/assets/css/Service_History.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">

    <title>Service Provider -> Service History</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light Rectangle sticky-top ">
        <div class="container-fluid justify-content-center">
          <a class="navbar-brand" href="<?php echo BASEURL; ?>/functions/Home"><img class="img" src="http://localhost/Home_DB/public/assets/images/serviceHistory/logo-small.png" alt=""></a>
          <button class="navbar-toggler" type="button" onclick="responsive_menu()" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
<div class="container justify-content-center pass card"><br>
  <h3 class="card-title text-center">Forget password</h3>
  <p id="ok3"></p>
  <form action="" id="forgetPass" method="POST">
                  <div class="col-auto card-body">
                          <input type="password" name="new_pass" class="form-control" id="new_pass" placeholder="new password">
                      </div>
                      <div class="col-auto card-body">
                          <input type="password" name="con_pass" class="form-control" id="con_pass" placeholder="confirm Password">
                      </div>
                      <div>    
                        <input type="hidden" value="<?PHP echo $_REQUEST['token']; ?>" name="token" id="token">
                         <button type="submit" name="update" class="btn btn-1
                          btn-primary">update</button>
                      </div><br>
                   
                </form>
</div>

<script src="http://localhost/Home_DB/public/assets/js/validation.js"></script>


 
    