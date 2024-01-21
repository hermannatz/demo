<?php

# This file is a single point of entry that is responsible for routing (handling) the request to the appropriate controller.

require 'functions.php';

#require 'router.php';

# Connect to MySQL Database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

# We need to handle the situation where the connection fails. For that a try catch block is used.
$pdo = new PDO($dsn, 'root', '');

# the preapare methods allows us to prepare an SQL statetement that will be executed later.

$statement = $pdo->prepare("select * from posts");

$statement->execute();

# I want the result as an associative array. The fetchAll method returns an array containing all result set rows.
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach( $posts as $post){
	echo "<li>{$post['title']}</li>";
}

#dd($posts);
