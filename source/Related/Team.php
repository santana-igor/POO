<?php

namespace Source\Related;

class Team
{
    private $name;
    private $occupation;



    /**
     * __construct
     *
     * @param String $name
     * @param String $occupation
     * 
     * @return void
     */
    public function __construct(String $name, String $occupation)
    {
        $this->name = $name;
        $this->occupation = $occupation;
    }

    /**
     * getName
     *
     * @return $name
     */
    public function getName()
    {
        return $this->name;   
    }

    /**
     * getOccupation
     *
     * @return $occupation
     */
    public function getOccupation()
    {
        return $this->occupation;    
    }
}