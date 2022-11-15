<?php 

namespace App\Controllers;

use App\Models\Article;
use Symfony\Component\Routing\RouteCollection;

class ArticleController
{
    // Show the article attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $article = new Article();
        $article->read($id);

        require_once APP_ROOT . '/views/article.php';
	}


}