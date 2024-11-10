<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Part_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_newest_parts($limit = 6) {
        $this->db->order_by('release_date', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get('part'); 
        return $query->result_array();
    }
}
