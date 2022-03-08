<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Credentials:true");
header("Content-type:application/json;charset=utf-8:");
header("Access-Control-Allow-Methods:GET");


class Apis extends CI_Controller{

    public function __construct() {
       
        parent::__construct();
        $this->load->database();
        // $this->load->library('mail');


    }

    public function index(){

    }


      /***
       * 
       *      theme color
         --primary-color: #f20089;
      products unaeza zi group into the follwoing sections majorly

          1. Apparel
          2. Shoe collection
          3. Gifts and art
          4. Cosmetics and Accessories

      but sa sub-category ya Apparel i.e clothes bado kuna options za more sub categories
      1. sportswear, kids store, trending, official wear, designer brands, cloth material, traditional costumes

    
          **/

    // public function get_products(){
    //   // retrieve all products in the db but group them as follows


    //    $this->db->select('*');
    //    $this->db->from('Products');
    //    $this->db->join('Categories', "Products.Category_id = Categories.id");
    //    $this->db->order_by("Date_Posted", "DESC");
    //    $query = $this->db->get();
    //    $products = $query->result_array();



    //   $this->output
    //           ->set_content_type('application/json')
    //           ->set_output(json_encode($products));
              
    // }
    
    // public function single_product($product_id){
    //     $this->db->select('*');
    //     $this->db->from('Products');
    //     $this->db->where('Product_Id', $product_id);
    //     $this->db->limit("1");
    //     $query = $this->db->get();
    //     $product = $query->row_array();
        
    //           $this->output
    //           ->set_content_type('application/json')
    //           ->set_output(json_encode($product));

    // }
    public function login(){
        $this->load->model('Member/Login_Model');
        
        $login_info = file_get_contents('php://input');
        $callbackData = json_decode($login_info, true);
        
        $username = $callbackData['email'];
        $password = $callbackData['password'];
        
        
      $result =$this->Login_Model->can_login($username, $password);

      if($result == true ){
        // create an access token

        $access_token =  bin2hex(random_bytes(50)); // generate unique toke

        // $this->db->set('Access_Token', $access_token);
        $this->db->where('No', $_SESSION['User_Id']);
        $this->db->update('Member');

          $data = array(
            'login'=> true,
            // 'token'=> $access_token
          );

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));        

      }
      else{
        $data = array(
          'login'=> false,
        );

      $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($data));  

      }

    }
    
    
        // SIGNUP API ENDPOINT
    public function signup(){
      $this->load->model('Member/Signup_Model');
      
      // decode json data from the request body 
      $signup_info = file_get_contents('php://input');
      $callbackData = json_decode($signup_info, true);

      $email = $callbackData['email'];
      $username = $callbackData['username'];
      $password = $callbackData['password'];
      $phone_no = $callbackData['number'];

      $phone_number = substr($phone_no, 1);

      // check the database if the user is registered

     $query= $this->db->get_where('Member', array('Username' => $username));
      $user_count = $query->num_rows();

      // check if there is an account registered under the email input

      $query= $this->db->get_where('Member', array('Email' => $email));
      $email_count = $query->num_rows();   
      
      // check if the phone number entered by the user 

      $query= $this->db->get_where('Member', array('PhoneNumber' => $phone_number));
      $no_count = $query->num_rows();  

      // use if logic to check for uniqueness of the above entries

      if( $user_count > 0 or empty($username)){
        $data = array(
                  'statusCode' => 0,
                  'message' => " This username is already taken try another  name"
                );

                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));  
      }
      else if( $email_count >0 or empty($email)){

        $data= array(
                  'statusCode' => 0,
                  'message'=>  " There is already an account registered under this email"
                );

                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));  

      }
      else if($no_count or empty($phone_number)){
        $data = array(
                'statusCode' => 0,
                'message' => " This phone number is already registered "
                );

                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));  
      }
      else{

      $access_token =  bin2hex(random_bytes(50)); // generate unique toke
      $session_id = uniqid();
      $id= RAND(100000,99999999);


      $member_data = array(
        'Username'=> $username,
        'Session_Id'=> $session_id,
        'Access_Token' => $access_token,
        'Member_Id' => $id,
        'Email' => $email,
        'PhoneNumber' => $phone_number,
        'Profile_Picture' => "default.jpg",
        'Password' => password_hash($password, PASSWORD_BCRYPT)


      );



      // prepare and send mailing information to the relevant 
      $mail_to = $email;
            
      $recipient_name = $username;
      $token = bin2hex(random_bytes(50));
        
      $this->mail->send_verification_mail($mail_to, $recipient_name,$token);
                    
      // set session data once you have conpleted filling signup data
        
      if($this->Signup_Model->save_data($member_data)){

        $data = array(
            'message' => "Your account was successfully created",
            'statusCode' => 1,
            'sessionId' => $session_id
        );

      }
      else{
        $data = array(
          'message' => "Something went wrong try again",
          'statusCode' => 0
        );
      }

    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));  

    
    }
  }


}