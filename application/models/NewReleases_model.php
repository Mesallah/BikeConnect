<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewReleases_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_new_releases() {
        // Fetch new release parts. Adjust the query as needed for "new releases" criteria.
        $this->db->order_by('release_date', 'DESC'); // Assuming there's a release_date field
        $this->db->limit(6); // Limit to 6 new releases (adjust as necessary)
        $query = $this->db->get('part'); // Replace 'parts' with your actual table name
        return $query->result_array();
    }

    public function get_part_details($part_id) {
        $this->db->where('part_id', $part_id);
        $query = $this->db->get('part');
        return $query->row_array(); // Assuming each part_id is unique
    }

    public function get_similar_parts_by_type($cmpnt_typeid, $exclude_part_id) {
        // Fetch parts with the same component type ID (cmpnt_typeid)
        $this->db->where('cmpnt_typeid', $cmpnt_typeid);
        $this->db->where('part_id !=', $exclude_part_id); // Exclude the current part
        $this->db->limit(6); // Limit to 6 similar parts
        $this->db->order_by('release_date', 'DESC'); // Sort by release date if applicable
        $query = $this->db->get('part'); // Replace 'part' with your actual table name
        return $query->result_array();
    }
    
}


