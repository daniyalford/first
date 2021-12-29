<?php
function list_info_user($data, $field)
{

	if (!empty($data)) {
		$a = "<div class='card border-info text-center'><div class='card'><ul dir='rtl' class='list-group text-center p-0 list-group-flush'>";
		foreach ($data as $value) {
			$a .= "<li class='list-group-item text-center'>" . $value[$field . '_name'] . "</li>";
		}
		$a .= "</ul></div></div>";
		return $a;
	}
	return false;

}

function list_info_user_with_anchor($data, $field, $separator = '_link', $address = '')
{

	if (!empty($data)) {
		$a = "<div class='card border-info w-90 text-center'><div class='card'><ul dir='rtl' class='list-group text-center p-0 list-group-flush'>";
		foreach ($data as $value) {
			$a .= "<li class='list-group-item text-center'><a href='" . $address . $value[$field . $separator] . "'>" . $value[$field . '_name'] . "</a></li>";
		}
		$a .= "</ul></div></div>";
		return $a;
	}
	return false;

}

?>
