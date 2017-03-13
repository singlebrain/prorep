<?php

class studentprofileedit extends CI_Controller {
	
	//$usid;
	function __construct() 
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('StudentModel');
    }
	public function index()
	{

	}

	public function asdfg($usid)
	{	
		$this->session->set_userdata('user_id', $usid);
		$this->load->view('studentprofileedit');
	}
	public function checkform($usid)
	{
		

		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('rollnum','roll num','required');
		$this->form_validation->set_rules('pass','Current passord','required|callback_passcheck['.$usid.']');
		$this->form_validation->set_rules('pass1',' New password','required');
		$this->form_validation->set_rules('pass2','Re-type password','required|callback_passmatch');
		$this->form_validation->set_rules('email','E-mail id','required|valid_email');

		if($this->form_validation->run()==false)
		{
			$this->session->set_userdata('user_id', $usid);
			$this->load->view('studentprofileedit');
			
		}
		else
		{
			$pass1 = $this->input->post('pass1');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$rollnum = $this->input->post('rollnum');
			

			$this->StudentModel->modify($usid,$pass1,$name,$email,$rollnum);
			$this->load->view('studenthome');
			

		}
	}
	public function passcheck($a,$abc)
	{	
		if($this->StudentModel->passcheck($a,$abc)==true)
		{
			return true;
				
		}
		else
		{
			$this->form_validation->set_message('passcheck','incorrect password');
			
			return false;
		}
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