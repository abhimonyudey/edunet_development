<?php
	class form1_model extends CI_Model
	{
		function data_show()
		{
			$aadhar=$this->input->post("aadhar");
			

		$config['file_name']        = $aadhar;
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'gif|jpg|png';
        // $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
        // $config['file_ext_tolower'] = TRUE;

      /*  Load the upload library  */   
        $this->load->library('upload', $config);
        $this->upload->do_upload('image1');
$filedata = $this->upload->data();
                    // $data will contain full inforation
                   
        $data=array(
				"fname"=>$this->input->post("fname")
				,
				"email"=>$this->input->post("email")
				,
				"pass"=>$this->input->post("pass")
				,
				"confpass"=>$this->input->post("confpass")
				,
				"mobile"=>$this->input->post("mobile")
				,
				"aadhar"=>$aadhar
				,
				"college"=>$this->input->post("college")
				,
				"dept"=>$this->input->post("dept")
				,
				"semester"=>$this->input->post("semester")
				,
				"imagefile"=>$filedata['file_name']
			);
			return $data;

			
		}
	}


?>