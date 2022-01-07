<div class="modal fade bd-example-modal-lg" id="add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="modalLabel">Tambah Rental</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<form action="" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group row">
								<label for="no_sewa" class="col-sm-5 col-form-label">No. Sewa</label>
								<div class="col-sm-7">
								<input type="text" name="no_sewa" class="form-control" id="no_sewa" placeholder="No. Polisi" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="tanggal" class="col-sm-5 col-form-label">Tanggal Sewa</label>
								<div class="col-sm-7">
								<input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= date('Y-m-d')?>" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="member" class="col-sm-5 col-form-label">Member</label>
								<div class="col-sm-7">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input is_check" id="member-check" value="">
										<label class="custom-control-label" for="member-check" style="font-size: 12px;">Check is member</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="customer" class="col-sm-5 col-form-label">Customer</label>
								<div class="col-sm-7">
									<div class="show-member">
										<select name="customer" id="select-customer" class="form-control" required>
											<option value="">Pilih</option>
											<?php foreach ($customer as $key => $value) { ?>
											<option value="<?= $value->id?>"><?= $value->nama?></option>
											<?php } ?>
										</select>
									</div>
									<div class="show-non-member">
										<input type="text" name="customer" class="form-control" id="customer" value="" required>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="no_identitas" class="col-sm-5 col-form-label">No. Identitas</label>
								<div class="col-sm-7">
									<input type="text" name="no_identitas" class="form-control" id="no_identitas" value="" required>
								</div>
							</div>
							<hr>
						</div>
						<!-- kanan -->
						<div class="col-sm-6">
							<div class="form-group row">
								<label for="jenis_sewa" class="col-sm-5 col-form-label">Jenis Sewa</label>
								<div class="col-sm-7">
									<select name="jenis_sewa" id="jenis_sewa" class="form-control">
										<option value="">-</option>
										<option value="kamera">Kamera</option>
										<option value="kendaraan">Kendaraan</option>
									</select>
								</div>
							</div>
							<div class="detail">
							<div class="form-group row">
								<label for="rental" class="col-sm-5 col-form-label">Data Rental</label>
								<div class="col-sm-7">
									<select name="rental" id="rental" class="form-control">
										
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="rental" class="col-sm-5 col-form-label">Sewa Harian</label>
								<div class="col-sm-7">
									<input type="text" name="sewa_harian" id="sewa_harian" class="form-control" readonly>
								</div>
							</div>
							</div>
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
