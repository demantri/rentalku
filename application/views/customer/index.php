<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Customer</h1>
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Data Master</a></li>
	<li class="breadcrumb-item active" aria-current="page">Customer</li>
	</ol>
</div>

<div class="row mb-3">
	<!-- Invoice Example -->
	<div class="col-xl-7 col-lg-7 mb-4">
		<div class="card">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">List Customer</h6>
				<a class="m-0 float-right"></a>
			</div>
			<div class="table-responsive">
			<table class="table align-items-center table-flush">
				<thead class="thead-light">
				<tr>
					<th>#</th>
					<th>Nama Lengkap</th>
					<th>Alamat</th>
					<th>No. Telp</th>
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
					<td><?= $value->nama ?></td>
					<td><?= $value->alamat ?></td>
					<td><?= $value->no_telp ?></td>
					<td><?= $value->status == '1' ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Tidak aktif</span>'; ?></td>
					<td>
						<a href="#edit" data-toggle="modal" data-id="<?= $value->id ?>" data-nama="<?= $value->nama ?>" data-alamat="<?= $value->alamat ?>" data-no_telp="<?= $value->no_telp ?>" data-status="<?= $value->status ?>" class="btn btn-sm btn-warning btn_edit">Edit</a>
						<!-- <a href="" class="btn btn-sm btn-primary">Detail</a> -->
					</td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
	<!-- Message From Customer-->
	<div class="card col-xl-5 col-md-5">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Form Customer</h6>
		</div>
		<div class="card-body">
			<form action="<?= base_url('Customer/save')?>" method="POST">
			<div class="form-group row">
				<label for="no_identitas" class="col-sm-3 col-form-label">No. Identitas</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="no_identitas" id="no_identitas" placeholder="No. Identitas" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="jenis_identitas" class="col-sm-3 col-form-label">Jenis Identitas</label>
				<div class="col-sm-9">
					<!-- <input type="text" name="jenis_identitas" class="form-control" id="jenis_identitas" placeholder="Jenis Identitas" required> -->
					<select name="jenis_identitas" id="jenis_identitas" class="form-control">
						<option value="">-</option>
						<option value="ktp">KTP</option>
						<option value="sim">SIM</option>
						<option value="ktp">KTM</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
				<div class="col-sm-9">
				<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
				<div class="col-sm-9">
					<textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control" placeholder="Alamat Domisili" required></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="no_telp" class="col-sm-3 col-form-label">No. Telp</label>
				<div class="col-sm-9">
					<input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="No. Telp" required>
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
<?php $this->load->view('customer/edit');?>
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
