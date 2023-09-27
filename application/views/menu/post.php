<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>petcareClient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Pemilik :</label>
                            <input type="text" class="form-control" id="nama_pemilik" placeholder="nama_pemilik" name="nama_pemilik" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">nama_hewan :</label>
                            <input type="text" class="form-control" id="nama_hewan" placeholder="nama_hewan" name="nama_hewan" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">jenis_hewan :</label>
                            <input type="text" class="form-control" id="jenis_hewan" placeholder="jenis_hewan" name="jenis_hewan" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">alamat :</label>
                            <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">telepon :</label>
                            <input type="text" class="form-control" id="telepon" placeholder="telepon" name="telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">harga :</label>
                            <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">jumlah_hari :</label>
                            <input type="text" class="form-control" id="jumlah_hari" placeholder="jumlah_hari" name="jumlah_hari" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">bayar :</label>
                            <input type="text" class="form-control" id="bayar" placeholder="bayar" name="bayar" required>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-info bg-info" data-toggle="modal" data-target="#myModal">
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
                                            <button type="submit" class="btn btn-info bg-info">Tambah</button>
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