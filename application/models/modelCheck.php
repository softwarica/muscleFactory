<?php
class ModelCheck extends CI_Model{
	public function forLogin($uname,$pword){
	$this->db->where('uname',$uname);
	$this->db->where('pword',$pword);

	return $this->db->get('tbltrainer');

	}
}
?>