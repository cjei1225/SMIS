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
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url', 'download'));
		$this->load->model('class_model');
		$this->load->model('user');
		$this->load->database();
	}

	public function Home()
	{
		$data['class'] = $this->class_model->get_all_class();
		$data['classrooms'] = $this->class_model->get_all_classroom();
		$this->load->view('class/class', $data);


	}

	public function Subject($part = '')
	{
		if($part == 'create')
		{
			$data['class'] = $this->user->get_users();
			$this->load->view('class/add_class', $data);
		}
		elseif($part == 'submit')
		{
			$this->class_model->add_class(
			$this->input->post('name'),
			$this->input->post('description'),
			$this->input->post('user_id'),
			$this->input->post('year_level'));

		$this->add_class();
		}
		elseif($part == 'edit')
		{
			$data['class'] = $this->class_model->get_class_by_id($this->input->post('class_id'));
			$data['users'] = $this->user->get_users();
			$this->load->view('class/edit_class', $data);
		}
		elseif($part == 'update')
		{
			$this->class_model->update_class(
				$this->input->post('class_id'),
				$this->input->post('name'),
				$this->input->post('description'),
				$this->input->post('user_id'));

			$this->Home();
		}
		elseif($part == 'delete')
		{
			$this->class_model->delete_class($this->input->post('class_id'));
			$this->Home();
		}
	}

	public function student_class()
	{
		$this->class_model->add_student_class($this->input->post('student_id'));
	}
	// Class room

	public function classroom($part = '')
	{
		if($part == 'create')
		{
			$this->class_model->create_classroom(
				$this->input->post('year_level'),
				$this->input->post('section'),
				$this->input->post('capacity'));

			$this->Home();
		}
		elseif($part == 'edit')
		{

		}
		elseif($part == 'delete')
		{
			$this->class_model->delete_classroom($this->input->post('section'));
			$this->Home();
		}
		elseif($part == 'submit_schedule')
		{
				$i = 0;
			foreach($this->input->post('class') as $subject)
			{
				$this->class_model->create_class_schedule(
					$this->input->post('section'), 
					$subject, 
					$this->input->post('timeslot')[$i]);
				//
				//echo $this->input->post('timeslot')[$i];
				$i++;
			} 
		}
		elseif($part == 'schedule_me')
		{
			$data['subject'] = $this->class_model->get_all_class();
			$data['section'] = $this->input->post('section');
			$this->load->view('class/class_schedule', $data);
		}
		elseif($part == 'schedule')
		{
			$data['class'] = $this->class_model->get_class_with_section($this->input->post('section'));
			$this->load->view('class/class_has_schedule', $data);
		}
	}
	

	
	// End Classroom


//OLD CODES
	// Subjects
	/*)
	public function add_class()
	{
		$data['class'] = $this->user->get_users();
		$this->load->view('class/add_class', $data);
	}

	public function submit_class()
	{ 
		$this->class_model->add_class(
			$this->input->post('name'),
			$this->input->post('description'),
			$this->input->post('user_id'),
			$this->input->post('year_level'));

		$this->add_class();
	}

	public function edit_class()
	{
		$data['class'] = $this->class_model->get_class_by_id($this->input->post('class_id'));
		$data['users'] = $this->user->get_users();
		$this->load->view('class/edit_class', $data);
	}

	public function update_class()
	{
		$this->class_model->update_class(
			$this->input->post('class_id'),
			$this->input->post('name'),
			$this->input->post('description'),
			$this->input->post('user_id'));

		$this->Home();
	}

	public function delete_class()
	{
		$this->class_model->delete_class($this->input->post('class_id'));
		$this->Home();
	}
	// End Subjects

	// Classroom
	public function create_classroom()
	{
		$this->class_model->create_classroom(
			$this->input->post('year_level'),
			$this->input->post('section'),
			$this->input->post('capacity'));

		$this->Home();
	}

	public function delete_classroom()
	{
		$this->class_model->delete_classroom($this->input->post('section'));
		$this->Home();
	}

	public function class_schedule_page()
	{
		$data['subject'] = $this->class_model->get_all_class();
		$data['section'] = $this->input->post('section');
		$this->load->view('class/class_schedule', $data);
	}
	public function create_class_schedule()
	{
		
			$i = 0;
		foreach($this->input->post('class') as $subject)
		{
			$this->class_model->create_class_schedule(
				$this->input->post('section'), 
				$subject, 
				$this->input->post('timeslot')[$i]);
			//
			//echo $this->input->post('timeslot')[$i];
			$i++;
		} 
		
	}

	public function get_class_with_section()
	{
		$data['class'] = $this->class_model->get_class_with_section($this->input->post('section'));
		
		$this->load->view('class/class_has_schedule', $data);
	}
	*/
}
