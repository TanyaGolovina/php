<?php
namespace Controller;

use Doctrine\DBAL\Connection;
use Silex\Application;

/**
 * Created by PhpStorm.
 * User: INtellekt_001
 * Date: 03.05.2017
 * Time: 16:32
 */
class BlogController
{
    public function indexAction(Application $app)
    {
        /**@var \Twig_Environment $twig */
        $twig = $app['twig'];
        return $twig->render('blog.twig');
    }
    public function showPostAction(Application $app, $id)
    {
        /** @var \Twig_Environment $twig */
        $twig = $app['twig'];

        /** @var Connection $conn */
        $conn = $app['db'];

        $sql = "SELECT * FROM posts WHERE id = $id";
        $post = $conn->fetchAssoc($sql);

        return $twig->render('blog-post.twig',[
            'post' => $post,
        ]);
    }
}