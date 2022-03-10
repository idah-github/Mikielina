<?php 

Class Login_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function check_login($username, $password){

      // fetch by username first
      $this->db->where('Username', $username);

      $query = $this->db->get('admin');
      $result = $query->row_array(); // get the row first
      
      if (!empty($result)) {
         $hashed_password = $result['Password'];
          if (password_verify($password, $hashed_password)){

              $session_data = array(
                  'username' => $result['Username'],
                  'email' => $result['Email'],
              );

              $this->session->set_userdata($session_data);

              return true;
          }
      } else {
          return false;
      }            
    }
}