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
                                <input type="text" class="form-control" name="username" id="username" value="<?= $data_user->username ?>">
                            </div>
                            <div class="form-group">
                                <label for="InputNama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data_user->nama ?>">
                            </div>
                            <div class="form-group">
                                <label for="InputKontak">Kontak</label>
                                <input type="text" class="form-control" name="Kontak" id="Kontak" value="<?= $data_user->kontak ?>">
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" value="<?= $data_user->alamat ?>"></textarea>
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
                                <label for="foto">Foto User</label>
                                <div class="input-group">
                                        <input type="file" class="custom-file-input" id="foto_user" name="foto_user" value="<?= $data_user->username ?>">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        <!-- /.card-body -->
                        
                        <div class="card-footer">
                            <input type="hidden" name="id" id="id" value="<?= $data_user->Id ?>" />
                            <button type="submit" class="btn btn-outline-secondary">Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
<!-- End Our Blog Area -->  