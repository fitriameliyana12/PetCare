
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
                    <h3 class="text-center">Data Pelanggan Petcare</h3>
                    
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID </th>
                                <th>nama_pemilik</th>
                                <th>Nama_hewan</th>
                                <!-- <th>jenis_hewan</th>
                                <th>alamat</th>
                                <th>telepon</th>
                                <th>harga</th>
                                <th>jumlah_hari</th> -->
                                <th>bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menu as $rows) : ?>
                                <tr>
                                    <td><?php echo $rows->id; ?></td>
                                    <td><?php echo $rows->nama_pemilik; ?></td>
                                    <td><?php echo $rows->nama_hewan; ?></td>
                                    <!-- <td><?php echo $rows->jenis_hewan; ?></td>
                                    <td><?php echo $rows->alamat; ?></td>
                                    <td><?php echo $rows->telepon; ?></td>
                                    <td><?php echo $rows->harga; ?></td>
                                    <td><?php echo $rows->jumlah_hari; ?></td> -->
                                    <td><?php echo $rows->bayar; ?></td>
                                    <!-- <td>
                                        <a href="<?php echo site_url(); ?>petcareClient/put/<?php echo $rows->id; ?>" class="btn btn-dark" role="button">Update</a>
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">
                                            Hapus
                                        </button>
                                    </td> -->
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
                                <!-- <div class="modal-footer">
                                    <a href="<?php echo site_url(); ?>petcareClient/delete/<?php echo $rows->id; ?>" class="btn btn-danger" role="button">Hapus</a>
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>