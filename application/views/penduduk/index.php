<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <br> <br>
    <?= $this->session->flashdata('message'); ?>

    <a href="<?= base_url('penduduk/tambah/'); ?>" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text"><b>Tambahkan Penduduk</b></span>
    </a>
    <br><br>

    <table class="table">
        <thead class="thead-dark">
            <tr align="center">
                <th scope="col" rowspan="2">No</th>
                <th scope="col" rowspan="2">NIK</th>
                <th scope="col" rowspan="2">Nama</th>
                <th scope="col" rowspan="2">Tempat Lahir</th>
                <th scope="col" rowspan="2">Tanggal Lahir</th>
                <th scope="col" rowspan="2">Jenis Kelamin</th>
                <th scope="col" rowspan="2">Agama</th>
                <th scope="col" rowspan="2">Pekerjaan</th>
                <th scope="col" rowspan="2">Alamat Lengkap</th>
                <th scope="col" rowspan="2">No HP</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($penddk as $p) { ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $p['nik']; ?></td>
                    <td><?= $p['nama'] ?></td>
                    <td><?= $p['tmp_lahir'] ?></td>
                    <td><?= $p['tgl_lahir'] ?></td>
                    <td><?= $p['jk'] ?></td>
                    <td><?= $p['agama'] ?></td>
                    <td><?= $p['pekerjaan'] ?></td>
                    <td><?= $p['alamat'] ?></td>
                    <td><?= $p['no_hp'] ?></td>
                    <td><button type="button" class="btn btn-success editpenddk" data-penddk="<?= $p['nik']; ?>" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit"></i></button></td>
                    <td><a href="<?= base_url('penduduk/aksi_hapus/' . $p['nik']); ?>"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a></td>
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
                                <form action="<?= base_url('penduduk/aksi_edit') ?>" method="post">
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="">NIK :</label>
                                            <input type="text" class="form-control" id="nik1" name="nik" placeholder="Nomor NIK">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="nama">Nama :</label>
                                            <input type="text" class="form-control" id="nama1" name="nama" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="Tempat">Tempat Lahir :</label>
                                            <input type="text" class="form-control" id="tmp_lahir1" name="tmp_lahir" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tglLahir">Tanggal Lahir :</label>
                                            <input type="date" class="form-control" id="tgl_lahir1" name="tgl_lahir">
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
                                            <input type="text" class="form-control" id="agama1" name="agama" placeholder="Agama">
                                        </div>

                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="">Pekerjaan :</label>
                                            <input type="text" class="form-control" id="pekerjaan1" name="pekerjaan" placeholder="Pekerjaan">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">No Telepon :</label>
                                            <input type="text" class="form-control" id="no_hp1" name="no_hp" placeholder="Nomor Telepon">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="">RT:</label>
                                            <input type="text" class="form-control" id="rt1" name="rt" placeholder="Nomor RT">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">RW:</label>
                                            <input type="text" class="form-control" id="rw1" name="rw" placeholder="Nomor RW">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="">Desa:</label>
                                            <input type="text" class="form-control" id="desa1" name="desa" placeholder="Desa">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Kecamatan:</label>
                                            <input type="text" class="form-control" id="kecamatan1" name="kecamatan" placeholder="Kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-row col-md-12">

                                        <label for="">Alamat :</label><br>
                                        <textarea class="form-control" name="alamat" id="alamat1" cols="40" rows="10"></textarea>
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