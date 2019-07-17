<?php
class servicem extends CI_Model{
function __construct() {
parent::__construct();
}

function form_insert($data){   
$this->db->insert('service', $data);
}
    
function form_insert_login($data){   
$this->db->insert('login', $data);
}

}
?>