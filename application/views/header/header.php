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
	<style>
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
			border-radius: 10px !important;
			box-shadow: 2px 3px 7px #ffffff !important;
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
			box-shadow: 2px 3px 7px #f19e80 !important;
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
			height: 150px !important;
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
			padding: 7px !important;
		}

		footer {
			position: sticky;
			bottom: 0;
			width: 100%;
			height: 50px;
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
			margin-top: 17px;
			padding-bottom: 30px !important;
			border-bottom-left-radius: 10px !important;
			border-bottom-right-radius: 10px !important;
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

		.posfix {
			position: fixed;
			top: 55px;
			z-index: 9999999;
		}

		.navOne {
			z-index: 99;
			height: 65px;
		}

		.mt-200 {
			margin-top: 200px !important;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.6.0.js"
			integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navOne sticky-top navbar-dark bg-dark">
	<div class="container-fluid">
		<!--		<a class="navbar-brand" href="#">brand</a>-->
		<form class="d-flex w-90" method="post">
			<input class="form-control me-2 w-90" dir="rtl" id="search" name="search" type="text" placeholder="جست و جو"
				   aria-label="Search">
			<button class="col btn btn-dark-moon" name="btn_search" type="submit">یافتن</button>
		</form>
		<button id="id">
			<span class="navbar-toggler-icon"></span>
		</button>
		<button id="idc" style="display: none;" dir="rtl">
			<i class="fa fa-times p-1"></i>
		</button>
		<button id="phone" style="display: none;" dir="rtl">
			<i class="fa fa-inbox" aria-hidden="true"></i>
		</button>
		<button id="phoned" dir="rtl">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</button>
		<!--		chat menus-->
		<div dir="rtl" id="ix">
			<ul id="sliderMenu"></ul>
			<ul class="navbar-nav me-auto my-4 my-lg-0 navbar-nav-scroll"
				style="--bs-scroll-height: 200px;">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home p-1"></i>خانه</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() . 'admin' ?>"><i
								class="fa fa-university p-1"></i>دانشگاه</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() . 'profile/groups' ?>"><i class="fa fa-users p-1"></i>
						گروه ها
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() . 'profile' ?>" tabindex="-1" aria-disabled="true"><i
								class="fa fa-user p-1"></i>پنل
						کاربری</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" id="close" tabindex="-1"
					   aria-disabled="true"><i class="fa fa-times p-1"></i>بستن</a>
				</li>
			</ul>
		</div>
		<!--		chat menus-->
	</div>
</nav>
<div class="container-fluid posfix">
	<div class="d-none searchBoxResult w-90 w-80"></div>
</div>
