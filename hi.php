<?php
$id = $_GET['selected_id'];
$num_id = $_GET['num_id'];
$query = "select * from tbl_city where city_parent={$id}";
//$other_cit = $this->Student_Model->query_return_array($query);
//var_dump($other_cit);
function addCityToPage($other_city, $num_id)
{
	return "<div class='form-input-box' id='city_id_input_box'><select id='field-city_id' name='city_id' class='chosen-select' data-placeholder='انتخاب شهر' style='width: 300px; display: none;'><option value=''></option>
					<?php for ($a<= $aMax; $a++){?>
					<option value='" . $other_city[$a]['city_id'] . "'>" . $other_city[$a]['city_name'] . "</option>
					<?php }?>
					</select><div class='chosen-container chosen-container-single' style='width: 300px;' title='' id='field_city_id_chosen'><div class='chosen-drop'><div class='chosen-search'><input type='text' autocomplete='off'></div><ul class='chosen-results'>
					<?php for ($a<= $aMax; $a++){?>
					<li class='active-result' data-option-array-index='" . $num . "' style=''>" . $other_city[$a]['city_name'] . "</li>
					<?php $num++; 
					}
					?>
					</ul></div></div></div>";
}

if (!empty($other_city)) {
	addCityToPage($other_city, $num_id);
} else {
	$html = false;
}
return $html;

?>


<?php
//	public function add_city()
//	{
//		if (isset($_POST['selected_id'])) {
//			$id_value = $_POST['selected_id'];
//			$sql = "select * from tbl_city where city_parent={$id_value}";
//			$fetch_option = $this->Student_Model->query_return_array($sql);
//			return (!empty($fetch_option)) ? json_encode($fetch_option) : false;
//		}
//	}
//echo "<script>
//$(document).ready(function (){
//	header('Content-Type: application/javascript');
//	$('#field-city_id').change(function() {
//    	var selected_id= $(this).val();
//    	var baseurl = window.location.origin + '/work/admin/add_city';
//        var select_box=$('#field-city_id').html();
//    	$.ajax({
//		 	method: 'POST',
//		 	url: baseurl,
//		 	data:{selected_id:selected_id,select_box:select_box},
//		 	success: function (values) {
//                 if (values){
//                    var callback_to_my=JSON.parse(values);
//                    for (var x=0;x<=callback_to_my.length;x++){
//                    	$.ajax({})
//                	}
//                 }
//
//
//				//location.reload()
//		 	}
//		})
//	})
////e.preventDefault();
//})
//</script>";
//		echo $jsn;
//		var_dump(json_decode($jsn));


//		return (!empty($other_city))?json_encode($other_city):false;
?>


<?php
function run_html($kind, $num_id = '', $name_field_referred)
{
	if (!empty($kind)) {
		$a = "<select id='field-" . $name_field_referred . "_id" . $num_id . "' name='" . $name_field_referred . "_id' class='chosen-select' data-placeholder='انتخاب" . $name_field_referred . "'><option value='' selected>مورد نظر را انتخاب کنید" . $name_field_referred . "</option>";
		$num = 1;
		foreach ($kind as $cValue) {
			$a .= "<option value='" . $cValue[$name_field_referred . '_id'] . "'>" . $cValue[$name_field_referred . '_name'] . "</option>";
		}
		$a .= "</select><div class='chosen-container chosen-container-single' style='width: 300px;' title='' id='field_" . $name_field_referred . "_id_chosen" . $num_id . "'><div class='chosen-drop'><div class='chosen-search'><input type='text' autocomplete='off'></div><ul class='chosen-results'>";
		foreach ($kind as $dValue) {
			$a .= "<li class='active-result' data-option-array-index='" . $num . "' style=''>" . $dValue[$name_field_referred . '_name'] . "</li>";
			$num++;
		}
		$a .= "</ul></div></div>";
		return $a;
	}
	return false;
}

if (isset($_POST['selected_id'])) {
	$other_data = $this->Student_Model->select_where($_POST['table_name'], array($_POST['field_name_in_database'] => $_POST['selected_id']));
	if (!empty($other_data[0])) {
		$run_data = run_html($other_data, $_POST['num_id'], $_POST['name_field_referred']);
		echo $run_data;
	}
	return false;
}
return false;


//			$select = '';
//			if ($other_data) {
//				$select = "<select name='city_id' id='field-city_id' class='chosen-select'><option value='' selected>--انتخاب زیر گروه</option>";
//				foreach ($other_data as $row) {
//					$select .= "<option value='" . $row['city_id'] . "' selected='selected'>" . $row['city_name'] . "</option>";
//				}
//				$select .= '</select>';
//				echo $select;
//			}


?>


<script>
	// let i = 0;
	// let f = 1;
	// while (i === f) {
	// 	num_id++;
	// 	$('#field-city_id'+num_id).change(function () {
	// 		switch (new_city(selected_id, num_id)) {
	// 			default:
	// 				new_city(selected_id, num_id);
	// 				i++;
	// 				f++;
	// 				break;
	// 			case false:
	// 				f = 0;
	// 				break;
	// 		}
	// 	}
	// }
	// $('#field-city_id' + num_id).change(function () {
	// 	num_id++;
	// 	let selected_id = $(this).val();
	// 	if (new_city(selected_id, num_id)===false){
	// 		f = 0;
	// 	}else {
	// 		return new_city(selected_id, num_id);
	// 	}


	// $('#city_id_input_box').html() += html;
	// var newIndex = pastHtml + html;
	// document.write(newIndex);
	// $('#city_id_input_box').html() = newIndex;
	// alert(newIndex);
	// return newIndex;
	//var returnToArr = '<?php //?>//';
	// alert('hi');
	//alert(newHtml);
	// var changeToObj = jQuery.parseJSON(html);
	// alert(changeToObj.city_name);
	//
	//
</script>


<script>
	//$(document).ready(function () {
	//
	//	//params
	// 	let num_id = 1;
	// 	let name_field_referred = 'city';
	// 	let select_box_id = '#field-' + name_field_referred + '_id';
	// 	let field_name_in_database = name_field_referred + '_parent';
	//	let controllerNameAndUrl = '<?//= DS ?>//work<?//= DS ?>//' + name_field_referred;
	// 	let parent_select_box_id = '#' + name_field_referred + '_id_input_box';
	//	let table_name = 'tbl_' + name_field_referred;

	//	//end of params
	//
	//	$(select_box_id).on('change', function () {
	//		let selected_id = $(this).val();
	//		new_city(selected_id, num_id, select_box_id, parent_select_box_id, controllerNameAndUrl, field_name_in_database,
	//			table_name,name_field_referred);
	//	})
	//})
	//
	//function success_function(num_id, select_box_id, parent_select_box_id, htmlCode, controllerNameAndUrl,
	//						  field_name_in_database, table_name,name_field_referred) {
	//	let divHtml = $(parent_select_box_id).html();
	//	$(parent_select_box_id).html(divHtml + htmlCode);
	//	let new_id = select_box_id + num_id;
	//	$(select_box_id).on('change', new_id, function () {
	//		$(this).remove();
	//		// if ($(this).parent().change()){}
	//		// document.getElementById(new_id).innerHTML = '';
	//		let selected_id = $(select_box_id).val();
	//		new_city(selected_id, num_id, select_box_id, parent_select_box_id, controllerNameAndUrl, field_name_in_database,
	//			table_name,name_field_referred);
	//		next_level(new_id, num_id, select_box_id, parent_select_box_id, controllerNameAndUrl, field_name_in_database,
	//			table_name,name_field_referred);
	//	})
	//	next_level(new_id, num_id, select_box_id, parent_select_box_id, controllerNameAndUrl, field_name_in_database,
	//		table_name,name_field_referred);
	//}
	//
	// function new_city(selected_id, num_id, select_box_id, parent_select_box_id, controllerNameAndUrl,
	// 				  field_name_in_database, table_name, name_field_referred) {
	// 	let baseurl = window.location.origin + controllerNameAndUrl;
	// 	$.ajax({
	// 		method: 'post',
	// 		url: baseurl,
	// 		data: {
	// 			selected_id: selected_id,
	// 			num_id: num_id,
	// 			field_name_in_database: field_name_in_database,
	// 			table_name: table_name,
	// 			name_field_referred: name_field_referred
	// 		},
	// 		success: function (htmlCode) {
	// 			if (htmlCode !== false) {
	// 				success_function(num_id, select_box_id, parent_select_box_id, htmlCode, controllerNameAndUrl, field_name_in_database,
	// 					table_name, name_field_referred);
	// 			} else {
	// 				let next_num_id = num_id;
	// 				let next_select_box_id_for_remove_html = select_box_id + next_num_id++;
	// 				$(next_select_box_id_for_remove_html).html('');
	// 				document.getElementById(next_select_box_id_for_remove_html).innerHTML = "<br>";
	// 			}
	// 		}
	// 	})
	// }
	//
	// function next_level(new_id, num_id, select_box_id, parent_select_box_id, controllerNameAndUrl,
	// 					field_name_in_database, table_name, name_field_referred) {
	// 	$(new_id).change(function () {
	// 		let selected_id = $(this).val();
	// 		num_id++;
	// 		new_city(selected_id, num_id, select_box_id, parent_select_box_id, controllerNameAndUrl, field_name_in_database,
	// 			table_name, name_field_referred);
	// 	})
	// }





















	// // params
	// //controllers directory address
	// let controllerNameAndUrl = '/work/city';
	// //name of parameters
	// let name_field_persian = 'شهر';
	// let name_field_referred = 'city';
	// //database parameters
	// let table_name = 'tbl_' + name_field_referred;
	// let field_name_in_database = name_field_referred + '_parent';
	// //select box id and parent of select box id
	// let parent_select_box_id = '#' + name_field_referred + '_id_input_box';
	// let select_box_id = '#field-' + name_field_referred + '_id';
	// //end of params
</script>
