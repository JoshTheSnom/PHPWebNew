<?php

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/login':
        require __DIR__ . '/login.php';
        break;
    case '/loremipsum':
        require __DIR__ . '/loremipsum.php';
        break;
    case '/logout':
        require __DIR__ . '/logout.php';
        break;
    case '/register':
        require __DIR__ . '/register.php';
        break;
    default:
        require __DIR__ . '/notfound.php';
        break;
}