<?php

class fileuploadedit extends CI_Controller {


	public function index()
	{

		//$this->load->view('Upload_form');
	}


	public function asdfg($usid)
	{	
		$this->session->set_userdata('user_id', $usid);
		$this->load->view('Upload_form');
	}
	public function checkform()
	{
		$this->form_validation->set_rules('pname','Project name','required');
		$this->form_validation->set_rules('sid','Student id','required|callback_passcheck');
		$this->form_validation->set_rules('cid','Coordinator id','required|callback_passcheck');
		$this->form_validation->set_rules('com_date','commence date','required');
		$this->form_validation->set_rules('dept','dapartment','required');
		$this->form_validation->set_rules('members','number of members ','required');
		$this->form_validation->set_rules('userfile','Filename','required');
		
		if($this->form_validation->run()==false)
		{ 
			$this->session->set_userdata('user_id', $usid);
			$this->load->view('Upload_form');


		}
		else
		{
			$this->load->view('Upload_success');
			
			//$pname = $this->input->post('pname');
			//$cid = $this->input->post('cid');
			//$sid = $this->input->post('sid');
		   // $com_date = $this->input->post('com_date');
			//$dept = $this->input->post('dept');
			//$members = $this->input->post('members');

			//$this->UploadModel->modify($pname,$cid,$sid,$com_date,$dept,$members);
			

			//redirect(base_url().'index.php/upload/asdfg/'.$usid);

		}
	}
	public function passcheck()
	{
		return true;

	}
	
}

?>