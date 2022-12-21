<?php include 'partials\header.php'; ?>
<div class="container">
    <h2 class="text-center mt-5">Registration</h2>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Enter your username" required />
        <br />
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password" required />
        <br />
        <label>Firstname</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter your firstname" required />
        <br />
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter your name" required />
        <br />
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter your email" required />
        <br />
        <input type="submit" name="register" class="btn btn-dark" value="Register" />
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