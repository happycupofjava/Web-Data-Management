<?php

class servicec extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('servicem');
           }

    function index()
	{		
        $this->session->set_flashdata('response', "");
        $this->load->library('form_validation');
        $this->load->library('email');        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('firstName', 'firstName',  'required');
		$this->form_validation->set_rules('lastName', 'lastName',  'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'phone', 'min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('bname', 'bname', 'max_length[300]');
        
        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('servicev');
		}
		else
		{   
            $data = array (
            'id' => 0,
            'role' => 1,
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'businessname' => $this->input->post('bname')
            );
            $this->servicem->form_insert($data);
            $this->session->set_flashdata('response',"Data Inserted Successfully");
            
            $length = 8;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';

            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
                
            $data1 = array (
                'email' => $this->input->post('email'),
                'pass' => $randomString,
                'role' => 1
            );
            $this->servicem->form_insert_login($data1);
            $this->session->set_flashdata('response1',"Data Inserted Successfully into Login");
            $mailid = array ('email' => $this->input->post('email'));
            $this->email->from('kadam.vrushali94@gmail.com', 'Vrushali Kadam');
            $this->email->to($mailid);
 
            $this->email->subject('Your Password');
            $this->email->message($randomString);
            
            $this->email->send();
    
			$this->load->view('servicev', $data);
		}
	
    }
}


?>