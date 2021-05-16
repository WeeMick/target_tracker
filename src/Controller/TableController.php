<?php

namespace App\Controller;

use App\Entity\Target;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableController extends AbstractController
{
    /**
     * @Route("/table", name="table")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Target::class);

        $targetData = $repository->findAll();

//        dd($targetData);


        return $this->render('table/index.html.twig', [
            'targetData' => $targetData,
        ]);
    }
}
