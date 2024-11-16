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

    public function newreleasesspecs($part_id) {
        $this->load->model('NewReleases_model');
        // Fetch the specific part details based on part_id
        $part_details = $this->NewReleases_model->get_part_details($part_id);

        if ($part_details) {
            // Pass the part details to the newreleasesspecs view
            $this->load->view('Parts/newreleasesspecs', ['part' => $part_details]);
        } else {
            // If no part found, redirect to a 404 page
            show_404();
        }
    }
}
