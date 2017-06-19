<?php
class ModelTrainer extends CI_Model{

	public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}


}


?>