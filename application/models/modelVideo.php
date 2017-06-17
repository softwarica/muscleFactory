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

			public function retriveVideo(){
			return $this->db->get('tblvideo');
			}

			public function retriveVideoById($id){
					$this->db->where('id',$id);
					return $this->db->get('tblexercise');

			}
			public function updateVideo($id,$video){
	$arr=array(
		'id'=>$id,
		'eqvideo'=>$video
		);
	$this->db->where('id',$id);
	$this->db->update('tblexercise',$arr);
}
}
?>