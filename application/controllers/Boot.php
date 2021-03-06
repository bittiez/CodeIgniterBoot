<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Boot extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// Load libraries.
		$this->load->library(
			array('parser')
		);
		//Load helpers
		$this->load->helper(
			array('url')
		);
	}
	public function index(){
		$pageData = array(
			'baseurl' => base_url(),
			'title' => 'Basic starter page',
      'ciVersion' => '3.1.11',
      'bsVersion' => '4.3.1',
      'jQuery' => '3.4.1',
		);
		$this->parser->parse('Boot', $pageData);
	}
}
