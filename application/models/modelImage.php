<?php
class ModelImage extends CI_Model{
	public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}

		public function saveImage($iname,$icat,$image){
			$arr=array(
			'iname'=>$iname,
			'icat'=>$icat,
			'image'=>$image
			);
			$this->db->insert('tblimage',$arr);
		}
}

?>