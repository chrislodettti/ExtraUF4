<?php

namespace App\Repository;

use App\Entity\Employee;
use App\Entity\Pack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PackRepository extends ServiceEntityRepository
{
        public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pack::class);
    }
}