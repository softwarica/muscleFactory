<?php
class ControlVideo extends CI_controller{
 public function newVideo(){

 	$vname=$this->input->post('vname');
 	$vcat=$this->input->post('vcat');
//for uploading video

 	/*
 for uploading video firstly.open xampp 
 goto apache server config and open (php.ini)
 	change on post_max_size=250M;
	change on upload_max_filesize=250M;

 	*/
 		$config['upload_path']="assets/videos";
		$config['allowed_types']  = 'mp4';
		

		$this->load->library('upload',$config);
		//$this->upload->do_upload('video');


		 if ( ! $this->upload->do_upload('video'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                        die();
                }


	$data=array('upload_data'=>$this->upload->data());

	$video=$data['upload_data']['file_name'];
	

	$this->load->model('modelVideo');
	$this->modelVideo->saveVideo($vname,$vcat,$video);

	$this->session->set_flashdata('vdoinsertmsg','data sucessfully insert in video table');
	redirect('controlAdmin/index');




 }
			 public function getCategory(){
				$this->load->model('modelVideo');
				$result=$this->modelVideo->retriveCategory();

				$data['vdclass']=$result;
				$this->load->view('admin/adminvideos',$data);

				}

				public function getVideo(){
					$this->load->model('modelVideo');
					$result=$this->modelVideo->retriveVideo();

					$data['exvideos']=$result;
					$this->load->view('videos',$data);
				}
}

?>