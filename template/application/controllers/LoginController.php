<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class LoginController extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('LoginModel');
	}

    public function login(){
		$this->load->view('login');		
	}
}