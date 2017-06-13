<?php
class ModelVideo extends CI_Model{
	public function saveVideo($vname,$vcat,$video){
		$arr=array(
			'vname'=>$vname,
			'vcat'=>$vcat,
			'video'=>$video
			);
		$this->db->insert('tblvideo',$arr);
	}

	public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}
}
?>