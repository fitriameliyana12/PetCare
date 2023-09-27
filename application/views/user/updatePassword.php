<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>loginUserClient/put_process" class="needs-validation" method="POST" onload="setSelectBoxByText()">
                        <?php foreach ($menu as $rows) : ?>
                            <div class="form-group">
                                <label for="id">ID :</label>
                                <input type="text" class="form-control" id="id" placeholder="ID" value="<?php echo $rows->id; ?>" name="id" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_pemilik">username :</label>
                                <input type="text" class="form-control" id="username" placeholder="username" value="<?php echo $rows->username; ?>" name="username" required>
                            </div>
                            <div class="form-group">
                            <label for="deskripsi">password :</label>
                            <input type="text" class="form-control" id="password" placeholder="password" value="<?php echo $rows->password; ?>" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">level :</label>
                            <input type="text" class="form-control" id="level" placeholder="level" value="<?php echo $rows->level; ?>" name="level" required>
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