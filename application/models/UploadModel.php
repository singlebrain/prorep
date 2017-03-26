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
		public function uploader($pname,$year,$members,$cor_id,$tags,$dept,$file,$usid)
		{		
		$this->load->database();
		
		


	# code...
	
		$query = $this->db->query('SELECT up_right FROM student WHERE sid=\''.$usid.'\'');

		foreach ($query->result() as $row)
		{
      	  
      	  if($row->up_right!= 0)
      	  {
      	 $this->db->query('INSERT INTO project ( pname, year, members, cor_id, tags, dept, file) VALUES (  \'' .$pname.'\', \'' .$year.'\',  \'' .$members.'\', \'' .$cor_id.'\', \'' .$tags.'\', \'' .$dept.'\', \'' .$file.'\')');
              	$data=$this->db->query('SELECT up_right FROM student WHERE sid= \''.$usid.'\'');
                $upload=$data->result();

                $this->load->view('upload_success', $data);
                foreach ($upload as $row) {
                	# code... 
                	//echo $row->up_right;
                	$uploadnumber=$row->up_right;
                }
               
                $uploadnumber=$uploadnumber-1;
               $query = $this->db->query('UPDATE student
        SET up_right = \''.$uploadnumber.'\'
        WHERE sid=\''.$usid.'\'');
              }
              else
              	echo "sorry! You cant upload.";

      	  		
      	  		
      	  }
		}

				
	

		}
	
	