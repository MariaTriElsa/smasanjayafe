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
                    <span style="font: size 22px;"> <strong>
                        A. Sejarah 
                    </strong></span>
                </p>
                <p>
                <?php foreach ($aboutus as $a): ?>
                    <span style="font-size: 18px;">
                    <div class="text-1"> <?= $a->sejarah?></div>
                </span>
                <?php endforeach; ?>
                </p>
                <p>
                    <span style="font: size 22px;"> <strong>
                        B. Visi
                    </strong></span>
                </p>
                <p>
                <?php foreach ($aboutus as $a): ?>
                    <span style="font-size: 18px;">
                    <div class="text-1"> <?= $a->visi?></div>
                </span>
                <?php endforeach; ?>
                </p>
                <p>
                    <span style="font: size 22px;"> <strong>
                        B. Misi
                    </strong></span>
                </p>
                <p>
                <?php foreach ($aboutus as $a): ?>
                    <span style="font-size: 18px;">
                    <div class="text-1"> <?= $a->misi?></div>
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
