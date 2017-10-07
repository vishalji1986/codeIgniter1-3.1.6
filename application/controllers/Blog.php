<?php

class Blog extends CI_Controller{
	
	public function add(){
		$this->load->model('authenticate');
		$data['users'] = $this->authenticate->getData();
		$this->load->view("blog/add.php",$data);
	}
}