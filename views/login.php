<?php
include 'partials\header.php'; ?>
<div class="container">
    <h2 class="text-center mt-5">Login</h2>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Geben Sie ihren Benutzernamen ein" />
        <br />
        <label>Passwort</label>
        <input type="password" name="password" class="form-control" placeholder="Geben Sie ihr Passwort ein" />
        <br />
        <div class="d-flex justify-content-between">
            <input type="submit" name="login" class="btn btn-success" value="Login" />
            <a href="<?php echo URL_SUBFOLDER . '/registration'; ?>" class="btn btn-info">Registrieren Sie sich</a>
        </div>
    </form>

    <?php if (isset($message)) : ?>
        <div class="w-100 text-center">
            <p class="text-danger "><?php echo $message; ?> </p>
        </div>
    <?php endif; ?>
</div>