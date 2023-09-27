<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>loginuserclient/post_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <label for="nama">Username :</label>
                            <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <input type="text" class="form-control" id="level" placeholder="level" name="level" required>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-info bg-info" data-toggle="modal" data-target="#myModal">
                                Register
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
                                            <button type="submit" class="btn btn-info bg-info">Register</button>
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