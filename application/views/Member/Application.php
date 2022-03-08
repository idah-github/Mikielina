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
<h6 class="text-center" style="color:black; font-size:larger; font:bolder;">  Membership Application Form </h6>
<div class="form-container"> 
  <form class="row g-3" action="<?php echo site_url('Member/Apply/approve_member')?>" method="POST" >
  <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label"> FirstName</label>
        <input type="text" class="form-control" required name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label"> MiddleName</label>
          <input type="text" class="form-control" required name="middlename" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    
    <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label"> FamilyName</label>
          <input type="text" class="form-control" required name="familyname" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">EmailAddres</label>
      <input type="email" class="form-control" name="email" id="inputEmail4">
    </div>
    
    <div class="col-6">
      <label for="inputAddress" class="form-label">Age</label>
      <input type="text" class="form-control"  name="age" id="inputAge" >
    </div>
    <div class="col-gender">
      <label for="inputState" class="form-label">Gender</label>
      <select class="form-select" name="gender" aria-label="Default select example" >
        <option selected>Choose one</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Other</option>
      </select>
    </div>
    <div class="col-6">
      <label for="inputAddress2" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Apartment, studio, or floor">
    </div>
  
      <br><br><br>
    <div class="col-12">
      <button type="submit" class="btn btn-primary" value="send" >Submit</button>

  </form>
  
</div>                   
 
                        <!-- start of content to be displayed for some vendor waiting for approval from the administrator -->
    <!-- <div class="pending-message">
        <h4> Hello <?php echo $_SESSION['familyname']?></h4>
          <p>
            Hello your application was sent successfully. Wait for the admin to approve your account to start selling. If this takes longer than 72 hours contact admin via the email <b> support@cartlite.co.ke</b> 
            </p>
        </div> -->
                        <!-- end of this section -->
                       

<div class="approved-member">
  <div class="welcome-member"> <h6 class="h6">  <!--?php echo ucfirst($_SESSION['username'])?--></h6> 
  </div>
</div>
<!-- <footer>
   
</footer> -->

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>
<script type="text/javascript" src="./main.41beeca9.js"></script>
</body>

</html>