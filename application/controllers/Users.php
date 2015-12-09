<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url', 'download'));
		//$this->load->library('user_library');
		$this->load->model('user');
		$this->load->database();
	}

	public function Home()
	{
		$data['user'] = $this->user->get_users();
		$this->load->view('users/Users_list', $data);
	}

	public function create_user()
	{
		$this->load->view('users/create_user');
	}

	public function submit_user()
	{
		$this->user->create_user(
			$this->input->post('first_name'),
			$this->input->post('last_name'),
			$this->input->post('position'),
			$this->input->post('birth_date'),
			$this->input->post('gender'),
			$this->input->post('username'),
			$this->input->post('password'),
			$this->input->post('department'));

		$this->Home();

	}

	public function edit_user()
	{
		

		$data['user_details'] = $this->user->get_user_by_id($this->input->post('user_id'));

		//print_r($data['user_details']);
		$this->load->view('users/edit_user', $data);
	}

	public function submit_edits()
	{
		$this->user->edit_user(
			$this->input->post('first_name'),
			$this->input->post('last_name'),
			$this->input->post('position'),
			$this->input->post('birth_date'),
			$this->input->post('gender'),
			$this->input->post('username'),
			$this->input->post('password'),
			$this->input->post('department'),
			$this->input->post('user_id'));

		$this->Home();

	}

	public function delete_user()
	{
		$this->user->delete_user($this->input->post('user_id'));
		$this->Home();
	}
}
