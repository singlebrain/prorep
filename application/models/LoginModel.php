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
      	  		return true;
      	  }
		}



		
			return false;
		
	}
}
?>