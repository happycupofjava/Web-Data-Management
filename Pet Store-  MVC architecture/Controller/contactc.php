<?php

class contactc extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('contactm');
           }

    function index()
	{		
        $this->session->set_flashdata('response', "");
	   
        $this->load->library('form_validation');
                
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('firstName', 'firstName',  'required');
		$this->form_validation->set_rules('lastName', 'lastName',  'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'phone', 'min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('comments', 'comments', 'max_length[300]');
        
        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contactv');
		}
		else
		{   
            $data = array (
            'id' => 0,
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'comments' => $this->input->post('comments'));
            $this->contactm->form_insert($data);
            $this->session->set_flashdata('response',"Data Inserted Successfully");
			$this->load->view('contactv', $data);
		}
        

    }
}


?>