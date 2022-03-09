<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{
    public function __construct()
    {

        parent:: __construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        // $this->load->library('mail');
        $this->load->database();
        $this->load->helper(array('form', 'url','file'));

        // load form_validation library
        $this->load->library('form_validation');

        $this->load->model('Member/Login_Model');

    }
    public function index(){
        $this->load->view('Member/Login');
    }

    
    public function login_user(){

        $username = strtolower($this->input->post('username'));
        $password = $this->input->post('password');
        $result =$this->Login_Model->check_login($username, $password);

        if($result == true){
            redirect(site_url('Member/Index'));
        }
        else{
            // echo "Hello World";
            $this->session->set_flashdata('error','Invalid username or password');
            return redirect(site_url('Member/Login'));
        }
    }

    public function logout_user(){
        $this->session->sess_destroy();
        return redirect('Member/Login');
    }


    // reset password options for the user

//     public function reset_page(){

//         $this->load->view('users/reset_page');
//     }
//     public function random_alphanumeric_string($length) {
//         $chars = '0123456789';
//         $newpassword = substr(str_shuffle($chars), 0, $length);
//         return $newpassword;
//     }
//     public function update_password($cust_id){
//      $query =   $this->db->get_where('Customers', array('Customer_Id' => $cust_id));

//      $result = $query->row_array();
//      $session_id = uniqid();

//     //  generate session array data for the user
//     $session_data = array(
//         'Username' => $result['Customer_Name'],
//         'Email' => $result['Email'],
//         'User_Id' => $result['Customer_Id'],
//         'Contact' => $result['Phone_Number'],
//         'Pp' => $result['Profile_Picture'],
//         'Session_Id' => $session_id
//     );
//     $this->session->set_userdata($session_data);

//         $this->load->view('users/setnewpassword');
//     }

//     public function reset_password(){

//         //  collect the input of the forms
//         $username =strtolower( $this->input->post('u_name'));
//         $email = $this->input->post('email');
//         // this check that atleast one of the fields is not empty if both are return you left blanks on both fields
//         if (!empty($username) || !empty($email)){
//             // check if its the username field that is not empty
//             if(!empty($username)){
//                 // check if such a user exists 
//                     $query = $this->db->get_Where('Customers', array('Customer_name'=>$username));
                    
//                     if($query->num_rows()!=0){
//                         $result = $query->row_array();
//                         $mail_to = $result['Email'];
//                         $recipient_name = $result['Customer_Name'];
//                         $cust_id = $result['Customer_Id'];


//                         $newpassword = $this->random_alphanumeric_string(4);
//                         $newpasswordhash = password_hash($newpassword,PASSWORD_BCRYPT);
//                         $this->db->set('Password',$newpasswordhash );
//                         $this->db->where('Email', $mail_to);
//                         $this->db->update('Customers');
                            
                            
//                         // call the send mail function which sends emails to clients
//                         if( $this->mail->sendresetmail($mail_to, $recipient_name, $newpassword)){
//                             $this->session->set_flashdata('success', "An email has been sent  check your mailbox");
//                             return redirect(site_url('users/Login/update_password/').$cust_id);
//                         }
//                         else{
                            
//                             $this->session->set_flashdata('error', "There was an error while sending the email TRY AGAIN !");
//                             return redirect(site_url('users/Login/reset_page'));

//                         }  
//                     }
//                     else{

//                         $this->session->set_flashdata('error', "The username you entered does not exist TRY AGAIN!!");
//                         return redirect(site_url('users/Login/reset_page'));

//                     }


//             }
//             if(!empty($email)){
//                 $query = $this->db->get_Where('Customers', array('Email'=>$email));
//                     if($query->num_rows()!=0){
//                         $result = $query->row_array();
//                         $mail_to = $result['Email'];
//                         $cust_id = $result['Customer_Id'];
//                         $recipient_name = $result['Customer_Name'];

//                             // update user password
//                         $newpassword = $this->random_alphanumeric_string(4);
//                         $newpasswordhash = password_hash($newpassword,PASSWORD_BCRYPT);
//                         $this->db->set('Password',$newpasswordhash );
//                         $this->db->where('Email', $mail_to);
//                         $this->db->update('Customers');

//                         if($this->mail->sendresetmail($mail_to,$recipient_name, $newpassword)){
//                             $this->session->set_flashdata('success', "An email has been sent  check your mailbox");
//                             return redirect(site_url('users/Login/update_password/').$cust_id);
//                         }
//                         else{
//                             $this->session->set_flashdata('error', "There was an error while sending the email TRY AGAIN !");
//                             return redirect(site_url('users/Login/reset_page'));

//                         }

//                     }
//                     else{
//                         $this->session->set_flashdata('error', "The email you entered does not exist TRY AGAIN!!");
//                         return redirect(site_url('users/Login/reset_page'));
//                     }

//             }

//         }
//         else{
//             $this->session->set_flashdata('error', "You left both fields blank try again");
//             return redirect(site_url('users/Login/reset_page'));
//         }
//     }

//     public function confirm_reset(){
//            // password validation

//            $this->form_validation->set_rules(
//             'password','Password','min_length[8]',
//             array(
                
//                 'min_length' => ' %s should be at least 8 characters'
//             )
//         );

//         // validate confirm password field
//         $this->form_validation->set_rules(
//             'conf_password','Password','matches[password]',
//             array(
//                 'matches' =>' Passwords must match'
//             )
//         );

//         if ($this->form_validation->run() ==FALSE) {
//             $this->session->set_flashdata('error', "please fill in the corrent information in the inputs below");
//             $this->load->view('users/setnewpassword');


//         }
//         else{
//             $email = $_SESSION['Email'];
//             $passcode = $this->input->post('passcode');

//             $query = $this->db->get_where('Customers',array('Email'=> $email));
//             $result = $query->row_array();
            

            

//             if ($query->num_rows()>0){
//                 $encryptedpassword = $result['Password'];
//                 if (password_verify($passcode, $encryptedpassword)){
//                     $newpassword = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
//                     $this->db->set('Password', $newpassword);
//                     $this->db->where('Email', $result['Email']);
//                     $this->db->update('Customers');

//                     $this->session->set_flashdata('success', "You password has been updated successfully");

//                     redirect(site_url('users/Home'));
//                 }
//                 else{
//                     $this->session->set_flashdata('error', "Incorrect passcode");

//                     return redirect(site_url('users/Login/update_password').$_SESSION['Email']);

//                 }
//             }
//             else{
//                 $this->session->set_flashdata('error', "This email does not seem to be registered, Try again");

//                     return redirect(site_url('user/reset_page'));
//             }


//         }    

            
//     }


// }
}