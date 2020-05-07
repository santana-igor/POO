<?php

namespace Source\Related;

use Source\Related\Team;
use Source\Related\Product;

class Company
{
    private $company;
    private $description;
    private $address;
    private $team = [];
    private $products = [];


    /**
     * __construct
     *
     * @param String $company
     * @param Address $address
     * 
     * @return void
     */
    public function __construct(String $company, String $description, Address $address)
    {
        $this->company = $company;
        $this->description = $description;
        $this->address = $address;
    }


    /**
     * addTeam
     *
     * @param String $name
     * @param String $occupation
     * 
     * @return void
     */
    public function addTeam(String $name, String $occupation)
    {
        $this->team[] = new Team($name, $occupation);
    }

    /**
     * addProduct
     *
     * @param String $description
     * @param Float $price
     * @param Int $qtd
     * 
     * @return void
     */
    public function addProduct(String $description, Float $price, array $benefits = null)
    {
        $this->products[] = new Product($description, $price, $benefits);
    }

    /**
     * getCompany
     *
     * @return $company
     */
    public function getCompany()
    {
        return $this->company;    
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
     * getAddress
     *
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;    
    }

    /**
     * getProducts
     *
     * @return Product
     */
    public function getProducts()
    {
        return $this->products;    
    }

    /**
     * getTeam
     *
     * @return Team
     */
    public function getTeam()
    {
        return $this->team;    
    }
}