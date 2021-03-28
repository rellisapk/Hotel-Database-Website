<?= $this->extend('frame') ?>

<?= $this->section('content') ?>
<h1>Edit Room</h1>
            
<form action=<?= base_url("/room/update") ?> method="post">
<table>
    <tr>
        <td>ROOM ID</td>
        <td>:</td>
        <td><input type="text" value="<?= $room->id_kamar; ?>" disabled style="background: white;"></td>
    </tr>
    <tr>
        <td><label for="tipe_kamar">ROOM TYPE</label></td>
        <td>:</td>
        <td><input type="text" name="tipe_kamar"  id="tipe_kamar" value="<?= $room->tipe_kamar; ?>"></td>
    </tr>
    <tr>
        <td><label for="tipe_ranjang">BED TYPE</label></td>
        <td>:</td>
        <td><input type="text" name="tipe_ranjang"  id="tipe_ranjang" value="<?= $room->tipe_ranjang; ?>"></td>
    </tr>
    <tr>
        <td><label for="deskripsi">DESCRIPTION</label></td>
        <td>:</td>
        <td><input type="text" name="deskripsi" id="deskripsi"value="<?= $room->deskripsi; ?>"></td>
    </tr>
    <tr>
        <td><label for="photo">IMAGE</label></td>
        <td>:</td>
        <td><input type="file" name="photo" id="photo" value="<?= $room->photo; ?>" style="width: 145px;"></td>
    </tr>
    <tr>
        <td><label for="harga">PRICE</label></td>
        <td>:</td>
        <td><input type="text" name="harga"  id="harga" value="<?= $room->harga; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
        <input type="hidden" name="id_kamar" value="<?= $room->id_kamar; ?>">
        <input type="submit" class="btn" value="SUBMIT" name="submit" /> <a href="javascript:history.back()">BACK</a></td> 
    </tr>
</table>
</form>
<?= $this->endSection() ?>