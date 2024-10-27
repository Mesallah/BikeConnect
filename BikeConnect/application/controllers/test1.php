<?php 
  class Test1 extends CI_Controller
  {
	 public function index()
	 {
		 echo "Hello AIT3!";
	 }	
	 public function sample()
	 {
		 //echo "Sample custom function";
		 $this->load->view("test1");
	 }
  }
?>


