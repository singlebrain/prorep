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

      	  		//echo $row->sid;
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
	public function stud_create($pass1,$name,$email,$rollnum,$dept)
	{
		$this->load->database();
		
		
		$this->db->query('INSERT INTO student (name, sid, pass, up_right, dept,email) VALUES ( \'' .$name.'\',  \'' .$rollnum.'\', \'' .$pass1.'\',\'0\',  \'' .$dept.'\',\''.$email.'\')');
	}

}
?>