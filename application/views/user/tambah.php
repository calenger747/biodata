<div class="container-fluid mt-3">
	<?=$this->session->flashdata('notif')?>
	<div class="row">
		<div class="col-md-12">
			<form class="form" method="POST" action="<?= base_url(); ?>User/simpan_biodata">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Data Pribadi</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Posisi Dilamar</label>
									<input type="text" name="posisi" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>No. KTP</label>
									<input type="number" name="no_ktp" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Tempat, Tanggal Lahir</label>
									<div class="row">
										<div class="col-md-6">
											<input type="text" name="tempat_lahir" class="form-control" required="">
										</div>
										<div class="col-md-6">
											<input type="date" name="tanggal_lahir" class="form-control" required="">
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select class="form-control" name="kelamin" required="">
										<option value="" hidden="">Pilih</option>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Agama</label>
									<select class="form-control" name="agama" required="">
										<option value="" hidden="">Pilih</option>
										<option value="Islam">Islam</option>
										<option value="Protestan">Protestan</option>
										<option value="Katolik">Katolik</option>
										<option value="Hindu">Hindu</option>
										<option value="Budha">Budha</option>
										<option value="Konghucu">Konghucu</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Golongan Darah</label>
									<select class="form-control" name="gol_darah" required="">
										<option value="" hidden="">Pilih</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="O">O</option>
										<option value="AB">AB</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status" required="" required="">
										<option value="" hidden="">Pilih</option>
										<option value="Belum Menikah">Belum Menikah</option>
										<option value="Menikah">Menikah</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Alamat KTP</label>
									<textarea name="alamat_ktp" class="form-control" required=""></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Alamat Tinggal</label>
									<textarea name="alamat_tinggal" class="form-control" required=""></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" value="<?= $this->session->userdata('email'); ?>" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>No. Telp</label>
									<input type="number" name="no_telp" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Kerabat Terdekat</label>
									<input type="text" name="kerabat" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>No. Telp Kerabat</label>
									<input type="text" name="telp_kerabat" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Bersedia Ditempatkan Di Seluruh Kantor Perusahaan</label>
									<select class="form-control" name="bersedia" required="">
										<option value="" hidden="">Pilih</option>
										<option value="Y">Yes</option>
										<option value="N">No</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Penghasilan Yang Diharapkan</label>
									<input type="number" name="penghasilan" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Skill</label>
							<textarea name="skill" class="form-control" required=""></textarea>
						</div>
						<div class="form-group pull-right">
							<a href="javascript:history.back()" class="btn btn-warning text-white">Kembali</a>
							<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>