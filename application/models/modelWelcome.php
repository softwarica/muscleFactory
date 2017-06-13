<?php
class ModelWelcome extends CI_Model{
		public function retriveClass(){
			return $this->db->get('tblclass');
		}

		public function retriveEquipment(){

			return $this->db->get('tblequipment');
		}

}
?>