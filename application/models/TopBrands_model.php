<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TopBrands_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database
    }

    public function get_top_brand_parts() {
        $this->db->where('brand_id >=', 1); //1-8 kasi top brands lang na mapapakita
        $this->db->where('brand_id <=', 8);
        $this->db->limit(6);  // anim lang ipapakita neto
        $query = $this->db->get('part');
        return $query->result_array();
    }

    public function get_part_details($part_id) {
        $this->db->where('part_id', $part_id);
        $query = $this->db->get('part');
        return $query->row_array(); // Return a single part as an array
    }
    
}

