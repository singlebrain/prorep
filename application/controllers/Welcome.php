<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 *  https://codeigniter.com/user_guide/general/urls.html
	*/
	 function __construct() 
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('LoginModel');
    }
	 
	public function index()
	{
		$this->load->view('login');
	}
	public function checklogin()
	{
		$usert= $this->input->post('usertype');
		$usid= $this->input->post('email');	
		//$this->load->library('session');
		//$this->session->set_userdata('user_id', $usid);
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','callback_verifyuser|required');
		$this->form_validation->set_rules('usertype','select user type','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('login');


		}
		elseif( $usert=='student')
		{	
			redirect(base_url().'index.php/studentprofileedit/asdfg/'.$usid);	
		}
		elseif( $usert=='faculty')
		{	
			redirect(base_url().'index.php/faculty/asdfg/'.$usid);	
		}

	}
	
	public function verifyuser()
	{

		$uid = $this->input->post('email');
		$password = $this->input->post('password');
		$usert = $this->input->post('usertype');
		$this->load->model('LoginModel');
		
		if($this->LoginModel->loginstudent($uid,$password)==true && $usert=='student')
		{
			return true;
				//$this->load->view('welcome_message');
		}
		elseif($this->LoginModel->loginfaculty($uid,$password)==true && $usert=='faculty')
		{
			return true;
				//$this->load->view('welcome_message');
		}
		elseif($usert)
		{
			$this->form_validation->set_message('verifyuser','incorrect password or username');
			//$this->load->view('login');
			return false;
		}
		return true;

	}
	public function signup()
	{
		$this->load->view('signup');

	}
	public function create_student()
	{
		

		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('rollnum','roll num','required');
		$this->form_validation->set_rules('pass1',' New password','required');
		$this->form_validation->set_rules('pass2','Re-type password','required|callback_passmatch');
		$this->form_validation->set_rules('email','E-mail id','required|valid_email');

		if($this->form_validation->run()==false)
		{
			$this->load->view('signup');


		}
		else
		{	
			$pass1 = $this->input->post('pass1');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$rollnum = $this->input->post('rollnum');
			$this->LoginModel->stud_create($pass1,$name,$email,$rollnum);
			$this->load->view('login');	
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