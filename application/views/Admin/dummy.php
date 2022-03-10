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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/vendor_tables.css');?>">
  </head>
  <body>
  <header> 
   <nav class="navbar  admin-navbar">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">Cartlite </a>

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
    <span class="name"> <?php echo $_SESSION['full_names'] ?></span> 
    <span class="mail"> <?php echo $_SESSION['email'] ?> </span>
    <a href="#" class="account-link"> <i class="fas fa-sign-out-alt"></i> Logout</a>

  </div>
  </header>

  <div class="main-wrap">
      <input id="slide-sidebar" type="checkbox" role="button" />
          <label for="slide-sidebar"><span class="hamburger-menu"><i class="fas fa-bars"></i></span></label>
      <div class="sidebar"> 

      <div class="profile-block">
        <img src="<?php echo base_url('uploads/user_profiles/default.jpg')?>" alt="" >
        <span class="admin-name"> <?php echo $_SESSION['full_names'] ?> </span>
      </div>
      <a href="<?php echo site_url('admin/Dashboard')?>" class="side-link">
      <i class="fas fa-th-large"></i>
        Home
       </a>
      <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="fas fa-tasks"></i>  
              Tasks            

              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="<?php echo site_url('admin/Dashboard/approve_vendors')?>" class="accordion-links">  <i class="fas fa-clipboard-check"></i>Approve Vendors</a>
                <a href="<?php echo site_url('admin/Dashboard/view_products')?>" class="accordion-links"> <i class="fas fa-shopping-bag"></i> Products</a>

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="fas fa-store-alt"></i>  
              Vendors            

              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="<?php echo site_url('admin/Vendor')?>" class="accordion-links"> Vendors Data</a>
                <a href="<?php echo site_url('admin/Vendor/show_vendors')?>" class="accordion-links"> View Vendors</a>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="far fa-chart-bar"></i> 
              Analytics         

              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="#" class="accordion-links">Statistics</a>



              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="far fa-user"></i>  
              Users         

              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="<?php echo site_url('admin/User')?>" class="accordion-links">User Data</a>

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
              <i class="fas fa-sliders-h"></i> 
              Settings        
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

      <div class="main-block ">
      <!-- Used to render flash messages -->
      <?php
            $this->load->view('common/flash_messages');
      ?>
      <!-- end -->

      <div class="vendor-body">

          <div class="tables-block">
                <h6> All Vendors</h6>
              <table id="example" class="table cell-border " style="width:100%">
                            <thead>
                                <tr>
                                    <th> #</th>
                                    <th>Profile</th>

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th> Location</th>

                                    <th>Status</th>
                                    <th>Actions</th>


                                </tr>
                            </thead>
                            <tbody>
                              <?php  foreach($vendors as $vendor):?>
                                <tr>
                                    <td></td>
                                    <td> <img src="<?php echo base_url('/uploads/user_profiles/').$vendor['Profile'] ?>" alt=""></td>
                                <td>
                                  <?php echo $vendor['Legal_Name'] ?> </td>
                                    <td><?php echo $vendor['Vendor_Email'] ?> </td>

                                    <td><?php echo $vendor['Vendor_Number'] ?></td>
                                    <td><?php echo $vendor['Location']  ?></td>

                                    <td>
                                    <span class="badge rounded-pill bg-primary">Active</span>
                                    <!-- <span class="badge rounded-pill bg-danger">unpublish</span> -->

                                    </td>
                                    <td>
                                      <?php if($vendor['Vendor_Approved'] == 2):?>
                                    <a  href="<?php echo site_url('admin/Vendor/suspend_vend/').$vendor['Vendor_Id']?>" class="badge rounded-pill bg-danger">Suspend</a>
                                    <?php elseif($vendor['Vendor_Approved'] == 0):?>
                                    <a href="<?php echo site_url('admin/Vendor/activate_vend/').$vendor['Vendor_Id']?>" class="badge rounded-pill bg-success">Activate</a>
                                      <?php endif;?>
                                    </td>

                                </tr>

                                  <?php endforeach;?>


                            </tbody>
                    
                        </table>
          </div>

          <!-- payments block -->
          
          <div class="tables-block">
                <h6> Payments </h6>
              <table id="example2" class="table cell-border " style="width:100%">
                            <thead>
                                <tr>
                                    <th> #</th>
                                    <th>Order No</th>
                                    <th>Vendor</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th> Date</th>

                                    <th>Status</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td> #43V34FE3</td>
                                <td>
                                  Jane Doe</td>
                                    <td>Vans Shoes </td>

                                    <td> 3</td>
                                    <td>1200</td>

                                    <td>
                                      3rd July 2021
                                    </td>
                                    <td>
                                    <span class="badge rounded-pill bg-primary">Active</span>

                                    </td>

                                </tr>



                            </tbody>
                    
                        </table>
          </div>
          <!-- end -->

      </div>
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
            $(document).ready(function(){

            var t = $('#example').DataTable(
                {
                    "scrollX": true,
                    "columnDefs": [ {
                                        "searchable": false,
                                        "orderable": false,
                                        "targets": 0,
                                        "width":'10%',

                                    } ],
                    "fixedColumns":true
                });



    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();


            });
        </script>  

<script>
            $(document).ready(function(){

            var t = $('#example2').DataTable(
                {
                    "scrollX": true,
                    "columnDefs": [ {
                                        "searchable": false,
                                        "orderable": false,
                                        "targets": 0,
                                        "width":'10%',

                                    } ],
                    "fixedColumns":true
                });



    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();


            });
        </script>  
  <script src="<?php echo base_url('assets/Datatables/datatables.js')?>"></script> 


</body>
</html>