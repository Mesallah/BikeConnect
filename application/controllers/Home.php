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

    public function topbrandsspecs($part_id) {
        $this->load->model('TopBrands_model');
        $part_details = $this->TopBrands_model->get_part_details($part_id);
    
        if ($part_details) {
            // Pass the part details directly to the view
            $this->load->view('Parts/topbrandsspecs', ['part' => $part_details]);
        } else {
            show_404();
        }
    }
    

    public function new_releases() {

        $this->load->model('NewReleases_model');
        $new_releases = $this->NewReleases_model->get_new_releases();

        // Load a view for new releases if required
        $this->load->view('Parts/new_releases', ['new_releases' => $new_releases]);
    }

    public function newreleasesspecs($part_id) {
        $this->load->model('NewReleases_model');
        
        // Fetch the specific part details
        $part_details = $this->NewReleases_model->get_part_details($part_id);
    
        if ($part_details) {
            // Fetch similar parts using the new method
            $similar_parts = $this->NewReleases_model->get_similar_parts_by_type(
                $part_details['cmpnt_typeid'],$part_id
            );
    
            // Pass both the part details and similar parts to the view
            $this->load->view('Parts/newreleasesspecs', [
                'part' => $part_details,
                'similar_parts' => $similar_parts
            ]);
        } else {
            // If no part is found, show 404 error
            show_404();
        }
    }
    
    
}
