<?php
class Form_submit extends CI_Controller {
function __construct() {
parent::__construct();
//$this->load->model('form_model');
$this->$load->helper('form');}
function index() {
$this->load->view('view_form');
}
}
?>