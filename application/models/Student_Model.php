<?php

class Student_Model extends CI_Model
{
	/**
	 *    use the parent method
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function query_return_array($query)
	{
		return $this->db->query($query)->result_array();
	}

	public function query($query)
	{
		return $this->db->query($query);
	}

	public function query_return_obj($query)
	{
		return $this->db->query($query)->row();
	}

	public function select_where($table, $condition)
	{
		return $this->db->get_where($table, $condition)->result_array();
	}

	public function insert_data($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($table, $set, $con)
	{
		$this->db->update($table, $set, $con);
	}

}

?>
