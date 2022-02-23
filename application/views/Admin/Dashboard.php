<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/Datatables/css/dtables.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Datatables/css/b5datatables.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Datatables/datatables.css');?>"> 
    <link href="<?php echo base_url('assets/admin/css/dashboard.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/homedash.css');?>">
  </head>
  <body>
  <header> 
   <nav class="navbar  admin-navbar">

      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>

        <form action="#" class="">
        <input type="text" class="form-control" placeholder="Search">

        </form>

        <a href="#" class="notifications-link" > <i class="far fa-bell text-light"></i> <sup><span class="badge bg-dark text-light">9</span></sup></a>
        <a href="#" class="admin-profile"> 
          <?php $uname = $_SESSION['username'];
            echo ucfirst($uname[0]); 
          ?>
        </a>
      </div>
  </nav>
  <div class="hidden-profile">
    <span class="name"> <?php echo $_SESSION['full_names']?></span> 
    <a href="<?php echo site_url('admin/Login/logout')?>" class="account-link"> <i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>
  </header>

  


  <div class="main-wrap">
      <input id="slide-sidebar" type="checkbox" role="button" />
          <label for="slide-sidebar"><span class="hamburger-menu"><i class="fas fa-bars"></i></span></label>
      <div class="sidebar"> 

      <div class="profile-block">
        <img src="https://images.unsplash.com/photo-1558203728-00f45181dd84?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZW50cmVwcmVuZXVyc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
        <span class="admin-name"> <?php echo $_SESSION['full_names']?></span>
      </div>
      <a href="#" class="side-link"><i class="fas fa-th-large"></i>  Home </a>
      <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="fas fa-tasks"></i> Tasks           

              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="<?php echo site_url('admin/Dashboard/approve_vendors')?>" class="accordion-links"> <i class="fas fa-clipboard-check"></i>Approve Vendors</a>
                <a href="<?php echo site_url('admin/Dashboard/view_products')?>" class="accordion-links"> <i class="fas fa-shopping-bag"></i> Products</a>

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
                <a href="<?php echo site_url('admin/Vendor')?>" class="accordion-links"> Vendors Data</a>
                <a href="<?php echo site_url('admin/Vendor/show_vendors')?>" class="accordion-links"> View Vendors </a>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="far fa-chart-bar"></i> Analytics         

              </button>
            </h2>
            
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
              <i class="far fa-user"></i> Users         

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
              <i class="fas fa-sliders-h"></i>   Settings        

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

          <?php
            $this->load->view('common/flash_messages');
          ?>
        
        <div class="big-flex">

          <div class="user-stats flex-team">
            <span class="figures " >
              <h4> 3500 <small>(Ksh)</small> </h4> 
             Income this month
            </span>
            <span class="icon-rep ">
            <i class="fas fa-dollar-sign"></i>
            </span>
          </div>

          <div class="vendor-stats flex-team">
            <span class="figures">
              <h4> <?php echo $all_users;?></h4> 

             Registered Users
            </span>
            <span class="icon-rep">
            <i class="far fa-user"></i>

            </span>
          </div>

          <div class="total-products flex-team">
            <span class="figures">
              <h4> <?php echo $products ?> </h4> 
               All Products 
            </span>
            <span class="icon-rep">
            <i class="fas fa-shopping-bag"></i>
            </span>
          </div>

          <div class="monthly-income flex-team">
            <span class="figures">
              <h4> <?php echo $order_no ?> </h4> 
             Orders <small></small>
            </span>
            <span class="icon-rep">
            <i class="fas fa-truck"></i>
            </span>
          </div>

          <div class="total-earnings flex-team">
            <span class="figures">
              <h4> <?php echo $vendors ?></h4> 
             Vendors <small></small>
            </span>
            <span class="icon-rep">
            <i class="fas fa-store"></i>
            </span>
          </div>

          <div class="total-products flex-team">
            <span class="figures">
              <h4> <?php echo $product?> </h4> 
               Published Products 
            </span>
            <span class="icon-rep">
            <i class="far fa-check-circle"></i>       
               </span>
          </div>



        </div>

        <div class="dashboard-body">
        <div class="orders-flex">
              <h3> New Orders</h3>

              <table class="table">
                <thead>
                  <tr>
                    <!--<th scope="col">#</th>-->
                    <th scope="col">Product Name</th>
                    <th scope="col">Order No </th>

                    <th scope="col">Amount</th>
                    <th scope="col"> Seller No</th>
                    <th scope="col"> Customer No</th>
                    <th scope="col"> Quantity</th>
                    <th scope="col"> Date</th>
                    <th scope="col"> Action</th>

                    <th scope="col"> Status</th>

                  </tr>
                </thead>

                <tbody>

                  <?php foreach($orders as $order):?>
                    <!-- define order_no and product_id -->
                    <?php
                      $product_id = $order['Product_Id'];
                      $order_no = $order['Order_No'];

                    ?>
                    <!--<th scope="row"></th>-->
                    <td><?php echo $order['Product_Name']?> </td>
                    <td> <?php echo $order['Order_No']?></td>

                    <td> <?php echo $order['Total_Amount'] ?> </td>
                    <td><?php echo $order['Vendor_Number']?></td>
                    <td><?php echo $order['Customer_Number']?></td>
                    <td><?php echo $order['Units_Sold']?></td>

                    <td><?php echo date("H:i M j Y",strtotime($order['Date_Sold']))?></td>
                    <td>
                      <?php if($order['Status'] = 0):?>
                      <a href="<?php echo site_url('admin/Dashboard/confirm_delivery/'.$order_no.'/'.$product_id)?>" class="badge rounded-pill bg-danger">confirm order</a>
                      <?php else:?>
                      <?php endif;?>
                    <a href="<?php echo site_url('admin/Dashboard/order_details/'.$order['ID']) ?>" class="badge rounded-pill bg-warning">preview</a>
            
                    </td>
                    <td>
                      <?php if($order['Status'] = 0):?>
                        <i class="fas fa-truck text-primary"></i>
                      <?php elseif ($order['Status']= 1):?>
                        <i class="far fa-check-circle text-success"></i>

                      <?php endif;?>
                    </td>

                  </tr>
                  
                  <?php endforeach;?>
                </tbody>

              </table>
        </div>

      <div class="sales-summary">
        <div class="new-products">
            <h6> New Products</h6>
          <table id="example" class="table cell-border " style="width:100%">
                        <thead>
                            <tr>
                                <th> #</th>
                                <th> Product Name</th>
                                <th>Vendor</th>
                                <th>Date</th>
                                <th>Actions</th>


                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($new_products as $prod):?>
                            <tr>
                                <td></td>
                            <td>
                              <img src="<?php echo $prod['Primary_Image']?>" alt="">
                               <?php echo $prod['Product_Name']?> </td>
                                <td><?php echo $prod['Vendor_Name'] ?> </td>

                                <td> 
                                <?php  
                                $dateposted = $prod['Date_Posted'];
                                
                                // $dates = strtotime($dateposted);
                                
                                    echo $dateposted;
                                //  $new_format =  date_format( $dates, 'd-m-Y');

                                    // echo $new_format;
                                ?>
                                </td>
                                <td>
                                    
                                <a href="<?php echo site_url('admin/Dashboard/single_item/'.$prod['Product_Id'])?>" class="btn badge  rounded-pill bg-primary"> preview </a>
                                </td>
                            </tr>
                            <?php  endforeach; ?>



                        </tbody>
                
                    </table>
          </div>
          <div class="top-vendors ">
            <h6> Top Vendors</h6>
            <div class="table-responsive">
            <table  class=" table cell-border" >
                        <thead>
                            <tr>
                                <th>profile</th>

                                <th>Products Sold</th>

                                <th> Total Income</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                            <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                            <br>
                            Jane Doe
                            </td>
                            <td>20 </td>
                            <td>(ksh) 200</td>
                            </tr>

                            <tr>
                            <td>
                              <img src="https://images.unsplash.com/photo-1514989940723-e8e51635b782?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHNob2VzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                            <br>
                            Jane Doe
                            </td>
                            <td>20 </td>
                            <td>(ksh) 200</td>
                            </tr>
                        </tbody>
                
                    </table>
            </div>
            
          </div>
        </div>



          <div class="footer-section"> 
          <span class="text-left mx-3"> support@cartlite.co.ke</span>

            <span>2021 &copy; Cartlite - Designed and Developed by <a href="#" class="text-light">Lewis Mutembei</a></span>
          </div>
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
            $('#vendor_details').hide();
            $('#dropdownMenuButton2').on('click', function(){

                    $('#vendor_details').toggle();

            });

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
  <script src="<?php echo base_url('assets/Datatables/datatables.js')?>"></script> 


</body>
</html>