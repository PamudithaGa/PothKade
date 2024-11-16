<?php
$routes = [
    'home' => ['controller' => 'HomeController', 'method' => 'index'],
    'AdminDashboard' => ['controller' => 'AdminController', 'method' => 'AdminDashboard'],

    'book/add' => ['controller' => 'BookController', 'method' => 'addNewBook'],
    'book/view' => ['controller' => 'BookController', 'method' => 'viewBooks'],
    'book/delete' => ['controller' => 'BookController', 'method' => 'deleteBook'],


];
?>