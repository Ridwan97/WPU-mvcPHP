<div class="container mt-5">
	<h1>Daftar Mahasiswa</h1>

	<div class="row">
		<div class="col-6">
			<h3>Mahasiswa</h3>
			<ul class="list-group">
				<?php 	foreach($data['mhs'] as $mhs  ): ?>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<?php echo $mhs['nama'] ?>
					<a href="<?php echo BASEURL ?>/mahasiswa/detail/<?php echo 	$mhs['id'] ?>" class="badge bg-primary">detail</a>
				</li>
				<?php 	endforeach; ?>			
			</ul>
		</div>
	</div>
</div>