<?php
class ControlExercise extends CI_Controller{
	public function newExercise(){
			$eqname=$this->input->post('eqname');
			$eqcat=$this->input->post('eqcat');
			$eqdetails=$this->input->post('eqdetails');

				$config['upload_path']="assets/images/exercises";
				$config['allowed_types']  = 'gif|jpg|png';
				$config['max-width']="100";
				$config['max-height']="100";

				$this->load->library('upload',$config);
				$this->upload->do_upload('eqimage');
				$data=array('upload_data'=>$this->upload->data());

			$eqimage=$data['upload_data']['file_name'];


			$this->load->model('modelExercise');
			$this->modelExercise->saveEquipment($eqname,$eqcat,$eqimage,$eqdetails);

			// $data['eqinsertmsg']='data sucessfully insert into table equipment';
			// $this->load->view('admin/adminPage',$data);
			$this->session->set_flashdata('eqinsertmsg','data sucessfully insert into table exercise');
			redirect('controlAdmin/index');
				}


				public function getCategory(){
				$this->load->model('modelExercise');
				$result=$this->modelExercise->retriveCategory();

				$data['eqclass']=$result;
				$this->load->view('admin/exercise',$data);

				}

				public function getExercise(){
				$this->load->model('modelExercise');

				$result=$this->modelExercise->retriveEquipment();
				$data['exercise']=$result;

				$this->load->view('exercise',$data);

		}


}

?>