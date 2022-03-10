<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Signup extends CI_Controller{
    public function __construct()
    {

        parent:: __construct();
        $this->load->library('session');
        //  $this->load->library('mail');
        $this->load->database();
        $this->load->helper(array('form', 'url','file'));

        // load form_validation library
        $this->load->library('form_validation');
        $this->load->model('Member/Signup_Model');
    

    }
    public function index(){
        $this->load->view('Member/Signup');
    }

     public function validation(){

         $this->form_validation->set_rules('username', 'Username', 'required|is_unique[Member.Username]',
         array( 
             'required' =>'you have not provided %s.',
             'is_unique' => 'This %s already exists.'
         ));

         $this->form_validation->set_rules('familyname', 'Familyname', 'required|is_unique[Member.Familyname]',
         array( 
             'required' =>'you have not provided %s.',
             'is_unique' => 'This %s already exists.'
         ));

         $this->form_validation->set_rules('phone_number', 'phone number', 'required|min_length[10]',
         array( 
             'min_length' => 'This field should be 10 digits e.g 07 00 111 222',
            'max_length' => 'This field should be 10 digits e.g 07 00 111 222',
             'required' =>'you have not provided %s.',
         ));

         $this->form_validation->set_rules('age', 'age', 'required|callback_validate_age',
         array( 

             'required' =>'you have not provided %s.',
             'callback_validate_age' => "Age is not valid" 
             
         ));

        $this->form_validation->set_message('validate_age', "Should be 18 and above");




         $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[Member.Email]',
         array(
             'required' => 'You have not provided %s',
            'is_unique' =>'This %s already exixts',
             'valid_email' => 'The %s you have entered is invalid'
         ));



         $this->form_validation->set_rules('password', 'Password ', 'required|min_length[8]'
         ,    array(
         'min_length' => '%s should be atleast 8 characters',
         'required'=> 'you have not provided %s')
         );
        
         $this->form_validation->set_rules('confpassword', 'Password Confirmation','required|matches[password]',
         array (
         'matches' => 'passwords must match'

         ));

         $number = $this->input->post('phone_number');
         $num = substr($number,1);

        $query = $this->db->get_where('Member', array('PhoneNumber'=> $num));

        


         if( $this->form_validation->run() == FALSE){

             // redirect(site_url('Member/Signup'));
                 $this->load->view('Member/signup');
         }

         else if($query->num_rows() > 0){
             $this->session->set_flashdata('error', "this phone number is already registered use a different number");
             redirect(site_url('Member/Signup'));
         }

         else{

             $member_name = strtolower($this->input->post('username'));
             $member_name = str_replace(' ', '', $member_name);
             $family_name = strtolower($this->input->post('familyname'));
             $family_name = str_replace(' ', '', $family_name);
             $member_email = strtolower($this->input->post('email'));
             $member_age = $this->input->post('age');
            $phone_number = $this->input->post('phone_number');
             $password = $this->input->post('password');
             $member_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
    
    

             $id= RAND(100000,99999999);
             $query = $this->db->get_where('Member', array('No',$id));

             if($query->num_rows>0){

                 $id= RAND(100000,99999999);

             }
            else{
                     $member_id = $id;
             }

             $access_token =  bin2hex(random_bytes(50)); // generate unique toke
           
         //    generate session Id over here

            $session_id = uniqid();
           
           
             $member_data = array(
                 'No' => $member_id,
                 'Username' => $member_name,
                 'FamilyName' => $family_name,
                 'Age'=>$member_age,
                 'Email' => $member_email,
                 'PhoneNumber' => $phone_number,
                 'Password' => $member_password,
                 'Access_Token' => $access_token,
                //  'Session_Id' => $session_id,

                
             );
             // prepare and send mailing information to the relevant 
             $mail_to = $member_email;
            
            $recipient_name = $member_name;
             $token = bin2hex(random_bytes(50));

            //  $this->mail->send_verification_mail($mail_to, $recipient_name,$token);
            
             // set session data once you have conpleted filling signup data

             $session_data = array(
                 'Session_Id' => $session_id,
                 'Username' => $member_name,
                 'Age' =>$member_age,
                 'FamilyName' => $family_name,
                 "PhoneNumber"  => $phone_number,
                 "User_Id"   => $member_id,
                 "Email"     => $member_email,
                //  "Pp" =>         "default.png"
             );



            if( $this->Signup_Model->save_data($member_data)){
                $this->session->set_userdata($session_data);

                 $this->session->set_flashdata('success'," Your account was created successfully");
                 redirect('Member/Home');
             }
             else{

                $this->session->set_flashdata('success'," Your account was created successfully");
                 return redirect(site_url('Member/Signup'));

             }
        }

     }


     public function validate_age($age){git
         if ($age< 18){
             return false;
         }
         else{
             return true;
         }
     }
     public function test_mail(){
         $mail_to = "guantaiidah@gmail.com";
         $recipient_name = "Idah";
        $token = bin2hex(random_bytes(50));

         if($this->mail->send_verification_mail($mail_to, $recipient_name,$token)){
             return true;
         }
         else{
             echo "something went wrong";
         }

            
     }
     
     

     public function verify_mail($recipient_name, $token){
         // check if username is saved in db
         $query = $this->db->get_where('Member', array('Username' => $recipient_name ));

         if ($query->num_rows() >0){

             $result = $query->row_array(); // get the row first

             $session_data = array(
                 'Username' => $result['Username'],
                 'FamilyName' => $result['FamilyName'],
                 'Email' => $result['Email'],
                 'Age' => $result['Age'],
                'User_Id' => $result['No'],
                 'Contact' => $result['PhoneNumber'],
                 'Pp' => $result['Profile_Picture']
             );

             // set session data
             $this->session->set_userdata($session_data);

             $this->db->set('Verified_MAil',1);
             $this->db->where('Username', $result['Username']);
             $this->db->update('Member');

             $message = "Your email has been confirmed successfully";

             $this->session->set_flashdata('success', $message);
             return redirect(site_url('Member/Home'));

    }
     else{
         $message = "The link is expired or invalid try another way to confirm your email";

         $this->session->set_flashdata($message);

       return redirect('Member/Login');

     }


 }
public function updateprofile(){
                
        $files = $_FILES;

              
              // File upload configuration

              $config['overwrite']     = TRUE;
              $config['remove_spaces'] = TRUE;

        $this->load->library('upload',$config);
        $images = array();
        

  
        $title = $this->input->post('product_name');
        $description = $this->input->post('description');
        
        $colors = $this->input->post('colors');
        $gender = $this->input->post('gender');
        $product_group = $this->input->post('product-group');
        $colors = implode(',', (array)$colors);
        $sizes = $this->input->post('sizes');
        $sizes = implode(',',(array) $sizes);
        $discount = $this->input->post('discount');
        $unit_price = $this->input->post('unit_price');
        $available_units =$this->input->post('available_units');
        $category = $this->input->post('category');
        $vendor_id = $_SESSION['vendor_id'];
       
        $imgCount = count($_FILES['userfile']['name']);

        for ($i=0; $i<$imgCount; $i++){
            

              $_FILES['file']['name']= $files['userfile']['name'][$i];
              $_FILES['file']['type']= $files['userfile']['type'][$i];
              $_FILES['file']['tmp_name']= $files['userfile']['tmp_name'][$i];
              $_FILES['file']['error']= $files['userfile']['error'][$i];
              $_FILES['file']['size']= $files['userfile']['size'][$i]; 


              $filename = $_FILES['file']['name'];
              //Load upload library
              $this->upload->initialize($config);
              
              // action block
              if(!empty($filename)){
                    if ($this->upload->do_upload('file'))
                    {

                        $fileData = $this->upload->data();
                        $image_name = "https://www.cartlite.co.ke/uploads/products/".$fileData['file_name']; 
                        array_push($images, $image_name);
                    }
                    else{
                        $error = array('error' => $this->upload->display_errors());
                        foreach($error as $err){
                            
                        $this->session->set_flashdata('error', $err);
                            
                        }

                        redirect('vendors/Uploads');
                        
                    }
   
                 }
                 else{
                        $images[$i] =" ";
                 }
        }
        if (!empty($_SESSION['vendor_id'])){
        
        $date   = new DateTime(); //this returns the current date time
        $result = $date->format('Y-m-d-H-i-s');
        $posted_at = $result;
        
        $product_id =  uniqid();

        $product_data = array(
            'Product_Id' =>  $product_id,   
            'Product_Name' => $title,
            'Unit_Price' => $unit_price,
            'Product_Group' => $product_group,
            'Vendor_Id' => $vendor_id,
            'Gender' =>$gender,
            'Available_Units' => $available_units,
            'Description' => $description,
            'Available_Colors' => $colors,
            'Primary_Image' => $images[0],
            'Second_Image' =>$images[1],
            'Third_Image' => $images[2],
            'Available_Size' =>  $sizes,
            'Discount_Percentage' => $discount,
            'Category_Id' => $category,
            'Likes' =>0,
            'Date_Posted' => $posted_at
        );
                  
                $this->load->model('vendors/Upload_Model');


                  if ($this->Upload_Model->save_product($product_data)) {
                      # if successful,  redirect to reason code screen...
                      $this->session->set_flashdata('success', 'Your post has been successfully updated');

                      redirect(site_url('vendors/Uploads'));
                  } else {
                      $error = array('error' => $this->upload->display_errors());
                            $this->session->set_flashdata('error', "something went wrong while uploading the document. Try again");
                        redirect(site_url('vendors/Uploads'));                      
                  }             
            }
            else {
            $this->session->set_flashdata("success", "need to sign in");
           redirect(site_url("vendors/Index"));

        }
    }

        public function approve_vendor(){
            $legal_name = $this->input->post('legal_name');
            $id_no = $this->input->post('id_no');
            $business_description = $this->input->post('business_description');
            $gender = $this->input->post('gender');
            $location = $this->input->post('location');

            $this->db->set('Legal_Name', $legal_name);
            $this->db->set('Location', $location);
            $this->db->set('Id_no', $id_no);
            $this->db->set('Vendor_Approved', 1);
            $this->db->set('Business_Description', $business_description);
            $this->db->where('Vendor_Id', $_SESSION['vendor_id']);
            $this->db->update('Vendors');

            $this->session->set_flashdata('success', "Your application has been received and you will receive a feedback shortly");
            redirect(site_url('vendors/Uploads'));
        }


        public function show_products(){
            if(empty($_SESSION['Session_Id'])){

                return redirect(site_url('vendors/Index'));
            }
            $vendor_id = $this->session->userdata('vendor_id');

            $products = $this->Upload_Model->get_items($vendor_id);
            $data = array(
                'products'=> $products
            );


            $this->load->view('vendors/products', $data);
        }

        public function single_product($product_id){

          $query =   $this->db->get_where('Products', array('product_id' => $product_id));
            $product = $query->row_array();
            
            // code to calculate the number of sales for each product
            $this->db->select('*');
            $this->db->from('Sales');
            
            $this->db->where('Sales.Product_Id', $product_id);
            $query = $this->db->get();
            
            $sales_re = $query->result_array();
            
            // create an empty variable sales 
            
            $sales = 0;
            // add number of items sold for each sale
            
            foreach($sales_re as $sale){
                $sales = $sales + $sale['Units_Sold'];
            }
            
            $data = array(
                'product' => $product,
                'sales' => $sales
            );
            $this->load->view('vendors/edit_product', $data);

        }

        public function delete_product($product_id){


            //  check that there are no orders relating to this product
                $this->db->where('Product_Id', $product_id);
                $this->db->where('Status', 1 );
                $query = $this->db->get('Sales');

                if($query->num_rows()>0){
                    $this->session->set_flashdata('warning', "there is an order for this product under processing wait for the transactions to be completed before deleting it");

                    return redirect(site_url('users/Uploads/show_products'));
                }
                else{

                    // I am not sure about deleting a product just unpublish and hide from the vendor or something
                    $this->db->where('Product_Id', $product_id);
                    $this->db->delete('Products');
                    $this->session->set_flashdata('success', "deletion was successfully completed");
                    return redirect(site_url('users/Uploads/show_products/'));

                    
                }
    
           
            
        }

}


