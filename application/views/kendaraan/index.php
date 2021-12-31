<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Kendaraan</h1>
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Data Master</a></li>
	<li class="breadcrumb-item active" aria-current="page">Kendaraan</li>
	</ol>
</div>

<div class="row mb-3">
	<!-- Invoice Example -->
	<div class="col-xl-8 col-lg-7 mb-4">
		<div class="card">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">List Kendaraan</h6>
				<a class="m-0 float-right"></a>
			</div>
			<div class="table-responsive p-3">
			<table class="table align-items-center table-flush" id="table">
				<thead class="thead-light">
				<tr>
					<th>#</th>
					<th>Jenis Kendaraan</th>
					<th>Deskripsi</th>
					<th>No. Polisi</th>
					<th>Warna</th>
					<th>Sewa Harian</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php 
				$no = 1;
				foreach ($list as $key => $value) { ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= ucwords($value->jenis) ?></td>
					<td><?= $value->desc ?></td>
					<td><?= $value->no_polisi ?></td>
					<td><?= $value->warna ?></td>
					<td><?= $value->sewa_harian ?></td>
					<td><?= $value->status == '1' ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Tidak aktif</span>'; ?></td>
					<td>
						<a href="#edit" data-toggle="modal" data-id="<?= $value->id ?>" data-desc="<?= $value->desc ?>" data-status="<?= $value->status ?>" class="btn btn-sm btn-warning btn_edit">Edit</a>
					</td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
	<!-- Message From Kendaraan-->
	<div class="card col-xl-4 col-md-5">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Form Kendaraan</h6>
		</div>
		<div class="card-body">
			<form action="<?= base_url('Kendaraan/save')?>" method="POST">
			<div class="form-group row">
				<label for="desc" class="col-sm-3 col-form-label">Deskripsi</label>
				<div class="col-sm-9">
					<textarea name="desc" id="desc" cols="10" rows="5" class="form-control" placeholder="Deskripsi" required></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="jenis_kendaraan" class="col-sm-3 col-form-label">Jenis Kendaraan</label>
				<div class="col-sm-9">
					<select name="jenis_kendaraan" id="jenis_kendaraan" class="form-control">
						<option value="">-</option>
						<option value="motor">Motor</option>
						<option value="mobil">Mobil</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="no_polisi" class="col-sm-3 col-form-label">No. Polisi</label>
				<div class="col-sm-9">
				<input type="text" name="no_polisi" class="form-control" id="no_polisi" placeholder="No. Polisi" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="warna" class="col-sm-3 col-form-label">Warna</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="warna" id="warna" placeholder="Warna" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="sewa_harian" class="col-sm-3 col-form-label">Sewa Harian</label>
				<div class="col-sm-9">
					<input type="text" name="sewa_harian" class="form-control" id="sewa_harian" placeholder="Sewa Harian" required>
				</div>
			</div>
			<hr>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('Kendaraan/edit');?>
<script>
	$(function(){
		$("#table").DataTable()
	})
</script>
<script>
	$(document).on("click", ".btn_edit", function () {
		var id = $(this).data('id')
		var nama = $(this).data('nama')
		var alamat = $(this).data('alamat')
		var no_telp = $(this).data('no_telp')
		var status = $(this).data('status')

		$(".modal-body #id").val( id );
		$(".modal-body #nama").val( nama );
		$(".modal-body #alamat").val( alamat );
		$(".modal-body #no_telp").val( no_telp );
		$(".modal-body #status").val( status );
	});
</script>
