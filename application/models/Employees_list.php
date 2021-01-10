<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Employees_list extends CI_Model
{
	public function insert_employees( $employee_details ) {
		$this->db->insert('employees', $employee_details);
	}
}
?>