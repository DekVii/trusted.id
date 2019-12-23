<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?= base_url('assets/images/bg/7.jpg')?>) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            
        </div>
    </div>
<!-- End Bradcaump area -->
<!-- Start Our Blog Area -->
    <section class="details-wrap ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <form role="form" method="POST"action="<?= base_url('Account/proses_edit')?>" enctype="multipart/form-data">
                        <div class="card-body">
                                
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username Pengguna</label>
                                <input type="text" class="form-control" name="nama_produk" id="nama_produk"
                                placeholder="Masukkan Nama Produk">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Stok Produk</label>
                                <input type="number" class="form-control" name="jumlah_perubahan" id="jumlah_perubahan"
                                placeholder="Masukkan Stok Awal">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto Produk</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto_produk" name="foto_produk">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 col-lg-4  smt-30 xmt-40">
                    
                </div>
            </div>
        </div>
    </section>
<!-- End Our Blog Area -->  