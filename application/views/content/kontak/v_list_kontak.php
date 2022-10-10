<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/topbar'); ?>
<body>
<div class="mt-5">
	<div class="judul">
		Kontak
	</div>
</div>
<div id="screenshot" class="Screenshot">
	<div id="blog" class="blog">
		<div class="container">
			<div class="row">
			</div>
			<div class="row">
				<?php
				foreach ($kontak as $k) {
				?>
					<div class="text-1 mr-1">Kontak : </div>
					<br>
					<div class="text-1"><?= $k->kontak ?></div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

</body>

</html>
<?php $this->load->view('layout/footer'); ?>
