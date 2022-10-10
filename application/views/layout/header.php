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
		/*footer
		 */
		.site-footer
		{
			background-color:#26272b;
			padding:45px 0 20px;
			font-size:15px;
			line-height:24px;
			color:#737373;
		}
		.site-footer hr
		{
			border-top-color:#bbb;
			opacity:0.5
		}
		.site-footer hr.small
		{
			margin:20px 0
		}
		.site-footer h6
		{
			color:#fff;
			font-size:16px;
			text-transform:uppercase;
			margin-top:5px;
			letter-spacing:2px
		}
		.site-footer a
		{
			color:#737373;
		}
		.site-footer a:hover
		{
			color:#3366cc;
			text-decoration:none;
		}
		.footer-links
		{
			padding-left:0;
			list-style:none
		}
		.footer-links li
		{
			display:block
		}
		.footer-links a
		{
			color:#737373
		}
		.footer-links a:active,.footer-links a:focus,.footer-links a:hover
		{
			color:#3366cc;
			text-decoration:none;
		}
		.footer-links.inline li
		{
			display:inline-block
		}
		.site-footer .social-icons
		{
			text-align:right
		}
		.site-footer .social-icons a
		{
			width:40px;
			height:40px;
			line-height:40px;
			margin-left:6px;
			margin-right:0;
			border-radius:100%;
			background-color:#33353d
		}
		.copyright-text
		{
			margin:0
		}
		@media (max-width:991px)
		{
			.site-footer [class^=col-]
			{
				margin-bottom:30px
			}
		}
		@media (max-width:767px)
		{
			.site-footer
			{
				padding-bottom:0
			}
			.site-footer .copyright-text,.site-footer .social-icons
			{
				text-align:center
			}
		}
		.social-icons
		{
			padding-left:0;
			margin-bottom:0;
			list-style:none
		}
		.social-icons li
		{
			display:inline-block;
			margin-bottom:4px
		}
		.social-icons li.title
		{
			margin-right:15px;
			text-transform:uppercase;
			color:#96a2b2;
			font-weight:700;
			font-size:13px
		}
		.social-icons a{
			background-color:#eceeef;
			color:#818a91;
			font-size:16px;
			display:inline-block;
			line-height:44px;
			width:44px;
			height:44px;
			text-align:center;
			margin-right:8px;
			border-radius:100%;
			-webkit-transition:all .2s linear;
			-o-transition:all .2s linear;
			transition:all .2s linear
		}
		.social-icons a:active,.social-icons a:focus,.social-icons a:hover
		{
			color:#fff;
			background-color:#29aafe
		}
		.social-icons.size-sm a
		{
			line-height:34px;
			height:34px;
			width:34px;
			font-size:14px
		}
		.social-icons a.facebook:hover
		{
			background-color:#3b5998
		}
		.social-icons a.twitter:hover
		{
			background-color:#00aced
		}
		.social-icons a.linkedin:hover
		{
			background-color:#007bb6
		}
		.social-icons a.dribbble:hover
		{
			background-color:#ea4c89
		}
		@media (max-width:767px)
		{
			.social-icons li.title
			{
				display:block;
				margin-right:0;
				font-weight:600
			}
		}
	</style>
</head>
