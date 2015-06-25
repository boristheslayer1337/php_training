<?php
namespace Controller;

use Silex\Application;

class PostController
{
    public function indexAction(Application $app)
    {
        $posts = $app['db']->fetchAll("SELECT * FROM posts ");

        return include __DIR__.'/../views/posts.php';
    }
    public function showAction($slug)
    {
        return 'Post ' .  $slug;
    }

}
