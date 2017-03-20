<?php

class faculty extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('FacultyModel');
    }
	public function index()
	{

	}
	public function cordinated_project($usid)
	{
		$this->session->set_userdata('user_id', $usid);
		$cor_pro = $this->FacultyModel->get_cord_proj($usid);
		$this->load->view('cordinated_project');
	}
	public function asdfg($usid)
	{
		$this->session->set_userdata('user_id', $usid);
		$this->load->view('facultyprofileedit');
	}
	public function checkform($usid)
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('pass','Current passord','required|callback_passcheck['.$usid.']');
		$this->form_validation->set_rules('pass1',' New password','required');
		$this->form_validation->set_rules('pass2','Re-type password','required|callback_passmatch');
		$this->form_validation->set_rules('email','E-mail id','required|valid_email');

		if($this->form_validation->run()==false)
		{
			$this->session->set_userdata('user_id', $usid);
			$this->load->view('facultyprofileedit');
		}
		else
		{
			$pass1 = $this->input->post('pass1');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			$this->FacultyModel->modify($usid,$pass1,$name,$email);
			
			
			redirect(base_url().'index.php/SearchController/asdfg/'.$usid);	


		}
	}
	public function facultycreate($usid)
	{
		$this->session->set_userdata('user_id', $usid);
		$this->load->view('facultycreate');

	}
	public function passcheck($a,$abc)
	{	
		if($this->FacultyModel->passcheck($a,$abc)==true)
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
	public function checkcreate($usid)
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('facid','User Name','required|callback_norepeat');
		$this->form_validation->set_rules('pass1',' New password','required');
		$this->form_validation->set_rules('pass2','Re-type password','required|callback_passmatch');
		$this->form_validation->set_rules('email','E-mail id','required|valid_email');

		if($this->form_validation->run()==false)
		{
			$this->session->set_userdata('user_id', $usid);
			$this->load->view('facultycreate');
		}
		else
		{
			$pass1 = $this->input->post('pass1');
			$name = $this->input->post('name');
			$facid = $this->input->post('facid');
			$email = $this->input->post('email');
			$this->FacultyModel->addfac($facid,$pass1,$name,$email);
			redirect(base_url().'index.php/SearchController/asdfg/'.$usid);

		}
	}
	public function norepeat()
	{
		$facid = $this->input->post('facid');
		if($this->FacultyModel->checkrepeat($facid)==true)
			return true;
		else
		{
			$this->form_validation->set_message('norepeat','user name not available');
			return false;

		}

	}
}

?>