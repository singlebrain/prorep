<?php

/**
* 
*/
class StudentModel extends CI_Model
{
	
	public function passcheck($a, $abc)
	{
		# code...
		$this->load->database();
		$query = $this->db->query('SELECT name, sid, pass FROM student');

		foreach ($query->result() as $row)
		{
      	  
      	  if($row->sid==$abc)
      	  {
      	  	if($row->pass==$a)
      	  		return true;
      	  }
		}

			return false;
		
	}
	public function modify($usid,$pass1,$name,$email,$rollnum)
	{
		$this->load->database();
		
		$query =$this->db->query('SELECT up_right, dept FROM student WHERE sid like \'' .$usid.'\'' );
		
      	  $row =$query->row();
      	  $dept=$row->dept;
      	  $up_rig =$row->up_right;
      	 $this->db->query('DELETE FROM student WHERE sid like \'' .$usid.'\'' );
		
		$this->db->query('INSERT INTO student (name, sid, pass, up_right, dept) VALUES ( \'' .$name.'\',  \'' .$rollnum.'\', \'' .$pass1.'\',  \'' .$up_rig.'\',  \'' .$dept.'\')');
	}
}
?>