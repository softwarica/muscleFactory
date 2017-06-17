<?php
class ControlExercise extends CI_Controller{
	public function newExercise(){
			$eqname=$this->input->post('eqname');
			$eqcat=$this->input->post('eqcat');
			$eqdetails=$this->input->post('eqdetails');
//for image
				$config['upload_path']="assets/images/exercises";
				$config['allowed_types']  = 'gif|jpg|png|mp4';
				$config['max-width']="100";
				$config['max-height']="100";

				$this->load->library('upload',$config);
				$this->upload->do_upload('eqimage');
				$data=array('upload_data'=>$this->upload->data());

			$eqimage=$data['upload_data']['file_name'];
// ..................
//for video
		// 	$configvideo['upload_path']="assets/videos";
		// $configvideo['allowed_types']  = 'mp4';
		

		$this->load->library('upload',$config);
		//$this->upload->do_upload('video');


		 if ( ! $this->upload->do_upload('eqvideo'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }


	$datavideo=array('upload_data'=>$this->upload->data());

	$eqvideo=$datavideo['upload_data']['file_name'];
// .......................

			$this->load->model('modelExercise');
			$this->modelExercise->saveEquipment($eqname,$eqcat,$eqimage,$eqdetails,$eqvideo);

			// $data['eqinsertmsg']='data sucessfully insert into table equipment';
			// $this->load->view('admin/adminPage',$data);
			$this->session->set_flashdata('eqinsertmsg','data sucessfully insert into table exercise');
			redirect('controlAdmin/index');

				}


				public function getCategory(){
				$this->load->model('modelExercise');
				$result=$this->modelExercise->retriveCategory();

				$data['eqclass']=$result;
				$this->load->view('admin/adminexercise',$data);

				}



				public function getExercise(){
				$this->load->model('modelExercise');

				$result=$this->modelExercise->retriveExercise();
				$data['exercise']=$result;

				$this->load->view('exercise',$data);

					}

		public function getChestExercise(){
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveChestExercise();

				$data['chestexercise']=$result;
				$this->load->view('chestExercise',$data);

		}

		public function getChestVideo(){
			$id=$this->input->get('id');
			
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveChestVideo($id);

			$data['chestexvideo']=$result;
			

			$this->load->view('chestVideo',$data);
		}

		public function searchExercise(){
			$forsearch=$this->input->post('forsearch');

			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveSearchExercise($forsearch);

			$data['searchdata']=$result;
			$this->load->view('searchExercise',$data);

		}
		public function getExerciseList(){
			
				$this->load->model('modelExercise');
				$result=$this->modelExercise->retriveExercise();

				$data['exerciselist']=$result;
				$this->load->view('admin/exerciselist',$data);
		}

		public function removeExercise(){
			$id=$this->input->get('id');
			$this->load->model('modelExercise');
			$this->modelExercise->deleteExercise($id);

			$this->session->set_flashdata('delexmsg','exercise sucessfully delete from table exercise');
			redirect('controlAdmin/index');
		}

		public function editExercise(){
			$id=$this->input->get('id');
			$this->load->model('modelExercise');
			$result=$this->modelExercise->retriveExerciseById($id);
			$resultcat=$this->modelExercise->retriveCategory();

			$data['retriveexerciselist']=$result;
			$data['eqclass']=$resultcat;
			$this->load->view('admin/editexercise',$data);
}
	

				public function editPicture(){
	if(isset($_POST['btnsubmitimage'])){

	$config['upload_path']="assets/images/exercises";
		$config['allowed_types']  = 'gif|jpg|png';
		$config['max-width']="100";
		$config['max-height']="100";

		$this->load->library('upload',$config);
		// $this->upload->do_upload('userfile');
		 if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }
		$data=array('upload_data'=>$this->upload->data());
		
		$this->load->model('modelExercise');
		
// for delete of image
	$id=$this->input->post('id');
						$result=$this->modelExercise->retriveExerciseById($id);
	if($result->num_rows() > 0){
		foreach($result->result() as $row){
				$filename=$row->eqimage;

						$path='C:/xampp/htdocs/muscleFactory/assets/images/exercises/'.$filename;
				unlink($path);
			

			
		}
	}
// ............................

	$image=$data['upload_data']['file_name'];

	
	$this->modelExercise->updateImage($id,$image);

	// $result=$this->modelAdmin->retriveMemberById($id);
	$this->session->set_flashData('image_update','image sucessfully update');
	redirect('controlAdmin/index');

	// $data['image_update']='image sucessfull update';
	// $this->load->view('admin/adminPage',$data);
}


}
			}

?>