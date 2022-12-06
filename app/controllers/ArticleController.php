<?php 

namespace App\Controllers;

use App\Models\Article;
use Symfony\Component\Routing\RouteCollection;
use PDO;

class ArticleController
{
	public function showAction(int $id, RouteCollection $routes)
	{
        $article = new Article();
        $pdo = new PDO('mysql:host=' . constant('DB_HOST') . ';' . 'dbname=' . constant('DB_NAME'), constant('DB_USER'), constant('DB_PASS'));
        $sql = "SELECT * FROM article WHERE id=$id";
        foreach ($pdo->query($sql) as $row) {
            if (isset($row['id']) && !empty($row['id'])) {
                $article->setTitle($row['title']);
                $article->setDescription($row['description']);
                $article->setAmount($row['amount']);
                $article->setColor($row['color']);
                $article->setBrand($row['brand']);
                $article->setImage($row['image']);
            }
        }
        $article->read($id);
        require_once APP_ROOT . '/views/article.php';
	}
}