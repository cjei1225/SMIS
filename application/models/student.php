<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class student extends CI_Model
{
	private $table_name		= 'students';			// user accounts

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
	}

	function get_students()
	{
		$this->db->select('*');
		$this->db->from('student');
		$query = $this->db->get();

		return $query->result();
	}

	function create_student($first_name, $middle_name, $last_name, $birth_date, $gender, $year_level, $address,
$city,
$email,
$contact_num,
$father,
$mother,
$father_num,
$mother_num)
	{
		$data = array(
		'first_name' => $first_name,
		'middle_name' => $middle_name,
		'last_name' => $last_name,
		'birthdate' => $birth_date,
		'gender' => $gender,
		'year_level' => $year_level,
		'address' => $address,
		'city' => $city,
		'contact_num' => $contact_num,
		'email' => $email,
		'father_name' => $father,
		'mother_name' => $mother,
		'father_num' => $father_num,
		'mother_num' => $mother_num,
		);

		$this->db->insert('student', $data);

		return TRUE;
	}

	function edit_student($first_name, $last_name, $birth_date, $gender, $year_level, $student_id)
	{
		$data = array(
		'first_name' => $first_name,
		'last_name' => $last_name,

		'birthdate' => $birth_date,
		'gender' => $gender,
		'year_level' => $year_level
		);

		$this->db->set($data);
		$this->db->where('student_id', $student_id);
		$this->db->update('student');

		return TRUE;
	}

	function get_student_by_id($student_id)
	{
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where('student_id', $student_id);

		$query = $this->db->get();

		return $query->result();
	}

	function delete_student($student_id)
	{
		$this->db->where('student_id', $student_id);
		$this->db->delete('student');

		return TRUE;
	}

	function add_section($student_id, $section)
	{
		$data = array(
		'student_id' => $student_id,
		'section' => $section
		);

		$this->db->insert('student_classroom', $data);

		return TRUE;
	}

	function get_student_section()
	{
		$this->db->select('*');
		$this->db->from('student_classroom');
		$this->db->join('student', 'student_classroom.student_id = student.student_id');
		$this->db->join('classroom', 'student_classroom.section = classroom.section');

		$query = $this->db->get();

		return $query->result();
	}

	function get_all_section_year($year_level)
	{
		$this->db->select('section');
		$this->db->from('classroom');
		$this->db->where('year_level', $year_level);

		$query = $this->db->get();

		return $query->result();
	}
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */