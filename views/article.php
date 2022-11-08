<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Simple PHP MVC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <section>
        <h1>My Article:</h1>
        <ul>
            <li><?php echo $article->getTitle(); ?></li>
            <li><?php echo $article->getDescription(); ?></li>
            <li><?php echo $article->getAmount(); ?></li>
            <li><?php echo $article->getColor(); ?></li>
            <li><?php echo $article->getBrand(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>