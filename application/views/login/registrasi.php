<div class="container-fluid mt-3">
    <img src="<?php echo base_url(); ?>css/assets/img/logo.png" class="mx-auto d-block" width="200px" height="200px">
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <div class="card registration">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>login/reg_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_telepon">Nomor Telepon :</label>
                            <input type="text" class="form-control" id="nomor_telepon" placeholder="Masukkan nomor telepon" name="nomor_telepon" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" required>
                        </div> -->
                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" id="password" placeholder="" name="password" required>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-info bg-info" data-toggle="modal" data-target="#myModal">
                                Registrasi
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin registrasi ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info bg-info">Registrasi</button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>