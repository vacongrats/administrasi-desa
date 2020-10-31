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
            <td>1</td>
            <td>1234567890123456</td>
            <td>Susi Susilawati</td>
            <td>Yogyakarta</td>
            <td>19 Februari 1989</td>
            <td>Perempuan</td>
            <td>Islam</td>
            <td>Ibu Rumah Tangga</td>
            <td>Dusun Koma, RT 06 RW 09, Desa Titik, Kecamatan Petik, Kabupaten Bintang</td>
            <td>098765432123</td>
            <td><button type="button" class="btn btn-success " data-anak="" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit"></i></button></td>
            <td><a href=""><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a></td>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->