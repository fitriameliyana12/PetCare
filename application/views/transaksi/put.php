<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>transaksiclient/put_process" class="needs-validation" method="POST" onload="setSelectBoxByText()">
                        <?php foreach ($transaksi as $rows) : ?>
                            <div class="form-group">
                                <label for="id_transaksi">ID Transaksi :</label>
                                <input type="text" class="form-control" id="id_transaksi" placeholder="ID Transaksi" value="<?php echo $rows->id_transaksi; ?>" name="id_transaksi" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="sel1">ID Menu :</label>
                                <input type="text" class="form-control" id="selected" value="<?php echo $rows->id_menu; ?>">
                                <select class="form-control" id="id_menu2" name="id_menu2" required>
                                    <?php foreach ($menu as $rows1) : ?>
                                        <option value="<?php echo $rows1->id_menu; ?>" data-price="<?php echo $rows1->harga; ?>"><?php echo $rows1->id_menu; ?> - <?php echo $rows1->nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">ID Pelanggan :</label>
                                <input type="text" class="form-control" id="selected2" value="<?php echo $rows->id_pelanggan; ?>">
                                <select class="form-control" id="id_pelanggan2" name="id_pelanggan2" required>
                                    <?php foreach ($pelanggan as $rows2) : ?>
                                        <option value="<?php echo $rows2->id_pelanggan; ?>"><?php echo $rows2->id_pelanggan; ?> - <?php echo $rows2->nama; ?></option>
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
                                            <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" value="<?php echo $rows->jumlah; ?>" name="jumlah" required>
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
                                <input type="text" class="form-control" id="total" placeholder="Total" value="<?php echo $rows->total; ?>" name="total" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $rows->alamat; ?>" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" value="<?php echo $rows->tanggal; ?>" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                    Update
                                </button>
                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <p>Apa anda yakin ingin mengupdate data ini ?</p>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Update</button>
                                                <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function setSelectBoxByText(eid, etxt) {
                                    var eid = document.getElementById(eid);
                                    for (var i = 0; i < eid.options.length; ++i) {
                                        if (eid.options[i].value === etxt)
                                            eid.options[i].selected = true;
                                    }
                                }

                                var eid = "id_menu2";
                                var etxt = document.getElementById("selected").value;
                                document.getElementById("selected").style.display = "none";
                                setSelectBoxByText(eid, etxt)

                                var eid = "id_pelanggan2";
                                var etxt = document.getElementById("selected2").value;
                                document.getElementById("selected2").style.display = "none";
                                setSelectBoxByText(eid, etxt)
                            </script>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>