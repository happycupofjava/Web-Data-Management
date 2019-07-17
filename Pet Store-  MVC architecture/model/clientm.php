<?php
class clientm extends CI_Model{
function __construct() {
parent::__construct();
}

function form_insert($data){   
$this->db->insert('client', $data);
}
    
function form_insert_login($data){   
$this->db->insert('login', $data);
}

}
?>