<?php 

namespace App\Controllers;

use App\Models\Article;
use Symfony\Component\Routing\RouteCollection;
use PDO;

class ArticleController
{
    // Show the article attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $article = new Article();
        $pdo = new PDO('mysql:host=' . constant('DB_HOST') . ';' . 'dbname=' . constant('DB_NAME'), constant('DB_USER'), constant('DB_PASS'));

        $sql = "SELECT * FROM article WHERE id=$id";
        foreach ($pdo->query($sql) as $row) {
            $article->setTitle($row['title']);
            $article->setDescription($row['description']);
            $article->setAmount($row['amount']);
            $article->setColor($row['color']);
            $article->setBrand($row['brand']);
        }
        $article->read($id);



        


        

        require_once APP_ROOT . '/views/article.php';
	}


}