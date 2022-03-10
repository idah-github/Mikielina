<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Apply extends CI_Controller{
    public function __construct()
    {

        parent:: __construct();
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->database();
        $this->load->helper(array('form', 'url','file'));
        // load form_validation library
        $this->load->library('form_validation');

        $this->load->helper('file');
        $this->load->helper('string');
        $this->load->model('Member/Application_Model');

    }
    public function index(){
        // $this->load->view('Member/Apply');
        if(empty($_SESSION['username'])){
             return redirect(site_url('Member/Login'));
        }

        $query = $this->db->get_where('application', array('UserName' => $_SESSION['username']) );

        $v_info = $query->row_array();

        $data = array(
            'v_info' => $v_info
        );

        $this->load->view('Member/Apply',$data );

    
    }

    public function approve_application(){
        $username = $this->input->post('username');
         $gname = $this->input->post('gname');
        //  $gname = $this->input->post('');
        $gemail= $this->input->post('gemail');
        $gender = $this->input->post('gender');
        $amount = $this-> input->post('amount');
        $address = $this->input->post('address');
        $gincome =$this->input->post('income');
        $gaddress = $this->input->post('gaddress');
        $description=$this->input->post('reason');
        

        // $date=$this->input->post('date');



        $id= RAND(100000,99999999);
             $query = $this->db->get_where('Application', array('No',$id));

             if($query->num_rows>0){

                 $id= RAND(100000,99999999);

             }
            else{
                     $member_id = $id;
             }

             $access_token =  bin2hex(random_bytes(50)); // generate unique toke
           
         //    generate session Id over here

            $session_id = uniqid();
           
           
             $member_data = array(
               'Id' =>$member_id,
               'UserName' => $username,
               'Reason'=>$description,
               'G_Name'=>$gname,
               'G_Address'=> $gaddress,
               'G_Email' => $gemail,
                'Amount'=> $amount,
               'Address' => $address,
               'Status' => 1


                
             );

        $this->Application_Model->save_data($member_data);
        $this->session->set_flashdata('success', 'Your Application has been received');
        redirect(site_url('Member/Index'));


        


    }
}