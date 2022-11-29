<?php
namespace App\Controllers;

use App\Models\Login;
use Symfony\Component\Routing\RouteCollection;
use PDO;

class LoginController {

	public function indexAction(RouteCollection $routes)
	{
		$pdo = new PDO('mysql:host=' . constant('DB_HOST') . ';' . 'dbname=' . constant('DB_NAME'), constant('DB_USER'), constant('DB_PASS'));

        $sql = "SELECT * FROM article";
        $allArticles = $pdo->query($sql);
		$routeToProduct = str_replace('{id}', 1, $routes->get('article')->getPath());

        require_once APP_ROOT . '/views/login.php';
	}

    /*public function showAction(int $id, RouteCollection $routes)
	{
        $login = new Login();
        $pdo = new PDO('mysql:host=' . constant('DB_HOST') . ';' . 'dbname=' . constant('DB_NAME'), constant('DB_USER'), constant('DB_PASS'));

        $sql = "SELECT * FROM article WHERE id=$id";
        foreach ($pdo->query($sql) as $row) {
            $login->setFirstname($row['firstname']);
            $login->setName($row['name']);
            $login->setUsername($row['username']);
            $login->setEmail($row['email']);
            $login->setPassword($row['password']);
        }
        $login->read($id);

        require_once APP_ROOT . '/views/article.php';
	} */
}