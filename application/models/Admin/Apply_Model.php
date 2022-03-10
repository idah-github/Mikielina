<?php 

Class Products_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function member_approval(){

         $this->db->select('*');
         $this->db->from('Member');
         $this->db->where('MemberStatus',1);
        $query = $this->db->get();

         $products = $query->result_array();
         return $products;
    }


    public function pending_approvals(){

         $this->db->select('*');
         $this->db->from('Application');
         $this->db->where('LoanStatus', 1);
         $query = $this->db->get();

         $approvals = $query->result_array();
         return $approvals;
    }

}