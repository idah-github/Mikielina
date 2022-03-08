<?php 

Class Application_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function save_data($member_data){
        $this->db->insert('Application', $member_data);

        return true;
    }


    // this function gets post posted by this specific member
    public function  get_items($member_id){

        $query = $this->db->get_where('Application', array('member_id' => $member_id));

        $result = $query->result_array();


        return $result;

    }
}