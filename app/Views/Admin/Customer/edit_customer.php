<?= $this->extend('frame') ?>

<?= $this->section('content') ?>
<h1>Edit Customer</h1>
            
<form action=<?= base_url("/customer/update") ?> method="post">
<table>
    <tr>
        <td>CUSTOMER ID</td>
        <td>:</td>
        <td><input type="text" value="<?= $customer->id_customer; ?>" disabled style="background: white;"></td>
    </tr>
    <tr>
        <td><label for="nama_customer">CUSTOMER NAME</label></td>
        <td>:</td>
        <td><input type="text" name="nama_customer" id="nama_customer" value="<?= $customer->nama_customer; ?>"></td>
    </tr>
    <tr>
        <td><label for="tgl_lahir_customer">BIRTH DATE</label></td>
        <td>:</td>
        <td><input type="date" name="tgl_lahir_customer" id="tgl_lahir_customer" value="<?= $customer->tgl_lahir_customer; ?>"></td>
    </tr>
    <tr>
        <td>GENDER</td>
        <td>:</td>
        <td>
            <input type="radio" name="jenis_kelamin" value="L" id="l" <?php if ($customer->jenis_kelamin == "L") echo 'checked="checked"'; ?>><label for="l">L</label>
            <input type="radio" name="jenis_kelamin" value="P" id="p" <?php if ($customer->jenis_kelamin == "P") echo 'checked="checked"'; ?>><label for="p">P</label>
        </td>
    </tr>
    <tr>
        <td><label for="email">EMAIL</label></td>
        <td>:</td>
        <td><input type="text" name="email" id="email" value="<?= $customer->email; ?>"></td>
    </tr>
    <tr>
        <td><label for="alamat">ADDRESS</label></td>
        <td>:</td>
        <td><input type="text" name="alamat" id="alamat" value="<?= $customer->alamat; ?>"></td>
    </tr>
    <tr>
        <td><label for="kota_asal">CITY</label></td>
        <td>:</td>
        <td><input type="text" name="kota_asal" id="kota_asal" value="<?= $customer->kota_asal; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
        <input type="hidden" name="id_customer" value="<?= $customer->id_customer; ?>">
        <input type="submit" class="btn" value="SUBMIT" name="submit" /> <a href="javascript:history.back()">BACK</a></td> 
    </tr>
</table>
</form>
<?= $this->endSection() ?>