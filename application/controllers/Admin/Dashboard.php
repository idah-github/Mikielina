<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends CI_Controller{
    public function __construct()
    {

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
        if(empty($_SESSION['username'])){
            return redirect(site_url('Admin/Login'));
        }


        $query = $this->db->get('application');
        $loans = $query->result_array();
        $data = array(
            'loans' => $loans
        );

        $this->load->view('Admin/Dashboard', $data);
    }

    
}