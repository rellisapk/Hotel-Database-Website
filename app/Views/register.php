<?= $this->extend('frame') ?>

<?= $this->section('content') ?>
<img src="images/logo.png" alt="logo" height=150px>
<h1>Sign Up</h1>

<form action="register" method="post">
    <input type="text" id="name" name="name" id="name" placeholder="Full Name">
    <br>
    <input type="email" id="email" name="email" id="email" placeholder="Email">
    <br>
    <input type="password" id="password" name="password" id="password" placeholder="Password">
    <br>
    <input type="password" name="password_confirm" id ="password_confirm" id="ConfPassword" placeholder="Confirm Password">

    <?php if (isset($validation)): ?>
        <?= $validation->listErrors()?>
    <?php endif; ?>
    
    <br>
    <button type="submit" class="btn">Register</button>
    <br><br>
    <a href="login">Already have account! Back to Login</a>
</form>
<?= $this->endSection() ?>