<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>petcareClient/put_process" class="needs-validation" method="POST" onload="setSelectBoxByText()">
                        <?php foreach ($menu as $rows) : ?>
                            <div class="form-group">
                                <label for="id">ID :</label>
                                <input type="text" class="form-control" id="id" placeholder="ID" value="<?php echo $rows->id; ?>" name="id" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_pemilik">nama_Pemilik :</label>
                                <input type="text" class="form-control" id="nama_pemilik" placeholder="nama_pemilik" value="<?php echo $rows->nama_pemilik; ?>" name="nama_pemilik" required>
                            </div>
                            <div class="form-group">
                            <label for="deskripsi">nama_hewan :</label>
                            <input type="text" class="form-control" id="nama_hewan" placeholder="nama_hewan" value="<?php echo $rows->nama_hewan; ?>" name="nama_hewan" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">jenis_hewan :</label>
                            <input type="text" class="form-control" id="jenis_hewan" placeholder="jenis_hewan" value="<?php echo $rows->jenis_hewan; ?>" name="jenis_hewan" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">alamat :</label>
                            <input type="text" class="form-control" id="alamat" placeholder="alamat" value="<?php echo $rows->alamat; ?>" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">telepon :</label>
                            <input type="text" class="form-control" id="telepon" placeholder="telepon" value="<?php echo $rows->telepon; ?>" name="telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">harga :</label>
                            <input type="text" class="form-control" id="harga" placeholder="harga" value="<?php echo $rows->harga; ?>" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">jumlah_hari :</label>
                            <input type="text" class="form-control" id="jumlah_hari" placeholder="jumlah_hari" value="<?php echo $rows->jumlah_hari; ?>" name="jumlah_hari" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">bayar :</label>
                            <input type="text" class="form-control" id="bayar" placeholder="bayar" value="<?php echo $rows->bayar; ?>" name="bayar" required>
                        </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-info bg-info" data-toggle="modal" data-target="#myModal">
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
                                                <button type="submit" class="btn btn-info bg-info">Update</button>
                                                <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <script>
                                function setSelectBoxByText(eid, etxt) {
                                    var eid = document.getElementById(eid);
                                    for (var i = 0; i < eid.options.length; ++i) {
                                        if (eid.options[i].value === etxt)
                                            eid.options[i].selected = true;
                                    }
                                }

                                var eid = "kategori";
                                var etxt = document.getElementById("selected").value;
                                document.getElementById("selected").style.display = "none";
                                setSelectBoxByText(eid, etxt)
                            </script> -->
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>