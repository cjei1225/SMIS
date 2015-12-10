<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

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
		$this->load->model('student');
		$this->load->database();
	}


	public function Home()
	{
		$data['student_list'] = $this->student->get_students();
		$this->load->view('students/student_list', $data);
	}

	public function create_student()
	{
		$this->load->view('students/create_student');
	}

	public function submit_student()
	{
		$this->student->create_student(
			$this->input->post('first_name'),
			$this->input->post('last_name'),
			$this->input->post('birth_date'),
			$this->input->post('gender'),
			$this->input->post('year_level'));

		$this->Home();

	}

	public function edit_student()
	{
		

		$data['student_details'] = $this->student->get_student_by_id($this->input->post('student_id'));

		//print_r($data['user_details']);
		$this->load->view('students/edit_student', $data);
	}

	public function submit_edits()
	{
		$this->student->edit_student(
			$this->input->post('first_name'),
			$this->input->post('last_name'),

			$this->input->post('birth_date'),
			$this->input->post('gender'),
			$this->input->post('year_level'),
			$this->input->post('student_id'));

		$this->Home();

	}

	public function delete_student()
	{
		$this->student->delete_student($this->input->post('student_id'));
		$this->Home();
	}

	public function add_section()
	{
		$data['student_details'] = $this->student->get_student_by_id($this->input->post('student_id'));
		$data['section_list'] = $this->student->get_all_section_year($this->input->post('year_level'));

		$this->load->view('students/add_section', $data);
	}

	public function submit_section()
	{
		$this->student->add_section(
			$this->input->post('student_id'),
			$this->input->post('section'));

		$data['student_sec'] = $this->student->get_student_section();
		$this->load->view('students/student_sec', $data);
	}

	public function view_student_sec()
	{
		$data['student_sec'] = $this->student->get_student_section();
		$this->load->view('students/student_sec', $data);
	}
}
