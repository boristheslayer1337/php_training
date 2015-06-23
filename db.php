<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

use Doctrine\DBAL\Configuration;

use Doctrine\DBAL\DriverManager;

// Handle request
$request = Request::createFromGlobals();
// print_r($_SERVER);
//Connection to db
$config = new Configuration();
//..
$connectionParams = array(
    'dbname' => 'db',
    'user' => 'root',
    'password' => 'usbw',
    'host' => 'localhost',
    'port' => 3307,
    'driver' => 'pdo_mysql',
);
$conn = DriverManager::getConnection($connectionParams, $config);



switch($request->server->get('PATH_INFO')){
	case'':
		if ($request->query->getInt('id')) {
			require_once 'post.php';
		} else {
			require_once 'posts.php';
		}
		break;
	case '/admin/post':
		if ($request->query->getInt('id')) {
			require_once 'admin-post.php';
		} else {
			require_once 'admin-posts.php';
		}
		break;
	case '/admin/post/new':
		require_once 'admin-post.php';
		break;
	case '/admin/post/delete':
		$conn->delete('posts', [
			'id' => $request->query->getInt('id'),
		]);
		header('Location:' . $request->server->get('SCRIPT_NAME') . '/admin/post' );
		break;
	default:
		header('HTTP/1.0 404 Not Found');
		require '404.php';
}