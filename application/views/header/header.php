<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url() . 'assets/include/css/all.css' ?>">
	<link rel="stylesheet" href="<?= base_url() . 'assets/include/css/fontawesome.css' ?>">
	<link rel="stylesheet" href="<?= base_url() . 'assets/include/css/solid.css' ?>">
	<link rel="stylesheet" href="<?= base_url() . 'assets/include/css/brands.css' ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title><?= (isset($title) ? $title : 'home page') ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
		  integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css"
		  href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	<style>
		.inner_span {
			margin-left: -20px;
		}

		.inner_i {
			position: relative;
			left: 32px;
			bottom: 13px;
		}

		.formGroup {
			width: 90%;
			margin-left: auto;
			margin-right: auto;
			margin-top = 10px;
			border-radius: 10px;
			box-shadow: 3px 2px 5px pink;
		}

		a {
			text-decoration: none;
			color: black;
		}

		.mr-25p {
			margin-right: 25% !important;
		}

		label {
			margin: 10px;
		}

		.col:hover, #idc:hover, #id:hover {
			color: #327179 !important;
			box-shadow: 2px 3px 7px #f19e80 !important;
		}

		button:hover, input:hover, textarea:hover, .hoverTags:hover {
			position: relative;
			top: 2px;
		}

		.col {
			box-shadow: 2px 3px 7px black !important;
			outline: none !important;
			border: 0 !important;
			padding-left: 35px !important;
			padding-right: 35px !important;
			border-radius: 10px !important;
		}

		.rounded-10 {
			border-radius: 10px !important;
		}

		.btn-dark-moon {
			background: #7474BF; /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #348AC7, #7474BF); /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: #fff;
			border: 3px solid #eee;
			box-shadow: 2px 3px 7px #ffffff !important;
		}

		input::placeholder {
			text-align: right;
			padding: 4px;
			direction: rtl !important;
		}

		#search {
			/*border-radius: 10px !important;*/
			/*box-shadow: 2px 3px 7px #ffffff !important;*/
		}

		.m_auto {
			margin-right: auto !important;
			margin-left: auto !important;
		}

		.pd_x_25 {
			padding-right: 25px !important;
			padding-left: 25px !important;
		}

		.box_shadow_warning {
			box-shadow: 2px 3px 7px #f19e80 !important;
		}

		#search:hover {
			/*box-shadow: 2px 3px 7px #f19e80 !important;*/
		}

		.s1 {
			width: 24%;
			position: fixed;
			right: 0;
			display: block;
			height: 660px;
			padding-bottom: 0 !important;
			margin-bottom: 0 !important;
			/*background-color: #0d272f;*/
		}

		.s2 {
			margin-top: 10px;
			overflow-y: hidden;
			width: 90%;
			height: 140px;
			margin-left: auto;
			margin-right: auto;
		}

		h4 {
			text-align: center;
		}

		.s3, svg {
			border-radius: 70px;
			display: inline-block;
			text-align: center;
			width: 100px;
			height: 100px;
			margin-left: auto;
		}

		.h-10p {
			height: 75px !important;
			box-shadow: 8px 8px 10px #2e343a;
		}

		.chat {
			width: 90%;
			margin-left: auto;
			margin-right: auto;
		}

		.s4 {
			width: 75%;
			display: block;
			margin-right: 25% !important;
		}

		.s8 {
			margin-top: 270px;
			width: 100% !important;
			display: block;
			margin-right: 0 !important;
		}

		.w-90 {
			width: 90% !important;
		}

		.proPic {
			width: 100px !important;
			height: 100px !important;

		}

		#btnSendChat {
			background: #654ea3; /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #eaafc8, #654ea3); /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #eaafc8, #654ea3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: #fff;
			border: 3px solid #eee;
		}

		#id, #idc, #phone, #phoned {
			border-radius: 10px !important;
			background-color: #443142 !important;
			outline: none;
			border: 0;
			box-shadow: 2px 3px 7px white !important;
			position: fixed;
			top: 8px;
			padding: 15px !important;
		}

		#phone, #phoned {
			right: 40px;
		}

		#id, #idc {
			left: 40px;
		}

		#idc:hover, #id:hover, #phone:hover, #phoned:hover {
			position: absolute;
			top: 10px;
		}

		footer {
			position: fixed;
			bottom: 0;
			width: 100%;
			height: 75px;
			line-height: 75px;
			background: #141E30; /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #243B55, #141E30); /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: #fff;
			border: 3px solid #eee;
		}

		a i, button i {
			color: cornflowerblue;
		}

		#ix {
			width: 100% !important;
			display: none;
			/*padding-top: 10px !important;*/
			background-color: #170d0a;
			margin-top: 62px;
			padding-bottom: 30px !important;
			border-bottom-left-radius: 10px !important;
			border-bottom-right-radius: 10px !important;
		}

		li.nav-item {
			text-align: right;
		}

		.w-80 li {
			background-color: #1d2c47;
		}

		.w-80 {
			z-index: 999;
		}

		.w-80 a {
			color: white;
		}

		.navOne {
			z-index: 99;
			height: 65px;
		}

		.mt-200 {
			margin-top: 200px !important;
		}

		.user_name {
			font-size: 14px;
			font-weight: bold;
		}

		.comments-list .media {
			border-bottom: 1px dotted #ccc;
		}

		body, html {
			height: 100%;
			width: 100%;
			margin: 0;
			padding: 0;
			/*background: #e74c3c !important;*/
		}

		.searchbar {
			margin-bottom: auto;
			box-shadow: 2px 3px 7px grey;
			margin-top: auto;
			height: 60px;
			background-color: #353b48;
			border-radius: 30px;
			padding: 10px;
		}

		.search_input {
			color: white;
			border: 0;
			outline: 0;
			background: none;
			width: 0;
			caret-color: transparent;
			line-height: 40px;
			transition: width 0.4s linear;
		}

		.searchbar:hover > .search_input {
			padding: 0 10px;
			width: 450px;
			caret-color: #99893a;
			transition: width 0.4s linear;
		}

		.searchbar:hover > .search_icon {
			background: #33203e;
		}

		.search_icon {
			height: 40px;
			width: 40px;
			float: right;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 50%;
			color: white;
			text-decoration: none;
		}

		#btn_search {
			border: 0;
			outline: none;
			background: none;
		}

		#abas {
			position: fixed;
			top: 6px;
			left: 150px;
		}

		#search::placeholder {
			background-color: #353b48;
			color: #fff;
			border-radius: 7px;
			padding: 3px;
		}

		#search:active {
			background-color: #353b48;
			color: #fff;
		}

		#search:focus {
			background-color: #353b48;
			color: #fff;
		}

		#search::selection {
			background-color: #353b48;
			color: #fff;
		}
	</style>

	<script src="https://code.jquery.com/jquery-3.6.0.js"
			integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php $chat_num = @$_SESSION['chat_num'];
$user_new = 1; ?>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
	<!--	<a target="_blank"  class="navbar-brand" href="#">Navbar</a>-->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto" dir="rtl">
			<?php if ($this->session->userdata('rule') === 'admin') { ?>
				<li class="nav-item">
					<a target="_blank" class="nav-link" href="<?= base_url() . 'admin' ?>">
						<i class="fa fa-book-open">
						</i>
						اطلاعات کاربران
					</a>
				</li>
			<?php } ?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" dir="rtl" href="#" id="navbarDropdown" role="button"
				   data-toggle="dropdown"
				   aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-user p-1"></i>
					<i class="fa fa-envelope-o"></i>
					پروفایل من

				</a>
				<div class="dropdown-menu text-right" aria-labelledby="navbarDropdown" dir="rtl">
					<?php if ($this->session->userdata('logged_in_site') === true) { ?>
						<a class="dropdown-item" href="#">تنظیمات </a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item"
						   href="<?= base_url() . 'auth' . DS . 'logout' ?>">خروج</a>
						<?php
					} else { ?>
						<a target="_blank" class="dropdown-item" href="<?= base_url() . 'auth' . DS . 'create_user' ?>">ثبت
							نام
						</a>
						<a target="self" class="dropdown-item"
						   href="<?= base_url() . 'auth' . DS . 'login' ?>">ورود</a>
						<?php
					} ?>


				</div>
			</li>
		</ul>
		<ul class="navbar-nav" dir="rtl">
			<li class="nav-item">
				<a target="_blank" class="nav-link" href="<?= base_url() ?>">
					<i class="fa fa-home"></i>
					خانه
				</a>
			</li>
			<?php if ($this->session->userdata('logged_in_site') === true) { ?>
				<li class="nav-item mx-1">
					<a target="_blank" class="nav-link" href="<?= base_url() . 'profile' . DS . 'all_chat' ?>">
						<?php if ($chat_num !== 0 && !empty($chat_num)) { ?>
						<i class="fa fa-inbox inner_span">
							<span class="spinner-grow-sm spinner-grow text-danger text-center inner_i"></span>
							<?php }else{ ?>
							<i class="fa fa-inbox">
								<?php } ?>
							</i>
							چت ها
							<?php if ($chat_num !== 0 && !empty($chat_num)) { ?>
								<span class="badge badge-info">
						<?= $chat_num ?>
					</span>
							<?php } ?>
					</a>
				</li>
			<?php } ?>
		</ul>
		<div class="d-flex justify-content-center h-100 mx-2">
			<form method="post" action="<?= base_url() ?>profile<?= DS ?>search">
				<div class="searchbar">
					<input class="search_input" dir="rtl" id="searchBox" name="search" type="text"
						   placeholder="جست و جو">
					<button id="btn_search" class="search_icon"><i class="fas fa-search"></i></button>
				</div>
			</form>
		</div>
	</div>
</nav>
