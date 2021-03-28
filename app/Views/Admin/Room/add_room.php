<?= $this->extend('frame') ?>

<?= $this->section('content') ?>
<h1>Add New Room</h1>
            
<form action=<?= base_url("/room/save") ?> method="post">
<table>
    <tr>
        <td><label for="tipe_kamar">ROOM TYPE</label></td>
        <td>:</td>
        <td><input type="text" name="tipe_kamar" id="tipe_kamar"></td>
    </tr>
    <tr>
        <td><label for="tipe_ranjang">BED TYPE</label></td>
        <td>:</td>
        <td><input type="text" name="tipe_ranjang" id="tipe_ranjang"></td>
    </tr>
    <tr>
        <td><label for="deskripsi">DESCRIPTION</label></td>
        <td>:</td>
        <td><input type="text" name="deskripsi" id="deskripsi"></td>
    </tr>
    <tr>
        <td><label for="photo">IMAGE</label></td>
        <td>:</td>
        <td><input type="file" name="photo" id="photo" style="width: 145px;"></td>
    </tr>
    <tr>
        <td><label for="harga">PRICE</label></td>
        <td>:</td>
        <td><input type="text" name="harga" id="harga"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" class="btn" value="SUBMIT" name="submit" /> <a href="javascript:history.back()">BACK</a></td> 
    </tr>
</table>
</form>
<?= $this->endSection() ?>