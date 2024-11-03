<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index() {
        $this->load->view('homepage'); 
    }

    public function topbrands() {
        $this->load->database();
    
    
        $query = $this->db->get('part'); 
        $result = $query->result_array(); 
    
        // Pass the data to the view
        $this->load->view('Parts/topbrands', ['result' => $result]);
    }
    
}
