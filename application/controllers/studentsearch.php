<?php

class studentsearch extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
        $this->load->model('Searchmodel');
	}

	public function index()
	{
	}
	public function asdfg($usid)
	{
		$this->session->set_userdata('user_id', $usid);
		$this->load->view('studentsearch');
		
	}
	public function search($usid)
	{
		
		$keywords=$this->input->post('keyword');
		$yeart=$this->input->post('year[]');
		$ratingt=$this->input->post('rating[]');
		$deptt=$this->input->post('depart[]');
		
		 $year=$yeart[0];
		 $rating=$ratingt[0];
		 $dept=$deptt[0];
		
		$data  = array();
		$cur=date("Y")-$year;
		$query = $this->Searchmodel->get_proj();
		foreach ($query->result() as $row)
		{
			if(($dept==null||$dept==$row->dept)&&($year==null||$cur<=$row->year)&&($rating==null||$rating<=$row->rating/2)&&stristr($row->tags,$keywords)!=false)
			{
				$data[$row->pid]=$row;
			}
		}

		$this->session->set_userdata('pro', $data);
		
		$this->session->set_userdata('user_id', $usid);
		$this->load->view('studentresult');
		//$this->load->view('search');
		
	}
}

?>