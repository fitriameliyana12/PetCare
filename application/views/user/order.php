<?php if($this->session->userdata('level')!='user'){redirect('login');};?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Order Menu</h3>
                    <form action="<?php echo site_url(); ?>userclient/post_process" class="needs-validation" method="POST">
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
                            <input type="text" class="form-control" id="id_pelanggan2" placeholder="ID Pelanggan" value="<?php echo $this->session->userdata('id_pelanggan'); ?>" name="id_pelanggan2" required readonly>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Jumlah :</span>
                                        </div>
                                        <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Harga :</span>
                                        </div>
                                        <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" required readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4">
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
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2">
                                Order Sekarang !
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin mengorder menu ini ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Order</button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo site_url(); ?>userclient/menu" class="btn btn-dark btn-block" role="button">Lihat Menu</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>