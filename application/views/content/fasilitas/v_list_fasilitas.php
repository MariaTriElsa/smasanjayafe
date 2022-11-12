<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/topbar'); ?>
<body>
<div class="mt-5">
	<div class="judul">
		Fasilitas
	</div>
</div>
<div id="screenshot" class="Screenshot">
	<div id="blog" class="blog">
		<div class="container">
			<div class="row">
			</div>
			<div class="row">
				<?php foreach ($fasilitas as $f): ?>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="blog-box">
									<div style="text-align: center;">
										<figure>
											<a href="<?= 'http://localhost/smasanjaya/upload/' . $f->gambar_fasilitas?>" download="fff">
												<img src="<?= 'http://localhost/smasanjaya/upload/' . $f->gambar_fasilitas?>" alt="#"
													 class="rounded img-bordered img-fluid">
											</a>
										</figure>
									</div>
									<div class="travel">
										<div class="text-center"><h2><?= $f->nama_fasilitas ?></h2></div>
										<hr>
										<div class="text-justify"><?= $f->deskripsi_fasilitas ?></div>
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

</body>

</html>
<?php $this->load->view('layout/footer'); ?>
