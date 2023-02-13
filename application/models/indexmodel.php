<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexmodel extends CI_Model {

	public function faculty_fetch_model()
 	{
		$this->db->select('*');
		$this->db->from('faculty');
		return $this->db->get()->result();
 	}
 	public function department_fetch_model()
 	{
 		$this->db->select('*');
		$this->db->from('department');
		return $this->db->get()->result();
 	}

















};;