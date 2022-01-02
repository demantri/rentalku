<!-- Modal Logout -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="modalLabel">Tambah Kendaraan</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<form action="<?= base_url('Kendaraan/save')?>" method="post">
				<div class="modal-body">
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
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Ubah</button>
				</div>
			</form>
		</div>
	</div>
</div>
