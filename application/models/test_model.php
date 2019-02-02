<?php
class test_model extends CI_Model{
	public function get(){

      $this->load->database();
    $q= $this->db->query(select * from tb1);
      $result=$q->result();
     echo "<pre>";
print_r($reslut)


	}




}
