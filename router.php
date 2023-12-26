<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'view/home.view.php',
    '/post' => 'view/post.view.php',
    '/post/create' => 'controller/post.create.controller.php',
    '/post/delete' => 'controller/post.delete.controller.php',
    '/post/edit' => 'controller/post.edit.controller.php',
   ];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}

