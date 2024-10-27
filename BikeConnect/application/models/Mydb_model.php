<?php 
class Mydb_model extends CI_Model
{

	
	function saverecords($data)
	{
		$this->db->insert("tbl_account", $data);
		return true;
	} 
}

?>