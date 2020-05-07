<?php

namespace Source\Related;

class Product
{
    private $description;
    private $price;
    private $benefits = [];


    /**
     * __construct
     *
     * @param String $description
     * @param Float $price
     * @param Int $qtd
     * 
     * @return void
     */
    public function __construct(String $description, Float $price, array $benefits = null)
    {
        $this->description = $description;
        $this->price = $price;
        $this->benefits = $benefits;
    }


    /**
     * getDescription
     *
     * @return $description
     */
    public function getDescription()
    {
        return $this->description;    
    }

    /**
     * getPrice
     *
     * @return $price
     */
    public function getPrice()
    {
        return number_format($this->price, 2, '.', ',');    
    }

    /**
     * getQtd
     *
     * @return $benefits
     */
    public function getBenefits()
    {
        return $this->benefits;    
    }
}