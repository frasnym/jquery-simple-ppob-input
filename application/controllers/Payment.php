<?php
class Payment extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){

		$this->load->view('form');
	}
}

?>