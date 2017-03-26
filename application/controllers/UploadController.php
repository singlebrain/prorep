<?php

class UploadController extends CI_Controller {


	public function index()
	{
	}
		public function asdfg($usid)
	{

		$this->session->set_userdata('user_id', $usid);
		$this->load->view('upload_right');
	}
	public function uploadright($usid)
	{



		$this->form_validation->set_rules('usid','user id','required|callback_exist');
      $this->form_validation->set_rules('uploadno','number of uploads','required|integer');
		
		



		 if($this->form_validation->run()==false)
      { 
         $this->session->set_userdata('user_id', $usid);
         $this->load->view('upload_right');


      }
      else
      {
        echo "upload right is given";
        $uploadno=$this->input->post('uploadno');
        $usid=$this->input->post('usid');

	$this->load->model('Upload2Model');
	$this->Upload2Model->uploadnumber($uploadno,$usid);
	}
}
   public function exist($usid)
{
	
	$this->load->model('Upload2Model');
  return  $this->Upload2Model->check($usid);
}
}

?>