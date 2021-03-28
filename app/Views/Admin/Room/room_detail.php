<?= $this->extend('data_temp') ?>

<?= $this->section('css') ?>
        td, th {
            border: 0px;
        }
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<center>
<img src="<?= base_url('images/'.$room->photo) ?>" width="300">
<h1>Room <?= $room->id_kamar; ?></h1>
<table>
    <tr>
        <td>Room Type</td>
        <td>:</td>
        <td><?= $room->tipe_kamar; ?></td>
    </tr>
    <tr>
        <td>Bed Type</td>
        <td>:</td>
        <td><?= $room->tipe_ranjang; ?></td>
    </tr>
    <tr>
        <td>Description</td>
        <td>:</td>
        <td><?= $room->deskripsi; ?></td>
    </tr>
    <tr>
        <td>Price</td>
        <td>:</td>
        <td>Rp. <?= $room->harga; ?>/day</td>
    </tr>
    <tr>
        <td>Action</td>
        <td>:</td>
        <td>
            <a href=<?= base_url("room/edit/{$room->id_kamar}"); ?>><i class="fas fa-edit"></i></a>
            <a href=<?= base_url("room/delete/{$room->id_kamar}"); ?>><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><a href="javascript:history.back()"><button class="btn">BACK</button></td>
    </tr>
</table>
</center>
<?= $this->endSection() ?>