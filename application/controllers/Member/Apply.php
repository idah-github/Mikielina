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

        $this->db->set('UserName',$username);
         $this->db->set('G_Name',$gname);
        $this->db->set('G_Address',$gaddress);
        $this->db->set('G_Email',$gemail);       
        // $this->db->set('Gender',$gender);      
         $this->db->set('Amount',$amount);
        $this->db->set('Address',$address);  
        $this->db->set('Income', $gincome);
        $this->db->set('Reason',$description);
        
        // $this->db->set('Amount',$balance);
         $this->db->set('LoanStatus', 1);
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
               'UserName' => $username,
               'Reason'=>$description,
               'G_Name'=>$gname,
               'G_Address'=> $gaddress,
               'G_Email' => $gemail,
            //    'Gender' => $gender,
                'Amount'=> $amount,
               'Address' => $address

                //  'Session_Id' => $session_id,

                
             );

        $this->Application_Model->save_data($member_data);
        $this->session->set_flashdata('success', 'Your Application has been received');
        redirect(site_url('Member/Index'));


        


    }
}