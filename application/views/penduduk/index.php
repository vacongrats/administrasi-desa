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
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">RT</th>
                <th scope="col">RW</th>
                <th scope="col">Desa</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">No HP</th>
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
            <td>02</td>
            <td>11</td>
            <td>Sinduadi</td>
            <td>Mlati</td>
            <td>098765432123</td>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->