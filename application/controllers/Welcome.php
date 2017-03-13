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
	public function index()
	{
		$this->load->view('login');
	}
	public function checklogin()
	{
		$usid = $this->input->post('email');
		////$this->load->library('session');
		//$this->session->set_userdata('user_id', $usid);
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','callback_verifyuser|required');

		if($this->form_validation->run()==false)
		{
			$this->load->view('login');


		}
		else
		{	
			
			
			redirect(base_url().'index.php/studentprofileedit/asdfg/'.$usid);	
		}

	}
	
	public function verifyuser()
	{echo 'verifyuser'.$this->session->userdata('user_id');
		$uid = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('LoginModel');
		
		if($this->LoginModel->login($uid,$password)==true)
		{
			return true;
				//$this->load->view('welcome_message');
		}
		else
		{
			$this->form_validation->set_message('verifyuser','incorrect password or username');
			//$this->load->view('login');
			return false;
		}
		
		
		
	}
}
?>