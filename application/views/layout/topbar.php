<!-- header -->
<div class="loader_bg">
	<div class="loader"><img src="<?= base_url('assets/images/loading2.gif') ?>" alt="#"/></div>
</div>

<header class="sticky-top">
	<!-- header inner -->
	<!-- header inner -->
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
					<div class="full">
						<div class="align-left m-1">
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
					<div class="menu-area">
						<div class="limit-box">
							<nav class="main-menu">
								<ul class="menu-area-main">
									<li><a href="<?= base_url() ?>">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="<?= base_url('/staffuser') ?>">Staff</a></li>
									<li><a href="#galeri">Galeri</a></li>
									<li><a href="#service" onclick="openNav()">Prestasi</a></li>
									<li><a href="#others" onclick="openNav()">Lainnya</a></li>
									<div id="myNav" class="overlay">
										<a href="javascript:void(0)"
										   class="closebtn"
										   onclick="closeNav()">×</a>
										<div class="overlay-content">
											<a href="<?= base_url('/berita') ?>">Berita</a>
											<a href="<?= base_url('/pengumuman') ?>">Pengumuman</a>
											<a href="<?= base_url('/berkas') ?>">Unduh</a>
											<a href="<?= base_url('/kontak') ?>">Kontak</a>
										</div>
									</div>


									<script>
										function openNav() {
											document.getElementById("myNav")
												.style.height = "100%";
										}

										function closeNav() {
											document.getElementById("myNav")
												.style.height = "0%";
										}
									</script>
								</ul>


								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
