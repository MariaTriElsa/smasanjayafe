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

		@import url(https://fonts.googleapis.com/css?family=Open+Sans);
		@import url(https://fonts.googleapis.com/css?family=Bree+Serif);

		h1 {
			font-size: 60px;
			text-align: center;
			color: #FFF;
		}

		h3 {
			font-size: 30px;
			line-height: 34px;
			text-align: center;
			color: #FFF;
		}

		h3 a {
			color: #FFF;
		}

		a {
			color: #FFF;
		}

		h1 {
			margin-top: 100px;
			text-align:center;
			font-size:60px;
			line-height: 70px;
			font-family: 'Bree Serif', 'serif';
		}

		#container {
			margin: 0 auto;
			max-width: 890px;
		}

		p {
			text-align: center;
		}

		.toggle,
		[id^=drop] {
			display: none;
		}

		/* Giving a background-color to the nav container. */
		nav {
			margin:0;
			padding: 0;
			background-color: #254441;
		}

		#logo {
			display: block;
			padding: 0 30px;
			float: left;
			font-size:20px;
			line-height: 60px;
		}

		/* Since we'll have the "ul li" "float:left"
		 * we need to add a clear after the container. */

		nav:after {
			content:"";
			display:table;
			clear:both;
		}

		/* Removing padding, margin and "list-style" from the "ul",
		 * and adding "position:reltive" */
		nav ul {
			float: right;
			padding:0;
			margin:0;
			list-style: none;
			position: relative;
			z-index: 900;
		}

		/* Positioning the navigation items inline */
		nav ul li {
			margin: 0px;
			display:inline-block;
			float: left;
			background-color: #254441;
			z-index: 900;
		}

		/* Styling the links */
		nav a {
			display:block;
			padding:14px 20px;
			color:#FFF;
			font-size:17px;
			text-decoration:none;
			z-index: 900;


		}


		nav ul li ul li:hover { background: #000000; }

		/* Background color change on Hover */
		nav a:hover {
			background-color: #000000;
			z-index: 900;
		}

		/* Hide Dropdowns by Default
		 * and giving it a position of absolute */
		nav ul ul {
			display: none;
			position: absolute;
			/* has to be the same number as the "line-height" of "nav a" */
			top: 60px;
			z-index: 900;
		}

		/* Display Dropdowns on Hover */
		nav ul li:hover > ul {
			display:inherit;
			z-index: 900;
		}

		/* Fisrt Tier Dropdown */
		nav ul ul li {
			width:170px;
			float:none;
			display:list-item;
			position: relative;
			z-index: 900;
		}

		/* Second, Third and more Tiers
		 * We move the 2nd and 3rd etc tier dropdowns to the left
		 * by the amount of the width of the first tier.
		*/
		nav ul ul ul li {
			position: relative;
			top:-60px;
			/* has to be the same number as the "width" of "nav ul ul li" */
			left:170px;
			z-index: 900;
		}


		/* Change ' +' in order to change the Dropdown symbol */
		li > a:after { content:  ' +'; }
		li > a:only-child:after { content: ''; }


		/* Media Queries
		--------------------------------------------- */

		@media all and (max-width : 768px) {

			#logo {
				display: block;
				padding: 0;
				width: 100%;
				text-align: center;
				float: none;
			}

			nav {
				margin: 0;
			}

			/* Hide the navigation menu by default */
			/* Also hide the  */
			.toggle + a,
			.menu {
				display: none;
			}

			/* Stylinf the toggle lable */
			.toggle {
				display: block;
				background-color: #254441;
				padding:14px 20px;
				color:#FFF;
				font-size:17px;
				text-decoration:none;
				border:none;
			}

			.toggle:hover {
				background-color: #000000;
			}

			/* Display Dropdown when clicked on Parent Lable */
			[id^=drop]:checked + ul {
				display: block;
			}

			/* Change menu item's width to 100% */
			nav ul li {
				display: block;
				width: 100%;
			}

			nav ul ul .toggle,
			nav ul ul a {
				padding: 0 40px;
			}

			nav ul ul ul a {
				padding: 0 80px;
			}

			nav a:hover,
			nav ul ul ul a {
				background-color: #000000;
			}

			nav ul li ul li .toggle,
			nav ul ul a,
			nav ul ul ul a{
				padding:14px 20px;
				color:#FFF;
				font-size:17px;
			}


			nav ul li ul li .toggle,
			nav ul ul a {
				background-color: #212121;
			}

			/* Hide Dropdowns by Default */
			nav ul ul {
				float: none;
				position:static;
				color: #ffffff;
				/* has to be the same number as the "line-height" of "nav a" */
			}

			/* Hide menus on hover */
			nav ul ul li:hover > ul,
			nav ul li:hover > ul {
				display: none;
			}

			/* Fisrt Tier Dropdown */
			nav ul ul li {
				display: block;
				width: 100%;
			}

			nav ul ul ul li {
				position: static;
				/* has to be the same number as the "width" of "nav ul ul li" */

			}

		}

		@media all and (max-width : 330px) {

			nav ul li {
				display:block;
				width: 94%;
			}

		}
		.judul {
			text-align: center;
			font-size: 40px;
			font-weight: normal;
			color: #050303;
			line-height: 46px;
			border-bottom: #fc4311 solid 1px;
			width: 242px;
			margin: 0 auto;
		}
		.judul-s {
			text-align: center;
			font-size: 30px;
			font-weight: normal;
			color: #050303;
			line-height: 46px;
			border-bottom: #fc4311 solid 1px;
			width: 242px;
			margin: 0 auto;
		}
		.text-1 {
			text-align: justify;
			font-size: 18px;
			font-weight: normal;
			color: #050303;
		}
		.text-limit{
			display: block;
			width: 100%;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
	</style>
</head>
