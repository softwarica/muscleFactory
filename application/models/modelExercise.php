<?php

class ModelExercise extends CI_Model{
		public function saveEquipment($eqname,$eqcat,$eqimage,$eqdetails){
			$arr=array(
				'eqname'=>$eqname,
				'eqcat'=>$eqcat,
				'eqimage'=>$eqimage,
				'eqdetails'=>$eqdetails

				);
			$this->db->insert('tblexercise',$arr);

		}

		public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}

		public function retriveEquipment(){

			return $this->db->get('tblexercise');
		}

}

?>