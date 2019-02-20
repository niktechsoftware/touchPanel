<?php 
class user extends CI_Model
{
	
public function savedata($save)
	{
		$this->db->insert('registration_table',$save);
		$id=$this->db->insert_id();
		return $id;
	}

public function center($data)
	{
		$ab=$this->db->insert('center',$data);
		return $ab;
			}
}






?>