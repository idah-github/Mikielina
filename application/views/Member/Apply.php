<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">  
   <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/signup.css')?>"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <title>Loan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/apply.css');?>"> 
  </head>
<body>
<?php if($v_info['LoanStatus'] == 0):?>
                        <!-- content to be displayed to a new user or when the user account has been deactivated -->
                        <div class="loan-form">
                             <!-- <?php echo ucfirst($_SESSION['username'])?> -->
                            
<div class="card">


 <h5  style=" height:100%; width:1000px;  background-color:white; ">
      <strong>LOAN FORM</strong>
  </h5>
  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">


      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="<?php echo site_url('Member/Apply/approve_application')?>" method="POST">

          <!-- Name -->
          <div class="md-form mt-3">
              <input type="text" name="username" id="materialContactFormName" class="form-control">
              <label for="materialContactFormName"> UserName</label>

          </div>

          <!--Address -->
          <div class="md-form mt-3">
            <input name="address" type="text" id="materialContactFormNae" class="form-control">
            <label for="materialContactFormName"> Address</label>
        
          </div>

          <!-- E-mail -->
          <!-- <div class="md-form">
            <input type="email" name="email" id="materialContactFormEmail" class="form-control">
            <label for="materialContactFormEmail">Email</label>
        </div> -->
       



          <!--Message-->
          <div class="md-form">
            <textarea id="materialContactFormMessage" name="reason" class="form-control md-textarea" rows="3"></textarea>
            <label for="materialContactFormMessage">Reason for application</label>
        </div>

          <!-- Gross monthly income -->
          <div class="md-form">
            <input type="number" name="income" id="materilContactFormEmail" class="form-control">
            <label for="materialContactFormEmail">Gross Monthly Income</label>
          </div>

          <!-- Gross monthly income -->
          <div class="md-form">
            <input type="number" name="amount" id="materilContactFormAmount" class="form-control">
            <label for="materialContactFormAmount">Amount of Loan requested</label>
          </div>
          <!-- Guarantor Name -->
          <div class="md-form mt-3">
            <input type="text" name="gname" id="materialConactFormName" class="form-control">
            <label for="materialContactFormName"> Guarantor Name</label>
    
          </div>

          <!--Address -->
          <div class="md-form mt-3">
            <input type="text" name="gaddress" id="materialContatFormNae" class="form-control">
            <label for="materialContactFormName"> Address</label>
        
          </div>

          <!-- E-mail -->
          <div class="md-form">
              <input type="gemail" id="materilContactFormEmail" name="gemail" class="form-control">
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

<?php elseif($v_info['LoanStatus'] == 1):?>
                     
                        <div class="pending-message">
                            <h4> Hello <?php echo $_SESSION['username']?></h4>
                            <p>
                             Hello your application was sent successfully. Wait for the admin to approve your loan. If this takes longer than 72 hours contact admin via the email <b> mikielina@gmail.com</b> 
                            </p>
                        </div>
                       
                        <?php elseif($v_info['LoanStatus'] == 2): ?>
                         <?php endif;?> 
                 

                        
                  
                        
</body>
</html>