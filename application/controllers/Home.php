<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        // Load the homepage view
        $this->load->view('homepage'); // Adjust the view name if necessary
    }
}
