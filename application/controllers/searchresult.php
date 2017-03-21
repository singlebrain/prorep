<?php

class searchresult extends CI_Controller {


	public function index()
	{
	}
		public function asdfg($usid)
	{
		$this->session->set_userdata('user_id', $usid);
		$this->load->model('FacultyModel
			');
		$cor_pro=$this->FacultyModel->get_cord_proj($usid);
		$this->session->set_userdata('pro',$cor_pro);
		$this->load->view('result');

		
	}
}

?>