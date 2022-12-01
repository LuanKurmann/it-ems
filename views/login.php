<?php include 'partials\header.php'; ?>
<<<<<<< Updated upstream
<div class="container">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
=======

<div class="container">
    <h2 class="text-center mt-5">Login</h2>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Geben Sie ihren Usernamen ein"/>
        <br />
        <label>Passwort</label>
        <input type="password" name="password" class="form-control" placeholder="Geben Sie ihr Passwort ein"/>
        <br />
        <input type="submit" name="login" class="btn btn-dark" value="Login" />
    </form>
    <?php if (isset($message)) : ?>
        <div class="w-100 text-center">
            <p class="text-danger "><?php echo $message; ?> </p>
        </div>
    <?php endif; ?>
</div>

>>>>>>> Stashed changes
