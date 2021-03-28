<?= $this->extend('data_temp') ?>

<?= $this->section('content') ?>
<center>
<h1>Rooms</h1><br>
    <div class="row">
    <?php foreach($room as $row) : ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="product-top">
                        <a href=<?= base_url("room/detail/{$row['id_kamar']}"); ?>><img src="<?= base_url('images/'.$row['photo']) ?>" width="200"></a>
                    </div>
                    <div class="product-bottom text-center" >
                        <h3><a href=<?= base_url("room/detail/{$row['id_kamar']}"); ?>><?php echo $row['tipe_kamar']; ?></a></h3>
                        <h5>Rp. <?php echo $row['harga']; ?></h5>
                        <a href=<?= base_url("room/detail/{$row['id_kamar']}"); ?> class="btn btn-outline-secondary btn-sm">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<center>
<div>
<a href=<?= base_url("room/add_new"); ?> class="btn">Add New Room</a>
</div></center>
<?= $this->endSection() ?>