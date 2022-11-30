<?php include 'partials\header.php'; ?>
    <?php session_start(); var_dump(session_status());?>
    <a href="<?php URL_SUBFOLDER . '/logout'; ?> ">hier</a>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
<<<<<<< Updated upstream
            <?php
                foreach($allArticles as $articles) {
                    
                    ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $articles['title']; ?></h5>
                                <h7><?php  if(strlen($articles['description']) > 50) {echo substr($articles['description'], 0, 50).'...';} else {echo $articles['description'];}; ?></h7>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="<?php echo str_replace('{id}', $articles['id'], $routes->get('article')->getPath()) ?>">Mehr infos</a>
                            </div>                            
                        </div>
                    </div>
                </div>
                <?php } ?>
=======
                <?php foreach ($allArticles as $articles) : ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?php echo '/it-ems/public/assets/' . $articles["image"] . '.jpg'; ?>" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><?php echo $articles['title']; ?></h5>
                                    <h7><?php if (strlen($articles['description']) > 50) {
                                            echo substr($articles['description'], 0, 50) . '...';
                                        } else {
                                            echo $articles['description'];
                                        }; ?></h7>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="<?php echo str_replace('{id}', $articles['id'], $routes->get('article')->getPath()) ?>">Mehr infos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
>>>>>>> Stashed changes
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>