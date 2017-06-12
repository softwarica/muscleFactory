<?php
class ControlExercise extends CI_Controller{
	public function newExercise(){
		$ecat=$this->input->post('ecat');
		$ename=$this->input->post('ename');
//for passing video
			$config['upload_path']="assets/videos";
		$config['allowed_types']  = 'mp4';
		$config['max-width']="100";
		$config['max-height']="100";

		$this->load->library('upload',$config);
		$this->upload->do_upload('userfile');
		$data=array('upload_data'=>$this->upload->data());
//------------------------------------

		$video=$data['upload_data']['file_name'];

		$this->load->model('modelExercise');
		$this->modelExercise->saveExercise($ecat,$ename,$video);

		$data['exerciseSaveMsg']="data sucessfully insert into table exercise";
		$this->load->view('admin/adminPage',$data);

}

public function getCategory(){
	$this->load->model('modelExercise');
	$result=$this->modelExercise->retriveCategory();

	$data['categoryname']=$result;
	$this->load->view('admin/exercise',$data);
}
}
?>