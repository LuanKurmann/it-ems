<?php

namespace App\Controllers;

use App\Models\Login;
use Symfony\Component\Routing\RouteCollection;
use PDO;
use PDOException;

class LoginController
{

    public function indexAction(RouteCollection $routes)
    {
        try {
            $pdo = new PDO('mysql:host=' . constant('DB_HOST') . ';' . 'dbname=' . constant('DB_NAME'), constant('DB_USER'), constant('DB_PASS'));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if (isset($_POST["login"])) {
                if (empty($_POST["username"]) || empty($_POST["password"])) {
                    $message = 'Bitte füllen Sie alle Felder aus.';
                } else {
                    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
                    $statement = $pdo->prepare($query);
                    $statement->execute(
                        array(
                            'username'     =>     $_POST["username"],
                            'password'     =>     $_POST["password"]
                        )
                    );
                    $count = $statement->rowCount();
                    if ($count > 0) {
                        $_SESSION["username"] = $_POST["username"];
                        header('Location: ' . URL_SUBFOLDER);
                    } else {
                        $message = 'Falsche Daten, bitte versuchen Sie es erneut.';
                    }
                }
            }
        } catch (PDOException $error) {
            $message = $error->getMessage();
        }
        require_once APP_ROOT . '/views/login.php';
    }

    public function logout(RouteCollection $routes)
    {

        require_once APP_ROOT . '/views/logout.php';
    }
}
