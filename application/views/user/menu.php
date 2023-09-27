<?php if($this->session->userdata('level')!='user'){redirect('login');};?>
<div class="container-fluid mt-3">
    <div class="row">
        <?php $i = 1;
        foreach ($menu as $rows) : ?>
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="card-img-top" src="<?php echo base_url() ?>assets/menu/<?php echo $i; ?>.png" alt="Card image">
                        <h3><?php echo $rows->nama; ?></h3>
                        <p><?php echo $rows->deskripsi; ?></p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-danger btn-block">Harga : Rp. <?php echo $rows->harga; ?></button>
                        <button type="button" class="btn btn-dark btn-block">Stock : <?php echo $rows->stock; ?></button>
                    </div>
                </div>
            </div>
        <?php $i++;
        endforeach; ?>
    </div>
    <div class="row">
        <div class="col mt-3">
            <a href="<?php echo site_url(); ?>userclient/order" class="btn btn-danger btn-block" role="button">Order Menu</a>
        </div>
    </div>
</div>