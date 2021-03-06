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
		$this->load->model('class_model');
		$this->load->database();
	}

	public function Home()
	{
		$data['user'] = $this->user->get_users();
		$data['fee'] = $this->user->get_fee();
		$data['dept'] = $this->user->get_all_dept();

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
			$this->input->post('middle_name'),
			$this->input->post('last_name'),
			$this->input->post('position'),
			$this->input->post('birth_date'),
			$this->input->post('gender'),
			$this->input->post('username'),
			$this->input->post('password'),
			$this->input->post('address'),
			$this->input->post('city'),
			$this->input->post('contact_num'),
			$this->input->post('email'),
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
		$user_id = $this->uri->segment('3');
		$this->user->delete_user($user_id);
		redirect('Users/Home');
	}

	public function tuition()
	{
		$data['fee'] = $this->user->get_fee();
		$data['books'] = $this->user->get_books();
		$data['subject'] = $this->class_model->get_all_class();
		$this->load->view('users/settings' ,$data);
	}

	public function add_tuition()
	{
		$this->user->add_tuition(
			$this->input->post('year_level'),
			$this->input->post('fee'));

		$this->Home();
	}

	public function add_book()
	{
		$this->user->add_book($this->input->post('class_id'),
			$this->input->post('title'),
			$this->input->post('author'),
			$this->input->post('edition'),
			$this->input->post('price'));

		redirect('Users/tuition');
	}

	public function add_dept()
	{
		$this->user->add_dept();

		redirect('Users/Home');
	}
}
