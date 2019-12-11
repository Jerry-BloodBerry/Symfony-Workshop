<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $liczba = random_int(0,15);
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'liczba' => $liczba
        ]);
    }
}
