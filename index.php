<?php
$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/login':
        $filename = 'login.php';
		break;
	case '/register':
		$filename = 'register.php';
		break;
    case '/loremipsum':
        $filename = 'loremipsum.php';
        break;
    case '/logout':
        $filename = 'logout.php';
        break;
    default:
        $filename = 'register.php';
        break;
}

require $filename;