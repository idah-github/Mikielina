<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/Member/css/login.css')?>">

 
</head>

<title>Mikielina IS</title>
<body >
  
 <form class="myform" method="POST" action="Login/login_user">
     <h3 style="text-align: center;">Sign In</h3>
     <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?> 
     <label for="Inputforusername">Username</label> <br>
        <input type="username" placeholder="name" name="username" id="inputusername" class="form-control"> <br>
     <!--label for="email">Email address</label> <br>
        <input type="email"  placeholder="emailaddress" id="inputemail" class="form-control"> <br-->
    <label for="password">Password</label> <br>
        <input type="password" placeholder="password" name="password" id="inputpassword" class="form-control">
        <br>

        <label class="checkbox-wrap checkbox-primary">Remember Me
        <input type="checkbox" >
            <span class="checkmark"></span>
        </label>
        <br>
        <button type="submit" class="btn  text-white bg-danger">
            <span>Login</span>
            <div class="liquid"></div>
        </button>


        <div class="w-50 text-md-right">
            <a href="#" style="color: #fff">Forgot Password</a>
        </div>
        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>  
        <h6 class="w-100 text-center">&mdash; Dont have an account?  <a href="<?php echo site_url('Member/Signup') ?>" class="navbar-btn text-white" title="">Signup</a> &mdash;</h6>
</form>
        <footer>
    <div class="section-container footer-container">
        <div class="container">
            <div class="row">

                    <!--div class="col-md-4">
                        <h4></h4>
                        <p>
                            <a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon" title="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                          <a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon" title="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                          <a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon" title="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                        </p-->
                        <p><small> | Website created by <a href="http://www.mashup-template.com/" class="link-like-text" title="Create website with free html template"></a>Idah<a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Guantai</a></small></p>    
                    </div>

                    <!--div class="col-md-4">
                        <h4>Join Mikielina Now</h4>

                    </div-->
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="./main.41beeca9.js"></script></body>
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