<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <br>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card mb-3 col-lg-6">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="" class="card-img">Foto
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title"><b></b></h2>
                    <p class="card-text">NIK : </p>
                    <p class="card-text">Nama : </p>
                    <p class="card-text">Email : </p>
                    <p class="card-text">Alamat : </p>
                    <br> <br>
                    <p class="card-text"><small class="text-muted">Bergabung sejak : </small></p>
                </div>
            </div>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->