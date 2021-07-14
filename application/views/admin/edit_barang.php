<div class="container-fluid">
	<h3><i class="fas fa-edit">EDIT DATA BARANG</i></h3>

	<?php foreach($barang as $brg) : ?>
		<form method="post" action="<?php echo base_url('admin/data_barang/update') ?>">
			<div class="form-group">
				<label>Nama barang</label>
				<input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
				<input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<select class="form-control" name="kategori" value="<?php echo $brg->kategori ?>">
					<option>Bank Sampah</option>
              		<option>Kelompok Tani</option>
              		<option>Kelompok Ternak</option>
              		<option>Kerajinan</option>
              	</select>
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
			</div>
			<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</form>

	<?php endforeach ?>
</div>