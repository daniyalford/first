<?php

class My_Lib
{
	public function list_info_user1($name)
	{
		$CI =& get_instance();
		$query = 'select * from tbl_' . $name;
		$data = $CI->db->query($query)->result_array();
		if (!empty($data)) {
			$a = "<div class='col-md-4 mt-3'><div class='card border-info text-center'><div class='card'><ul dir='rtl' class='list-group text-center p-0 list-group-flush'>";
			foreach ($data as $value) {
				$a .= "<li class='list-group-item text-center'>" . $value[$name . '_name'] . "</li>";
			}
			$a .= "</ul></div></div></div>";
			return $a;
		}
		return false;
	}

	public function user_info($name, $condition, $connect_tbl_name, $select_tbl_name, $prefix_key = 'tbl_', $condition_field_name = '_id')
	{
		$CI =& get_instance();
		$data_info = $CI->db->get_where($prefix_key . $name, array($name . $condition_field_name => $condition))->result_array();
		if ($connect_tbl_name !== '' && $select_tbl_name !== '') {
			$sql = "SELECT " . $connect_tbl_name . $condition_field_name . "," . $prefix_key . $select_tbl_name . "." . $select_tbl_name . "_name," . $name . $condition_field_name . " FROM " . $prefix_key . $connect_tbl_name . " INNER JOIN " . $prefix_key . $select_tbl_name . " ON " . $prefix_key . $connect_tbl_name . "." . $select_tbl_name . $condition_field_name . "=" . $prefix_key . $select_tbl_name . "." . $select_tbl_name . $condition_field_name . " AND " . $name . $condition_field_name . "=" . $condition;
			$select_info = $CI->db->query($sql)->result_array();
			return user_info_list($name, $select_tbl_name, $data_info, $select_info);
		}
		return user_info_list($name, $select_tbl_name, $data_info, '');
	}

	public function show_lists($name, $anchor, $condition, $condition_field)
	{
		$CI =& get_instance();
		if ($name !== '') {
			if ($condition !== '' && $condition_field !== '') {
				$data_info = $CI->db->get_where('tbl_' . $name, array($condition_field => $condition))->result_array();
			} else {
				$query = "SELECT * FROM tbl_" . $name;
				$data_info = $CI->db->query($query)->result_array();
			}
			if ($anchor !== true) {
				return list_info_user($data_info, $name);
			}
			return list_info_user_with_anchor($data_info, $name);
		}
		return false;
	}

	public function search_box($data, $name, $separator, $address)
	{
		if (!empty($data)) {
			return list_info_user_with_anchor($data, $name, $separator, $address);
		}return false;
	}
}

?>
