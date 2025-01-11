<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {

        $startshipCount = 4;

        $myShip = [
            "name" => "USS LeafyCruiser (NCC-0001)",
            "class" => "Garden",
            "captain" => "Jean-Luc Pickels",
            "status" => "under construction"
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $startshipCount,
            'myShip' => $myShip
        ]);
    }
}
