<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
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
                    <h3 class="text-center">Data Transaksi</h3>
                    <a href="<?php echo site_url(); ?>transaksiclient/post" class="btn btn-danger mb-3" role="button">Tambah</a>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>ID Menu</th>
                                <th>ID Pelanggan</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($transaksi as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id_transaksi; ?></td>
                                    <td><?php echo $rows->id_menu; ?></td>
                                    <td><?php echo $rows->id_pelanggan; ?></td>
                                    <td><?php echo $rows->jumlah; ?></td>
                                    <td><?php echo $rows->total; ?></td>
                                    <td><?php echo $rows->alamat; ?></td>
                                    <td><?php echo $rows->tanggal; ?></td>
                                    <td>
                                        <a href="<?php echo site_url(); ?>transaksiclient/put/<?php echo $rows->id_transaksi; ?>" class="btn btn-dark" role="button">Update</a>
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
                                    <a href="<?php echo site_url(); ?>transaksiclient/delete/<?php echo $rows->id_pelanggan; ?>" class="btn btn-danger" role="button">Hapus</a>
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