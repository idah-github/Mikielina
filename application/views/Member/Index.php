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

 <link rel="stylesheet" href="<?php echo base_url('assets/Member/css/home.css')?>">

  <title>Mikielina</title>  

  



</head>

<body style="background-color: gray;">

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
          <img src="./assets/Member/images/bank.jpg" class="navbar-logo-img" alt="">
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
<div class="white-text-container background-image-container dashboard-block"  >
   
<!--div class="opacity"></div-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Mikielina Family Investment Group</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 <a href="<?php echo base_url('Member/Signup')?>" title="" class="btn btn-lg btn-primary">Save With Us Now</a>
            </div>
           
        </div>
    </div>
</div>

<div class="section-container border-section-container benefits-container ">
    <div class="container ">
            <div class="row">
                <div class="col-md-12 section-container-spacer">
                    <div class="text-center">
                        <h2>Why Join US</h2>
                        <p> Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.<br> Porta non
                            pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. </p>
                    </div>
                </div>

                <div class="col-md-4 benefits-block">
                    <div class="fa-container">
                        <i class="fa fa-comment-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3>Invest With Us</h3>
                    </div>
                    <div>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac.</p>
                    </div>
                </div>
                <div class="col-md-4 benefits-block">
                    <div class="fa-container">
                        <i class="fa fa-heart-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3>Low Interest Loans</h3>
                    </div>
                    <div>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac.
                        </p>
                    </div>
                </div>
                <div class="col-md-4  benefits-block">
                    <div class="fa-container">
                        <i class="fa fa-bell-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3>Save</h3>
                    </div>
                    <div>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac. 
                        </p>
                    </div>
                </div>

            </div>
    </div>
</div>

<!-- <div class="section-container">
    <div class="container">
            <div class="row">
                <div class="col-xs-12">


                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive" src="./assets/images/save.jpg" alt="First slide">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="./assets/images/home.jpg" alt="Second slide">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="./assets/images/invest.jpg" alt="Third slide">
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div>


                </div>
            </div>
    </div>
</div> -->


<!-- <div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2></h2>
                    <p> Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta non
                        pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus. Turpis
                        egestas pretium aenean pharetra magna ac. Id cursus metus aliquam eleifend mi. </p>
                    <a href="login.html" title="" class="btn btn-primary btn-lg">Join Now</a>
                </div>
            </div>
        </div>
     </div>
 </div> -->

 <!--div class="section-container">
    <div class="container">
        <div class="row">                   
            <div class="col-md-7">
                <img class="img-responsive" src="./assets/images/img-06.png" alt="">
            </div>

            <div class="col-md-5">
                <ul class="features">
                    <li>
                        <h3>Dui augue</h3>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.
                        </p>
                    </li>
                    <li>
                        <h3>Malesuada</h3>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.
                        </p>
                    </li>
                    <li>
                        <h3>Bibendum</h3>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.
                        </p>
                    </li>
                </ul>
            </div-->
        

              
            <div class="row">
                <div class="col-md-4">
                        <img class="img-responsive page-base-image" src="./assets/images/logo-01.png" alt="">

                </div>
                <div class="col-md-4">
                        <img class="img-responsive page-base-image" src="./assets/images/logo-02.png" alt="">
                </div>
                <div class="col-md-4">
                        <img class="img-responsive page-base-image" src="./assets/images/logo-03.png" alt="">
                </div>
            </div>
            
        </div>
    </div>
</div>






<!-- <footer>
    <div class="section-container footer-container">
        <div class="container">
            <div class="row">
                    <div class="col-md-4">
                        <h4>About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor</p>
                    </div>

                    <div class="col-md-4">
                        <h4>!</h4>
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
                        </p>
                        <p><small> | Website created by <a href="http://www.mashup-template.com/" class="link-like-text" title="Create website with free html template"></a>Idah<a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Guantai</a></small></p> 
                    </div>

                    <div class="col-md-4">
                        <h4>Join</h4>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control footer-input-text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary btn-newsletter ">OK</button>
                                </div>
                            </div>
                        </div>


                    </div>
            </div>
        </div>
    </div>
</footer> -->

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->

<script type="text/javascript" src="./main.41beeca9.js"></script>
</body>

</html>