<?php
class NlevelSelectBox_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
	public function select_where($table, $condition)
	{
		return $this->db->get_where($table, $condition)->result_array();
	}
}
?>
