<?php

/**
* 
*/
class LoginModel extends CI_Model
{
	
	public function login($uid, $password)
	{
		# code...
		$this->load->database();
		$query = $this->db->query('SELECT name, sid, pass FROM student');

		foreach ($query->result() as $row)
		{
      	  
      	  if($row->sid==$uid)
      	  {
      	  	if($row->pass==$password)
      	  		echo $row->sid;
      	  		return true;
      	  }
		}



		$this->db->select('sid','pass');
		$this->db->from('student');
		$this->db->where('sid','$uid');
		$this->db->where('pass','$password');

		$query = $this->db->get();
		if($query->num_rows()==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	


	}
}
?>