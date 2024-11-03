<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TopBrands extends CI_Model {

    public function get_all_parts() {
        $query = $this->db->get('part'); 
        return $query->result_array();
    }
}
