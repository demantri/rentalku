<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Kendaraan</h1>
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Data Master</a></li>
	<li class="breadcrumb-item active" aria-current="page">Kendaraan</li>
	</ol>
</div>

<div class="row mb-3">
	<!-- Invoice Example -->
	<div class="col-xl-12 col-lg-7 mb-4">
		<div class="card">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">List Kendaraan</h6>
				<a class="m-0 float-right btn btn-primary btn-sm" href="#add" data-toggle="modal">Tambah Data</a>
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
						<a href="#edit" data-toggle="modal" data-id="<?= $value->id ?>" class="btn btn-sm btn-warning btn_edit">Edit</a>
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
</div>
<?php $this->load->view('Kendaraan/add');?>
<?php $this->load->view('Kendaraan/edit');?>
<script>
	$(function(){
		$("#table").DataTable()
	})
</script>
<script>
	$(document).on("click", ".btn_edit", function () {
		var id = $(this).data('id')

		$.ajax({
			url : "<?= base_url('Kendaraan/find_by_id/')?>" + id, 
			method : "POST", 
			success : function (e) {
				var obj = JSON.parse(e)
				// console.log(obj.id)
				$(".modal-body #id").val( obj.id );
				$(".modal-body #desc").val( obj.desc );
				$(".modal-body #jenis_kendaraan").val( obj.jenis );
				$(".modal-body #no_polisi").val( obj.no_polisi );
				$(".modal-body #warna").val( obj.warna );
				$(".modal-body #sewa_harian").val( obj.sewa_harian );
			}
		})
	});
</script>
