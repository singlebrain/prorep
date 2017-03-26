<?php
class Searchmodel extends CI_Model
{
	function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('FacultyModel');
    }
    public function get_proj()
	{
		$query = $this->db->query('SELECT * FROM project');
		//$data  = array();
		//foreach ($query->result() as $row)
		//{
		//	if(date("Y"))
		//}
		return $query;

	}
}
?>