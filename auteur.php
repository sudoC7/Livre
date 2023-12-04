<?php

class Auteur {
    private string $_lastname;
    private string $_firstname;
    private $_book; 

    public function  __construct($lastname, $firstname, $book) {
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_book = $book; 
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