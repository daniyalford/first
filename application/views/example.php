<!DOCTYPE html>
<html lang="fa">
<head>
	<title>my site</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?= base_url() ?>download.jpg">
	<?php
	foreach ($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
	<?php endforeach; ?>
	<style>
		.chosen-select {
			width: 200px !important;
			display: inline-block;
			outline: none !important;
			margin-top: 1px !important;
			box-shadow: 1px 1px 4px slategrey !important;
			border-radius: 5px !important;
			border: 1.2px #5897fb solid !important;
			font-size: 11px !important;
		}

		.search-choice-close {
			display: none !important;
		}

		input[type=text]:hover {
			border: 1px solid #555 !important;
			background: #fff !important;
		}
	</style>
</head>
<body>
<div>
	<a href='<?php echo site_url('admin' . DS . 'index') ?>'>students</a> |
	<a href='<?php echo site_url('admin' . DS . 'field') ?>'>fields</a> |
	<a href='<?php echo site_url('admin' . DS . 'uni') ?>'>university</a> |
	<a href='<?php echo site_url('admin' . DS . 'city') ?>'>city</a> |
	<a href='<?php echo site_url('admin' . DS . 'major') ?>'>major</a> |
	<a href='<?php echo site_url('admin' . DS . 'hobby') ?>'>hobby</a> |
</div>
<div style='height:20px;'></div>
<div style="padding: 10px">
	<?php echo $output; ?>
</div>
<?php foreach ($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<script>
	// params

	let controllerNameAndUrl = '/work/NlevelSelectBox', name_field_persian = 'رشته ی دانشگاهی', name_field_referred = 'univercity',
		table_name = 'tbl_' + name_field_referred, field_name_in_database = name_field_referred + '_parent',
		parent_select_box_id = '#' + name_field_referred + '_id_input_box',
		select_box_id = '#field-' + name_field_referred + '_id', dataEncoded = '', dataDecoded = '';

	//end of params
	function decodedData(response) {
		dataDecoded = decodeURI(response);
		return dataDecoded;
	}

	function runData() {
		$('#loader').remove();
		$(parent_select_box_id).append(decodedData(dataEncoded));
	}

	$(document).ready(function () {
		$(parent_select_box_id).on('change', select_box_id, function () {
			$(this).nextAll(select_box_id).remove();
			$(this).nextAll('label').remove();
			//$(parent_select_box_id).append('<img src='window.location.origin+'"work/assets/1.png" style="" id="loader" alt="" />');
			let parent_id = $(this).val();
			if (parent_id !== 0 && parent_id !== '') {
				$.post(window.location.origin + controllerNameAndUrl, {
					parent_id: parent_id,
					name_field_referred: name_field_referred,
					name_field_persian: name_field_persian,
					table_name: table_name,
					field_name_in_database: field_name_in_database
				}, function (response) {
					dataEncoded = encodeURI(response);
					setTimeout(runData, 5);
				});
			}
			return false;
		});
	})
</script>
</body>
</html>


