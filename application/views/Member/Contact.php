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
 

  <title>Title page</title>  
</head>

<body>

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
          <li><a href="<?php echo site_url('Member/Components')?>" title="">Application</a></li>
          <li><a href="<?php echo site_url('Member/Contact')?>" title="">Contact</a></li>
          <li><a href="<?php echo site_url('Member/Loan')?>" title="">Loan</a></li>
          <li><a href="<?php echo site_url('Member/Login')?>" title=""> <i class="fa fa-fw fa-user"></i>Login</a></li>
          <li>
            <p>
              <a href="<?php echo site_url('Member/Signup')?>" class="btn btn-primary navbar-btn" title="">Join Now</a>
            </p>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</header>



<div class="section-container no-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="map"></div>
            </div>
            <div class="col-xs-12">

                <div class="row">
                    <div class="col-md-6">
                        <form action="" class="reveal-content contact-form">
                            <div class="form-group">
                                <input type="name" class="form-control" id="name" placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Send</button>
                        </form>
                    </div>


                    <div class="col-md-5 col-md-offset-1">
                            
                        <h3>Administration</h3>
                        
                        <div>
                            <p>42 rue Rouelle <br/>75015 Meru Kenya</p>
                        </div>
                        <div>
                            <p>contact@mikielina.com<br>+254 45 31 64 32</p>
                        </div>
                    
                        <div>
                            <h3></h3>
                        </div>
                        <div>
                            <p>To apply for a membership with our us, please feel free to fill the application form
                                </p>
                        </div>
                       
                    </div>
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
                        <h4>Thankyou</h4>
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
                        <p><small>Untitled | Website created by <a href="http://www.mashup-template.com/" class="link-like-text" title="Create website with free html template">Idah Guantai</a>/<a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images"></a></small></p>    
                    </div>

                    <div class="col-md-4">
                        <h4>Apply Now</h4>
                        
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
<!-- Google maps  -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzA22auDNIFSRiTPytfZVhtuFG_KHBhFQ&callback=googleMapInit"></script>
<!-- end Google Maps -->



<script type="text/javascript" src="./main.41beeca9.js"></script></body>

</html>