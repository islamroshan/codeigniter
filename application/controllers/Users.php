<?php 

class  Users extends CI_Controller	{

	public function  show($user_id, $username)	
	{
		// $this->load->model('user_model');
		$data['results'] = $this->user_model->get_users($user_id ,$username);

	 	$this->load->view('user_view', $data);

	}

}


?>