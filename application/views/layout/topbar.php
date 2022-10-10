<nav class="sticky-top">
	<div id="logo">SMA SANJAYA</div>

	<label for="drop" class="toggle">Menu</label>
	<input type="checkbox" id="drop" />
	<ul class="menu">
		<li><a href="<?= base_url() ?>">Home</a></li>
		<li>
			<label for="drop-1" class="toggle">About Us +</label>
			<a href="#">About Us</a>
			<input type="checkbox" id="drop-1"/>
			<ul>
				<li><a class="" href="<?= base_url('/profil') ?>">Profil</a></li>
		
				<li><a class="" href="#">Prestasi</a></li>
				<li><a class="" href="#">Beasiswa</a></li>
			</ul>
		</li>
		<li><a href="<?= base_url('/staff') ?>">Staff</a></li>
		<li>
			<!-- First Tier Drop Down -->
			<label for="drop-1" class="toggle">Galeri +</label>
			<a href="#">Galeri</a>
			<input type="checkbox" id="drop-1"/>
			<ul>
				
				<li><a class="" href="#">Fasilitas</a></li>
				<li><a class="" href="<?= base_url('/organisasi') ?>">Organisasi</a></li>
				<li><a class="" href="<?= base_url('/ekstrakurikuler') ?>">Ekstrakulikuler</a></li>
				<li><a class="" href="#">Testimoni</a></li>
			</ul>
		</li>
		<li><a href="#service">Jurusan</a></li>
		<li class="mr-sm-5">
			<!-- First Tier Drop Down -->
			<label for="drop-2" class="toggle">Lainnya +</label>
			<a href="#">Lainnya</a>
			<input type="checkbox" id="drop-2"/>
			<ul>
				<li><a class="" href="<?= base_url('') ?>">Info PSB</a></li>
				<li><a class="" href="<?= base_url('/berita') ?>">Berita</a></li>
				<li><a class="" href="<?= base_url('/pengumuman') ?>">Pengumuman</a></li>
				<li><a class="" href="<?= base_url('/berkas') ?>">Unduh</a></li>
				<li><a class="" href="<?= base_url('/kontak') ?>">Kontak</a></li>
			</ul>
		</li>
	</ul>
</nav>
