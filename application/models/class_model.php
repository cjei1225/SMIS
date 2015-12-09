<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class class_model extends CI_Model
{
	private $class_table			= 'class';			// 
	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->class_table			= $ci->config->item('db_table_prefix').$this->class_table;
	}

	//Class
	function add_class($name, $description, $user_id, $year_level)
	{
		$data = array(
		'name' => $name,
		'description' => $description,
		'user_id' => $user_id,
		'year_level' => $year_level
		);

		$this->db->insert('class', $data);

		return TRUE;
	}

	function get_all_class()
	{
		$this->db->select('*');
		$this->db->from('class');
		$this->db->join('user', 'class.user_id = user.user_id');
		
		$query = $this->db->get();
		return $query->result();
	}

	function get_class_by_id($class_id)
	{
		$this->db->select('*');
		$this->db->from('class');
		$this->db->where('class_id', $class_id);

		$query = $this->db->get();

		return $query->result();
	}


	function update_class($class_id, $name, $description, $user_id, $year_level)
	{
		$data = array(
		'name' => $name,
		'description' => $description,
		'user_id' => $user_id,
		'year_level' => $year_level
		);

		$this->db->set($data);
		$this->db->where('class_id', $class_id);
		$this->db->update('class');

		return TRUE;
	}
	
	function delete_class($class_id)
	{
		$this->db->where('class_id', $class_id);
		$this->db->delete('class');

		return TRUE;
	}

	function get_all_classrooms()
	{
		$this->db->select('*');
		$this->db->from('class_room');

		$query = $this->db->query();

		return $query->result();
	}

	function create_classroom($year_level, $section, $capacity)
	{
		$data = array(
			'year_level' => $year_level,
			'section' => $section,
			'capacity' => $capacity);

		$this->db->insert('classroom', $data);

		return TRUE;
	}

	function edit_classroom($year_level, $section, $capacity, $classroom_id)
	{
		$data = array(
			'year_level' => $year_level,
			'section' => $section,
			'capacity' => $capacity);
			$this->db->set($data);
			$this->db->where('classroom_id', $classroom_id);
			$this->db->update('classroom');

			return TRUE;
	}
}
