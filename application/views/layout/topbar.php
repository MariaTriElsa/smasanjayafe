<nav class="sticky-top">
	<img class="ml-4 pl-2 pt-1 pb-1 pr-1" src="http://localhost/smasanjaya/upload/logo.png" width="40">

	<label for="drop" class="toggle">Menu</label>
	<input type="checkbox" id="drop" />
	<ul class="menu">
		<li><a href="<?= base_url() ?>">Home</a></li>
		<li>
			<label for="drop-1" class="toggle">About Us +</label>
			<a href="#">About Us</a>
			<input type="checkbox" id="drop-1"/>
			<ul>
				<li><a class="" href="<?= base_url('/profil')?>">Profil</a></li>
				<li><a class="" href="<?= base_url('/prestasi')?>">Prestasi</a></li>
				<li><a class="" href="<?= base_url('/beasiswa')?>">Beasiswa</a></li>
			</ul>
		</li>
		<li><a href="<?= base_url('/staff') ?>">Staff</a></li>
		<li>
			<!-- First Tier Drop Down -->
			<label for="drop-2" class="toggle">Galeri +</label>
			<a href="#">Galeri</a>
			<input type="checkbox" id="drop-2"/>
			<ul>
				<li><a class=""  href="<?= base_url('/fasilitas') ?>">Fasilitas</a></li>
				<li><a class="" href="<?= base_url('/organisasi') ?>">Organisasi</a></li>
				<li><a class="" href="<?= base_url('/ekstrakurikuler') ?>">Ekstrakulikuler</a></li>
				<li><a class="" href="<?= base_url('/testimoni') ?>">Testimoni</a></li>
			</ul>
		</li>
		<li><a href="<?= base_url('/jurusan') ?>">Jurusan</a></li>
		<li class="mr-sm-5">
			<!-- First Tier Drop Down -->
			<label for="drop-3" class="toggle">Lainnya +</label>
			<a href="#">Lainnya</a>
			<input type="checkbox" id="drop-3"/>
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
