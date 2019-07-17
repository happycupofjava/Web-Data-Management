<?php

class aboutc extends CI_Controller {

    function __construct() {
        parent::__construct();
           }

    function index()
	{		
        $this->session->set_flashdata('response', "");
        $this->load->view('aboutv');
	
    }
}


?>