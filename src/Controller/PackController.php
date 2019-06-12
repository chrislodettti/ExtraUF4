<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Employee;
use App\Entity\Pack;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PackController extends Controller
{
    
           public function adminpacks(){
        $packs = $this->getDoctrine()->getRepository('App:Pack')->findAll();
        
        return $this->render('default/index.html.twig',[
            'packs' => $packs]);
    }
    
          public function thisPack($thispack){
        $packs = $this->getDoctrine()->getRepository('App:Pack')->findAll();
        $employees = $this->getDoctrine()->getRepository('App:Employee')->findAll();
        
        return $this->render('pack/thispack.html.twig',[
            'thispack'=> $thispack,
            'packs' => $packs,
            'employees' => $employees,
        ]);
    }
    
}