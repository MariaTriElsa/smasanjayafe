<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SMA Sanjaya XIV Nanggulan</title>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/responsive.css') ?>" rel="stylesheet">
	<link rel="icon" href="<?= base_url('assets/images/fevicon.png') ?>" type="image/gif"/>
	<link href="<?= base_url('assets/css/jquery.mCustomScrollbar.min.css') ?>" rel="stylesheet">
	<style>

		.overlay {
			height: 0%;
			width: 100%;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: rgb(0,0,0);
			background-color: rgba(0,0,0,0.9);
			overflow-y: hidden;
			transition: 0.1s;
		}

		.overlay-content {
			position: relative;
			top: 25%;
			width: 100%;
			text-align: center;
			margin-top: 30px;
		}

		.overlay a {
			padding: 8px;
			text-decoration: none;
			font-size: 36px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.overlay a:hover, .overlay a:focus {
			color: #f1f1f1;
		}

		.overlay .closebtn {
			position: absolute;
			top: 20px;
			right: 45px;
			font-size: 60px;
		}

		@media screen and (max-height: 450px){
			.overlay {overflow-y: auto;}
			.overlay a {font-size: 20px}
			.overlay .closebtn {
				font-size: 40px;
				top: 15px;
				right: 35px;
			}
		}

	</style>
</head>
