<?php
class ControlCheck extends CI_Controller{
	public function checkForLogin(){
		$uname=$this->input->post('uname');
		$pword=$this->input->post('pword');

		$this->load->model('modelCheck');
		$result=$this->modelCheck->forlogin($uname,$pword);

		if($result->num_rows() > 0){
			foreach($result->result() as $row){
					$id=$row->id;
					$uname=$row->uname;
					$pword=$row->pword;

					if($pword==$pword && $uname==$uname){
						$this->session->set_userdata('sess_id',$id);
						redirect('controlWelcome/goToTrainer');
						die();
					}
					
			}
		}else{
						echo 'login fail';
					}



	}
}


?>