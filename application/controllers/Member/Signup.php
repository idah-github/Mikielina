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

         $this->form_validation->set_rules('username', 'Familyname', 'required|is_unique[Member.Familyname]',
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

         $this->form_validation->set_rules('age', 'Age', 'trim|required||callback_validate_age');
        //  $this->form_validation->set_message('validate_age','Member is not valid!');

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
                 $this->session->set_flashdata('success'," Your account was created successfully");
                 redirect('Member/Home');
             }
             else{

                 $this->session->set_userdata($session_data);
                $this->session->set_flashdata('success'," Your account was created successfully");
                 return redirect(site_url('Member/Signup'));

             }
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
     
     public function validate_age($member_age){

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
}
