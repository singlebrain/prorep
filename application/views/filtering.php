<?php

    public function checkdata($usid)
    {

        
            $department = $this->input->post('department[]');
            $rating = $this->input->post('rating[]');
            $year = $this->input->post('year[]');
            
            $this->FacultyModel->modify($usid,$department,$rating,$year);
            
            
            redirect(base_url().'index.php/searchresult/asdfg/'.$usid); 


        }
