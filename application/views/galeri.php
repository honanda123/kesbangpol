<br>
<br>
<br>
<br>
<section id="gallery" class="gallery">
	<div class="container">

		<div class="section-title">
			<h2>Gallery</h2>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row no-gutters">
			<?php foreach ($tbl_kegiatan as $key => $value) { ?>

				<div class="col-12 col-md-4">
					<div class="gallery-item">
						<a href="<?php echo base_url(); ?>assets/img/kegiatan/<?php echo $value->foto_kegiatan; ?>" class="venobox img-fluid" data-gall="gallery-item" style="width: 100; height: 100;">
							<img src="<?php echo base_url(); ?>assets/img/kegiatan/<?php echo $value->foto_kegiatan; ?>" class="img-fluid img-thumbnail"></a>
							<div class="caption text-center"><?php echo $value->nama_kegiatan; ?></div>
							<hr>
						</a>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>