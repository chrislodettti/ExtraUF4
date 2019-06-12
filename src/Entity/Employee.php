<?php

namespace App\Entity;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Employee
{
    
     /**
     * 
     * 
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     *@ORM\Column(type="string",length=100)
     */
    private $name;
    
       /**
     *@ORM\Column(type="decimal", precision=10, scale=5)
     */
    private $latitude;
    
       /**
     *@ORM\Column(type="decimal", precision=10, scale=5)
     */
    private $longitude;
    
        /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pack", mappedBy="employeeid")
     */
    private $packs;
    public function __construct()
    {
        $this->packs = new ArrayCollection();
    }
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLongitude() {
        return $this->longitude;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }


}