<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function Home()
	{
		$this->load->view('class');
	}

	public function add_class()
	{
		if ($this->form_validation->run()) 
			{								// validation ok
				if (!is_null($data = $this->tank_auth->add_class($this->input->post('client_id'),
					$this->input->post('client_id'),
					$this->input->post('client_id'))))
		$this->load->view('class');
	}
}
}
