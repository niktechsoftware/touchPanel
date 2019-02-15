<?php 
class user extends CI_Model
{
	
public function savedata($save)
	{
		$this->db->insert('ragistrationform',$save);
		return true;
	}


}






?>