<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>

<body>
<?php $this->load->view('layout/topbar'); ?>


<section class="slider_section>">
	<div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="first-slide" src="<?= base_url('upload/main.jpg') ?>" alt="First slide">
				<div class="container">
					<div class="carousel-caption relative">
						<h1>SMA Sanjaya XIV Nanggulan</h1>
					</div>
				</div>
			</div>
			<?php
			$no = 1;
			foreach ($fasilitas as $f) {
				?>
				<div class="carousel-item">
					<img class="second-slide"
						 src="http://localhost/smasanjaya/upload/<?php echo $f->gambar_fasilitas?>"
						 alt="Second slide" >
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
<div class="mt-5">
	<div class="judul-s">
		Testimoni
	</div>
</div>
<section class="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="customers-testimonials" class="owl-carousel">
					<?php foreach ($testimoni as $t): ?>
						<div class="item">
							<div class="shadow-effect">
								<img class="img-circle" src="<?= 'http://localhost/smasanjaya/upload/' . $t->gambar ?>" alt="">
								<p><?= $t->testimoni ?></p>
							</div>
							<div class="testimonial-name"><?= $t->nama ?></div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="mt-5">
	<div class="judul-s">
		Berita Terbaru
	</div>
</div>
<div class="container-fluid">
	<div class="col-12">
		<div class="row">
			<div id="screenshot" class="Screenshot">
				<div id="blog" class="blog">
					<div class="container">
						<div class="row">
						</div>
						<div class="row">
							<?php foreach ($berita as $s): ?>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="card">
										<div class="card-body">
											<div class="blog-box">
												<div style="text-align: center;">
													<figure>
														<a href="<?= 'http://localhost/smasanjaya/upload/' . $s->gambar_berita ?>"
														   download="fff">
															<img src="<?= 'http://localhost/smasanjaya/upload/' . $s->gambar_berita ?>"
																 alt="#"
																 class="rounded img-bordered img-fluid">
														</a>
														<span class="rounded"><?= date("d F Y", strtotime($s->tanggal))?></span>
													</figure>
												</div>
												<div class="travel">
													<div class="text-center"><h2><?= $s->nama_berita ?></h2></div>
													<hr>
													<div class="text-justify"><?= $s->deskripsi_berita ?></div>
												</div>
											</div>
										</div>
									</div>
									<br>
								</div>

							<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mt-5">
	<div class="judul">
		Jurusan
	</div>
</div>
<div id="screenshot" class="Screenshot">
	<div id="blog" class="blog">
		<div class="container">
			<div class="row">
			</div>
			<div class="row">
				<?php foreach ($jurusan as $j): ?>
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="text-1"><?= $j->nama_jurusan ?></div>
								<hr>
								<div><?= $j->deskripsi_jurusan ?></div>
								<hr>
								Keunggulan:
								<div><?= $j->keunggulan_jurusan ?></div>
							</div>
						</div>
						<br>
					</div>

				<?php endforeach; ?>

			</div>
		</div>
	</div>
</div>

</body>
<?php $this->load->view('layout/footer'); ?>
</html>

