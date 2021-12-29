<?php

class NlevelSelectBox extends My_Controller
{
	public function index()
	{
		function run_html($kind, $name_field_referred, $name_field_persian)
		{
			if (!empty($kind)) {
				$a = "<select id='field-" . $name_field_referred . "_id' name='" . $name_field_referred . "_id' class='chosen-select' data-placeholder='انتخاب" . $name_field_persian . "'><option value='' selected>" . $name_field_persian . " مورد نظر را انتخاب کنید</option>";
				$num = 1;
				foreach ($kind as $cValue) {
					$a .= "<option value='" . $cValue[$name_field_referred . '_id'] . "'>" . $cValue[$name_field_referred . '_name'] . "</option>";
				}
				$a .= "</select><div class='chosen-container chosen-container-single' title='' id='field_" . $name_field_referred . "_id_chosen'><div class='chosen-drop'><div class='chosen-search'><input type='text' autocomplete='off'></div><ul class='chosen-results'>";
				foreach ($kind as $dValue) {
					$a .= "<li class='active-result' data-option-array-index='" . $num . "' style=''>" . $dValue[$name_field_referred . '_name'] . "</li>";
					$num++;
				}
				$a .= "</ul></div></div>";
				return $a;
			}
			return false;
		}
		if (isset($_POST['parent_id']) && $_POST['parent_id'] !== 0) {
			$other_data = $this->NlevelSelectBox_Model->select_where($_POST['table_name'], array($_POST['field_name_in_database'] => $_POST['parent_id']));
			$run_data = run_html($other_data, $_POST['name_field_referred'], $_POST['name_field_persian']);
			echo $run_data;
			die();
		}
	}
}
