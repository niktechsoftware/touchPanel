<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
 
   public function getliningsale($id)
{
    $this->db->select('*');
    $this->db->from('touchpanel_tb');
	$this->db->where('touchpanel_tb.STID', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $data->result();
}



/*
public function show_all_data() {
$this->db->select('*');
$this->db->from('touchpanel_tb');
$query = $this->db->get();
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}

public function show_data_by_id($id) {
$condition = "STID =" . "'" . $id . "'";
$this->db->select('*');
$this->db->from('touchpanel_tb');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}*/


}