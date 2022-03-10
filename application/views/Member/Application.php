<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />


  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/application.css')?>">
 <style>

 </style>

  <title>Mikielina</title>  

</head>

<body>

 <!-- Add your content of header -->
<!-- <header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.html" title="">
          <img src="" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
        <li> <a href="<?php echo site_url('Member/Index')?>" class=" active"> <i class="fa fa-fw fa-home"></i>  Home </a></li>
          <li><a href="<?php echo site_url('Member/Home')?>" title=""> About</a></li>
          <li><a href="<?php echo site_url('Member/Components')?>" title="">Application</a></li>
          <li><a href="<?php echo site_url('Member/Contact')?>" title="">Contact</a></li>
          <li><a href="<?php echo site_url('Member/Loan')?>" title="">Loan</a></li>
          <li><a href="<?php echo site_url('Member/Login')?>" title=""> <i class="fa fa-fw fa-user"></i> Login</a></li>
          <li>
            <p>
              <a href="" class="btn btn-primary navbar-btn" title="">Join</a>
            </p>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</header> -->
<div class="head"> 
  
<h6 class="text-center" style="color:black; font-size:larger; font:bolder; ">  Update profile </h6>
</div>
       
<div class="row mt-5" >
                <div class="col" style="background-image: url('assets/Member/images/dark.jpg');" >
                   <p> </p>
                </div>
  <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5" >
                    <h2 class="special-number"></h2>
  <div class="dishes-text">
   <form class="row g-3" action="<?php echo site_url('Member/Apply/approve_application')?>" method="POST" >
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label"> UserName</label>
        <input type="text" class="form-control" required name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
   
    
    <div class="col-6">
      <label for="inputAddress2" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Apartment, studio, or floor">
    </div>

    <div class="col-gender">
      <label for="inputState" class="form-label">Marital Status</label>
      <select class="form-select" name="status" aria-label="Default select example" >
        <option selected>Choose one</option>
        <option value="1">Married</option>
        <option value="2">Single</option>
        <option value="3">Separated</option>
      </select>
    </div>

    <div class="col-gender">
      <label for="inputState" class="form-label">Gender</label>
      <select class="form-select" name="gender" aria-label="Default select example" >
        <option selected>Choose one</option>
        <option value="1">Female</option>
        <option value="2">Male</option>
        <option value="3">Other</option>
      </select>
    </div>
  
      <br><br><br>
    <div class="col-12">
      <button type="submit" class="btn btn-primary" value="send" >Submit</button>

  </form>
                       
                   
  </div>
  </div>
 </div>           
 
                        <!-- start of content to be displayed for some vendor waiting for approval from the administrator -->
    <!-- <div class="pending-message">
        <h4> Hello <?php echo $_SESSION['username']?></h4>
          <p>
            Hello your application was sent successfully. Wait for the admin to approve your account to start selling. If this takes longer than 72 hours contact admin via the email <b> support@cartlite.co.ke</b> 
            </p>
        </div> -->
                        <!-- end of this section -->
                       

  <div class="approved-member">
    <div class="welcome-member"> <h6 class="h6">  <!--?php echo ucfirst($_SESSION['username'])?--></h6> 
    </div>
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navActivePage();
    });
  </script>
  <script type="text/javascript" src="./main.41beeca9.js"></script>
</body>

</html>