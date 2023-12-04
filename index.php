<?php
/*
 j'au un fichier auteur et un fichier livre


*/
//permet d'in
spl_autoload_register(function($class_name) {
    include $class_name . '.php';
});

$Book = new Livre("Ca", "1986", "1138", "20");
$auteur = new Auteur( "LAst","First");

echo $auteur;
echo $Book;
