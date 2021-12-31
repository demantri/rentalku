<!-- Modal Logout -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="modalLabel">Edit Customer</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<form action="<?= base_url('Customer/ubah')?>" method="post">
				<div class="modal-body">
					<input type="hidden" name="id" id="id" value="">
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
					<div class="form-group row">
						<label for="no_telp" class="col-sm-3 col-form-label">Status</label>
						<div class="col-sm-9">
							<select name="status" id="status" class="form-control" required>
								<option value="">-</option>
								<option value="1">Aktif</option>
								<option value="0">Tidak aktif</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Ubah</button>
				</div>
			</form>
		</div>
	</div>
</div>
