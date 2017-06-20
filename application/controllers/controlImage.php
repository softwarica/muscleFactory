<?php
class ControlImage extends CI_Controller{

				public function getCategory(){
				$this->load->model('modelImage');
				$result=$this->modelImage->retriveCategory();

				$data['iclass']=$result;
				$this->load->view('admin/adminimages',$data);

				}

				 public function newImage(){

 	$iname=$this->input->post('iname');
 	$icat=$this->input->post('icat');
//for uploading video

 	/*
 for uploading video firstly.open xampp 
 goto apache server config and open (php.ini)
 	change on post_max_size=250M;
	change on upload_max_filesize=250M;

 	*/
 		$config['upload_path']="assets/images";
		$config['allowed_types']  = 'gif|jpg|png|mp4';
		

		$this->load->library('upload',$config);
		//$this->upload->do_upload('video');


		 if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }


	$data=array('upload_data'=>$this->upload->data());

	$image=$data['upload_data']['file_name'];
	

	$this->load->model('modelImage');
	$this->modelImage->saveImage($iname,$icat,$image);

	$this->session->set_flashdata('imginsertmsg','data sucessfully insert in image table');
	redirect('controlAdmin/index');




 }

}
?>