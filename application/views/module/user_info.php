<?php
function user_info_list($field_name, $field_select_name, $data, $select_info)
{
	if (!empty($data)) {
		$a = "<div class='card border-info mt-3 text-center'><div class='card-body'><ul class='list-group list-group-flush'><h3>اطلاعات شخصی</h3><label for='username'>نام و نام خانوادگی</label><li class='list-group-item username'>";
		foreach ($data as $key) {
			if ($key[$field_name . '_name'] !== '') {
				$a .= $key[$field_name . '_name'];
			} else {
				$a .= 'مهمان';
			}
		}
		$a .= "</li><label for='age'>سن</label><li class='list-group-item age'>";
		foreach ($data as $key) {
			($key[$field_name . '_age'] !== '' ? $a .= $key[$field_name . '_age'] : $a .= 'سن وارد نشده');
		}
		$a .= "</li><label for='favorite'>علاقه مندی ها</label><li class='list-group-item favorite'>";
		if (!empty($select_info) && $select_info !== '') {
			foreach ($select_info as $value) {
				$a .= " " . $value[$field_select_name . '_name'] . " ";
			}
		} else {
			$a .= 'علاقه مندی وارد نشده';
		}
		$a .= "</li><label for='workExperience'>سابقه کار</label><li class='list-group-item workExperience'>";
		foreach ($data as $key) {
			(!empty($key[$field_name . '_experience']) ? $a .= $key[$field_name . '_experience'] . ' سال ' : $a .= 'سابقه کاری ندارد');
		}
		$a .= "</li></ul></div></div>";
		return $a;
	}
}

?>
