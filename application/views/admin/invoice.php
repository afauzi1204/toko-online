<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>
	<table class="table table-bodered table-hover table-striped">
		<tr align="center">
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv): ?>
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
				<td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus?')"><?php echo anchor('admin/invoice/hapus/'.$inv->id,'<div class="btn btn-sm btn-danger">Hapus</div>') ?></td>
			</tr>

		<?php endforeach; ?>
	</table>
</div>