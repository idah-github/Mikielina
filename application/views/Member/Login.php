<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/Member/css/login.css')?>">
</head>

<title>Mikielina IS</title>
<body>
  
 <form class="myform">
     <h3 style="text-align: center;">Have an account? Login</h3>
    
     <label for="username">Username</label> <br>
        <input type="text" placeholder="name" id="inputusername" class="form-control"> <br>
     <!--label for="email">Email address</label> <br>
        <input type="email"  placeholder="emailaddress" id="inputemail" class="form-control"> <br-->
    <label for="password">Password</label> <br>
        <input type="password" placeholder="password" id="inputpassword" class="form-control">
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        <br>
        <button>
            <span>Login</span>
            <div class="liquid"></div>
        </button>
    <label class="checkbox-wrap checkbox-primary">Remember Me
        <input type="checkbox" checked>
            <span class="checkmark"></span>
        </label>
        <div class="w-50 text-md-right">
            <a href="#" style="color: #fff">Forgot Password</a>
        </div>
        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>  
        <h3 class="w-100 text-center">&mdash; Dont have an account? Signup &mdash;</h3>
    <!--label for="male">Male</label> 
    <input type="radio"> 
    <label for="female">Female</label> 
    <input type="radio"> <br>
    <label for="qwerty"></label>
    <select name="class" id="classes"></select>
    <option value="one">One</option>
    <option value="two">Two</option-->
    <!--label for="Login"></label> <br>
    <input type="submit" value="Login" >
    <button type="submit" style="">Sign In</button-->
    
   

</body>
</html>