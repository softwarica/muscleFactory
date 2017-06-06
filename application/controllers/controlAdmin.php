<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlAdmin extends CI_Controller{
public function index(){
$this->load->view('admin/adminPage');
}
// public function openRegister(){
//   $this->load->view('admin/register');
// }

// public function do_upload(){
// 		$config['upload_path']="assets/images/admin";
// 		  $config['allowed_types']  = 'gif|jpg|png';
// 		$config['max-width']="100";
// 		$config['max-height']="100";

// 		$this->load->library('upload',$config);
// 		if(!$this->upload->do_upload('userfile')){
// 			$error = array( "error" => $this->upload->display_errors());
// 			$this->load->view('upload_form', $error);
// 		}else{
// 			$data=array('upload_data'=>$this->upload->data());
			  
// 		}

// }

public function newMember(){
		//for uploading images
		$config['upload_path']="assets/images/admin";
		$config['allowed_types']  = 'gif|jpg|png';
		$config['max-width']="100";
		$config['max-height']="100";

		$this->load->library('upload',$config);
		$this->upload->do_upload('userfile');
		// 	$error = array( "error" => $this->upload->display_errors());
		// 	$this->load->view('upload_form', $error);
		// }else{
			$data=array('upload_data'=>$this->upload->data());
			  
		// }
//------------------------------------
$mname=$this->input->post('mname');
$image=$data['upload_data']['file_name'];
$address=$this->input->post('address');
$email=$this->input->post('email');
$contact=$this->input->post('contact');
$jdate=$this->input->post('jdate');
$package=$this->input->post('package');

$this->load->model('modelAdmin');
$this->modelAdmin->saveMember($mname,$image,$address,$email,$contact,$jdate,$package);

$data['insertmsg']="data insert successfully";
$this->load->view('admin/adminPage',$data);

}

public function getMember(){
$this->load->model("modelAdmin");
$result=$this->modelAdmin->retriveMember();

$data['memberlist']=$result;
 $this->load->view('admin/memberlist',$data);
}


public function removeMember(){
	$this->load->model("modelAdmin");
	$id=$this->input->get('id');
	$this->modelAdmin->deleteMember($id);

	$data['delete_message']="data successfully delete";
	$this->load->view('admin/adminPage',$data);

}

public function editMember(){
$this->load->model("modelAdmin");
$id=$this->input->get('id');
$this->modelAdmin->retriveMemberById($id);

$result=$this->modelAdmin->retriveMemberById($id);
$data['memberdetails']=$result;
$this->load->view('admin/edit',$data);
}

public function updateEditedMember(){
$id=$this->input->post('id');
$mname=$this->input->post('mname');
$address=$this->input->post('address');
$email=$this->input->post('email');
$contact=$this->input->post('contact');
$jdate=$this->input->post('jdate');
$package=$this->input->post('package');

$this->load->model('modelAdmin');
$this->modelAdmin->updateMember($id,$mname,$address,$email,$contact,$jdate,$package);

$data['update_message']="data successfully update";
$this->load->view('admin/adminPage',$data);



}
public function viewDetails(){
	$id=$this->input->get('id');
	$this->load->model('modelAdmin');
	$result=$this->modelAdmin->retriveMemberById($id);

	$data['viewdetails']=$result;
	$this->load->view('admin/memberdetails',$data);
}

}
?>
