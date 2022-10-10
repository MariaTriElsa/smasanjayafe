<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/topbar'); ?>
<body>
<div class="mt-5">
	<div class="judul-s">
		Testimoni
	</div>
</div>
<div id="screenshot" class="Screenshot">
	<div id="blog" class="blog">
		<div class="container">
			<div class="row">
			</div>
			<div class="row">
				<?php foreach ($testimoni as $t): ?>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="blog-box">
									<div style="text-align: center;">
										<figure>
												<img src="<?= 'http://localhost/smasanjaya/upload/' . $t->gambar ?>" alt="#"
													 class="rounded img-bordered img-fluid">
											</a>
										</figure>
									</div>
									<div class="travel">
										<div class="text-center"><h4><?= $t->nama ?></h4></div>
										<hr>
										<div class="text-center"><?= $t->peran ?></div>
                                        <hr>
                                        <div class="text-center"><h5><?= $t->testimoni ?></h5></div>
										
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
