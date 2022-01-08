<style>
	input {
		border-radius: 10px;
	}
</style>
<div class="container mt-3">
	<div class="row">
		<div class="col-md-4 mx-auto text-center" style="margin-bottom: 80px">
			<h1><?= lang('create_user_heading') ?></h1>
			<p><?= lang('create_user_subheading') ?></p>
			<div class="col-sm-12">
				<div class="tab-content">
					<div id="home" class="tab-pane in active text-center">
						<?php if (isset($message) && $message !== '') { ?>
							<div class="alert alert-danger rounded-10 text-center"
								 id="infoMessage"><?= $message ?></div>
						<?php } ?>
						<?= form_open_multipart("auth/create_user", array('class' => 'form')) ?>
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
						<?= form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

