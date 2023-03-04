<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-2">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah data</button>
		</div>
	</div>

	<div class="row mb-2">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group mb-3">
					<input value="<?= $data['cariKata']; ?>" type="text" class="form-control" placeholder="Cari mahasiswa ..." aria-describedby="button-addon2" name="keyword" autocomplete="off" id="keyword">
					<div class="input-group-append">
						<button  class="btn btn-primary" type="submit" id="tombolCari" id="button-addon2">Cari</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>

  <h3>Data mahasiswa</h3>

  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $no = 0; foreach ($data['mhs'] as $mhs ) : ?>
      <tr>
        <th scope="row"><?php $no++; echo $no; ?></th>
        <td><?=$mhs['nama']; ?></td>
        <td><?=$mhs['nim']; ?></td>
        <td>
          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1 p-1">Detail</a>
          <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1 p-1" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
          <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 p-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah data mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
        	<input type="hidden" name="id" id="id">
        	<div class="form-group">
        		<label for="nama">Nama</label>
        		<input type="text" class="form-control" id="nama" placeholder="Jahidin" name="nama">
        	</div>
        	<div class="form-group">
        		<label for="nim">Nim</label>
        		<input type="number" class="form-control" id="nim" placeholder="5301516010" name="nim">
        	</div>
        	<div class="form-group">
        		<label for="email">Email</label>
        		<input type="email" class="form-control" id="email" placeholder="Jah@tahoo.com" name="email">
        	</div>
        	<div class="form-group">
        		<label for="jurusan">Jurusan</label>
        		<select class="form-control" id="jurusan" name="jurusan">
        			<option value="Teknik Elektro">Teknik Elektro</option>
        			<option value="Teknik Mesin">Teknik Mesin</option>
        			<option value="Teknik Informatika">Teknik Informatika</option>
        			<option value="Teknik Kimia">Teknik Kimia</option>
        		</select>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
    	</form>
      </div>
    </div>
  </div>
</div>