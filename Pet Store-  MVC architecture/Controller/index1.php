<?php

class index1 extends CI_Controller {

    function __construct() {
        parent::__construct();
           }

    function index()
	{		
        $this->session->set_flashdata('response', "");
        $this->load->view('indexv');
	
    }
}


?>
