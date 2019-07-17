<?php

ob_start();

class loginc extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');

        // Load database
        $this->load->model('loginm');
           }

    function index()
	{		
        
        $this->session->set_flashdata('response', "");
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'pass', 'required');
        $data = array(
                'email' => $this->input->post('email'),
                'pass' => $this->input->post('pass')
            );
            
        
        if ($this->form_validation->run() == FALSE) {
            
            
            $this->load->view('loginv',$data);
            
        } else {
            $result = $this->loginm->login($data);
            $getrole = $this->loginm->get_role($data);
            if ($result == TRUE) {

            // Add user data in session
                if($getrole[0]->role == 1) 
                {
                $this->session->set_userdata('logged_in');
                header("location:".base_url()."service_detc");    
                //$this->load->view('service_detv');
                }
                elseif($getrole[0]->role == 2)
                {
                    $this->session->set_userdata('logged_in');
                    header("location:".base_url()."client_det");    
                    
                }
                
                }
            else
            {
                $this->session->set_flashdata('response',"Invalid User Name or Password. Please Try Again");
                $this->load->view('loginv',$data);
            } 
        }
}
}