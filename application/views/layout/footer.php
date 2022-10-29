<footer class="site-footer">
	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-3.0.0.min.js') ?>"></script>

	<script src="<?= base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugin.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
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
				<h6>Quick Links</h6>
				<ul class="footer-links">
					<li><a href="http://scanfcode.com/about/">About Us</a></li>
					<li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
					<li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
					<li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
					<li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
				</ul>
			</div>
		</div>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
				<p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
					<a href="#">SMA SANJAYA</a>.
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
