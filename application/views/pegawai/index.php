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
            <td>1</td>
            <td>0987651234567890</td>
            <td>Eman Warnato</td>
            <td>098765432109</td>
            <td>Dusun Mana RT 09 RW 11 Desa Sini Kecamatan Situ Kabupaten Sana</td>
            <td>Aktif</td>
            <td>Sekretaris</td>
            <td><button type="button" class="btn btn-success " data-anak="" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit"></i></button></td>
            <td><a href=""><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a></td>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->