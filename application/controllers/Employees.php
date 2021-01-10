<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employees extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employees_list');
	}
	public function index(  ) {
		$this->load->view('dash/employees_list');
	}
	public function single_employee( $id ) {
		$this->load->view('dash/single_employee', $id);
	}
	public function add_employee() {
		$this->load->view('dash/add_employee');
	}
	public function update_employee( $id ) {
		$this->load->view('dash/update_employee', $id);
	}
		public function update_employee_process( $id ) {
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$job=$this->input->post('job');

			$employee_details=array(
				'name'=>$name,
				'email'=>$email,
				'phone'=>$phone,
				'job'=>$job
			);
			$this->db->where('id', $id);
			$this->db->update('employees', $employee_details);
			redirect('employees','refresh');
	}
	public function add_employee_process() {
		if ($this->input->post('add_employee')) {
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$job=$this->input->post('job');

			$employee_details=array(
				'name'=>$name,
				'email'=>$email,
				'phone'=>$phone,
				'job'=>$job
			);
			$this->Employees_list->insert_employees( $employee_details );
			redirect('employees','refresh');
		}
	}
	public function delete_employee( $id ) {
		$this->db->where('id', $id);
		$this->db->delete('employees');
		redirect('employees','refresh');
	}

}

?>