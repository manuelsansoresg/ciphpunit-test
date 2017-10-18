<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->template->write_view('content', 'home');
		$this->template->render();
	}

}

/* End of file Controllername.php */
