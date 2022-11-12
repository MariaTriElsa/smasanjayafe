<footer class="site-footer">
	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-3.0.0.min.js') ?>"></script>

	<script src="<?= base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugin.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
	<!--	testi-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			"use strict";
			//  TESTIMONIALS CAROUSEL HOOK
			$('#customers-testimonials').owlCarousel({
				loop: true,
				center: true,
				items: 3,
				margin: 0,
				autoplay: true,
				dots:true,
				autoplayTimeout: 8500,
				smartSpeed: 450,
				responsive: {
					0: {
						items: 1
					},
					768: {
						items: 2
					},
					1170: {
						items: 3
					}
				}
			});
		});
	</script>

	<script>
		$(document).ready(function () {
			$(".fancybox").fancybox({
				openEffect: "none",
				closeEffect: "none"
			});

			$(".zoom").hover(function () {

				$(this).addClass('transition');
			}, function () {

				$(this).removeClass('transition');
			});
		});
	</script>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<h6>About Us</h6>
				<ul class="footer-links">
					<li><a class="" href="<?= base_url('/profil') ?>">Profil</a></li>
					<li><a class="" href="#">Prestasi</a></li>
					<li><a class="" href="<?= base_url('/beasiswa')?>">Beasiswa</a></li>
				</ul>
			</div>

			<div class="col-xs-6 col-md-3">
				<h6>Galeri</h6>
				<ul class="footer-links">
					<li><a class=""  href="<?= base_url('/fasilitas') ?>">Fasilitas</a></li>
					<li><a class="" href="<?= base_url('/organisasi') ?>">Organisasi</a></li>
					<li><a class="" href="<?= base_url('/ekstrakurikuler') ?>">Ekstrakulikuler</a></li>
					<li><a class="" href="<?= base_url('/testimoni') ?>">Testimoni</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-md-3">
				<h6>Akademik</h6>
				<ul class="footer-links">
					<li><a class=""  href="<?= base_url('/jurusan') ?>">Jurusan</a></li>
					<li><a class=""  href="<?= base_url('/staff') ?>">Staff</a></li>
					<li><a class=""  href="<?= base_url('/berita') ?>">Berita</a></li>
					<li><a class=""  href="<?= base_url('/pengumuman') ?>">Pengumuman</a></li>
				</ul>
			</div>

			<div class="col-xs-6 col-md-3">
				<h6>Hubungi Kami</h6>
				<ul class="footer-links">
					<li><i class="fa fa-map-marker" aria-hidden="true"> Karang RT 29 RW 11. Jatisarono <br> Kec.Nanguulan, Kab.Kulon Progo, Daerah Istimewa Yogyakarta</i></li>
					<li><i class="fa fa-phone" aria-hidden="true"> 0853566722</i></li>
					<li><i class="fa fa-envelope" aria-hidden="true"> Smasanjaya@gmail.com</i></li>
				</ul>
			</div>
		</div>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
				<p class="copyright-text">&copy; 2022 SMA Sanjaya XIV Nanggulan All Rights Reserved.
					<br> Developed By KELOMPOK PPL 23
					<a href="https://ukrim.ac.id/">UKRIM University</a>.
				</p>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
					<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
