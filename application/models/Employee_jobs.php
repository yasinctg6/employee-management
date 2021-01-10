<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employee_jobs extends CI_Model{
	public function add_job( $job_detail ) {
		$this->db->insert('jobs', $job_detail);
	}
	
}
?>