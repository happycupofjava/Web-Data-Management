<?php

class logout extends CI_Controller {

    function __construct() {
        parent::__construct();
           }

    function index()
	{		
        $this->session->set_flashdata('response3',"Logged Out Successfully");
        header("location:".base_url()."loginc");   
	
    }
}


?>