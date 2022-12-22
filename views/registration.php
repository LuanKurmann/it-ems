<?php include 'partials\header.php'; ?>
<div class="container">
    <h2 class="text-center mt-5">Registrieren</h2>
    <form method="post">
        <label>Benutzernamen</label>
        <input type="text" name="username" class="form-control" placeholder="Geben Sie ihren Benutzernamen ein" required />
        <br />
        <label>Passwort</label>
        <input type="password" name="password" class="form-control" placeholder="Geben Sie ihr Passwort ein" required />
        <br />
        <label>Name</label>
        <input type="text" name="firstname" class="form-control" placeholder="Geben Sie ihren Namen ein" required />
        <br />
        <label>Nachname</label>
        <input type="text" name="name" class="form-control" placeholder="Geben Sie ihren Nachnamen ein" required />
        <br />
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Geben Sie ihre Email ein" required />
        <br />
        <div class="d-flex justify-content-between">
            <input type="submit" name="register" class="btn btn-success" value="Registrieren" />
            <a href="<?php echo URL_SUBFOLDER . '/login'; ?>" class="btn btn-info">Sie haben bereits ein Login</a>
    </div>
    </form>
    <?php if (isset($message)) : ?>
        <div class="w-100 text-center mt-3">
            <?php if ($message == 'Ihr Benutzerkonto wurde erfolgreich erstellt.') : ?>
                <p class="text-success"><?php echo $message; ?></p>
            <?php else : ?>
                <p class="text-danger"><?php echo $message; ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>