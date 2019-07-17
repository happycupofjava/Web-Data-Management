<?php

Class loginm extends CI_Model {


// Read data using username and password
public function login($data) {

$condition = "email=" . "'" . $data['email'] . "' AND " . "pass =" . "'" . $data['pass'] . "'";
$this->db->select('*');
$this->db->from('login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}

// Read data from database to show data in admin page
public function get_role($data) {

$condition = "email=" . "'" . $data['email'] . "'";
$this->db->select('role');
$this->db->from('login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

}

?>