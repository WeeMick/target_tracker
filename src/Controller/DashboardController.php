<?php

namespace App\Controller;

use App\Entity\Target;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class DashboardController extends AbstractController
{

    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard(ChartBuilderInterface $chartBuilder)
    {
        $repository = $this->getDoctrine()->getRepository(Target::class);

        $targetData = $repository->findAll();

        return $this->render('dashboard/index.html.twig', [
            'targetData' => $targetData
        ]);
    }
}
