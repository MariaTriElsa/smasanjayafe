<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header'); ?>
<body>
<?php $this->load->view('layout/topbar'); ?>
<div class="mt-5">
	<div class="judul-s">
		Unduh Berkas
	</div>
</div>
<div id="screenshot" class="Screenshot">
<div class="content">
    <div class="card">
        <div class="card-body">
                    <?php
                    $no = 1;
                    foreach ($berkas as $b) {
                    ?>
                            <div class="text-1"> <?= $b->nama_berkas?></div>
							<br>
								<a class="btn btn-sm btn-primary text-white"
								   href="<?= 'http://localhost/smasanjaya/upload/' . $b->file_berkas ?>" download="<?= $b->nama_berkas ?>">
									<i class="fa fa-download"></i>
								</a>
						<a href="<?= 'http://localhost/smasanjaya/upload/' . $b->file_berkas ?>" download="<?= $b->nama_berkas ?>">
							Download</i>
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
<script>
    $(function() {
        let idFasilitas = 0
        $(".btn-delete-berkas").on("click", function() {
            idFasilitas = $(this).data("id");
            console.log(idFasilitas);
            $("#modal-confirm-delete").modal('show');
        });
        $("#btn-delete").on("click", function() {
            //panggil url untuk hapus data
            let inputId = $("<input>")
                .attr("type", "hidden")
                .attr("name", "id_berkas")
                .val(idFasilitas);
            let formDelete = $("#form-delete");
            formDelete.empty().append(inputId);
            formDelete.submit();
            $("#modal-confirm-delete").modal('hide');
        });
    })
</script>

