class FacultyModel extends CI_Model
{
	function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('FacultyModel');
    }
