<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('homepage'); 
    }

    public function topbrands() {
        $this->load->database();
        $this->load->model('TopBrands_model'); // model

        
        $result = $this->TopBrands_model->get_top_brand_parts();

        $this->load->view('Parts/topbrands', ['result' => $result]);
    }

    public function newreleases() {
        $this->load->view('newreleases'); 
    }
    
}
