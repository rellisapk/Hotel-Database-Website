<?= $this->extend('frame') ?>

<?= $this->section('content') ?>
<h1>Edit Employee</h1>
            
<form action=<?= base_url("/employee/update") ?> method="post">
<table>
    <tr>
        <td>EMPLOYEE ID</td>
        <td>:</td>
        <td><input type="text" value="<?= $Employee->id_pegawai; ?>" disabled style="background: white;"></td>
    </tr>
    <tr>
        <td><label for="nama_pegawai">EMPLOYEE NAME</label></td>
        <td>:</td>
        <td><input type="text" name="nama_pegawai" id="nama_pegawai" value="<?= $Employee->nama_pegawai; ?>"></td>
    </tr>
    <tr>
        <td><label for="tgl_lahir_pegawai">BIRTH DATE</label></td>
        <td>:</td>
        <td><input type="date" name="tgl_lahir_pegawai" id="tgl_lahir_pegawai" value="<?= $Employee->tgl_lahir_pegawai; ?>"></td>
    </tr>
    <tr>
        <td>GENDER</td>
        <td>:</td>
        <td>
            <input type="radio" name="jenis_kelamin" value="L" id="l" <?php if ($Employee->jenis_kelamin == "L") echo 'checked="checked"'; ?>><label for="l">L</label>
            <input type="radio" name="jenis_kelamin" value="P" id="p" <?php if ($Employee->jenis_kelamin == "P") echo 'checked="checked"'; ?>><label for="p">P</label>
        </td>
    </tr>
    <tr>
        <td><label for="email">EMAIL</label></td>
        <td>:</td>
        <td><input type="text" name="email" id="email" value="<?= $Employee->email; ?>"></td>
    </tr>
    <tr>
        <td><label for="jabatan">POSITION</label></td>
        <td>:</td>
        <td><input type="text" name="jabatan" id="jabatan" value="<?= $Employee->jabatan; ?>"></td>
    </tr>
    <tr>
        <td><label for="gaji">SALARY</label></td>
        <td>:</td>
        <td><input type="text" name="gaji" id="gaji" value="<?= $Employee->gaji; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
        <input type="hidden" name="id_pegawai" value="<?= $Employee->id_pegawai; ?>">
        <input type="submit" class="btn" value="SUBMIT" name="submit" /> <a href="javascript:history.back()">BACK</a></td> 
    </tr>
</table>
</form>
<?= $this->endSection() ?>