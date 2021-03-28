<?= $this->extend('frame') ?>

<?= $this->section('content') ?>
<h1>Add New Employee</h1>
            
<form action=<?= base_url("/employee/save") ?> method="post">
<table>
    <tr>
        <td><label for="nama_pegawai">EMPLOYEE NAME</label></td>
        <td>:</td>
        <td><input type="text" name="nama_pegawai" id="nama_pegawai"></td>
    </tr>
    <tr>
        <td><label for="tgl_lahir_pegawai">BIRTH DATE</label></td>
        <td>:</td>
        <td><input type="date" name="tgl_lahir_pegawai" id="tgl_lahir_pegawai"></td>
    </tr>
    <tr>
        <td>GENDER</td>
        <td>:</td>
        <td>
            <input type="radio" name="jenis_kelamin" value="L" id="l"><label for="l">L</label>
            <input type="radio" name="jenis_kelamin" value="P" id="p"><label for="p">P</label>
        </td>
    </tr>
    <tr>
        <td><label for="email">EMAIL</label></td>
        <td>:</td>
        <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
        <td><label for="jabatan">POSITION</label></td>
        <td>:</td>
        <td><input type="text" name="jabatan" id="jabatan"></td>
    </tr>
    <tr>
        <td><label for="gaji">SALARY</label></td>
        <td>:</td>
        <td><input type="text" name="gaji" id="gaji"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" class="btn" value="SUBMIT" name="submit" /> <a href="javascript:history.back()">BACK</a></td> 
    </tr>
</table>
</form>
<?= $this->endSection() ?>