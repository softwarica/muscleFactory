<?php
class ControlCheck extends CI_Controller{
	public function checkForLogin(){
		$uname=$this->input->post('uname');
		$pword=$this->input->post('pword');

		$this->load->model('modelCheck');
		$resultTrainer=$this->modelCheck->forloginTrainer($uname,$pword);
		$resultAdmin=$this->modelCheck->forLoginAdmin($uname,$pword);

		if($resultTrainer->num_rows() > 0){
			foreach($resultTrainer->result() as $row){
					$id=$row->id;
					$uname=$row->uname;
					$pword=$row->pword;

					if($pword==$pword && $uname==$uname){
						$this->session->set_userdata('sess_id',$id);
						redirect('controlWelcome/goToTrainer');
						die();
					}
					
			}
		}else if($resultAdmin->num_rows() > 0){
			foreach($resultAdmin->result() as $row){
					$id=$row->id;
					$uname=$row->uname;
					$pword=$row->pword;

					if($pword==$pword && $uname==$uname){
						$this->session->set_userdata('sess_id',$id);
						redirect('controlWelcome/goToAdmin');
						die();
					}
					
			}
		}

		else{
						echo 'login fail';
					}



	}
}


?>