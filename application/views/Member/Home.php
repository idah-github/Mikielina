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
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/main.css')?>">
 

  <title>Mikielina</title>  

</head>

<body style="background-image: url(assets/images/home.jpg);" >

 <!-- Add your content of header -->
<header>
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
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
        <li> <a href="<?php echo site_url('Member/Index')?>" class=" active"> <i class="fa fa-fw fa-home"></i> Home </a></li>
          <li><a href="<?php echo site_url('Member/Home')?>" title=""> About</a></li>
          <?php if(isset($_SESSION['Username'])):?>
                <li><a href="<?php echo site_url('Member/Application')?>" title="">Application</a></li>
                <li><a href="<?php echo site_url('Member/Contact')?>" title=""><i class="fa fa-fw fa-envelope"></i>Contact</a></li>
                <li><a href="<?php echo site_url('Member/Loan')?>" title="">Loan</a></li>
            <?php else:?>
                <li><a href="<?php echo site_url('Member/Login')?>" title=""> <i class="fa fa-fw fa-user"></i> Login</a></li>
                <li>
                    <p>
                    <a href="<?php echo site_url('Member/Signup') ?>"  class="btn btn-primary navbar-btn" title="">Join Us Now</a>
                    </p>
                </li>
            <?php endif;?>
          
        </ul>
      </div>
    </div>
  </nav>
</header>


<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <h1></h1>
                     </div>   
                        <p class="section-container-spacer">Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac. Id cursus metus aliquam eleifend mi. Odio tempor
                            orci dapibus ultrices in iaculis. Lacus luctus accumsan tortor posuere ac ut consequat semper.
                            Tincidunt ornare massa eget egestas purus viverra accumsan. Odio euismod lacinia at quis. Sit
                            amet nulla facilisi morbi. At varius vel pharetra vel turpis nunc eget lorem dolor. Feugiat vivamus
                            at augue eget. Feugiat nisl pretium fusce id velit ut. Venenatis tellus in metus vulputate eu
                            scelerisque felis imperdiet. Ut placerat orci nulla pellentesque. Laoreet suspendisse interdum
                            consectetur libero id.
                        </p>

                    <div class="row section-container-spacer">
                        <div class="col-md-6">
                            <img class="img-responsive" src="./assets/images/img-03.jpg">
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="./assets/images/img-02.jpg">
                        </div>
                    </div>

               </div>
               
                <div class="col-xs-12 col-md-8 col-md-offset-2">
              
                        <p>
                            Non blandit massa enim nec dui nunc mattis enim ut. Cursus in hac habitasse platea dictumst quisque sagittis
                            purus Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum
                            dolor sit amet consectetur adipiscing elit. Integer quis auctor elit sed. In pellentesque massa
                            placerat duis ultricies. Interdum consectetur libero id faucibus nisl tincidunt. Condimentum
                            mattis pellentesque id nibh tortor id aliquet</p>
                            <small class="signature pull-right">Team</small>
                </div>
            </div>




        </div>

    </div>



</div>








<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>


<script type="text/javascript" src="./main.41beeca9.js"></script></body>

</html>