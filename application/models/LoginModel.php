<?php

/**
* 
*/
class LoginModel extends CI_Model
{
	
	public function loginstudent($uid, $password)
	{
		# code...
		$this->load->database();
		$query = $this->db->query('SELECT sid, pass FROM student');

		foreach ($query->result() as $row)
		{
      	  
      	  if($row->sid==$uid)
      	  {
      	  	if($row->pass==$password)
<<<<<<< HEAD
      	  		//echo $row->sid;
=======
>>>>>>> c4c881959c099a4bb5f519697f888fe39a89f76c
      	  		return true;
      	  }
		}

			return false;	
	}
	public function loginfaculty($uid, $password)
	{
		# code...
		$this->load->database();
		$query = $this->db->query('SELECT fid, pass FROM faculty');

		foreach ($query->result() as $row)
		{
      	  
      	  if($row->fid==$uid)
      	  {
      	  	if($row->pass==$password)
      	  		return true;
      	  }
		}

			return false;	
	}
	public function stud_create($pass1,$name,$email,$rollnum)
	{
		$this->load->database();
		$dept="cs";
		
		$this->db->query('INSERT INTO student (name, sid, pass, up_right, dept) VALUES ( \'' .$name.'\',  \'' .$rollnum.'\', \'' .$pass1.'\',\'0\',  \'' .$dept.'\')');
	}

}
?>