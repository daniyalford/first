<?php
function list_info_user($data, $field, $prefix_field_we_want = '_name')
{

	if (!empty($data)) {
		$a = "<div class='card border-info text-center'><div class='card'><ul dir='rtl' class='list-group text-center p-0 list-group-flush'>";
		foreach ($data as $value) {
			$a .= "<li class='list-group-item text-center'>" . $value[$field . $prefix_field_we_want] . "</li>";
		}
		$a .= "</ul></div></div>";
		return $a;
	}
	return false;

}

function list_info_user_with_anchor($data, $field, $separator = '_link', $address = '', $prefix_field_we_want = '_name')
{
	$num = 0;
	if (!empty($data)) {
		$a = "<div class='card border-info w-90 text-center'><div class='card'><ul dir='rtl' class='list-group text-center p-0 list-group-flush'>";
		foreach ($data as $value) {
			if ($field === 'chat') {
				$num++;
			}
			$a .= "<li class='list-group-item text-center'><a href='" . $address . $value[$field . $separator] . "'>" . $value[$field . $prefix_field_we_want] . "</a></li>";
		}
		$a .= "</ul></div></div>";
		return $a;
	}
	$_SESSION['chat_num'] = $num;
	return false;
}

?>
