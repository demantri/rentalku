<!-- Modal Logout -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="modalLabel">Tambah Kamera</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<form action="<?= base_url('Kamera/save')?>" method="post">
				<div class="modal-body">
					<div class="form-group row">
						<label for="desc" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea name="desc" id="desc" cols="10" rows="5" class="form-control" placeholder="Deskripsi" required></textarea>
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
