<?php 
	class Auth extends CI_Controller
	{
		public function login()
	{
		$this->load->model('Usermodel');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data['email'] = $email;
		$data['password'] = $password;
		$check = $this->Usermodel->checklogin($email, $password);
		if($check!=NULL)
		{
			        
				$result['success'] = 1;
				$result['message'] = $check;
				
		}
		else
		{
			$result['success'] = 0;
			$result['message'] = 'User not found';
			
		}
		echo json_encode($result);
	}
	}




?>
