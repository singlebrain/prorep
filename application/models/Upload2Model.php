<?php
	class Upload2Model extends CI_Model
	{
		public function index()
		{

		}
		function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Upload2Model');
    }
		public function check($usid)
		{		
	
			$this->load->database();
		$query = $this->db->query('SELECT sid FROM student');

		foreach ($query->result() as $row)
		{
      	  
      	  if($row->sid==$usid)
      	  {
      	  	

      	  		//echo $row->sid;
      	  		return true;
      	  }
		}

			return false;	
	}

	public function uploadnumber($uploadno,$usid)
	{
     $query = $this->db->query('UPDATE student
        SET up_right = \''.$uploadno.'\'
        WHERE sid=\''.$usid.'\'');
	}

		}
	
	