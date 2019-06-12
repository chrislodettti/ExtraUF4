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
class EmployeeController extends Controller
{
    
           public function adminemployee(){
        $employees = $this->getDoctrine()->getRepository('App:Employee')->findAll();
        
        return $this->render('admin/users.html.twig',[
            'employees' => $employees]);
    }
    
  
    
}