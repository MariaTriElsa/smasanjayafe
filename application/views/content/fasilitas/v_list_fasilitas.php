<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/topbar'); ?>
<body>
<div class="mt-5">
	<div class="judul-s">
		Fasilitas <br>
	</div>
</div>
<div class="container">
    <div class="blog-deatails">
        <div class="blog-full">
            <div class="blog-desc">
            <?php foreach ($fasilitas as $f):?>
                <br>
                <p>
                <div class="text-1"><b><?= $f->nama_fasilitas ?></b></div>
                <img src="<?= 'http://localhost/smasanjaya/upload/' . $f->gambar_fasilitas ?>" width="500" height="600">
				<div class="text-1"><?= $f->deskripsi_fasilitas ?></div> <br>
                </p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php $this->load->view('layout/footer'); ?>
