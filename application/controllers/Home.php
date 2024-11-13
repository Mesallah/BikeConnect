<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->model('NewReleases_model');
        $new_releases = $this->NewReleases_model->get_new_releases();

        $this->load->view('homepage', ['new_releases' => $new_releases]);
        
    }

    public function topbrands() {
        $this->load->database();
        $this->load->model('TopBrands_model'); // nasa model dapat pero oks na rin to

        
        $result = $this->TopBrands_model->get_top_brand_parts();

        $this->load->view('Parts/topbrands', ['result' => $result]);
    }

    public function new_releases() {

        $this->load->model('NewReleases_model');
        $new_releases = $this->NewReleases_model->get_new_releases();

        // Load a view for new releases if required
        $this->load->view('Parts/new_releases', ['new_releases' => $new_releases]);
    }
}
