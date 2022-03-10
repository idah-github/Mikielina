<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Apply extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->database();
        $this->load->helper(array('form', 'url','file'));

        // load form_validation library
        $this->load->library('form_validation');
        //$this->load->model('Member/Login_Model');
    }

    public function index(){


        $this->load->view('Admin/dummy');
    }

    // public function pending_approvals(){

    //      $this->db->select('*');
    //      $this->db->from('Application');
    //      $this->db->where('LoanStatus', 1);
    //      $query = $this->db->get();

    //      $approvals = $query->result_array();
    //      return $approvals;
    // }


}