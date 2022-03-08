<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{
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
        $this->load->view('Admin/Login');
    }

    public function login_admin(){

        $username = strtolower($this->input->post('username'));
        $accesscode = $this->input->post('accesscode');
        $password = $this->input->post('password');

        $result = $this->Login_Model->check_login($username, $accesscode, $password);

        if($result == true){
            redirect('Member/Home');
        }
        else{
            $this->session->set_flashdata('error', "Invalid username or password. Try again");
            return redirect('Admin/Login');
            
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        $this->load->view('Admin/login');

    }

}