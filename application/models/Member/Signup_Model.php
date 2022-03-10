<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Signup_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function save_data($member_data){
        $this->db->insert('Member', $member_data);

        return true;
    }

    public function  get_items($member_id){

        $query = $this->db->get_where('Application', array('member_id' => $member_id));

        $result = $query->result_array();


        return $result;

    }
}