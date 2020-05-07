<?php

namespace Source\Related;

class Address
{
    private $street;
    private $city;


    /**
     * __construct
     *
     * @param String $street
     * @param String $city
     * 
     * @return void
     */
    public function __construct(String $street, String $city)
    {
        $this->street = $street;
        $this->city = $city;
    }

    /**
     * getStreet
     *
     * @return $street
     */
    public function getStreet()
    {
        return $this->street;    
    }

    /**
     * getcity
     *
     * @return $city
     */
    public function getcity()
    {
        return $this->city;    
    }
}