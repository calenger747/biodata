<div class="container-fluid mt-3">
	<?=$this->session->flashdata('notif')?>
	<div class="row">
		<div class="col-md-12">
			<form class="form" method="POST" action="<?= base_url(); ?>User/simpan_pekerjaan">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Tambah Pendidikan</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama Perusahaan</label>
									<input type="text" name="nama" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Posisi</label>
									<input type="text" name="posisi" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Pendapatan</label>
									<input type="number" name="pendapatan" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Tahun</label>
									<input type="number" name="tahun" class="form-control" placeholder="YYYY" oninput="checkNumberFieldLength(this);">
								</div>
							</div>
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
<script type="text/javascript">
	function checkNumberFieldLength(elem){
    if (elem.value.length > 4) {
        elem.value = elem.value.slice(0,4); 
    }
}
</script>