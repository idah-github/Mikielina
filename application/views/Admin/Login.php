<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>  
<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/login.css')?>">
</head>
<body>
 <?php
   // $this->load->view('common/flash_messages');
?> 
<div class="login-container">
    <div class="form-div ">

    <h4 class="text-center"> Admin Login</h4>
     <?php 

    // $attributes = array();

   echo form_open('admin/Login/login_admin');
    ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" required name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Access Code</label>
        <input type="number" required name="accesscode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" required name="password" class="form-control" id="exampleInputPassword1">
      </div>

      <button type="submit" class="btn ">Login</button>

  <?php echo form_close() ?> 
      <!-- end of form -->
    </div>
  <div class="image-div">
      <img src="<?php echo base_url('uploads/bg/logo2.png')?>" alt="">
    </div> 
</div>

<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>    
</body>
</html>