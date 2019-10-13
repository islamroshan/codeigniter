<?php 

class User_model extends CI_Model	{

	public function get_users($user_id , $username)
	{
		$this->db->where(['id' => $user_id , 'username' => $username ]);
		 $query = $this->db->get('users');
		
		return $query->result();

	//$query = $this->db->query("SELECT * FROM users");
	// / $query = $this->db->get('users');
		// $this->db->where('id',$user_id);
		// return $query->num_fields(); //this gonna cout the database fields


	}






}



?>