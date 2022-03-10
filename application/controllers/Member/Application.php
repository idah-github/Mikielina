<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Application extends CI_Controller{
    public function __construct()
    {

        parent:: __construct();
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->database();
        $this->load->helper(array('form', 'url','file'));

        // load form_validation library
        $this->load->library('form_validation');
        $this->load->model('Member/Login_Model');

    }
    public function index(){
         $this->load->view('Member/Application');

//         if(empty($_SESSION['FamilyName'])){

//             redirect(site_url('Member/Login'));

//         }

//         $query= $this->db->get_where('member', array('Customer_Id' => $_SESSION['User_Id'] ));
//         $userdata = $query->row_array();  
//     }
//     public function update_password(){
//         // validating current passsword
//         $this->form_validation->set_rules(
//             'currentpassword', 'currentpassword', 'required|trim',
//             array(
//                 'required'      => 'You have not provided %s.'
//             )
//             );

//           // validating new passsword
//           $this->form_validation->set_rules(
//             'newpassword', 'newpassword', 'required|trim|min_length[8]',  array(
        
//                 'min_length' => ' %s should be at least 8 characters',
//                 'required'      => 'You have not provided %s.'
//             )
//         );

//              // validating new passsword
//           $this->form_validation->set_rules(
//             'confirmpassword', 'confirmpassword', 'required|trim|matches[newpassword]',
//             array(
//                 'matches' =>' Passwords must match'
//             )
//         );


// if ($this->form_validation->run() == FALSE)
// {
//         $errors = $this->form_validation->error_array();
//         foreach($errors as $error)
//             {
//             if (!empty($error))
//             {
//                 $this->session->set_flashdata('warning', $error);

//                 break;
//             }
//         }

    
//      redirect(site_url('Member/Application'));



// }
// else{
//     $old_password = $this->input->post('currentpassword');
//     $new_password = $this->input->post('newpassword');
//             // fetch by username first
//         $this->db->where('Customer_Id', $_SESSION['User_Id']);
//         $query = $this->db->get('Customers');
//         $result = $query->row_array(); // get the row first

//         $hashed_password = $result['Password'];


//     if(password_verify($old_password,$hashed_password)){
//         // hashing the new password
//         $newpasswordhash = password_hash($new_password,PASSWORD_BCRYPT);
//         $this->db->set('Password',$newpasswordhash );
//         $this->db->where('Customer_Id',$_SESSION['User_Id']);
//         $this->db->update('Customers');
        
//         $this->session->set_flashdata('success', 'Your password was updated successfully');
//         return redirect(site_url('users/Setting'));
//     }
//     else{
//         $this->session->set_flashdata('error', 'The password you entered is incorrect');
//         return redirect(site_url('users/Setting'));
//     }
}        
}
