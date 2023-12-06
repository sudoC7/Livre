<?php
/*

*/
spl_autoload_register(function($class_name) {
    include $class_name . '.php';
});

$author = new Auteur("Stephen","King");
$book = new Livre("Ca", "1986", "1138", "20", $author);  
$book1 = new Livre("Simetierre", "1983", "374", "15", $author); 
$book2 = new Livre("Le Fléau", "1978", "823", "14", $author); 
$book3 = new Livre("Shining", "1977", "447", "16", $author); 

echo $author->addBook();
//echo $book;
 


