<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<body>
<?php $this->load->view('layout/topbar'); ?>
<div class="mt-5">
	<div class="judul-s">
		Profil
	</div>
</div><br>
<div class="container">
    <div class="blog-deatails">
        <div class="blog-full">
            <div class="blog-desc">
                <p>
                    <div class="text-1"><b>A. Sejarah</b> </div>
                </p>
                <p>
                <?php foreach ($aboutus as $a): ?>
                    <div class="text"><?= $a->sejarah?></div>
                </span>
                <?php endforeach; ?>
                </p><br>
                <p>
                <div class="text-1"><b>B.Visi</b> </div>
                </p>
                <p>
                <?php foreach ($aboutus as $a): ?>
                    <!-- <span style="font-size: 18px;"> -->
                    <div class="text"> <?= $a->visi?></div>
                </span>
                <?php endforeach; ?>
                </p><br>
                <p>
                <div class="text-1"><b>C. Misi</b> </div>
                </p>
                <p>
                <?php foreach ($aboutus as $a): ?>
                    <span style="font-size: 18px;">
                    <div class="text"> <?= $a->misi?></div>
                </span>
                <?php endforeach; ?>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

<?php $this->load->view('layout/footer'); ?>
