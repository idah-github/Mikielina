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




<div class="section-container">
    <div class="container">
        <div class="row section-container-spacer">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1>Loans</h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <p>Adipiscing vitae proin sagittis nisl rhoncus mattis. Bibendum enim facilisis gravida neque convallis
                        a cras semper auctor. Sit amet risus nullam eget felis eget. Metus dictum at tempor commodo ullamcorper
                        a lacus vestibulum. Sit amet facilisis magna etiam tempor orci eu. Eleifend mi in nulla posuere.
                        Et magnis dis parturient montes nascetur ridiculus mus mauris vitae. 
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="pricing-card pricing-primary">
                    <h3>Weekly</h3>
                    <h6 class="price">18 <span>$/MO</span></h6>
                </div>
                <div class="pricing-features">
                    <ul class="features">
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim</li>
                    </ul>

                    <a href="contact.html" class="btn btn-primary" title="">Apply Now</a>
                </div>

            </div>
            <div class="col-md-4">
                <div class="pricing-card pricing-info">
                    <h3>Monthly</h3>
                    <h6 class="price"> 28 <span>$/MO</span></h6>
                </div>
                <div class="pricing-features">
                    <ul class="features">
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    </ul>
                    
                    <a href="contact.html" class="btn btn-primary" title="">Apply Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-card pricing-secondary">
                    <h3>Annual</h3>
                    <h6 class="price">48 <span>$/MO</span></h6>
                </div>
                <div class="pricing-features">
                    <ul class="features">
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim</li>
                    </ul>
                    <a href="contact.html" class="btn btn-primary" title="">Apply Now</a>
                </div>
            </div>
        </div>

    </div>
</div>  


<footer>
    <div class="section-container footer-container">
        <div class="container">
            <div class="row">
                    <div class="col-md-4">
                        <h4>About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor</p>
                    </div>

                    <div class="col-md-4">
                        <h4>Do you like ? Share this !</h4>
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
                        <p><small>© Untitled | Website created with <a href="http://www.mashup-template.com/" class="link-like-text" title="Create website with free html template">Mashup Template</a>/<a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Unsplash</a></small></p>    
                    </div>

                    <div class="col-md-4">
                        <h4>Subscribe to newsletter</h4>
                        
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
</footer>

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
<script type="text/javascript" src="./main.41beeca9.js"></script></body>

</html>