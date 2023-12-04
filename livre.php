<?php

class Livre {
    private string $_livre;
    private DateTime $_date;
    private int $_pages;
    private int $_prix;



    public function __construct(string $livre, string $date, $pages, $prix)
    {
        $this->_livre = $livre;
        $this->_date = new DateTime($date);
        $this->_pages = $pages;
        $this->_prix = $prix;
    }

    // get & set
    public function get_livre()
    {
        return $this->_livre;
    }
    public function set_livre($_livre)
    {
        $this->_livre = $_livre;

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
        return $this->_prix;
    }
    public function set_prix($_prix)
    {
        $this->_prix = $_prix;

        return $this;
    }
}