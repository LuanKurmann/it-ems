<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;
use PDO;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		$pdo = new PDO('mysql:host=' . constant('DB_HOST') . ';' . 'dbname=' . constant('DB_NAME'), constant('DB_USER'), constant('DB_PASS'));

        $sql = "SELECT * FROM article";
        $allArticles = $pdo->query($sql);
		//$routeToProduct = str_replace('{id}', 1, $routes->get('article')->getPath());

        require_once APP_ROOT . '/views/home.php';
	}
}