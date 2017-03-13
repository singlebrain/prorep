<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'pdf'; 
         $config['max_size']      = 0; 
           
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
			
         else { 

            $data = array('upload_data' => $this->upload->data()); 
            echo $data['upload_data'];
            $this->load->model('UploadModel');
      
            $this->load->view('upload_success', $data); 
              $this->UploadModel->uploader($data);
         } 
      } 
   } 
?>