<?php
$data1 = array('type' => 'text',
		'name' => 'usernameReceiver',
		'id' => 'usernameReceiver',
		'value' => '',
		'class' => 'formGroup form-control',
		'placeholder' => 'نام کاربری گیرنده');
$data2 = array(
		'name' => 'chatContent',
		'id' => 'chatContent',
		'value' => '',
		'class' => 'h-10p formGroup form-control',
		'placeholder' => 'متن پیام');
$data_btn = array(
		'type' => 'button',
		'name' => 'btnSendChat',
		'id' => 'btnSendChat',
		'content' => 'ارسال',
		'class' => 'formBtn btn col',);
$form_chat_open = form_open();
$name_received = form_input($data1);
$text_of_sender = form_textarea($data2);
$btn_send = form_button($data_btn);
$form_chat_close = form_close();
?>
<div class="chat">
	<div class="alert alert-danger rounded-10 text-center p-3" id="error_chat" style="display: none">کاربر مورد نظر شما
		یافت نشد
	</div>
	<?= $form_chat_open ?>
	<div class="mt-4 mb-4">
		<?= $name_received ?>
		<div id="usernameReceiverHelp" class="form-text text-center">نام کاربری گیرنده پیام را وارد
			کنید
		</div>
	</div>
	<div class="mb-4">
		<?= $text_of_sender ?>
		<div id=chatBoxHelp" class="form-text text-center">متنی را که میخواهید ارسال کنید وارد کنید
		</div>
	</div>
	<div class="d-grid gap-2 w-90">
		<?= $btn_send ?>
	</div>
	<?= $form_chat_close ?>
</div>

