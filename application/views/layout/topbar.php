<nav class="sticky-top">
	<div id="logo">Your Logo here</div>

	<label for="drop" class="toggle">Menu</label>
	<input type="checkbox" id="drop" />
	<ul class="menu">
		<li><a href="<?= base_url() ?>">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="<?= base_url('/staff') ?>">Staff</a></li>
		<li>
			<!-- First Tier Drop Down -->
			<label for="drop-1" class="toggle">Galeri +</label>
			<a href="#">Galeri</a>
			<input type="checkbox" id="drop-1"/>
			<ul>
				<li><a class="" href="#">Fasilitas</a></li>
				<li><a class="" href="#">Organisasi</a></li>
				<li><a class="" href="#">Ekstrakulikuler</a></li>
			</ul>
		</li>
		<li><a href="#service">Prestasi</a></li>
		<li class="mr-sm-5">
			<!-- First Tier Drop Down -->
			<label for="drop-2" class="toggle">Lainnya +</label>
			<a href="#">Lainnya</a>
			<input type="checkbox" id="drop-2"/>
			<ul>
				<li><a class="" href="<?= base_url('/berita') ?>">Berita</a></li>
				<li><a class="" href="#">Pengumuman</a></li>
				<li><a class="" href="<?= base_url('/berkas') ?>">Unduh</a></li>
				<li><a class="" href="#">Kontak</a></li>
				<li><a class="" href="<?= base_url('/aboutus') ?>">Login</a></li>
			</ul>
		</li>
	</ul>
</nav>
