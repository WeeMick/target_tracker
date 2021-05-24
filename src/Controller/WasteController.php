<?php

namespace App\Controller;

use App\Entity\Building;
use App\Entity\GeneralWaste;
use App\Entity\Month;
use App\Entity\PaperCardboard;
use App\Entity\Waste;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class WasteController extends AbstractController
{
    #[Route('/waste', name: 'waste')]
    public function index(): Response
    {
        $wasteRepository = $this->getDoctrine()->getRepository(PaperCardboard::class);

        $wasteData = $wasteRepository->findAll();

        return $this->render('waste/index.html.twig', [
            'waste_data' => $wasteData
        ]);
    }

    #[Route('/waste/paper/{id}', name: 'paperWaste')]
    public function paperAction(ChartBuilderInterface $chartBuilder, $id): Response
    {
        $repository = $this->getDoctrine()->getRepository(PaperCardboard::class);

        $paper = $repository->find($id);

        $jan = $paper->getJanuary();
        $feb = $paper->getFebruary();
        $mar = $paper->getMarch();
        $apr = $paper->getApril();
        $may = $paper->getMay();
        $june = $paper->getJune();
        $july = $paper->getJuly();
        $aug = $paper->getAugust();
        $sept = $paper->getSeptember();
        $oct = $paper->getOctober();
        $nov = $paper->getNovember();
        $dec = $paper->getDecember();

        $labelRepository = $this->getDoctrine()->getRepository(Month::class);
        $months = $labelRepository->findAll();
        $labels = [];
        foreach ($months as $month) {
            array_push($labels, $month->getMonth());
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Paper and Cardboard Waste',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [$jan, $feb, $mar, $apr, $may, $june, $july, $aug, $sept, $oct, $nov, $dec],
                ],
            ],
        ]);
        $chart->setOptions([
            'scales' => [
                'yAxes' => [[
                    ['ticks' => ['min' => 0, 'max' => 10]],
                    'scaleLabel' => [
                        'display' => true,
                        'labelString' => "Tonnes"
                    ]
                ]],
                'xAxes' => [[
                    'scaleLabel' => [
                        'display' => true,
                        'labelString' => "Month"
                    ]
                ]]
                ]
        ]);
        return $this->render('waste/paper.html.twig', [
            'paperData' => $paper,
            'chart' => $chart
        ]);
    }

    #[Route('/waste/general/{id}', name: 'generalWaste')]
    public function generalAction(ChartBuilderInterface $chartBuilder, $id): Response
    {
        $repository = $this->getDoctrine()->getRepository(GeneralWaste::class);

        $generalData = $repository->find($id);

        $jan = $generalData->getJanuary();
        $feb = $generalData->getFebruary();
        $mar = $generalData->getMarch();
        $apr = $generalData->getApril();
        $may = $generalData->getMay();
        $june = $generalData->getJune();
        $july = $generalData->getJuly();
        $aug = $generalData->getAugust();
        $sept = $generalData->getSeptember();
        $oct = $generalData->getOctober();
        $nov = $generalData->getNovember();
        $dec = $generalData->getDecember();

        $labelRepository = $this->getDoctrine()->getRepository(Month::class);
        $months = $labelRepository->findAll();
        $labels = [];
        foreach ($months as $month) {
            array_push($labels, $month->getMonth());
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Paper and Cardboard Waste',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [$jan, $feb, $mar, $apr, $may, $june, $july, $aug, $sept, $oct, $nov, $dec],
                ],
            ],
        ]);
        $chart->setOptions([
            'scales' => [
                'yAxes' => [
                    ['ticks' => ['min' => 0, 'max' => 3.5]],
                    'scaleLabel' => [
                        'display' => true,
                        'labelString' => "Tonnes"
                    ]
                ],
                'xAxes' => [[
                    'scaleLabel' => [
                        'display' => true,
                        'labelString' => "Month"
                    ]
                ]]]
        ]);
        return $this->render('waste/general.html.twig', [
            'generalData' => $generalData,
            'chart' => $chart
        ]);
    }
}
