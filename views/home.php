<?php
session_start();
include 'partials\header.php';
?>

<?php if (array_key_exists('username', $_SESSION)) : ?>
    <h2 class="text-center">
        Guten Tag <span class="text-uppercase font-weight-bold"><?php echo $_SESSION["username"]; ?></span>
    </h2>
<?php endif; ?>

<div class="container">
    <div class="d-flex mt-1 justify-content-end align-items-center">
        <div class="mr-2">
            <a href="<?php echo URL_SUBFOLDER . '/login'; ?>" class="btn btn-dark">Login</a>
        </div>
        <div class="mr-2">
            <a href="<?php echo URL_SUBFOLDER . '/registration'; ?>" class="btn btn-dark">Registrieren</a>
        </div>
        
        <div>
            <a href="<?php echo URL_SUBFOLDER . '/logout'; ?>" onclick="<?php session_destroy(); ?>" class="btn btn-dark">Logout</a>
        </div>
    </div>
</div>




<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($allArticles as $articles) : ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?php echo '/it-ems/public/assets/' . $articles["image"] . '.jpg'; ?>" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder"><?php echo $articles['title']; ?></h5>
                                <p>
                                    <?php
                                    if (strlen($articles['description']) > 50) {
                                        echo substr($articles['description'], 0, 50) . '...';
                                    } else {
                                        echo $articles['description'];
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="<?php echo str_replace('{id}}', $articles['id'], $routes->get('article')->getPath()) ?>">Mehr infos</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>