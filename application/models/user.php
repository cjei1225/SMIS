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
class user extends CI_Model
{
	private $table_name		= 'user';			// user accounts

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->table_name = $ci->config->item('db_table_prefix', 'tank_auth').$this->table_name;	
	}

	function get_users()
	{
		$this->db->select('*');
		$this->db->from('user');

		$query = $this->db->get();

		return $query->result();
	}

	function create_user($first_name, $middle_name, $last_name, $position, $birth_date, $gender, $username, $password, $address, $city, $contact_num, $email, $department)
	{
		$data = array(
		'first_name' => $first_name,
		'middle_name' => $middle_name,
		'last_name' => $last_name,
		'position' => $position,
		'birthdate' => $birth_date,
		'gender' => $gender,
		'username' => $username,
		'password' => $password,
		'address' => $address,
		'city' => $city,
		'contact_num' => $contact_num,
		'email' => $email,
		'department' => $department
		);

		$this->db->insert('user', $data);

		return TRUE;
	}

	function edit_user($first_name, $last_name, $position, $birth_date, $gender, $username, $password, $department, $user_id)
	{
		$data = array(
		'first_name' => $first_name,
		'last_name' => $last_name,
		'position' => $position,
		'birthdate' => $birth_date,
		'gender' => $gender,
		'username' => $username,
		'password' => $password,
		'department' => $department
		);

		$this->db->set($data);
		$this->db->where('user_id', $user_id);
		$this->db->update('user');

		return TRUE;
	}

	function get_user_by_id($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);

		$query = $this->db->get();

		return $query->result();
	}

	function delete_user($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete('user');

		return TRUE;
	}

	function add_tuition($year_level, $fee)
	{
		$data = array(
		'year_level' => $year_level,
		'fee' => $fee
		);


		$this->db->select('year_level');
		$this->db->from('tuition_fee');
		$this->db->where('year_level', $year_level);

		$query = $this->db->get();

		if($query->num_rows() ==  0)
		{
			$this->db->insert('tuition_fee', $data);
		}
		else
		{
					$this->db->set($data);
					$this->db->where('year_level', $year_level);
					$this->db->update('tuition_fee');
		}
		return TRUE;
	}

	function get_fee()
	{
		$this->db->select('*');
		$this->db->from('tuition_fee');
		$query = $this->db->get();

		return $query->result();
	}

	function get_books()
	{
		$this->db->select('*');
		$this->db->from('books');

		$query = $this->db->get();

		return $query->result();
	}

	function add_book($class_id,$title,$author,$edition,$price)
	{
		$data = array(
			'class_id' => $class_id,
			'title' => $title,
			'author' => $author,
			'edition' => $edition,
			'price' => $price);
		$this->db->insert('books', $data);

		return true;
	}

	function add_dept()
	{
		$data = array(
		'name' => 'English Dept'
		);

		$this->db->insert('department', $data);
		return TRUE;
	}

	function get_all_dept()
	{
		$this->db->select('*');
		$this->db->from('department');
		$query = $this->db->get();

		return $query->result();
	}
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */