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

    public function read(int $id)
    {
        $this->title = 'My first Article';
        $this->description = 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ';
        $this->amount = 2;
        $this->color = 'MVC-SP-PHP-01';
        $this->brand = 'https://via.placeholder.com/150';

        return $this;
    }
}