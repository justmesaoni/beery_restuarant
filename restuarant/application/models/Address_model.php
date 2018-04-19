<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address_model extends CI_Model {
	private $table = 'addresses';
	
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}

	public function create($address=array())
	{
		$this->db->insert($this->table, $address);
		$insert_id=$this->db->insert_id();
		if ($insert_id) {
			return $insert_id;
		} else {
			return FALSE;
		}
		
	}

	public function update($id, $data = array())
	{
		try {
			$this->db->where('id', $id);	
			$this->db->update($this->table, $data);
			return TRUE;
		} catch (Exception $e) {
			log_message('error', $e->getMessage());
			return false;
		}
	}

}

/* End of file Address_model.php */
/* Location: ./application/models/Address_model.php */ ?>