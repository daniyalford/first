<div class="container" dir="rtl">
	<aside class='slider s1 bg_dark'>
		<?= $rightMenu ?>
		<?= $chatMenu ?>
	</aside>
	<div class="content s4">
		<?php if (isset($search_data_info)) {
			$main = '';
			$num = 0;
			foreach ($search_data_info as $tb) {
				$main .= '<div class="media"><p class="pull-right"><small>' . $tb['in_date'] . '</small></p><a class="media-left" href="#"><img src="' . $tb['student_pic'] . '" alt="student picture"></a><div class="media-body"><h4 class="media-heading user_name">' . $tb['student_name'] . '</h4>' . $tb['student_description'] . '<p><small><a href="#">Like</a> - <a href="#">Share</a></small></p></div></div>';
				$num++;
			} ?>
			<div class="row mt-3">
				<div class="col-md-8">
					<div class="page-header">
						<h1>تعداد نفرات: <?= $num ?> نفر</h1>
					</div>
					<div class="comments-list">
						<?= $main ?>
					</div>
				</div>
			</div>
		<?php } else { ?>
			<?= $user_info ?>
			<div class="row mt-3">
				<div class="col-md-4">
					<?= $friendsTable ?>
				</div>
				<div class="col-md-4">
					<?= $friendsTable ?>
				</div>
				<div class="col-md-4">
					<?= $friendsTable ?>
				</div>
				<div class="col-md-4">
					<?= $city_list ?>
				</div>
				<?= $list_user ?>
			</div>
		<?php } ?>
	</div>
</div>
