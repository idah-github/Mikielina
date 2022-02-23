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
        <li> <a href="<?php echo site_url('Member/Index')?>" class=" active"> <i class="fa fa-fw fa-home"></i>  Home </a></li>
          <li><a href="<?php echo site_url('Member/Home')?>" title=""> About</a></li>
          <li><a href="<?php echo site_url('Member/Components')?>" title="">Application</a></li>
          <li><a href="<?php echo site_url('Member/Contact')?>" title="">Contact</a></li>
          <li><a href="<?php echo site_url('Member/Loan')?>" title="">Loan</a></li>
          <li><a href="<?php echo site_url('Member/Login')?>" title=""> <i class="fa fa-fw fa-user"></i> Login</a></li>
          <li>
            <p>
              <a href="" class="btn btn-primary navbar-btn" title="">Join</a>
            </p>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="approval-form ">

<div class="side-highlight">
    <img src="<?php echo base_url('uploads/bg/portfolio.svg')?>" alt="">
</div>
<div class="main-form ">
    <form action="<?php echo site_url('vendors/Uploads/approve_vendor')?>" method="post">
        <h6 class="text-center"> Application Form</h6>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Full Legal Name</label>
            <input type="text" class="form-control" required name="legal_name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id number or Passport number</label>
            <input type="number" class="form-control" required name="id_no" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-floating">
            <textarea class="form-control" required name="business_description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 120px"></textarea>
            <label for="floatingTextarea2">Briefly describe how you are part of the family</label>
        </div>
        <div class="pick-gender">
            Select Gender
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Female
            </label>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Location</label>
            <input type="text" class="form-control" required name="location" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <input type="submit" value="Send" class="form-control" >



    </form>
</div>

</div>
<!-- end -->
<!-- End of this section -->
<!--?php elseif($v_info['Vendor_Approved'] == 1):?>
<! start of content to be displayed for some vendor waiting for approval from the administrator -->
<!--div class="pending-message">
<h4> Hello <?php echo $_SESSION['full_names']?></h4>
<p>
 Hello your application was sent successfully. Wait for the admin to approve your account to start selling. If this takes longer than 72 hours contact admin via the email <b> support@cartlite.co.ke</b> 
</p>
</div-->
<!-- end of this section -->
<!--?php elseif($v_info['Vendor_Approved'] == 2): ?-->


<!-- start of options of a vendor whose account has been approved  -->
<div class="approved-member">
<div class="welcome-member"> <h6 class="h6"> Welcome <!--?php echo ucfirst($_SESSION['username'])?-->, </h6> 
 use this panel to design, upload, edit and delete products from our store.
  </div>
<div class="upload-product ">
    <img src="<?php echo base_url('assets/vendor/images/dashboard2.svg')?>" alt="">
</div>
</div>
<!-- end of this section -->
<!--?php
$this->load->view('common/flash_messages');
?-->

<!-- Add your site or app content here -->
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">

        <!--div class="template-example">
          <h2 class="template-title-example">Text</h2>
          <p>This is bold and this is semi bold and <b>this is extra bold</b>. This is italic and this is extra light and this is light
          and this is regular. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. <a href="">Duis aute irure dolor</a> in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          </blockquote>
          
          </p>
        </div-->

        <!--div class="template-example">
          <h2 class="template-title-example">Headings</h2>
          
          <table class="table table-bordered">
            <tr><td><h1>H1: Heading 1</h1></td></tr>
            <tr><td><h2>H2: Heading 2</h2></td></tr>
            <tr><td><h3>H3: Heading 3</h3></td></tr>
            <tr><td><h4>H4: Heading 4</h4></td></tr>
          </table>
          
        </div>

        
        <div class="template-example">
          <h2 class="template-title-example">List</h2>
          <div class="row">
            <div class="col-md-6">
              <h3 class="template-title-example">Ordered</h3>
              <ul>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h3 class="template-title-example">Number</h3>
              <ol>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
              </ol>
            </div>
          </div>
        </div>
        

        
      </div>

      <div class="col-xs-12 col-md-6">
        <div class="template-example">
          
          <div class="row">
            
            <div class="col-md-6">
                <h2 class="template-title-example">Icons</h2>
                <p>
                    <span class="fa-icon">
                      <i class="fa fa-facebook"></i>
                    </span>
                  
                    <span class="fa-icon">
                      <i class="fa fa-twitter"></i>
                    </span>
                  
                    <span class="fa-icon">
                      <i class="fa fa-linkedin"></i>
                    </span>
                 
                    <span class="fa-icon">
                      <i class="fa fa-instagram"></i>
                    </span>
                  
                </p>
            </div>

          </div>


          


        </div>

        <div class="template-example">
          <h2 class="template-title-example">Buttons</h2>
          <div class="row">
            <div class="col-md-6">
              <h3 class="template-title-example">Primary</h2>
              <div class="row">
                  <div class="col-md-6">
                  <p><a href="" class="btn btn-primary btn-lg">Primary Large</a></p>
                  <p><a href="" class="btn btn-primary">Primary </a></p>
                  <p><a href="" class="btn btn-primary btn-sm">Primary Small</a></p>
                </div>
              </div>

              <h3 class="template-title-example">Default</h2>
              <div class="row">
                  <div class="col-md-6">
                  <p><a href="" class="btn btn-default btn-lg">Default Large</a></p>
                  <p><a href="" class="btn btn-default">Default </a></p>
                  <p><a href="" class="btn btn-default btn-sm">Default Small</a></p>
                </div>
              </div>

            </div>

            <div class="col-md-6">
              <h3 class="template-title-example">Secondary</h2>
              <div class="row">
                  <div class="col-md-6">
                  <p><a href="" class="btn btn-info btn-lg">Secondary Large</a></p>
                  <p><a href="" class="btn btn-info">Secondary </a></p>
                  <p><a href="" class="btn btn-info btn-sm">Secondary Small</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="template-example">
          <h2 class="template-title-example">Inputs</h2>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>

            <div class="form-group">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div-->

            <div class="form-group">
              <label class="checkbox-inline">
                <input 
                type="checkbox" id="inlineCheckbox1" value="option1"> Email me a copy
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2"> I am a human
              </label>
            </div>

            <div class="form-group">
              <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
            </div>
            
            <div class="alert alert-success" role="alert">Your message was successfully sent</div>
            <div class="alert alert-danger" role="alert">Your message has not been sent, restart</div>
        </div>




      </div>
    </div-->
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
                        </p>
                        <p><small> | Website created by <a href="http://www.mashup-template.com/" class="link-like-text" title="Create website with free html template"></a>Idah<a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Guantai</a></small></p>    
                    </div>

                    <div class="col-md-4">
                        <h4>Join Mikielina Now</h4>
                        
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