<?php 

Class Login_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function check_login($username,$id, $password){

      // fetch by username first
      $this->db->where('Username', $username);

      $this->db->where('Admin_Id', $id);
      $query = $this->db->get('admin');
      $result = $query->row_array(); // get the row first
      
      if (!empty($result)) {
         $hashed_password = $result['Password_Hash'];
          if (password_verify($password,$hashed_password)){

              $session_data = array(
                  'username' => $result['Username'],
                  'email' => $result['Email'],
                //   'full_names' => $result['Full_Names'],
                //   'admin_id' => $result['Admin_Id']
              );

              $this->session->set_userdata($session_data);

              return true;
          }
      } else {
          return false;
      }            
    }
}