<?php 

defined('BASEPATH') or exit('No Direct Script Access Allowed'); 
 
class MyInfo extends CI_Controller{
	
	function __construct()
	{
		parent :: __construct();
		$this->load->library('pdf');
	}

	public function index(){
		$this->load->view('my_info');
	}

	public function client_info(){
		$this->load->view('client_info');
	}
}