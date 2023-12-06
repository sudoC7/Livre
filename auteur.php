<?php

class Auteur {
    private string $_lastname;
    private string $_firstname;
    private $_books = []; // je crée un tableau 


    public function  __construct($lastname, $firstname) {
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_books = []; // j'initialise le tableau de l'attribut book 
    }

    public function addBook(Livre $book){
       
       echo $this->_books[] = $book;
    }
    public function __toString(){
        return $this->_firstname." ".$this->_lastname;
    }




    //get & set 
    public function get_lastname()
    {
        return $this->_lastname;
    }
    public function set_lastname($_lastname)
    {
        $this->_lastname = $_lastname;

        return $this;
    }

 
    public function get_firstname()
    {
        return $this->_firstname;
    }
    public function set_firstname($_firstname)
    {
        $this->_firstname = $_firstname;

        return $this;
    }


    public function get_book()
    {
        return $this->_book;
    }
    public function set_book($_book)
    {
        $this->_book = $_book;

        return $this;
    }
}