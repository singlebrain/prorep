<?php

class fileuploadedit extends CI_Controller {


	public function index()
	{

		$this->load->view('Upload_form');
	}
	public function checkform()
	{
		$this->form_validation->set_rules('pid','Project id','required');
		$this->form_validation->set_rules('sid','Student id','required|callback_passcheck');
		$this->form_validation->set_rules('cid','Coordinator id','required|callback_passcheck');
		$this->form_validation->set_rules('year','Year','required');
		$this->form_validation->set_rules('members','number of members ','required');
		$this->form_validation->set_rules('userfile','Filename','required');
		
		if($this->form_validation->run()==false)
		{ 
			$this->load->view('Upload_form');


		}
		else
		{
			$pid = $this->input->post('pid');
			$cid = $this->input->post('cid');
			$sid = $this->input->post('sid');
			
			

			$this->UploadModel->modify($pid,$cid,$sid);
			$this->load->view('Upload_success');


		}
	}
	public function passcheck()
	{
		return true;

	}
	
}

?>