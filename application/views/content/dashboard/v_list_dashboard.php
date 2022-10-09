<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/topbar'); ?>
<body>
<section class="slider_section>">
	<div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="first-slide" src="<?= base_url('assets/images/bannerfirst.png') ?>" alt="First slide">
				<div class="container">
					<div class="carousel-caption relative">
						<h1>SMA Sanjaya XIV Nanggulan(LOGO)</h1>
					</div>
				</div>
			</div>
			<?php
			$no = 1;
			foreach ($fasilitas as $f) {
				?>
				<div class="carousel-item">
					<img class="second-slide"
						 src="http://localhost/smasanjaya/upload/<?php echo $f->gambar_fasilitas ?>"
						 alt="Second slide">
				</div>
				<?php
			}
			?>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<i class='fa fa-angle-left'></i>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<i class='fa fa-angle-right'></i>
		</a>
	</div>
</section>
<div class="container-fluid">
	<div class="col-12">
		<div id="screenshot" class="Screenshot">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="titlepage">
							<h3>Berita</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="card">
										<div class="card-header">
										</div>
										<div class="card-body">
											<img class="first-slide" src="assets/images/bannerfirst.png"><br>

										</div>
									</div>
								</div>
								<?php
								$no = 1;
								foreach ($berita as $b) {
									?>
									<div class="carousel-item">
										<div class="card">
											<div class="card-header">
												<?= $b->nama_berita ?>
											</div>
											<div class="card-body">
												<img class="second-slide"
													 src="<?= 'http://localhost/smasanjaya/upload/' . $b->gambar_berita ?>"
												><br>
												<div class="text-left"><?= $b->deskripsi_berita ?></div>

											</div>
										</div>
									</div>
									<?php
								}
								?>
							</div>
							<a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i
										class='fa fa-angle-left'></i></a>
							<a class="carousel-control-next"
							   href="#main_slider"
							   role="button" data-slide="next"> <i
										class='fa fa-angle-right'></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>
<script>
	$(function () {
		let idStaff = 0
		$(".btn-delete-staff").on("click", function () {
			idStaff = $(this).data("id");
			console.log(idStaff);
			$("#modal-confirm-delete").modal('show');
		});
		$("#btn-delete").on("click", function () {
			//panggil url untuk hapus data
			let inputId = $("<input>")
				.attr("type", "hidden")
				.attr("name", "id_staff")
				.val(idStaff);
			let formDelete = $("#form-delete");
			formDelete.empty().append(inputId);
			formDelete.submit();
			$("#modal-confirm-delete").modal('hide');
		});
	})
</script>
<?php $this->load->view('layout/footer'); ?>
