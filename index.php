<?php

require_once 'db_connection.php';

$request_uri = $_SERVER['REQUEST_URI'];

switch($request_uri){
    case '/':
        include 'controllers/menu.php';
        break;
    case '/all_comments':
        include 'controllers/all_comments.php';
        break;
    case '/add_comment':
        include 'controllers/add_comment.php';
        break;
    case '/add_comment_save':
        include 'controllers/add_comment_save.php';
        break;
    default:
        include 'controllers/404.php';
        break;
}

?>
