<?php
if (isset($id) && $id !== '') {
	$data = array(
			'name' => 'chatContent',
			'id' => 'chatContent',
			'value' => '',
			'class' => 'formGroup form-control',
			'placeholder' => 'متن پیام',
			'rows' => '10'
	);
	$data_btn = array(
			'type' => 'button',
			'name' => 'btnSendChat',
			'id' => 'btnSendChat',
			'content' => 'ارسال',
			'class' => 'formBtn btn mx-auto col-8 col'
	);
	$form_chat_open = form_open();
	$text_of_sender = form_textarea($data);
	$btn_send = form_button($data_btn);
	$hide_id_receiver = form_hidden('receive_id', $id);
	$form_chat_close = form_close();
	?>
	<div class="chat">
		<div class="alert alert-danger rounded-10 text-center p-3 d-none" id="error_chat">
			متنی برای ارسال وجود ندارد
		</div>
		<?= $form_chat_open ?>
		<?= $hide_id_receiver ?>
		<div class="my-4">
			<div id=chatBoxHelp" class="form-text mb-2 text-center">متنی را که میخواهید ارسال کنید وارد کنید
			</div>
			<?= $text_of_sender ?>
		</div>
		<div class="d-grid gap-2 w-90">
			<?= $btn_send ?>
		</div>
		<?= $form_chat_close ?>
	</div>
<?php } else {
	echo "hi";
//	redirect(base_url() . 'auth' . DS . 'login');
} ?>
