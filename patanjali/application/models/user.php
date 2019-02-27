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
    public function update_customer_table($data)
    {
      
     
        $this->db->where('center_name',$usernm1);
        $this->db->update('center',$data);
        return true;
        
    }
	function getLoginData($username,$password) 
	{

		// $this->db->select('password');
		$this->db->where('c_id', $username);
		$this->db->where('password', $password);
		$login = $this->db->get('center');
		/**
		 * 	return login table Data getting from database according that username.
		 */
		
		if ($login->num_rows() > 0) 
		{
		    $res = $login->row();
		   
		    $loginData = array(
		        "id" => $res->c_id,
		        "center_name" => $res->center_name,
		         "email" => $res->email,
		        "status" => $res->status,
		        
		    );
		    return $loginData;
	     }
	     else 
	     {
	         return false;
	     }
	     
	}


}

?>