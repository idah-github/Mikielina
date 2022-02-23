<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/admin/css/dashboard.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/homedash.css');?>">

    <link rel="stylesheet" href=" <?php echo base_url('assets/admin/css/approval.css')?>">
  </head>
  <body>
  <header> 
   <nav class="navbar  admin-navbar">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">Fashiola </a>

        <form action="#" class="">
        <input type="text" class="form-control" placeholder="Search">

        </form>
        <a href="#" class="notifications-link" > <i class="far fa-bell text-danger"></i> <sup><span class="badge bg-primary">9</span></sup></a>

        <a href="#" class="admin-profile"> 
          <?php $uname = $_SESSION['username'];
            echo ucfirst($uname[0]); 
          ?>
        </a>
      </div>
  </nav>
  <div class="hidden-profile">
    <span class="name"><?php echo $_SESSION['full_names']?></ </span> 
    <span class="mail"><?php echo $_SESSION['email']?></  </span>
    <a href="#" class="account-link"> <i class="fas fa-sign-out-alt"></i> Logout</a>

  </div>
  </header>


  <div class="main-wrap">
      <input id="slide-sidebar" type="checkbox" role="button" />
          <label for="slide-sidebar"><span class="hamburger-menu"><i class="fas fa-bars"></i></span></label>
      <div class="sidebar"> 

      <div class="profile-block">
        <img src="https://images.unsplash.com/photo-1558203728-00f45181dd84?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZW50cmVwcmVuZXVyc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
        <span class="admin-name"> John Doe</span>
      </div>
      <a href="<?php echo site_url('admin/Dashboard')?>" class="side-link"> 
      <i class="fas fa-th-large"></i>
       Home </a>
      <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="fas fa-tasks"></i>   Tasks            

              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="<?php echo site_url('admin/Dashboard/approve_vendors')?>" class="accordion-links active"> <i class="fas fa-clipboard-check"></i> Approve Vendors</a>
                <a href="<?php echo site_url('admin/Dashboard/view_products')?>" class="accordion-links">  <i class="fas fa-shopping-bag"></i>  Products</a>

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="fas fa-store-alt"></i> Vendors            

              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="<?php echo site_url('admin/Vendor')?>" class="accordion-links"> Vendor Data</a>
                <a href="<?php echo site_url('admin/Vendor/show_vendors')?>" class="accordion-links"> All Vendors </a>


              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="far fa-chart-bar"></i>  Analytics         

              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="#" class="accordion-links"> Statistics</a>



              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="far fa-user"></i>   Users         

              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="<?php echo site_url('admin/User')?>" class="accordion-links">User List</a>

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
              <i class="fas fa-sliders-h"></i>    Settings        

              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <a href="<?php echo site_url('admin/Dashboard/manage_admin')?>" class="accordion-links">System Settings</a>


              </div>
            </div>
          </div>
      </div>

      </div>

      <div class="main-block">
      <!-- Used to render flash messages -->
      <?php
            $this->load->view('common/flash_messages');
      ?>

<div class="profiling ">
<?php if(!empty($requests)):?>
  <h3> Pending Approval</h3>

<?php foreach($requests as $result):?>

<div class="approval-card">
  <div class="vendor-summary">
    <img src="<?php echo base_url('uploads/user_profiles/').$result['Profile']?>" alt="" class="p_picture">
    <span> Name: <?php echo $result['Legal_Name']?></span>
    <br>
    <span>Email: <?php echo $result['Vendor_Email'] ?></span>
    <br>
    <span> Phone Number: <?php echo $result['Vendor_Number'] ?></span>

  </div>
  <div class="vendor-description">
      <h4>Bio</h4>
      <p>
        <?php echo $result['Business_Description'] ?>
      </p>
  </div>
  <div class="admin-action">
 
    <form action="<?php echo site_url('admin/Dashboard/approved')?>" method="POST">
      <input type="hidden" name="vendor_id" value="<?php echo $result['Vendor_Id']?>">
      
    <button  type="submit" class="btn accept">Approve </button>
    <a data-id="<?php echo $result['Vendor_Id'] ?>" id="decline-button" class="btn decline"> Decline </a>
    </form>
    <span>
        <?php 
        $date = strtotime($result['Date_created']);

        $new_date = date("d M Y", $date);

        echo $new_date;
    
        ?>
    </span>

  </div>
</div>
<?php endforeach;?>
<?php else: ?>

  <div class="empty-approvals">
<img src="<?php echo base_url('uploads/bg/conf.svg')?>" alt=""> 
<div class="message">
  There are no pending  applications for approval at the moment.
</div>
</div>
<?php endif;?>
</div>

      <!-- end -->


          <div class="footer-section"> 
          <span class="text-left mx-3"> support@cartlite.co.ke</span>

            <span>2021 &copy; Cartlite - Designed and Developed by <a href="#" class="text-light">Lewis Mutembei</a></span>
          </div>


      </div>


  </div>

  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>    
  <script src="<?php echo base_url('assets/common/jquery.js')?>"></script>
  <script>
    $(document).ready(function(){
      $('.hidden-profile').hide();
      $('.admin-profile').on('click', function(){

              $('.hidden-profile').toggle();

      });


    });


  </script>  
  <script>
      $("#decline-button").on('click',function(){
        vendor_id = this.data("id");

            $.ajax({     
                    url:"<?php  echo site_url("admin/Dashboard/decline_vending"); ?>",
                    method:"POST",
                    dataType:"json",
                    data:
                    {

                    "vendor_id": vendor_id

                    }
                      
                    }).done(function(){		
                      console.log("It worked up to here");

            }).success(function(data){
                      console.log(successful);
                     
            });

                
      });</script>

</body>
</html>