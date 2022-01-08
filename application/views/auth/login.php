<div class="container">
	<div class="row">
		<aside class="col-sm-5 mx-auto mt-5 rounded-10">
			<h1><?= lang('login_heading') ?></h1>
			<p><?= lang('login_subheading') ?></p>
			<div class="card">
				<article class="card-body">
					<?= form_open("auth/login", array('class' => 'form')) ?>
					<div class="form-group">
						<label for="identity" class="">
							<?= lang('login_identity_label', 'identity') ?>
						</label>
						<br>
						<?= form_input($identity, '', array('class' => 'form-control')) ?>
					</div>
					<div class="form-group">
						<label for="password" class="">
							<?= lang('login_password_label', 'password') ?>
						</label>
						<br>
						<?= form_input($password, '', array('class' => 'form-control')) ?>
						<a class="float-right mt-3" href="forgot_password"><?= lang('login_forgot_password') ?></a>
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								<?= form_checkbox('remember', '1', FALSE, 'id="remember"'); ?><?= lang('login_remember_label', 'remember') ?>
							</label>
						</div>
					</div>
					<div class="form-group">
						<?= form_submit('submit', lang('login_submit_btn'), 'class="btn btn-info btn-block rounded-10"') ?>
					</div>
					<?php if (isset($message) && $message !== '') { ?>
						<div class="form-group">
							<div class="form-content alert alert-danger rounded-10 text-center" id="infoMessage">
								<?= $message ?>
							</div>
						</div>
					<?php } ?>
					<?= form_close() ?>
				</article>
			</div> <!-- card.// -->
		</aside> <!-- col.// -->
	</div>
</div>
