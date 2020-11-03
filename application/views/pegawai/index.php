<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <br> <br>
    <a href="<?= base_url('pegawai/tambah/'); ?>" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text"><b>Tambahkan Pegawai</b></span>
    </a>
    <br> <br>
    <?= $this->session->flashdata('message'); ?>



    <table class="table">
        <thead class="thead-dark">
            <tr align="center">
                <th scope="col" rowspan="2">No</th>
                <th scope="col" rowspan="2">NIK</th>
                <th scope="col" rowspan="2">Nama</th>
                <th scope="col" rowspan="2">No Telp</th>
                <th scope="col" rowspan="2">Alamat</th>
                <th scope="col" rowspan="2">Status kerja</th>
                <th scope="col" rowspan="2">Jabatan</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pegawi as $p) { ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $p['nik_pegawai']; ?></td>
                    <td><?= $p['nm_pegawai'] ?></td>
                    <td><?= $p['no_hp'] ?></td>
                    <td><?= $p['alamat'] ?></td>
                    <td><?= $p['stts_kerja'] ?></td>
                    <td><?= $p['jabatan'] ?></td>

                    <td><button type="button" class="btn btn-success editpegawi" data-pegawi="<?= $p['nik_pegawai']; ?>" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit"></i></button></td>
                    <td><a href="<?= base_url('pegawai/aksi_hapus/' . $p['nik_pegawai']); ?>"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a></td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('pegawai/aksi_edit') ?>" method="post">
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="">NIK :</label>
                                            <input type="text" class="form-control" id="nik1" name="nik_pegawai" placeholder="Nomor NIK">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="nama">Nama :</label>
                                            <input type="text" class="form-control" id="nama1" name="nm_pegawai" placeholder="Nama Lengkap">
                                        </div>
                                    </div>


                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="">No Telepon :</label>
                                            <input type="number" class="form-control" id="no_hp1" name="no_hp" placeholder="Nomor Telepon">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="">Alamat :</label><br>
                                            <textarea class="form-control" name="alamat" id="alamat1" cols="10" rows="10" placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="tglLahir">Status Kerja:</label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="stts_kerja" id="stts_a" value="aktif">
                                                <label class="form-check-label" for="inlineRadio1">Aktif</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="stts_kerja" id="stts_k" value="keluar">
                                                <label class="form-check-label" for="inlineRadio2">Keluar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Jabatan :</label>
                                                <select class="form-control" name="jabatan" id="jabatan1">
                                                    <option value="Kepala Desa">Kepala Desa</option>
                                                    <option value="Wakil Kepala Desa">Wakil Kepala Desa</option>
                                                    <option value="Bendahara">Bendahara</option>
                                                    <option value="Sekretaris">Sekretaris</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>
                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary simedit" data-toggle="modal" data-target="#editPasien">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

            <?php } ?>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->