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
				$this->load->view('admin/exercise',$data);

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
}

?>