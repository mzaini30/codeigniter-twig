<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct (){
		parent::__construct();
		$this->twig->addGlobal('session', $this->session);
		date_default_timezone_set('Asia/Makassar');
	}
}
