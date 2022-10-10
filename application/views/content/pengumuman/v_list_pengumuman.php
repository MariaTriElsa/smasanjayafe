<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<body>
<?php $this->load->view('layout/topbar'); ?>
<div class="mt-5">
	<div class="judul-s">
		Pengumuman
	</div>
</div>
<div id="screenshot" class="Screenshot">
<div class="content">
    <div class="card">
        <div class="card-body">
                    <?php
                    $no = 1;
                    foreach ($pengumuman as $p) {
                    ?>
						<div class="text-1"> <?= $p->nama?></div>
						<hr>
						<div> <?= $p->deskripsi?></div>
						<hr>
						<span class="rounded"><?= date("d F Y", strtotime($p->tanggal))?></span>
							<br>
								<a class="btn btn-sm btn-primary text-white"
								   href="<?= 'http://localhost/smasanjaya/upload/' . $p->file ?>" download="<?= $p->nama ?>">
									<i class="fa fa-download"></i>
								</a>
						<a class="text-dark" href="<?= 'http://localhost/smasanjaya/upload/' . $p->file ?>" download="<?= $p->nama ?>">
							Download
						</a>
						<hr>
						<br>

                    <?php
                    }
                    ?>
        </div>
	<div class="card-footer">
	</div>
    </div>
</div>
</body>
<?php $this->load->view('layout/footer');?>
</html>

