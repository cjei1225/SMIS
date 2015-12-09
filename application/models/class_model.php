<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Model
{
	private $class_table			= 'class';			// 
	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->class_table			= $ci->config->item('db_table_prefix').$this->class_table;
	}

	//Class
	function add_class($data)
	{
		$this->db->insert($this->class_table, $data);
		return NULL;
	}

	function get_all_class()
	{
		$this->db->select('*');
		$this->db->from('class');
		
		
		$query = $this->db->get();
		return $query->result();
	}

	



}
