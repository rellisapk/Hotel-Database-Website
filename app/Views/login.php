<?= $this->extend('frame') ?>

<?= $this->section('content') ?>
<img src="images/logo.png" alt="logo" height=150px>
<h1>Sign In</h1>
<?php if (session()->get('success')) : ?>
<p class="popup">Berhasil register! Silahkan log in.</p>
<?= session()->get('success') ?>
<?php endif; ?>
            
<form action="login" method="post">
    <input type="email" id="email" name="email" id="email" placeholder="Email" value="<?= set_value('email')?>">
    <br>
    <input type="password" id="password" name="password" id="password" placeholder="Password">
    <br>
    <input type="checkbox" id="remember" name="remember" value="remember">
    <label for="remember">Remember me</label>

    <?php if (isset($validation)): ?>
        <?= $validation->listErrors()?>
    <?php endif; ?>
                
    <br>
    <button type="submit" class="btn">Login</button>
    <br><br>
    <a href="register">Don't have an account? Register Here!</a>
</form>
<?= $this->endSection() ?>