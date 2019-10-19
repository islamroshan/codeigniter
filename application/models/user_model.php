<?php 

class User_model extends CI_Model	{

	// public function get_users($user_id , $username)
	// {
	// 	$this->db->where(['id' => $user_id , 'username' => $username ]);
	// 	 $query = $this->db->get('users');
		
	// 	return $query->result();

	// //$query = $this->db->query("SELECT * FROM users");
	// // / $query = $this->db->get('users');
	// 	// $this->db->where('id',$user_id);
	// 	// return $query->num_fields(); //this gonna cout the database fields


	// }

	// public function create_users($data)
	// {
	// 	 $this->db->insert('users', $data );

	// }

	//  public function update_user($data , $id)
	//  {
	//  	$this->db->where(['id' => $id ]);
	//  	$this->db->update('users',$data);
	//  }

	//  public function delete_user($id)
	//  {
	//  	$this->db->where(['id' => $id ]);
	//  	$this->db->delete('users');
	//  }
	public function create_user()
	{
		$option = ['cost' => 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $option);
		$user_data = array(
				'username' => $this->input->post('username'),
				'password' => $encripted_pass,
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email')
			); 

		 $insert_data = $this->db->insert('users', $user_data );
		 return  $insert_data;
	}
	 public function login_user($username , $password)
	 {
	 	$this->db->where('username' , $username );
	 	
	 	$result = $this->db->get('users');

	 	$db_password = $result->row(2)->password;

	 	if(password_verify($password, $db_password))
	 	{
	 		return $result->row(0)->id;
	 	} else {
	 		return false;
	 	}
	 }





}



?>