<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->session->set_userdata('site_lang',  "english");
		$this->load->view('welcome_message');
	}

	public function switchLang($language = "") {
		$this->session->set_userdata('site_lang', $language);
		header('Location: http://localhost/ci_multilingual_app/');
	}
}
