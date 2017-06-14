<?php

class ModelExercise extends CI_Model{
		public function saveEquipment($eqname,$eqcat,$eqimage,$eqdetails,$eqvideo){
			$arr=array(
				'eqname'=>$eqname,
				'eqcat'=>$eqcat,
				'eqimage'=>$eqimage,
				'eqdetails'=>$eqdetails,
				'eqvideo'=>$eqvideo

				);
			$this->db->insert('tblexercise',$arr);

		}

		public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}

		public function retriveExercise(){

			return $this->db->get('tblexercise');
		}

		public function retriveChestExercise(){
			$this->db->where('eqcat','chest');
			return $this->db->get('tblexercise');

		}
		public function retriveChestVideo($id){
			$this->db->where('id',$id);
			return $this->db->get('tblexercise');

		}
}

?>