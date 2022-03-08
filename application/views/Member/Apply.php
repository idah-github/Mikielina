<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">  
   <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/signup.css')?>"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <title>Loan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/apply.css');?>"> 
  </head>
<body style="background-color: whitesmoke;">
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
          <li> <a href="<?php echo site_url('Member/Index')?>" class=" active"> <i class="fa fa-fw fa-home"></i> Home </a></li>
          <li><a href="<?php echo site_url('Member/Home')?>" title=""> About</a></li>
          <li><a href="<?php echo site_url('Member/Application')?>" title="">Application</a></li>
          <li><a href="<?php echo site_url('Member/Contact')?>" title="">Contact</a></li>
          <li><a href="<?php echo site_url('Member/Loan')?>" title="">Loan</a></li>
          <li><a href="<?php echo site_url('Member/Login')?>" title=""> <i class="fa fa-fw fa-user"></i> Login</a></li>
          <li>
            <p>
              <a href="<?php echo site_url('Member/Loan')?>" class="btn btn-primary navbar-btn" title="">Apply Now</a>
            </p>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4" style="background-color: grey; height:100%; width:1000px">
      <strong>LOAN FORM</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

      <!-- Form -->
      <form class="text-center" style="color: #757575;" method="POST">

          <!-- Name -->
          <div class="md-form mt-3">
              <input type="text" name="member_id" id="materialContactFormName" class="form-control">
              <label for="materialContactFormName"> Member id</label>

          </div>

          <!--Address -->
          <div class="md-form mt-3">
            <input name="address" type="text" id="materialContactFormNae" class="form-control">
            <label for="materialContactFormName"> Address</label>
        
          </div>

          <!-- E-mail -->
          <div class="md-form">
            <input type="email" name="email" id="materialContactFormEmail" class="form-control">
            <label for="materialContactFormEmail">Email</label>
        </div>
        <div class="text-left">
           Maritual status
        </div>

                <!-- Group of material radios - option 1 -->
        <div class="form-check text-left">
          <input type="radio" name="maritual_status" value="Single" class="form-check-input" id="materialGroupExample1" name="groupOfMaterialRadios">
          <label class="form-check-label" for="materialGroupExample1">Single</label>
        </div>

        <!-- Group of material radios - option 2 -->
        <div class="form-check text-left">
          <input type="radio" name="maritual_status" value="Married" class="form-check-input" id="materialGroupExample2" name="groupOfMaterialRadios" checked>
          <label class="form-check-label" for="materialGroupExample2">Married</label>
        </div>
        <!-- Group of material radios - option 2 -->
        <div class="form-check text-left">
          <input type="radio" name="maritual_status" value="separated" class="form-check-input" id="materialGroupExample3" name="groupOfMaterialRadios" checked>
          <label class="form-check-label" for="materialGroupExample3">Separated</label>
        </div>



          <!--Message-->
          <div class="md-form">
            <textarea id="materialContactFormMessage" name="reason" class="form-control md-textarea" rows="3"></textarea>
            <label for="materialContactFormMessage">Reason for application</label>
        </div>

          <!-- Gross monthly income -->
          <div class="md-form">
            <input type="number" name="monthly_income" id="materilContactFormEmail" class="form-control">
            <label for="materialContactFormEmail">Gross Monthly Income</label>
          </div>

          <!-- Gross monthly income -->
          <div class="md-form">
            <input type="number" name="loan_amount" id="materilContactFormAmount" class="form-control">
            <label for="materialContactFormAmount">Amount of Loan requested</label>
          </div>
          <!-- Guarantor Name -->
          <div class="md-form mt-3">
            <input type="text" name="guarantor_name" id="materialConactFormName" class="form-control">
            <label for="materialContactFormName"> Guarantor Name</label>
    
          </div>

          <!--Address -->
          <div class="md-form mt-3">
            <input type="text" name="g_address" id="materialContatFormNae" class="form-control">
            <label for="materialContactFormName"> Address</label>
        
          </div>

          <!-- E-mail -->
          <div class="md-form">
              <input type="email" id="materilContactFormEmail" name="g_email" class="form-control">
              <label for="materialContactFormEmail">E-mail</label>
          </div>

            <!-- Newsletter -->
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
              <label class="form-check-label" required for="materialRegisterFormNewsletter">Agree to our terms and conditions</label>
          </div>




          <!-- Send button -->
          <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" name="submit" value="loanform" type="submit">Apply</button>

      </form>
      <!-- Form -->

  </div>

</div>
</body>
</html>