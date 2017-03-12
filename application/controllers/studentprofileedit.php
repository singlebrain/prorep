<?php

class studentprofileedit extends CI_Controller {


	public function index()
	{

		$this->load->view('studentprofileedit');
	}
	public function checkform()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('rollnum','roll num','required');
		$this->form_validation->set_rules('pass','Current passord','required|callback_passcheck');
		$this->form_validation->set_rules('pass1',' New password','required');
		$this->form_validation->set_rules('pass2','Re-type password','required|callback_passmatch');
		$this->form_validation->set_rules('email','E-mail id','required|valid_email');

		if($this->form_validation->run()==false)
		{
			$this->load->view('studentprofileedit');


		}
		else
		{
			$this->load->view('studenthome');


		}
	}
	public function passcheck()
	{
		return true;

	}
	public function passmatch()
	{
		$pass1 = $this->input->post('pass1');
		$pass2 = $this->input->post('pass2');
		if($pass1 == $pass2)
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('passmatch','password doesn\'t match');
			return false;
		}
	}
}

?>