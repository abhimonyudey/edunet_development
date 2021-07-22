<?php
 class form1 extends CI_Controller
 {
 	function index()
 	{
 		$this->load->view("Dashboard");

 		// $this->load->helper(array('form'));
			
   //       /* Load form validation library */ 
   //       $this->load->library('form_validation');
			
   //       /* Set validation rule for name field in the form */ 
   //       $this->form_validation->set_rules('name', 'Name', 'required'); 
			
   //       if ($this->form_validation->run() == FALSE) { 
   //       $this->load->view('myform'); 
   //       } 
   //       else { 
   //          $this->load->view('formsuccess'); 
   //       } 
 	}

 	function submit()
 	{
 		$this->load->model("form1_model");
 		$s=$this->form1_model->data_show();
 	$this->load->view("reviewForm_view",$s);
 	}
 }


?>