<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/{reactRouting}', name: 'home', defaults: ["reactRouting" => null])]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/api/users', name: 'users')]
    public function getUsers()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Olususi Oluyemi',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...',
                'imageURL' => 'https://randomuser.me/api/portraits/women/50.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Camila Terry',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...',
                'imageURL' => 'https://randomuser.me/api/portraits/women/42.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Joel Williamson',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...',
                'imageURL' => 'https://randomuser.me/api/portraits/women/67.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Deann Payne',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...',
                'imageURL' => 'https://randomuser.me/api/portraits/women/51.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Donald Perkins',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...',
                'imageURL' => 'https://randomuser.me/api/portraits/men/89.jpg',
            ],
        ];

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->setContent(json_encode($users));

        return $response;
    }
}
