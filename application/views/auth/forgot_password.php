<style>
	.box {
		width: 500px;
		margin: 200px 0;
	}

	.shape1 {
		position: relative;
		height: 150px;
		width: 150px;
		background-color: #0074d9;
		border-radius: 80px;
		float: left;
		margin-right: -50px;
	}

	.shape2 {
		position: relative;
		height: 150px;
		width: 150px;
		background-color: #0074d9;
		border-radius: 80px;
		margin-top: -30px;
		float: left;
	}

	.shape3 {
		position: relative;
		height: 150px;
		width: 150px;
		background-color: #0074d9;
		border-radius: 80px;
		margin-top: -30px;
		float: left;
		margin-left: -31px;
	}

	.shape4 {
		position: relative;
		height: 150px;
		width: 150px;
		background-color: #0074d9;
		border-radius: 80px;
		margin-top: -25px;
		float: left;
		margin-left: -32px;
	}

	.shape5 {
		position: relative;
		height: 150px;
		width: 150px;
		background-color: #0074d9;
		border-radius: 80px;
		float: left;
		margin-right: -48px;
		margin-left: -32px;
		margin-top: -30px;
	}

	.shape6 {
		position: relative;
		height: 150px;
		width: 150px;
		background-color: #0074d9;
		border-radius: 80px;
		float: left;
		margin-right: -20px;
		margin-top: -35px;
	}

	.shape7 {
		position: relative;
		height: 150px;
		width: 150px;
		background-color: #0074d9;
		border-radius: 80px;
		float: left;
		margin-right: -20px;
		margin-top: -57px;
	}

	.float {
		position: absolute;
		z-index: 2;
	}

	.form {
		margin-left: 145px;
	}
</style>
<div class="container">
	<div id="login-row" class="row justify-content-center align-items-center">
		<div id="login-column" class="col-md-6">

			<div class="box"><h1><?php echo lang('forgot_password_heading'); ?></h1>
				<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>
				<?php if (isset($message) && $message !== '') { ?>
					<div class="alert alert-danger text-center rounded-10" id="infoMessage"><?= $message ?></div>
				<?php } ?>
				<div class="shape1"></div>
				<div class="shape2"></div>
				<div class="shape3"></div>
				<div class="shape4"></div>
				<div class="shape5"></div>
				<div class="shape6"></div>
				<div class="shape7"></div>
				<div class="float">
					<?php echo form_open("auth/forgot_password", array('class' => 'form')); ?>
					<div class="form-group">
						<label for="identity"
							   class="text-white">
							<?= (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)) ?>
						</label>
						<br/>
						<?= form_input($identity, '', 'class="form-control"') ?>
					</div>
					<div class="form-group">
						<?= form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-info btn-block rounded-10"') ?>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
