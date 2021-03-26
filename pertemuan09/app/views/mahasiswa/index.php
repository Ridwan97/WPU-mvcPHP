 <div class="container mt-3">	
	<div class="row">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">			Tambah Data Mahasiswa
		</button>
		<div class="col-6">
			<h3>Daftar Mahasiswa</h3>
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

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>	
			<div class="modal-body">
				<form action="<?php echo BASEURL ;?>/mahasiswa/tambah" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>

					<div class="form-group">
						<label for="npm">npm</label>
						<input type="number" class="form-control" id="npm" name="npm">
					</div>

					<div class="form-group">
						<label for="email">email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>

					<div class="form-group">
						<label for="jurusan">jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
							<option value="Sistem Informasi">Sistem Informasi</option>
							<option value="Informatika">Informatika</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah data</button>
				</form>
			</div>
		</div>
	</div>
</div>