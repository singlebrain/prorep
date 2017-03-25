<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
         $this->load->model('UploadModel');
      }
		
      public function index() { 
      
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 
      public function upload($usid) { 
         
         $this->session->set_userdata('user_id', $usid);
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 
  
		
      public function do_upload($usid) { 

 $this->form_validation->set_rules('pname','Project name','required');
      $this->form_validation->set_rules('cor_id','Coordinator id','required');
      $this->form_validation->set_rules('year','year','required|integer');
      $this->form_validation->set_rules('dept','dapartment','required');
      $this->form_validation->set_rules('members','number of members ','required|integer');
      //$this->form_validation->set_rules('userfile','Filename','required');
      
      if($this->form_validation->run()==false)
      { 
         $this->session->set_userdata('user_id', $usid);
         $this->load->view('Upload_form');


      }
      else
      {

       //  $this->load->view('Upload_success');
         
         //$pname = $this->input->post('pname');
         //$cid = $this->input->post('cid');
         //$sid = $this->input->post('sid');
         // $com_date = $this->input->post('com_date');
         //$dept = $this->input->post('dept');
         //$members = $this->input->post('members');

         //$this->UploadModel->modify($pname,$cid,$sid,$com_date,$dept,$members);
         

         //redirect(base_url().'index.php/upload/asdfg/'.$usid);

      




         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'pdf'; 
         $config['max_size']      = 0; 
           
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
			
         else { 
              $pname=$this->input->post('pname');
              $year=$this->input->post('year');
              $members=$this->input->post('members');
              $cor_id=$this->input->post('cor_id');
              $tags=$this->input->post('tags');
              $dept=$this->input->post('dept');
              
            $data = array('upload_data' => $this->upload->data()); 
           $string= $data['upload_data'];
           $file= $string['orig_name'];
           
            $this->UploadModel->uploader($pname,$year,$members,$cor_id,$tags,$dept,$file);
           $this->load->view('upload_success', $data); 
            
         } 
      }
      } 
   } 
?>