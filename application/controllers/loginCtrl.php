<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginCtrl extends CI_Controller {
	function __construct()
	{
	    parent::__construct();
	    // $this->load->view('header');
	    // $this->load->view('footer');
	}
	public function index()
	{
		$this->load->view('headernew');
		$this->load->view('dashboard');
		// $this->load->view('footer');
	}
	public function userview(){
		// print_r('test');exit;
		$this->load->view('headernew');
		$this->load->view('user/userview');
		// $this->load->view('footer');
	}
	function useradd(){
		$this->load->view('headernew');
		$this->load->view('user/user_add');	
	}
}
