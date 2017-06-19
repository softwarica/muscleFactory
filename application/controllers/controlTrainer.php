
<?php

class ControlTrainer extends CI_Controller{
	public function getCategory(){
				$this->load->model('modelTrainer');
				$result=$this->modelTrainer->retriveCategory();

				$data['eqclass']=$result;
				$this->load->view('trainer/trainerexercise',$data);

				}
}

?>