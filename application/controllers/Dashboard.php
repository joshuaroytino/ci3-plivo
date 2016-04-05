<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Plivo\RestAPI as RestAPI;

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	public function index()
	{
		$this->form();	
	}

	public function form()
	{
		$this->template
			->title('Sample CI 3 and Plivo')
			->set_layout('main')
			->build('dashboard/form');
	}

	public function send()
	{
		$plivo_config = $this->load->config('plivo');
		$p = new RestAPI($plivo_config['auth_id'], $plivo_config['auth_token']);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
