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

        $data2017 = $targetData->getYear20172018();
        $data2018 = $targetData->getYear20182019();
        $data2019 = $targetData->getYear20192020();

        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => ['', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                [
                    'label' => '2017!',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $data2017,
                ],
                [
                    'label' => '2018!',
                    'backgroundColor' => 'rgb(40, 40, 181)',
                    'borderColor' => 'rgb(27, 106, 132)',
                    'data' => $data2018,
                ],
                [
                    'label' => '2018!',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(27, 106, 132)',
                    'data' => [622, 800, 1250, 1597, 345, 2122, 1099],
                ],
            ],
        ]);

        return $this->render('dashboard/chart.html.twig', [
            'chart' => $chart,
            'targetData' => $targetData
        ]);

    }
}
