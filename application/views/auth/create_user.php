<!DOCTYPE html>
<html lang="en">
<head>
	<title>register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
		body {
			background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
		}
	</style>
</head>
<body>
<div class="container" style="margin-top: 5%;">
	<div class="row">
		<div class="col-md-4 mx-auto text-center">
			<h1><?= lang('create_user_heading') ?></h1>
			<p><?= lang('create_user_subheading') ?></p>
			<div class="col-sm-12">
				<br/>
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active text-center">
						<?= form_open_multipart("auth/create_user") ?>
						<div class="form-group">
							<label for="first_name"><?= lang('create_user_fname_label', 'first_name') ?></label>
							<?= form_input($first_name, '', 'class="form-control"') ?>
						</div>
						<div class="form-group">
							<label for="last_name"><?= lang('create_user_lname_label', 'last_name') ?></label>
							<?= form_input($last_name, '', 'class="form-control"') ?>
						</div>
						<div class="form-group">
							<?php
							if ($identity_column !== 'email') {
								echo '<label for="email">';
								echo lang('create_user_identity_label', 'identity');
								echo '</label>';
								echo form_error('identity');
								echo form_input($identity, '', 'class="form-control"');
							}
							?>
						</div>
						<div class="form-group">
							<label for="company"><?= lang('create_user_company_label', 'company') ?></label>
							<?= form_input($company, '', 'class="form-control"') ?>
						</div>
						<div class="form-group">
							<label for="email"><?= lang('create_user_email_label', 'email') ?></label>
							<?= form_input($email, '', 'class="form-control"') ?>
						</div>
						<div class="form-group">
							<label for="phone"><?= lang('create_user_phone_label', 'phone') ?></label>
							<?= form_input($phone, '', 'class="form-control"') ?>
						</div>
						<div class="form-group">
							<label for="password"><?= lang('create_user_password_label', 'password') ?></label>
							<?= form_input($password, '', 'class="form-control"') ?>
						</div>
						<div class="form-group">
							<label for="password_confirm"><?= lang('create_user_password_confirm_label', 'password_confirm') ?></label>
							<?= form_input($password_confirm, '', 'class="form-control"') ?>
						</div>
						<div class="form-group">
							<?= form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary p-4 btn-block rounded-10"') ?>
						</div>
						<?php if (isset($message) && $message !== '') { ?>
							<div class="alert alert-danger rounded-10 text-center"
								 id="infoMessage"><?= $message ?></div>
						<?php } ?>
						<?= form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
