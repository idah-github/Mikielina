<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en"
>
  <head>
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">  
   <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/signup.css')?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <title>Member signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/signup.css');?>">
  </head>
  <body style="background-color: whitesmoke;">
  <?php
            $this->load->view('common/flash_messages');
          ?>
    <div class="signup-container ">
        <div class="image-box bg-danger">
        <img src="<?php echo base_url('assets/Member/images/fahm.jpg')?>" alt="">
        </div>


            <div class="signup-box ">
                <h3>Sign Up</h3>
                
                <!--form action ='<?php echo site_url('Member/signup/validation')?> 'method= 'POST'-->
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <?php echo form_open('Member/Signup/validation') ?>
                    
                <div class="form-group">
                        <label for="InputForName" class="form-label">Username</label>
                        <input type="text" name="username" required class="form-control" id="InputForName" value="<?= set_value('username') ?>">
                        <span class="text-danger"> <?php echo form_error('username'); ?></span> 
                    </div>

                    <div class="form-group">
                        <label for="InputForName" class="form-label">Familyname</label>
                        <input type="text" name="familyname" required class="form-control" id="InputForName" value="<?= set_value('username') ?>">
                        <span class="text-danger"> <?php echo form_error('username'); ?></span> 

                    </div>
                    
                    
                    <div class="form-group">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" placeholder="example@gmail.com" required class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                        <span class="text-danger"> <?php echo form_error('email'); ?></span> 

                    </div>

                    <div class="form-group">
                        <label for="InputForName" class="form-label">Age</label>
                        <input type="text" name="age" required class="form-control" id="InputForName" value="<?= set_value('username') ?>">
                        <span class="text-danger"> <?php echo form_error('age'); ?></span> 

                    </div>

                    <div class="form-group">
                        <label for="InputForEmail" class="form-label">Phone Number</label>                    <div class="form-group">
                        <input type="number" name="phone_number" placeholder="example 07 11 222 333"  required class="form-control" id="InputForEmail" value="<?= set_value('phone_number') ?>">
                        <span class="text-danger"> <?php echo form_error('phone_number'); ?></span> 

                    </div>

                    </div>
                    
                    <div class="form-group">
                        <label for="InputForPassword" class="form-label">Password <small class="text-muted"> ( min 8 characters )</small></label>
                        <input type="password" name="password" required minlength="8" class="form-control" id="InputForPassword">
                        <span class="text-danger">  <?php echo form_error('password'); ?></span> 

                    </div>
                    
                    <div class="form-group">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" required name="confpassword" minlength="8" class="form-control" id="InputForConfPassword">
                        <span class="text-danger"> <?php echo form_error('confpassword'); ?></span> 

                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                <?php echo form_close();?>

                <p class="my-2 text-center"> Already have an account ? <a href="<?php echo site_url('Member/Login')?>" class="text-primary"> <b>Login</b></a></p>
            </div>
             
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>