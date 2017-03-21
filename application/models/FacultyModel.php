<?php

/**
* 
*/
class FacultyModel extends CI_Model
{
	function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('FacultyModel');
    }

	
	public function passcheck($a, $abc)
	{
		# code...
		$query = $this->db->query('SELECT fid, pass FROM faculty');

		foreach ($query->result() as $row)
		{
      	  
      	  if($row->fid==$abc)
      	  {
      	  	if($row->pass==$a)
      	  		return true;
      	  }
		}

			return false;
		
	}
	public function get_cord_proj($fid)
	{
		$query = $this->db->query('SELECT * FROM project WHERE cor_id = \''.$fid.'\'');
		return $query;

	}
	public function rateproject($pid,$rate1,$rate2,$rate3,$rate4,$rate5)
	{

		$query = $this->db->query('UPDATE project
        SET rating = \''.$rate1.'\'
        WHERE pid=\''.$pid.'\'');
			
	}
	public function get_proj_details($pid)
	{
		$query = $this->db->query('SELECT * FROM project WHERE pid = \''.$pid.'\'');
		$row=$query->row();
		return $row;
	}
	public function checkrepeat($facid)
	{
		# code...
		$this->load->database();
		$query = $this->db->query('SELECT fid FROM faculty');

		foreach ($query->result() as $row)
		{
      		if($row->fid==$facid)      	  	
  	  			return false;
  	  	}
		  return true;
	
	}
	public function addfac($usid,$pass1,$name,$email)
	{
		$this->load->database();
		$dept='cs';
		
		$this->db->query('INSERT INTO faculty (name, fid, pass, dept) VALUES ( \'' .$name.'\',  \'' .$usid.'\', \'' .$pass1.'\',  \'' .$dept.'\')');
	}
	public function modify($usid,$pass1,$name,$email)
	{
		$this->load->database();
		
		$query =$this->db->query('SELECT  dept FROM faculty WHERE fid like \'' .$usid.'\'' );
		
      	  $row =$query->row();
      	  $dept=$row->dept;
      	  $this->db->query('DELETE FROM faculty WHERE fid like \'' .$usid.'\'' );
		
		$this->db->query('INSERT INTO faculty (name, fid, pass, dept) VALUES ( \'' .$name.'\',  \'' .$usid.'\', \'' .$pass1.'\',  \'' .$dept.'\')');
	}
}
?>