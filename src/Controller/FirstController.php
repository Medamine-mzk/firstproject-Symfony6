<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }

    #[Route('/myhome/{name}',name:'app_myhome')]
    public function home($name)
    {
        return new Response("Hello World ! ".$name);
    }

    #[Route('/bye',name:'app_bye')]
    public function bye()
    {
        return new Response("Good Bye !");
    }

    #[Route('/add/{x}/{y}')]
    public function calc($x,$y)
    {
        $res=$x+$y;
        return new Response("res = ".$res);
    }

}
