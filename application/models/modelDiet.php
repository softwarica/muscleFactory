<?php
class ModelDiet extends CI_Model{
	public function saveDiet($dname,$dcat,$dimage,$ddetails,$dvideo){
		$arr=array(
				'dname'=>$dname,
				'dcat'=>$dcat,
				'dimage'=>$dimage,
				'ddetails'=>$ddetails,
				'dvideo'=>$dvideo

				);
			$this->db->insert('tbldiet',$arr);
	}
	public function retriveDiet(){

			return $this->db->get('tbldiet');
		}
}

?>