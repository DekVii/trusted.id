<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area"
	style="background: rgba(0, 0, 0, 0) url(<?= base_url('assets/images/bg/7.jpg')?>) no-repeat scroll center center / cover ;">
	<div class="ht__bradcaump__wrap">

	</div>
</div>
<!-- End Bradcaump area -->
<!-- Content Wrapper. Contains page content -->
<section class="details-wrap ptb--120 bg__white">
	<div class="container">
		<div class="content-wrapper" style="min-height: 1589.56px;">
			<div class="card">
				<div class="card-header">
					<h2>Tambah Data Barang</h2>
				</div>
				<div class="card-body">
					<form action="<?php echo base_url('index.php/a_product/add_process') ?>" method="post"
						enctype="multipart/form">
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" name="namabarang" required="" placeholder="Nama Barang"
								class="form-group">
						</div>
						<div class="form-group">
							<label>Deskripsi Barang</label>
							<textarea name="deskripsi" placeholder="Deskripsi Barang" class="form-group"></textarea>
						</div>
						<div class="form-group">
							<label>Harga Barang</label>
							<input type="text" name="hargabarang" required="" placeholder="Harga Barang"
								class="form-group">
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input type="number" name="stock" required="" placeholder="Stock" class="form-group">
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<input type="text" name="kategori" required="" placeholder="Kategori" class="form-group">
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" name="foto" class="form-group">
						</div>
						<div class="form-group">
							<button class="btn btn-info">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content-wrapper -->
