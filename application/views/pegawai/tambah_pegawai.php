<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Outer Row -->
    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card o-hidden border-0 shadow-lg my-4">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-4">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Pegawai</h1><br>
                                <form action="<?= base_url('') ?>" method="post">
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="">NIK :</label>
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor NIK">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="nama">Nama :</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                                        </div>
                                    </div>


                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="">No Telepon :</label>
                                            <input type="number" class="form-control" id="" name="" placeholder="Nomor Telepon">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="">Alamat :</label><br>
                                            <textarea class="form-control" name="" id="" cols="10" rows="10" placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="tglLahir">Status Kerja:</label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="aktif" id="aktif" value="aktif">
                                                <label class="form-check-label" for="inlineRadio1">Aktif</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="keluar" id="keluar" value="keluar">
                                                <label class="form-check-label" for="inlineRadio2">Keluar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Jabatan :</label>
                                                <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
                                                    <option value="Kepala Desa">Kepala Desa</option>
                                                    <option value="Wakil Kepala Desa">Wakil Kepala Desa</option>
                                                    <option value="Bendahara">Bendahara</option>
                                                    <option value="Sekretaris">Sekretarisr</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <button type="submit" class="btn btn-primary" value="simpan">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-save"></i>
                                                </span><b>Simpan</b>
                                            </button>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button type="submit" class="btn btn-danger" value="simpan">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-window-close"></i>
                                                </span> <b>Batal</b>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->