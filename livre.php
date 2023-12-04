<?php

class Livre {
    private string $_book;
    private DateTime $_date;
    private string $_pages;
    private string $_price;
    //private Auteur $_author;


    public function __construct($book, $date, $pages, $price)
    {
        $this->_book = $book;
        $this->_date = new DateTime($date);
        $this->_pages = $pages;
        $this->_price = $price;
        // methode d'auteur pour ajouter un livre
        
    }


    public function __toString() {
        return "<br>".$this->_book." (".$this->_date->format("Y").") :".$this->_pages." pages / ".$this->_price;
    }



















    // get & set
    public function get_livre()
    {
        return $this->_book;
    }
    public function set_livre($_book)
    {
        $this->_book = $_book;

        return $this;
    }


    public function get_date() : DateTime
    {
        return $this->_date;
    }
    public function set_date($_date)
    {
        $this->_date = $_date;

        return $this;
    }

 
    public function get_pages()
    {
        return $this->_pages;
    }
    public function set_pages($_pages)
    {
        $this->_pages = $_pages;

        return $this;
    }


    public function get_prix() : float
    {
        return $this->_price;
    }
    public function set_prix($_price)
    {
        $this->_price = $_price;

        return $this;
    }


    // public function get_author()
    // {
    //     return $this->_author;
    // }
    // public function set_author($_author)
    // {
    //     $this->_author = $_author;

    //     return $this;
    // }
}
