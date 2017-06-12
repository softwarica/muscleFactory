<?php
class ModelExercise extends CI_Model{
	public function saveExercise($ecat,$ename,$video){
		$arr=array(
			'ecat'=>$ecat,
			'ename'=>$ename,
			'video'=>$video
			);

$this->db->insert("tblexercise",$arr);
}


public function retriveCategory(){
	return $this->db->get('tblexcategory');
	
}

}
?>