<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>transaksiclient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <label for="sel1">ID Menu :</label>
                            <select class="form-control" id="id_menu2" name="id_menu2" required>
                                <?php foreach ($menu as $rows) : ?>
                                    <option value="<?php echo $rows->id_menu; ?>" data-price="<?php echo $rows->harga; ?>"><?php echo $rows->id_menu; ?> - <?php echo $rows->nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel1">ID Pelanggan :</label>
                            <select class="form-control" id="id_pelanggan2" name="id_pelanggan2" required>
                                <?php foreach ($pelanggan as $rows) : ?>
                                    <option value="<?php echo $rows->id_pelanggan; ?>"><?php echo $rows->id_pelanggan; ?> - <?php echo $rows->nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Jumlah :</span>
                                        </div>
                                        <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Harga :</span>
                                        </div>
                                        <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" required readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" id="hitung" class="btn btn-danger btn-block">Hitung</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total">Total :</label>
                            <input type="text" class="form-control" id="total" placeholder="Total" name="total" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal :</label>
                            <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal" required>
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