<?php

require_once 'db_connection.php';

$request_uri = $_SERVER['REQUEST_URI'];

switch($request_uri){
    case '/':
        include 'views/menu.php';
        break;
    case '/all_comments':
        include 'views/all_comments.php';
        break;
    case '/add_comment':
        include 'views/add_comment.php';
        break;
    case '/add_comment_save':
        include 'views/add_comment_save.php';
        break;
    default:
        include 'views/404.php';
        break;
}

?>
