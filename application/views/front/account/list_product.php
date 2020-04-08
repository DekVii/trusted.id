<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area clearfix d-block d-lg-none" style="background: rgba(0, 0, 0, 0) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap" >
            
        </div>
    </div>
<!-- End Bradcaump area -->
<!-- Start Our Blog Area -->
    <section class="details-wrap ptb--120 bg__white">
        <div class="container">
        	<div class="row">
        		<div class="col-md-2"></div>
        		<div class="col-md-2"></div>
        		<div class="col-md-2"></div>
        		<div class="col-md-2"></div>
        		<div class="col-md-2"></div>
        		<div class="col-md-2">
        			<div class="pull-right">
        				<a href="<?php echo base_url('index.php/product/add') ?>" class="btn btn-info"><i class="fa fa-plus"></i>Tambah</a>
        			</div>
        		</div>
        	</div>
            <table class="table">
            	<thead>
            		<tr>
            			<th>Nama Product</th>
            			<th>Deskripsi Product</th>
            			<th>Harga Product</th>
            			<th>Foto</th>
            			<th>Kategori Product</th>
            			<th>Aksi</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php foreach ($this->data['barang'] as $key => $value):?>
            			<tr>
            				<td><?php echo $value->Nama_barang ?></td>
            				<td><?php echo $value->Deskripsi_barang ?></td>
            				<td><?php echo $value->Harga ?></td>
            				<td><?php echo $value->foto_product?></td>
            				<td><?php echo $value->kategori ?></td>
            				<td>
            					<a href="<?php echo base_url('index.php/product/hapus/'.$value->Id_barang) ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a> || 
            					<a href="<?php echo base_url('index.php/product/edit/'.$value->Id_barang) ?>" class="btn btn-warning"><i class="fa fa-pen"></i>Edit</a>
            				</td>
            			</tr>
            		<?php endforeach ?>
            		
            	</tbody>
            </table>
        </div>
    </section>
        <!-- /.content-wrapper -->