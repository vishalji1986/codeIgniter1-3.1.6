<?php

class Authenticate extends CI_Model{
	
	public function getData(){
		$this->load->helper('abc');
		test();
		$this->load->database();
		$query = $this->db->query("Select * from users");
		return $query->result_array();
		
		/*return [
		['name' => 'Vishal' ,'last_name' => 'Bhardwaj'],
		['name' => 'Bishal' ,'last_name' => 'Kumar'],
		];*/
	}
}