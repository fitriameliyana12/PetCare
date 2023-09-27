<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php echo $this->session->flashdata('result'); ?>
                    <form action="<?php echo site_url(); ?>pelangganclient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_telepon">Nomor Telepon :</label>
                            <input type="text" class="form-control" id="nomor_telepon" placeholder="Nomor Telepon" name="nomor_telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                Tambah
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin menambah data ini ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Tambah</button>
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