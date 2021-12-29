<div class="container" dir="rtl">
	<aside class='slider s1 bg_dark'>
		<?= $rightMenu ?>
		<?= $chatMenu ?>
	</aside>
	<div class="content s4">
		<?php if (isset($data)) { ?>
			<div class="row">
				<div class="col-md-8">
					<div class="page-header">
						<h1><small class="pull-right">45 comments</small> Comments </h1>
					</div>
					<div class="comments-list">
						<div class="media">
							<p class="pull-right"><small>5 days ago</small></p>
							<a class="media-left" href="#">
								<img src="http://lorempixel.com/40/40/people/1/">
							</a>
							<div class="media-body">

								<h4 class="media-heading user_name">Baltej Singh</h4>
								Wow! this is really great.

								<p><small><a href="">Like</a> - <a href="">Share</a></small></p>
							</div>
						</div>
						<div class="media">
							<p class="pull-right"><small>5 days ago</small></p>
							<a class="media-left" href="#">
								<img src="http://lorempixel.com/40/40/people/2/">
							</a>
							<div class="media-body">

								<h4 class="media-heading user_name">Baltej Singh</h4>
								Wow! this is really great.

								<p><small><a href="">Like</a> - <a href="">Share</a></small></p>
							</div>
						</div>
						<div class="media">
							<p class="pull-right"><small>5 days ago</small></p>
							<a class="media-left" href="#">
								<img src="http://lorempixel.com/40/40/people/3/">
							</a>
							<div class="media-body">

								<h4 class="media-heading user_name">Baltej Singh</h4>
								Wow! this is really great.

								<p><small><a href="">Like</a> - <a href="">Share</a></small></p>
							</div>
						</div>
						<div class="media">
							<p class="pull-right"><small>5 days ago</small></p>
							<a class="media-left" href="#">
								<img src="http://lorempixel.com/40/40/people/4/">
							</a>
							<div class="media-body">

								<h4 class="media-heading user_name">Baltej Singh</h4>
								Wow! this is really great.

								<p><small><a href="">Like</a> - <a href="">Share</a></small></p>
							</div>
						</div>
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
