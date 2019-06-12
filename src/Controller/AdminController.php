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
class AdminController extends Controller
{
       public function adminemployees(){
        $users = $this->getDoctrine()->getRepository('App:Employee')->findAll();
        
        return $this->render('admin/users.html.twig',[
            'employees' => $employees]);
    }
    
    
    
    
           public function adminpacks(){
        $users = $this->getDoctrine()->getRepository('App:Pack')->findAll();
        
        return $this->render('admin/users.html.twig',[
            'packs' => $packs]);
    }
    
    /**
     * @Route("/search", name="search")
     */
    public function buscar (Request $request)
    {
        $pack = new Pack();
        $form = $this->createForm(PackType::class,$pack);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           $pack1=$pack->getEmployeeId();
            $employee= $this->getDoctrine()->getRepository(Employee::class)->findBy(
                array(
                    'id'=> $pack1
                )
            );
            return $this->render('default/index.html.twig', [
               'employee'=>$employee
            ]);
        }
        return $this->render('default/buscar.html.twig', [
            'form' => $form->createView(),
            'pack'=>$pack
        ]);
    }
    
}
