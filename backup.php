<?php
$books = [
	[
		'title' => 'The Hitchhiker\'s Guide to the Galaxy',
		'author' => 'Douglas Adams',
		'releaseYear' => 2021,
		'purchaseUrl' => 'https://www.amazon.com/Hitchhikers-Guide-Galaxy-Douglas-Adams/dp/0345391802'
	],
	[
		'title' => 'The Lord of the Rings',
		'author' => 'J. R. R. Tolkien',
		'releaseYear' => 2011,
		'purchaseUrl' => 'https://www.amazon.com/Lord-Rings-J-R-Tolkien/dp/0544003411'
	],
	[
		'title' => 'The Martian',
		'author' => 'Andy Weir',
		'releaseYear' => 1990,
		'purchaseUrl' => 'https://www.amazon.com/Martian-Andy-Weir/dp/0553418025'
	],
	[
		'title' => 'A Game of Thrones',
		'author' => 'George R. R. Martin',
		'releaseYear' => 1996,
		'purchaseUrl' => 'https://www.amazon.com/Game-Thrones-Song-Fire-Book/dp/0553593714'
	],
	[
		'title' => 'A Game of Thrones',
		'author' => 'Douglas Adams',
		'releaseYear' => 1997,
		'purchaseUrl' => 'https://www.amazon.com/Game-Thrones-Song-Fire-Book/dp/0553593714'
	]
];


# Lambda function or anonymous function
# What is an anonymous function?
# A function without a name
# Why do we need it?
# To pass a function as an argument to another function
/*$filterByAuthor = function ($elements, $authorName)
{
	$filteredAuthor = [];
	foreach ( $elements as $elt ){
		if( !empty($elt['author']) && $elt['author'] === $authorName ){
			$filteredAuthor[] = $elt;
		}
	}
	return $filteredAuthor;
};*/

function filter($items, $fn){
	$filteredItems = [];
	foreach($items as $item){
		if($fn($item)){
			$filteredItems[] = $item;
		}
	}
	return $filteredItems;
}

# This function is the aquiivalent of the php function array_filter
$filteredBooks = filter($books, function($book){
	return $book['releaseYear'] > 1950 && $book['releaseYear'] < 2020;
});


# require the view
#require 'index.view.php';