<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Membuat Akun!</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nomor NIK">
                            </div>
                            <div class="form-group">
                                <Label>Email</Label>
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Email">
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password">
                                </div>

                                <div class="col-sm-6">
                                    <label for="">Konfirmasi Password</label>
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Konfirmasi Password">
                                </div>
                            </div>
                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                                Registrasi Akun
                            </a>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/'); ?>">Sudah memiliki akun? Silahkan Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>