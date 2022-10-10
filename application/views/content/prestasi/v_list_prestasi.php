<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/topbar'); ?>
<body>
<div class="mt-5">
	<div class="judul-s">
		Prestasi<br>
	</div>
</div>
<div class="container">
    <div class="blog-deatails">
        <div class="blog-full">
            <div class="blog-desc">
            <?php foreach ($prestasi as $p):?>
                <br>
                <p>
                <div class="text-1"><b><?= $p->nama ?></b></div>
                <img src="<?= 'http://localhost/smasanjaya/upload/' . $p->gambar ?>" width="500" height="600">
				<div class="text-1"><?= $p->deskripsi?></div> <br>
                </p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php $this->load->view('layout/footer'); ?>
