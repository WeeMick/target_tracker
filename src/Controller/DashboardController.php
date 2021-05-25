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

    #[Route('/dashboard/chart/{id}', name: 'chart')]
    public function chart(ChartBuilderInterface $chartBuilder, $id)
    {
        $repository = $this->getDoctrine()->getRepository(Target::class);

        $targetData = $repository->find($id);


        // $data relates to each row in db
//        foreach ($targetData as $data)
//        {
//            $objRef = $data->getObjectiveRef();
//            array_push($objectives, $objRef);
//        }


        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                [
                    'label' => 'Targets!',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [522, 1500, 2250, 2197, 2345, 3122, 3099],
                ],
            ],
        ]);

        return $this->render('dashboard/chart.html.twig', [
            'chart' => $chart,
            'targetData' => $targetData
        ]);

    }
}
