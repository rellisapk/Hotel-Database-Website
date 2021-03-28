<?= $this->extend('frame') ?>

<?= $this->section('css') ?>
    select {
        width: 185px;
    }
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Add New Booking</h1>
            
<form action=<?= base_url("/booking/save") ?> method="post">
<table>
    <tr>
        <td><label for="id_customer">CUSTOMER ID</label></td>
        <td>:</td>
        <td>
            <select name="id_customer" id="id_customer">
                <option value=""></option>
                <?php foreach($customer as $row) : ?>
                    <option value="<?php echo $row['id_customer']; ?>"><?php echo $row['id_customer']; ?> <?php echo $row['nama_customer']; ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="id_kamar">ROOM ID</label></td>
        <td>:</td>
        <td>
            <select name="id_kamar" id="id_kamar">
                <option value=""></option>
                <?php foreach($room as $row) : ?>
                    <option value="<?php echo $row['id_kamar']; ?>"><?php echo $row['id_kamar']; ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="tgl_checkin">CHECK IN</label></td>
        <td>:</td>
        <td><input type="date" name="tgl_checkin" id="tgl_checkin"></td>
    </tr>
    <tr>
        <td><label for="tgl_checkout">CHECK OUT</label></td>
        <td>:</td>
        <td><input type="date" name="tgl_checkout" id="tgl_checkout"></td>
    </tr>
    <tr>
        <td><label for="id_pegawai">EMPLOYEE ID</label></td>
        <td>:</td>
        <td>
            <select name="id_pegawai" id="id_pegawai">
                <option value=""></option>
                <?php foreach($employee as $row) : ?>
                    <option value="<?php echo $row['id_pegawai']; ?>"><?php echo $row['id_pegawai']; ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" class="btn" value="SUBMIT" name="submit" /> <a href="javascript:history.back()">BACK</a></td> 
    </tr>
</table>
</form>
<?= $this->endSection() ?>