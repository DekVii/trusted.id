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
                <div class="col-md-6  ml-auto mr-auto" >
                    <form role="form" method="GET" action="<?= base_url('main/proses_edit')?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="InputUsername">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="InputNama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="InputKontak">Kontak</label>
                                <input type="text" class="form-control" name="Kontak" id="Kontak">
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="InputJK">Jenis Kelamin</label>
                                <select id="InputJK" class="form-control">
                                    <option selected></option>
                                    <option>Perempuan</option>
                                    <option>Laki-laki</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="LevelUser">Kategori User</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user" id="level_user" value="user">
                                    <label class="form-check-label" for="user">
                                       User
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="level_user" id="level_user" value="admin" disabled>
                                    <label class="form-check-label" for="admin">
                                        Admin
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto User</label>
                                <div class="input-group">
                                        <input type="file" class="custom-file-input" id="foto_produk" name="foto_produk">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        <!-- /.card-body -->
                            <button type="submit" class="btn btn-outline-secondary">Simpan Data</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
<!-- End Our Blog Area -->  