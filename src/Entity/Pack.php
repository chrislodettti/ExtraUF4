<?php
namespace App\Entity;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pack
{
    
     /**
     * 
     * 
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     *@ORM\Column(type="integer")
     */
    
     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee", inversedBy="packs")
     */
    private $employeeid;
    
       /**
     * @ORM\Column(type="datetime")
     */
    private $pickedat;
    
       /**
     * @ORM\Column(type="datetime")
     */
 private $deliverat;
 
    function getId() {
        return $this->id;
    }

    function getEmployeeid() {
        return $this->employeeid;
    }

    function getPickedat() {
        return $this->pickedat;
    }

    function getDeliverat() {
        return $this->deliverat;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmployeeid($employeeid) {
        $this->employeeid = $employeeid;
    }

    function setPickedat($pickedat) {
        $this->pickedat = $pickedat;
    }

    function setDeliverat($deliverat) {
        $this->deliverat = $deliverat;
    }


}