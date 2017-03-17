<?php

class SearchController extends CI_Controller {


	public function index()
	{
	}
		public function asdfg($usid)
	{
		$this->session->set_userdata('user_id', $usid);
		$this->load->view('search');
	}
}

?>