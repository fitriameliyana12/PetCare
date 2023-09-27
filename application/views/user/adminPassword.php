
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('result') != '') { ?>
                        <div class="alert alert-dark alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php
                    }
                    ?>
                    <h3 class="text-center">Data User Petcare</h3>
                    
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID </th>
                                <th>Username</th>
                                <th>Password</th>
                                <!-- <th>jenis_hewan</th>
                                <th>alamat</th>
                                <th>telepon</th>
                                <th>harga</th>
                                <th>jumlah_hari</th> -->
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menu as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id; ?></td>
                                    <td><?php echo $rows->username; ?></td>
                                    <td><?php echo $rows->password; ?></td>
                                    <td><?php echo $rows->level; ?></td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>loginUserClient/put/<?php echo $rows->id; ?>" class="btn btn-dark" role="button">Update</a>
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>Apa anda yakin ingin menghapus data ini ?</p>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <a href="<?php echo site_url(); ?>loginUserClient/delete/<?php echo $rows->id; ?>" class="btn btn-danger" role="button">Hapus</a>
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>