<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/topbar'); ?>
<body>
<div class="mt-5">
	<div class="judul">
		Ekstrakurikuler
	</div>
</div>
<div id="screenshot" class="Screenshot">
	<div id="blog" class="blog">
		<div class="container">
			<div class="row">
			</div>
			<div class="row">
				<?php foreach ($ekstrakurikuler as $e): ?>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="blog-box">
									<div style="text-align: center;">
										<figure>
											<a href="<?= 'http://localhost/smasanjaya/upload/' . $e->gambar ?>" download="fff">
												<img src="<?= 'http://localhost/smasanjaya/upload/' . $e->gambar ?>" alt="#"
													 class="rounded img-bordered img-fluid">
											</a>
										</figure>
									</div>
									<div class="travel">
										<div class="text-center"><h2><?= $e->nama ?></h2></div>
										<hr>
										<div class="text-justify"><?= $e->deskripsi ?></div>
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
