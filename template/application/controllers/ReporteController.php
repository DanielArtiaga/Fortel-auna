<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class ReporteController extends CI_Controller {
	function __construct(){
		parent::__construct();			
	}

	public function reporte(){	        
        
        $data = array(
			'title' => "Principal",
			'js' => ""
		);
		
		$this->load->view('layout/head');
		$this->load->view('asesor/reporte');
		$this->load->view('layout/footer');
		
	}	

	
}