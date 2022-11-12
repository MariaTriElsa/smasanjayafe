<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<body>
<?php $this->load->view('layout/topbar'); ?>
<div class="mt-5">
	<div class="judul-s">
		Beasiswa
	</div>
</div>
<br>
<div class="container mb-3">
	<div id="screenshot" class="Screenshot">
		<div class="content">
			<div class="card">
				<div class="card-body">
					<?php
					$no = 1;
					foreach ($beasiswa as $b) {
						?>
						<div class="text-1"><b><?= $b->nama ?></b></div>
						<br>
						<div class="text"> <?= $b->deskripsi ?></div>
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
	</div>
</div>
</body>
<?php $this->load->view('layout/footer'); ?>
</html>

