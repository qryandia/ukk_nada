<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		
	}

	// List all your items
	public function index()
	{
        $this->load->view('homepage');
	}
}

/* End of file BlockedController.php */
/* Location: ./application/controllers/Auth/BlockedController.php */
