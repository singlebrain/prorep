<?php

/**
* 
*/
class FacultyModel extends CI_Model
{
	
	public function passcheck($a, $abc)
	{
		# code...
		$this->load->database();
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