<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Signup extends CI_Controller{
    public function __construct()
    {

        parent:: __construct();
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->database();
        $this->load->helper(array('form', 'url','file'));

        // load form_validation library
        $this->load->library('form_validation');
        //$this->load->model('Admin/Login_Model');

    }
    public function index(){
        $this->load->view('Member/Signup');
    }
}