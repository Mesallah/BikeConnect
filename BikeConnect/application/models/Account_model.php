<?php
 
class Account_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    public function get_all()
    {
		$this->db->select('tbl2_ua.id, tbl2_ua.uname, tbl2_ua.pass,tbl2_user.fname, tbl2_user.mname, tbl2_user.lname ');
		$this->db->from('tbl2_ua');
		$this->db->join('tbl2_user', 'tbl2_ua.id=tbl2_user.uaid');
        $this->db->where('tbl2_ua.isactive', 1);
		$accounts = $this->db->get()->result();
        return $accounts;
    }
    public function get($id)
    {
		$this->db->select('*');
		$this->db->from('tbl2_ua');
		$this->db->join('tbl2_user', 'tbl2_ua.id=tbl2_user.uaid');
		$this->db->where('tbl2_ua.id', $id); 
		$account = $this->db->get()->row();
        return $account;
    }
	public function store()
    {    
        $data = [
            'uname'        => $this->input->post('uname'),
			'pass'        => $this->input->post('pass')
			
        ];
 
        $result = $this->db->insert('tbl2_ua', $data);
		
		$insid = $this->db->insert_id('tbl2_ua');
		
		$data = [
			'fname'        => $this->input->post('fname'),
			'mname'        => $this->input->post('mname'),
			'lname'        => $this->input->post('lname'),
			'uaid'         => $insid
			
        ];
        $result = $this->db->insert('tbl2_user', $data);
		
        return $result;
    }
	
	public function update($id)
    {    
        $data = [
            'uname'        => $this->input->post('uname'),
			'pass'        => $this->input->post('pass'),
			'fname'        => $this->input->post('fname'),
			'mname'        => $this->input->post('mname'),
			'lname'        => $this->input->post('lname')
        ];
        //$result = $this->db->insert('tbl_account', $data);
		$result = $this->db->where('id', $id)->update('tbl_account', $data);
        return $result;
    }
	
	public function delete($id)
    {    
        $data = [
			'isactive' => 0
        ];
 
		$result = $this->db->where('id', $id)->update('tbl2_ua', $data);
        return $result;
    }
	
	
	
	
}
?>