<?php

namespace App\Controller;

use App\Entity\Recycling;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecyclingController extends AbstractController
{
    #[Route('/recycling', name: 'recycling')]
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Recycling::class);

        $recyclingData = $repository->findAll();
//        dd($recyclingData);
        return $this->render('recycling/index.html.twig', [
            'recyclingData' => $recyclingData,
        ]);
    }
}
