<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>

<body>
<?php $this->load->view('layout/topbar'); ?>
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
<div id="blog" class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Berita Terbaru</h2>
                     <!-- <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>  -->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
				  <?php foreach ($berita as $s): ?>
                     <figure><img src="<?= 'http://localhost/smasanjaya/upload/' . $s->gambar_berita ?>"alt="#">
                        <span  class="rounded"><?= date("d F Y", strtotime($s->tanggal)) ?></span>
                     </figure>
                     <div class="travel">
                        <span>Post  By :  Admin</span> 
                     </div>
                     <h2><?= $s->nama_berita ?></h2>
                     <p class="text-justify"><?= $s->deskripsi_berita ?></p>
                  </div>
				  <?php endforeach; ?>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image.jpg" alt="#"/>
                        <span>12 August 2019</span>
                     </figure>
                     <div class="travel">
                        <span>Post  By :  Travel  Agency</span> 
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                     </div>
                     <h3>London Amazing Tour</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image.jpg" alt="#"/>
                        <span>14 August 2019</span>
                     </figure>
                     <div class="travel">
                        <span>Post  By :  Travel  Agency</span> 
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                     </div>
                     <h3>London Amazing Tour</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image0.jpg" alt="#"/>
                        <span>15 August 2019</span>
                     </figure>
                     <div class="travel">
                        <span>Post  By :  Travel  Agency</span> 
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                     </div>
                     <h3>London Amazing Tour</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
														<span class="rounded"><?= date("d F Y", strtotime($s->tanggal)) ?></span>
													</figure>
												</div>
												<div class="travel">
													<div class="text-center"><h2><?= $s->nama_berita ?></h2></div>
													<hr>
													<div class="text-justify text-limit"><?= $s->deskripsi_berita ?></div>
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
