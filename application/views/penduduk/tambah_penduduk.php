<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Outer Row -->
    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card o-hidden border-0 shadow-lg my-4">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-4">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Penduduk</h1><br>
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
                                        <div class="form-group col-md-6">
                                            <label for="Tempat">Tempat Lahir :</label>
                                            <input type="text" class="form-control" id="Tempat Lahir" name="tmpt_lahir" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tglLahir">Tanggal Lahir :</label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="tglLahir">Jenis Kelamin :</label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jk" id="jkL" value="Laki-Laki">
                                                <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jk" id="jkP" value="Perempuan">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Agama :</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Agama">
                                        </div>

                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="">Pekerjaan :</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Pekerjaan">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">No Telepon :</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Nomor Telepon">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="">RT:</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Nomor RT">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">RW:</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Nomor RW">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="">Desa:</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Desa">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Kecamatan:</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">

                                        <label for="">Alamat :</label><br>
                                        <textarea class="form-control" name="" id="" cols="40" rows="10"></textarea>
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