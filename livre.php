<?php

class Livre {
    private string $_book;
    private DateTime $_date;
    private int $_pages;
    private int $_price;
    private string $_author;



    public function __construct(string $book, string $date, $pages, $price)
    {
        $this->_book = $book;
        $this->_date = new DateTime($date);
        $this->_pages = $pages;
        $this->_price = $price;
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


    public function get_prix()
    {
        return $this->_price;
    }
    public function set_prix($_price)
    {
        $this->_price = $_price;

        return $this;
    }
}
