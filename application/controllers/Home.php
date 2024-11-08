<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('homepage'); 
    }

    public function topbrands() {
        $this->load->database();
    
    
        $query = $this->db->get('part'); 
        $result = $query->result_array(); 
    
        $this->load->view('Parts/topbrands', ['result' => $result]);
    }
    
}
