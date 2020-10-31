<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <br> <br>
    <?= $this->session->flashdata('message'); ?>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Status kerja</th>
                <th scope="col">Jabatan</th>
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
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->