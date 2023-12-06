<?php

class Livre {
    private string $_book;
    private DateTime $_date;
    private string $_pages;
    private string $_price;
    private Auteur $author; // Objet Auteur 


    public function __construct($book, $date, $pages, $price, Auteur $author)
    {
        $this->_book = $book;
        $this->_date = new DateTime($date);
        $this->_pages = $pages;
        $this->_price = $price;
        $this->author = $author;
        $this->author->addBook($this); 
    }
    
    public function infoBook() { 
        return $this." : ".$this->_pages." pages / ".$this->_price."€<br>"; 
    }

    public function __toString() {
      return $this->_book." (".$this->_date->format("Y").") ";
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


     public function get_author() : Auteur
     {
         return $this->author;
     }
     public function set_author($author)
     {
         $this->author = $author;

         return $this;
    }
}
