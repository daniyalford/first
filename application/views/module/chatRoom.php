<?php
echo $header; ?>
<style>
	body {
		background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
	}
</style>
<?php if (isset($info) && !empty($info)) { ?>
	<div class="container">
		<div class="row ml-5 mt-5">
			<?= $info ?>
		</div>
	</div>
	<?php
} elseif (isset($data) && !empty($data)) {
	$num = 0;
	foreach ($data as $val) {
		$num++;
		$student_id = $val['chat_sender_id'];
		if ($val['chat_receiver_id'] === $_SESSION['user_id']) {
			$student_name = $val['chat_sender_name'];
			$a = '<div class="d-flex justify-content-start mb-4"><div class="img_cont_msg">' . $val['chat_sender_name'] . '</div><div class="msg_cotainer">' . $val['chat_content'] . '<span class="msg_time">' . $val['chat_time'] . '</span></div></div>';
		} else {
			$student_name = $val['chat_receiver_name'];
			$b = '<div class="d-flex justify-content-end mb-4"><div class="msg_cotainer_send">' . $val['chat_content'] . '<span class="msg_time_send">' . $val['chat_time'] . '</span></div><div class="img_cont_msg">' . $val['chat_sender_name'] . '</div></div>';
		}
	}
	?>
	<style>
		body, html {
			height: 100%;
			margin: 0;
			background: #7F7FD5;
			background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
			background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
		}

		.chat {
			margin-top: auto;
			margin-bottom: auto;
		}

		.card {
			height: 500px;
			border-radius: 15px !important;
			background-color: rgba(0, 0, 0, 0.4) !important;
		}

		.contacts_body {
			padding: 0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}

		.msg_card_body {
			overflow-y: auto;
		}

		.card-header {
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}

		.card-footer {
			border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
		}

		.container {
			align-content: center;
		}

		.search {
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0, 0, 0, 0.3) !important;
			border: 0 !important;
			color: white !important;
		}

		.search:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

		.type_msg {
			background-color: rgba(0, 0, 0, 0.3) !important;
			border: 0 !important;
			color: white !important;
			height: 60px !important;
			overflow-y: auto;
		}

		.type_msg:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

		.attach_btn {
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0, 0, 0, 0.3) !important;
			border: 0 !important;
			color: white !important;
			cursor: pointer;
		}

		.send_btn {
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0, 0, 0, 0.3) !important;
			border: 0 !important;
			color: white !important;
			cursor: pointer;
		}

		.search_btn {
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0, 0, 0, 0.3) !important;
			border: 0 !important;
			color: white !important;
			cursor: pointer;
		}

		.contacts {
			list-style: none;
			padding: 0;
		}

		.contacts li {
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}

		.active {
			background-color: rgba(0, 0, 0, 0.3);
		}

		.user_img {
			height: 70px;
			width: 70px;
			border: 1.5px solid #f5f6fa;

		}

		.user_img_msg {
			height: 40px;
			width: 40px;
			border: 1.5px solid #f5f6fa;

		}

		.img_cont {
			position: relative;
			height: 70px;
			width: 70px;
		}

		.img_cont_msg {
			height: 40px;
			width: 40px;
		}

		.online_icon {
			position: absolute;
			height: 15px;
			width: 15px;
			background-color: #4cd137;
			border-radius: 50%;
			bottom: 0.2em;
			right: 0.4em;
			border: 1.5px solid white;
		}

		.offline {
			background-color: #c23616 !important;
		}

		.user_info {
			margin-top: auto;
			margin-bottom: auto;
			margin-left: 15px;
		}

		.user_info span {
			font-size: 20px;
			color: white;
		}

		.user_info p {
			font-size: 10px;
			color: rgba(255, 255, 255, 0.6);
		}

		.video_cam {
			margin-left: 50px;
			margin-top: 5px;
		}

		.video_cam span {
			color: white;
			font-size: 20px;
			cursor: pointer;
			margin-right: 20px;
		}

		.msg_cotainer {
			margin-top: auto;
			margin-bottom: auto;
			margin-left: 10px;
			border-radius: 25px;
			background-color: #82ccdd;
			padding: 10px;
			position: relative;
		}

		.msg_cotainer_send {
			margin-top: auto;
			margin-bottom: auto;
			margin-right: 10px;
			border-radius: 25px;
			background-color: #78e08f;
			padding: 10px;
			position: relative;
		}

		.msg_time {
			position: absolute;
			left: 0;
			bottom: -15px;
			color: rgba(255, 255, 255, 0.5);
			font-size: 10px;
		}

		.msg_time_send {
			position: absolute;
			right: 0;
			bottom: -15px;
			color: rgba(255, 255, 255, 0.5);
			font-size: 10px;
		}

		.msg_head {
			position: relative;
		}

		#action_menu_btn {
			position: absolute;
			right: 10px;
			top: 10px;
			color: white;
			cursor: pointer;
			font-size: 20px;
		}

		.action_menu {
			z-index: 1;
			position: absolute;
			padding: 15px 0;
			background-color: rgba(0, 0, 0, 0.5);
			color: white;
			border-radius: 15px;
			top: 30px;
			right: 15px;
			display: none;
		}

		.action_menu ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.action_menu ul li {
			width: 100%;
			padding: 10px 15px;
			margin-bottom: 5px;
		}

		.action_menu ul li i {
			padding-right: 10px;

		}

		.action_menu ul li:hover {
			cursor: pointer;
			background-color: rgba(0, 0, 0, 0.2);
		}

		@media (max-width: 576px) {
			.contacts_card {
				margin-bottom: 15px !important;
			}
		}
	</style>
	<div class="col-md-8 col-xl-6 chat">
		<div class="card mt-5">
			<div class="card-header msg_head">
				<div class="d-flex bd-highlight">
					<div class="img_cont">
						<!--						<img src="--><? //= $student_pic ?><!--"-->
						<!--							 class="rounded-circle user_img">-->
						<span class="online_icon"></span>
					</div>
					<div class="user_info">
						<span><?= @$student_name ?></span>
						<p><?= $num ?> عدد پیام</p>
					</div>
					<div class="video_cam">
						<span><i class="fas fa-video"></i></span>
						<span><i class="fas fa-phone"></i></span>
					</div>
				</div>
				<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
				<div class="action_menu">
					<ul>
						<li><i class="fas fa-user-circle"></i> View profile</li>
						<li><i class="fas fa-users"></i> Add to close friends</li>
						<li><i class="fas fa-plus"></i> Add to group</li>
						<li><i class="fas fa-ban"></i> Block</li>
					</ul>
				</div>
			</div>
			<div class="card-body msg_card_body">
				<?= @$a . @$b ?>
			</div>
			<div class="card-footer">
				<form method="post" action="<?= base_url() . 'profile' . DS . 'checkUserAndSendChatInChatRoom' ?>">
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
						</div>
						<input type="hidden" name="id_rec" value="<?= $student_id ?>">
						<textarea name="chat_Content" class="form-control type_msg"
								  placeholder="Type your message..."></textarea>
						<button class="input-group-append text-center" name="chat" type="submit"
								style="background: none;border: none;">
							<span class="input-group-text send_btn" style="width: 100%;height: 100%;margin-left: -2px">
								<i class="fas fa-location-arrow"></i>
							</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
} else { ?>
	<div class="container">
		<div class="row ml-5 mt-5">
			<div class="col-10 mx-auto alert alert-danger rounded-10 text-center">
				پیامی وجود ندارد
			</div>
		</div>
	</div>
<?php }
echo $footer; ?>
