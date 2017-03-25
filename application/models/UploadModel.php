<?php
	class UploadModel extends CI_Model
	{
		public function index()
		{

		}
		function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('UploadModel');
    }
		public function uploader($pname,$year,$members,$cor_id,$tags,$dept,$file)
		{		
		$this->load->database();
		
		$this->db->query('INSERT INTO project ( pname, year, members, cor_id, tags, dept, file) VALUES (  \'' .$pname.'\', \'' .$year.'\',  \'' .$members.'\', \'' .$cor_id.'\', \'' .$tags.'\', \'' .$dept.'\', \'' .$file.'\')');

		}
	
	}