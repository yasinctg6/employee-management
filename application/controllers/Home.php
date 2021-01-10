<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller

{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users');
	}
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('home');
		$this->load->view('inc/footer');
	}

	public function register()
	{
		$this->load->view('inc/header');
		$this->load->view('register');
		$this->load->view('inc/footer');
	}
	public function login_process() 
	{
		if ($this->input->post('login')) {
			$name=$this->input->post('name');
			$pass=md5($this->input->post('pass'));

			$user_data= array(
				'name' => $name,
				'pass'  => $pass
			);
			$users_list = $this->db->get_where('users', array( 'name'=> $user_data['name'] ));
			foreach ($users_list->result() as $user) {
				if ( $user_data['name']==$user->name && $user_data['pass']==$user->pass) {
					$_SESSION['name']=$user_data['name'];
					redirect('dash','refresh');
				}else{
					echo "<script>alert('Username or Password Incorret!');</script>";
					redirect('home','refresh');
				}
			}
		} else {
			redirect('home','refresh');
		}
	}
		public function register_process() 
	{
		if ($this->input->post('reg')) {
			$email=$this->input->post('reg');
			$name=$this->input->post('name');
			$pass=md5($this->input->post('pass'));

			$user_data= array(
				'email' =>$email,
				'name' => $name,
				'pass'  => $pass
			);

			$this->Users->insert_user( $user_data );
			redirect('home','refresh'); 
		} else {
			redirect('home','refresh');
		}
	}
	public function logout()
	{
		session_unset();
		session_destroy();
		redirect('home','refresh');
	}
}
?>