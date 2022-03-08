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
        $this->load->view('Member/Apply');
        if(empty($_SESSION['Session_Id'])){
            // return redirect(site_url('Member/Index'));
        }

        $query = $this->db->get_where('Member', );
        $v_info = $query->row_array();


    
    }

    public function approve_member(){
        $firstname = $this->input->post('firstname');
        $middlename = $this->input->post('middlename');
        $familyname = $this->input->post('familyname');
        $email= $this->input->post('email');
        $gender = $this->input->post('gender');
        $age = $this-> input->post('age');
        $address = $this->input->post('address');
        // $town = $this->input->post('town');

        $this->db->set('FirstName',$firstname);
        $this->db->set('middlename',$middlename);
        $this->db->set('FamilyName',$familyname);
        $this->db->set('Email',$email);       
        $this->db->set('Gender',$gender);      
        $this->db->set('Age',$age);
        $this->db->set('Address',$address);  
        // $this->db->set('Member_Approved', 1);
        //$this->db->where('Member_Id', $_SESSION['Member_Id']);     
        // $this->db->set('Town',$town);
        //$this->db->update('Member');

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
               'FirstName' => $firstname,
            //    'MiddleName' => $middlename,
               'FamilyName' => $familyname,
               'Email' => $email,
               'Gender' => $gender,
               'Age'=> $age,
               'Address' => $address

                //  'Session_Id' => $session_id,

                
             );

        $this->Application_Model->save_data($member_data);
        $this->session->set_flashdata('success', 'Your Application has been received');
        redirect(site_url('Member/Index'));


        


    }
}