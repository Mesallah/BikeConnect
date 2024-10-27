<?php
 
class Request_model extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    
    //export csv open

    function fetch_data_request()
    {
     //$this->db->select("id, transid,grossamount,tax,isdiscounted,netamount,valid,ornumber,remarks,timestamp");
     $this->db->select("requestid,reqservice,reqdate,status,etc,userid,active");




     //$this->db->from('req');

     $this->db->select('*');
     $this->db->from('req');
     $this->db->join('tbl_services', 'req.reqservice=tbl_services.serviceid');
     $this->db->where('req.reqservice', $id); 
     $request = $this->db->get()->row();
     return $this->db->get();
    }

    //export csv close

    /*
        Get all the records from the database
    */
    public function get_all()
    {
        $requests = $this->db->get("req")->result();
        return $requests;
    }
 
    /*
        Store the record in the database
    */
  
public function store()
{    
    $data = [
        'requestid' => $this->input->post('requestid'),
        'reqservice' => $this->input->post('reqservice'),
        'reqdate' => $this->input->post('reqdate'),
        'status' => $this->input->post('status'),
        'etc' => $this->input->post('etc'),
        'userid' => $this->input->post('userid'),
        'active' => $this->input->post('active')
    ];

    $result = $this->db->insert('req', $data);
    return $result;
}
 
    /*
        Get an specific record from the database
    */
    public function get($id)
    {
        $request = $this->db->get_where('req', ['requestid' => $id ])->row();
        return $request;
    }
 
 
    /*
        Update or Modify a record in the database
    */
    public function update($id) 
    {
        $data = [
            'requestid' => $this->input->post('requestid'),
            'reqservice' => $this->input->post('reqservice'),
            'reqdate' => $this->input->post('reqdate'),
            'status' => $this->input->post('status'),
            'etc' => $this->input->post('etc'),
            'userid' => $this->input->post('userid'),
            'active' => $this->input->post('active')
        ];
 
        $result = $this->db->insert('req', $data);
        return $result;
    }
 
    /*
        Destroy or Remove a record in the database
    */
    public function delete($id)
    {
        $result = $this->db->delete('req', array('requestid' => $id));
        return $result;
    }
     
}
?>