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
//        dd($data2017);
        $data2018 = $targetData->getYear20182019();
        $data2019 = $targetData->getYear20192020();

        $chart = $chartBuilder->createChart(Chart::TYPE_PIE);
        $chart->setData([
            'title' => "Objective",
            'labels' => ['2017', '2018', '2019'],
            'datasets' => [[
                'label' => 'My First Dataset',
                'data' => [$data2017, $data2018, $data2019],
                'backgroundColor' => [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ]
            ]]
        ]);
        $chart->setOptions([
            'title' => [
                'display' => true,
                'text' => 'Custom chart title'
            ]
        ]);

        return $this->render('dashboard/chart.html.twig', [
            'chart' => $chart,
            'targetData' => $targetData
        ]);

    }
}
