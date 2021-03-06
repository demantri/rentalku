<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Rental</h1>
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Transaksi</a></li>
	<li class="breadcrumb-item active" aria-current="page">Rental</li>
	</ol>
</div>

<div class="row mb-3">
	<!-- Invoice Example -->
	<div class="col-xl-12 col-lg-7 mb-4">
		<div class="card">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">List Rental</h6>
				<a class="m-0 float-right btn btn-primary btn-sm" href="#add" data-toggle="modal">Tambah Data</a>
			</div>
			<div class="table-responsive p-3">
			<table class="table align-items-center table-flush" id="table">
				<thead class="thead-light">
					<tr>
						<th>#</th>
						<th>No. Sewa</th>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Nama Customer</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($list as $key => $value) { ?>
						<tr>
							<tr><?= $no++ ?></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
						</tr>
					<?php }?>
				</tbody>
			</table>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
	<!-- Message From Kendaraan-->
</div>
<?php $this->load->view('rental/add');?>
<script>
	$(function(){
		$("#table").DataTable()
	})
</script>
<script>
	$(document).ready(function() {
		$(".show-member").hide()

		$("#member-check").change(function() {
			$(".show-member").hide()

			if($(this).prop('checked')) {
				$(".show-member").show()
				$(".show-non-member").hide()
				$("#no_identitas").prop('readonly', true)
				$("#select-customer").on('change', function() {
					var id = $(this).val()
					if (id) {
						$.ajax({
							url : "<?= base_url('Rental/find_by_id/')?>" + id, 
							method : "post", 
							success : function (e) {
								var obj = JSON.parse(e)
								$("#no_identitas").val(obj.no_identitas)
								$("#no_identitas").prop('readonly', true)

							}
						})
					} else {
						$("#no_identitas").val('')
					}
				})

			} else {
				$(".show-non-member").show()
				$("#no_identitas").val('')
				$("#no_identitas").prop('readonly', false)

			}
		});

		// $("#select-customer").on('change', function() {
		// 	var id = $(this).val()
		// 	if (id) {
		// 		$.ajax({
		// 			url : "<?= base_url('Rental/find_by_id/')?>" + id, 
		// 			method : "post", 
		// 			success : function (e) {
		// 				var obj = JSON.parse(e)
		// 				$("#no_identitas").val(obj.no_identitas)
		// 				$("#no_identitas").prop('readonly', true)

		// 			}
		// 		})
		// 	}
		// })

		$("#jenis_sewa").on('change', function() {
			var jenis = $(this).val()
			// alert(jenis)
			if (jenis) {
				$.ajax({
					url: "<?= base_url('Rental/find_jenis/')?>"+jenis, 
					method: "post", 
					data: {
						jenis : jenis
					},
					success:function(e) {
						$("#rental").html(e)
					}
				})
			} else {
				$("#sewa_harian").val(0)
			}
		})

		$("#rental").on('change', function() {
			var id = $(this).val()
			var jenis = $("#jenis_sewa").val()
			// alert(jenis)
			if (id) {
				$.ajax({
					url: "<?= base_url('Rental/find_data/')?>"+id+"/"+jenis, 
					method: "post", 
					data: {
						id : id,
						jenis : jenis,
					},
					success:function(e) {
						var obj = JSON.parse(e)
						$("#sewa_harian").val(obj.sewa_harian)
					}
				})
			} else {
				$("#sewa_harian").val(0)
			}
		})

		var val_data = $("#rental").val()
		// alert(val_data)
		
	})
</script>

